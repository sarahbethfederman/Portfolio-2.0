<?php
  get_header();
  $query = 'SELECT * FROM wp_posts
            WHERE wp_posts.ID IN (SELECT wp_posts.ID FROM wp_terms
              JOIN wp_term_taxonomy USING (term_ID)
              JOIN wp_term_relationships USING (term_taxonomy_ID)
              JOIN wp_posts ON wp_term_relationships.object_id = wp_posts.ID
              WHERE wp_terms.name = "blog" AND wp_term_taxonomy.taxonomy = "category")
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
    $date = get_the_date();

    $markup .= '<a class="post" href="'. $url .'" id="'. $slug .'">';
    $markup .= '<div class="post__content--blog">';
    $markup .= '<h3 class="post__date">'. $date .'</h3>';
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
