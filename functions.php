<?php 

// ThemeSupport
add_theme_support( 'post-thumbnails');
add_theme_support("menus");

// Menus
register_nav_menus(
    array(
        "top-menu" =>  "Top Menu Location",
        "mobile-menu" => "Mobile Menu Location"
        )
    );

// Register Stylesheet
wp_enqueue_style("style", get_stylesheet_uri( ));

#Remove menu Class And ID
add_filter("nav_menu_css_class", "my_css_attributes_filter", 100, 1);
add_filter("nav_menu_item_id", "my_css_attributes_filter", 100, 1);
add_filter("page_css_class", "my_css_attributes_filter", 100, 1);
function my_css_attributes_filter($var) {
return is_array($var) ? array_intersect($var, array("current-menu-item")): "";
}

?>