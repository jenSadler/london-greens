<!DOCTYPE html>
<html>
<head>
  <title>London Greens</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/hamburgers.css" type="text/css" media="all" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/page.css" type="text/css" media="all" />

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

  <meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="mainContainer">
    <header>
      <div class="constantHeader">
      <h1 class="mainTitle">London Greens</h1>
      <nav id="navigation" class="mainNav main-nav menu-closed">

        <?php
          wp_nav_menu( array(
            'theme_location' => 'main-nav',
            'container_class' => 'main-nav' ) );
            ?>

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


    </header>
