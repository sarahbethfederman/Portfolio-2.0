<?php
  get_header();
  $next_post = get_previous_post(true);
  $prev_post = get_next_post(true);
  $rand1 = rand ( 0 , 255);
  $rand2 = rand ( 0 , 255);
  $rand3 = rand ( 0 , 255);
  $color = 'rgba('. $rand1 . ', '. $rand2 . ',' . $rand3 . ')';
?>

	<div class="post-container" data-color="<?php echo $color; ?>">
		<div class="content">
      <div class="nav-links">
        <a href="<?php echo get_permalink( $prev_post->ID ); ?>"><img class="prev" src="<?php echo get_template_directory_URI();?>/img/icons/arrow-left.svg"></a>
	      <a href="<?php echo get_permalink( $next_post->ID ); ?>"><img class="next" src="<?php echo get_template_directory_URI();?>/img/icons/arrow-right.svg"></a>
      </div>
          <?php
             if( have_posts() ){
                  the_post();
                  the_content();
              }
          ?>
		</div>
	</div>

<?php
  get_footer();
?>
