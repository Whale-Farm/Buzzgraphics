 <?php


 /**

 *
 * Theme Functions
 *
 * @package BuzzGraphics

 */

 ?>


 <?php



 // == Theme Support

 function buzz_theme_setup(){

   add_theme_support('custom-logo');
   add_theme_support('title-tag');
   add_theme_support( 'post-thumbnails' ); 
   add_theme_support( 'automatic-feed-links' ); 

 }

 add_action( 'after_setup_theme', 'buzz_theme_setup' );


 function register_my_menus() {
   register_nav_menus(
     array(
       'header-menu' => __( 'Header Menu' ),
       'footer-menu' => __( 'Footer Menu' )
      )
    );
  }

  add_action( 'init', 'register_my_menus' );

  // ==== function to get the php code run in widget
  function buzz_php_text($text) {
   if (strpos($text, '<' . '?') !== false) {
   ob_start();
   eval('?' . '>' . $text);
   $text = ob_get_contents();
   ob_end_clean();
   }
   return $text;
  }

  add_filter('widget_text', 'buzz_php_text', 99);


    // Adding classes to li and anchor tag for bootstrap

    function menu_classes($classes, $item, $args) {
    if($args->theme_location == 'footer-menu') {
      $classes[] = 'nav-item ';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class','menu_classes',1,3);

  // The above code was for li now lets see for the anchor tags
  function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
  //    $classes     = implode(' ', $item->classes);
      $classes     = 'nav-link';
      $item_output = preg_replace('/<a /', '<a class="'.$classes.'"', $item_output, 1);
      return $item_output;
   }
  add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);



  function buzz_widgets_init() {

      register_sidebar( array(
          'name' => __( 'Footer Our Agency Links' ),
          'id' => 'footer_agency',
          'before-widget' =>  '',
          'after-widget' =>   '',
          'class' =>    '',
      ) ); 

      register_sidebar( array(
          'name' => __( 'Footer About Us Links' ),
          'id' => 'footer_about_links',
          'before-widget' =>  '',
          'after-widget' =>   '',
          'class' =>    '',
      ) ); 

      register_sidebar( array(
          'name' => __( 'Footer Promotion Links' ),
          'id' => 'footer_promotion',
          'before-widget' =>  '',
          'after-widget' =>   '',
          'class' =>    '',
      ) ); 


      register_sidebar( array(
          'name' => __( 'Footer Social Links' ),
          'id' => 'footer_social_links',
          'before-widget' =>  '',
          'after-widget' =>   '',
          'class' =>    '',
      ) );


      register_sidebar( array(
          'name' => __( 'Copyright Text widget' ),
          'id' => 'copyright_text_widget',
          'before-widget' =>  '',
          'after-widget' =>   '',
          'class' =>    '',
      ) );
      
        

  }

  add_action( 'widgets_init', 'buzz_widgets_init' );  

  

  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );
  // For Acf we can remove like this
  remove_filter('acf_the_content', 'wpautop');
  // For widgets 
  remove_filter('widget_text_content', 'wpautop');



 

 

// ACF Display Custom Fields
add_filter('acf/settings/remove_wp_meta_box', '__return_false');


