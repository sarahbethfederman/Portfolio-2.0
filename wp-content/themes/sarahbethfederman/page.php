<?php
  get_header();
?>

  <div class="post-container" data-color="orange">
    <div class="content">
      <a href="<?php echo home_URL(); ?>"><img class="close" src="<?php echo get_template_directory_URI();?>/img/icons/x-icon.svg"></a>
      <div>
          <?php
             if( have_posts() ){
                  the_post();
                  the_content();
              }
          ?>

        </div>
    </div>
  </div>

<?php
  get_footer();
?>
