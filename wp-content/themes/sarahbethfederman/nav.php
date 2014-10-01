  <header class="nav-bar">
    <nav>
      <ul class="main-nav">
        <li class="left"><a href="<?php echo get_permalink(42); ?>">About</a></li>

        <li><a href="<?php echo home_url() ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="60"></a></li>

        <li class="right"><a href="<?php echo get_category_link(2); ?>">Blog</a></li>
      </ul>


    </nav>
  </header>
