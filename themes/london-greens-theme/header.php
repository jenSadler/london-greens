<!DOCTYPE html>
<html>
<head>
  <title>London Greens</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
 
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/hamburgers.css" type="text/css" media="all" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
  
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
  <meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="mainContainer">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">London Greens</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
    <span class="navbar-toggler-icon"></span>
    
</button>

        <?php
        wp_nav_menu( array(
            'theme_location'    => 'main-nav',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        

    </div>
</nav>

  

<?php /*
      <div class="constantHeader container">
      <h1 class="mainTitle">London Greens</h1>
      <nav id="navigation" class="mainNav main-nav menu-closed">

        

            <?php
              wp_nav_menu( array(
                'theme_location' => 'hold-social',
                'container_class' => 'hold-social' ) );
                ?>

      </nav>
		  </div>
      <button class="hamburger hamburger--slider" type="button"
        aria-label="Navigation Menu" aria-controls="navigation" onclick="clickHamburgerMenu()">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
*/?>

   