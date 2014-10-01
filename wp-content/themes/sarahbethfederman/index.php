<?php
  get_header();
  $query = 'SELECT * FROM wp_posts
            WHERE wp_posts.ID IN (SELECT wp_posts.ID FROM wp_terms
              JOIN wp_term_taxonomy USING (term_ID)
              JOIN wp_term_relationships USING (term_taxonomy_ID)
              JOIN wp_posts ON wp_term_relationships.object_id = wp_posts.ID
              WHERE wp_terms.name = "project" AND wp_term_taxonomy.taxonomy = "category")
              AND post_status = "publish"
              ORDER BY wp_posts.post_date DESC';

  $posts = $wpdb->get_results( $query );

  foreach ($posts as $post) {
    $url = get_permalink($post->ID);
    $slug = $post->post_name;
    $imgUrl = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), full);
    $img = $imgUrl[0];
    $title = $post->post_title;
    $excerpt = $post->post_excerpt;
    $content = $post->post_content;

    $markup .= '<a class="post" href="'. $url .'" id="'. $slug .'">';
    $markup .= '<img class="post__background" src="'. $img .'">';
    $markup .= '<div class="post__content">';
    $markup .= '<h1 class="post__title">'. $title .'</h1>';
    $markup .= '<h2 class="post__description">'. $excerpt .'</h2>';
    $markup .= '</div>';
    $markup .= '</a>';
  }
?>
<div class="container" data-color="#222">
  <?php echo $markup; ?>
</div>

<?php
  get_footer();
?>
