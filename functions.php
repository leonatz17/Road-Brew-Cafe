<?php
 function my_theme_assets(){
  $themePath = get_template_directory_uri();

  wp_enqueue_style('tailwind-registration', $themePath . '/assets/css/output.css', array(), filemtime(get_template_directory() . '/assets/css/output.css'));

  wp_enqueue_style('main-style', get_stylesheet_uri());

  wp_enqueue_script('main-script', $themePath . '/assets/js/script.js');
}

add_action('wp_enqueue_scripts', 'my_theme_assets');

function post_thumbnail(){
   add_theme_support('post-thumbnails');

   register_nav_menus([
      'primary' => 'Primary Menu' , 
      'footer' => 'Footer Menu'
   ]);
 }

 add_action('after_setup_theme','post_thumbnail');

 add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {

    if ( $args->theme_location === 'primary' ) {
        $base = 'block pb-1 text-[13px] font-medium uppercase tracking-[0.12em] transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#6F5540]';

        if ( in_array( 'current-menu-item', (array) $item->classes, true ) ) {
            $atts['class'] = $base . ' border-b border-[#6F5540] text-[#2B2118]';
        } else {
            $atts['class'] = $base . ' text-[#6F5540] hover:text-[#2B2118]';
        }
    }

    if ( $args->theme_location === 'footer' ) {
        $atts['class'] = 'text-[#2B2118] transition-colors duration-500 hover:text-[#6F5540]';
    }

    return $atts;
}, 10, 3 );

function my_theme_widgets(){
    register_sidebar([
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'description' => 'Main sidebar widget area',
        'before_widget' => '<div class="mb-5 rounded-xl border border-[#D8CBBE] bg-white p-6">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="mb-4 border-b border-[#D8CBBE] pb-2 font-serif text-xl font-medium text-[#2B2118]">',
        'after_title' => '</h3>',
    ]);
}

add_action('widgets_init', 'my_theme_widgets');

function hide_services_from_blog( $query ) {
    if ( ! is_admin() && $query->is_main_query() && $query->is_home() ) {
        $query->set( 'cat', '-' . get_category_by_slug( 'services' )->term_id );
    }
}
add_action( 'pre_get_posts', 'hide_services_from_blog' );

function my_theme_setup() {
    add_theme_support('custom-logo', [
        "width"       => 40,
        "height"      => 40,
        "flex-height" => true,
        "flex-width"  => true
    ]);

     add_theme_support('custom-header', [
        "width"       => 1920,
        "height"      => 1080,
        "flex-width"  => true,
        "flex-height" => true
    ]);
}
add_action('after_setup_theme', 'my_theme_setup');



?>