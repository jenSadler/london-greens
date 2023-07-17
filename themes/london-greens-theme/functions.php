<?php
if ( ! function_exists( 'londongreens_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since MyFirstTheme 1.0
*/
function londongreens_setup() {
  add_theme_support( 'automatic-feed-links' );
  register_nav_menus(
    array(
      'main-nav' => __( 'Main Nav' ),
      'footer-nav' => __( 'Footer Nav' ),
      'hold-social'=> __( 'Social Nav')
    )
  );

  load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

  register_sidebar( array(
    'name'          => __( 'Footer Widgets', 'London Greens' ),
    'id'            => 'footer-widgets',
    'description'   => __( 'Add widgets here to appear in your footer area.', 'London Greens' ),
    'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer Contact', 'London Greens' ),
    'id'            => 'footer-contact-widgets',
    'description'   => __( 'Add widgets here to appear in your footer area(first column).', 'London Greens' ),
    'before_widget' => '<div id="%1$s" class="footer-contact-widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
  ) );

	  register_sidebar( array(
    'name'          => __( 'Ontario', 'London Greens' ),
    'id'            => 'on-widgets',
    'description'   => __( 'Add widgets here to appear in the top area.', 'London Greens' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) );

	  register_sidebar( array(
    'name'          => __( 'Canada', 'London Greens' ),
    'id'            => 'can-widgets',
    'description'   => __( 'Add widgets here to appear in the top area.', 'London Greens' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) );


  register_sidebar( array(
  'name'          => __( 'Call To Action', 'London Greens' ),
  'id'            => 'cta-widget',
  'description'   => __( 'Add widgets here to appear in the top area.', 'London Greens' ),
  'before_widget' => '<div class="ctaContainer">',
  'after_widget'  => '</div>',
  'before_title'  => '',
  'after_title'   => '',
) );


    set_post_thumbnail_size( 300, 200, true ); // default Featured Image dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'page-header', 1200 , 300, true ); // 300 pixels wide (and unlimited height)

}

function register_navwalker(){
	if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
  } else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
  }}
add_action( 'after_setup_theme', 'register_navwalker' );
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'londongreens_setup' );
add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

?>
