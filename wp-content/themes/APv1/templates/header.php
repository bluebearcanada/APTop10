<div class="logo-bar">
  <div class="container-fluid">
    <div class="brand col-sm-2">
      <a href="<?php echo home_url(); ?>/">
      <?php if ( is_home() || is_page('4') ) : ?>
        <h1><img src="<?php bloginfo('template_directory'); ?>/assets/img/ap-top-10-logo.png" alt="Atlantic Play - Top 10" /></h1>
      <?php else : ?>
        <h3><img src="<?php bloginfo('template_directory'); ?>/assets/img/ap-top-10-logo.png" alt="Atlantic Play - Top 10" /></h3>
      <?php endif; ?>
      </a>
    </div>
    <div class="sponsor-top  col-sm-10">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/test-ad-top.jpg" alt="AP Sponsor" class="img-responsive" />
    </div>
  </div>
</div>
<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
