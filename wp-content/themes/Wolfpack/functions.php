<?php
/*
  Creates a function the prepares all of the css and javascript files
  to be called later in the program.
*/
function theme_enqueue_styles() {
  /*CSS files*/
  wp_enqueue_style(
    'style',
    get_stylesheet_directory_uri() . '/style.css'
  );

  wp_enqueue_style(
    'theme',
    get_stylesheet_directory_uri() . '/css/theme.css',
    array('style')
  );

  wp_enqueue_style(
    'bootstrap',
    get_stylesheet_directory_uri() . '/css/bootstrap.min.css',
    array('style')
  );

  wp_enqueue_style(
    'themeify-icons',
    get_stylesheet_directory_uri() . '/css/themify-icons.css',
    array('style')
  );

  wp_enqueue_style(
    'pe-icon-7',
    get_stylesheet_directory_uri() . '/css/pe-icon-7-stroke.css',
    array('style')
  );

  wp_enqueue_style(
    'flexslider',
    get_stylesheet_directory_uri() . '/css/flexslider.css',
    array('style')
  );

  wp_enqueue_style(
    'lightbox-min',
    get_stylesheet_directory_uri() . '/css/lightbox.min.css',
    array('style')
  );

  wp_enqueue_style(
    'ytplayer',
    get_stylesheet_directory_uri() . '/css/ytplayer.css',
    array('style')
  );

  wp_enqueue_style(
    'custom',
    get_stylesheet_directory_uri() . '/css/custom.css',
    array('style')
  );

  wp_enqueue_style(
    'google-fonts',
    'http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
  );

/*------------Javascript files-----------------*/
  wp_enqueue_script(
    'jquery',
    get_template_directory_uri() . '/js/jquery.min.js'
  );

  wp_enqueue_script(
    'angular',
    'https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js',
    array('jquery')
  );

  wp_enqueue_script(
    'custom',
    get_template_directory_uri() . '/js/custom.js',
    array('jquery', 'angular')
  );

  wp_enqueue_script(
    'scripts',
    get_template_directory_uri() . '/js/scripts.js',
    array('jquery')
  );

  wp_enqueue_script(
    'bootstrap',
    get_template_directory_uri() . '/js/bootstrap.min.js',
    array( 'jquery', 'scripts' )
  );

  wp_enqueue_script(
    'flexslider',
    get_template_directory_uri() . '/js/flexslider.min.js',
    array( 'jquery', 'scripts' )
  );

  wp_enqueue_script(
    'masonry',
    get_template_directory_uri() . '/js/masonry.min.js',
    array( 'jquery', 'scripts' )
  );

  wp_enqueue_script(
    'twitterfetcher',
    get_template_directory_uri() . '/js/twitterfetcher.min.js',
    array( 'jquery', 'scripts' )
  );

  wp_enqueue_script(
    'spectragram',
    get_template_directory_uri() . '/js/spectragram.min.js',
    array( 'jquery', 'scripts' )
  );

  wp_enqueue_script(
    'ytplayer',
    get_template_directory_uri() . '/js/ytplayer.min.js',
    array( 'jquery', 'scripts' )
  );

  wp_enqueue_script(
    'countdown',
    get_template_directory_uri() . '/js/countdown.min.js',
    array( 'jquery', 'scripts' )
  );

  wp_enqueue_script(
    'smooth-scroll',
    get_template_directory_uri() . '/js/smooth-scroll.min.js',
    array( 'jquery', 'scripts' )
  );
  //wp_enqueue_script(
  //  'parallax',
  //  get_template_directory_uri() . '/js/parallax.js',
  //  array('jquery')
  //);
}

/*
  Adds an options page to the admin panel to add ACF fields to.
*/
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title'   => 'General',
      'menu_title'  => 'Options',
      'menu_slug'   => 'options'
    ));
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

?>
