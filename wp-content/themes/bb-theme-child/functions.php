<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'fl_head', 'FLChildTheme::stylesheet' );

function themes_scripts() {
  if (is_front_page()){
    wp_enqueue_script( 'scrollto_jump', get_stylesheet_directory_uri() .'/assets/js/scrollto.js', '', '', true );
  }
  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri().'/assets/js/jquery.min.js', '', '', true );
  wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri().'/assets/js/owl.carousel.min.js', '', '', true );
  wp_enqueue_style( 'owl_carousel_min', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css' );
  wp_enqueue_style( 'owl_carousel_min', get_stylesheet_directory_uri() . '/assets/css/owl.theme.css' );
}
add_action( 'wp_enqueue_scripts', 'themes_scripts' );

function my_recent_post()
 {
      global $post;
      $html = "";
      $my_query = new WP_Query( array(
         'post_type' => 'building_feature',
         'posts_per_page' => 3
      ));
      $build_status = get_field('build_status');
      $html .="<ul class=\"featured-list\">";
      if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
         $html .= "<li>
           <div class=\"featured-post\">
             <div class=\"image\">
               <a href=\"" .get_permalink(). "\" target=\"_blank\">
                <img class=\"img-responsive\" src=\"" . get_the_post_thumbnail($post_id,"full") ."
               </a>
             </div>
             <div class=\"featured-info\">
              <a href=\"" .get_permalink(). "\" target=\"_blank\" class=\"title\">".get_the_title()."</a>
              <div class=\"button-link\">
                <a href=\"" .get_permalink(). "\" target=\"_blank\" class=\"link-btn\">
                  <i class=\"icon-arrow\"></i>
                </a>
              </div>
             </div>
           </div>
         </li>";
      endwhile;
      $html .="</ul>";
      endif;
        wp_reset_query();
      return $html;
    }
 add_shortcode( 'building_featured', 'my_recent_post' );

?>
