<?php
function theme_enqueue_styles() {
    $parent_style = 'parent-style';
	
	// Load Child Theme
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
    // Add navigation.css
    wp_enqueue_style( 'navigation',
        get_stylesheet_directory_uri() . '/css/navigation.css'
    );
	// Load Bootstrap CSS Files
	wp_enqueue_style( 'bootstrap-min', 		
		get_stylesheet_directory_uri() . '/css/bootstrap.min.css'
	);
	wp_enqueue_style( 'bootstrap-theme-min', 		
		get_stylesheet_directory_uri() . '/css/bootstrap-theme.min.css'
	);
	wp_enqueue_script( 'bootstrap.min', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', '3.0.0', true);
    wp_enqueue_script( 'html5-reset-child', get_stylesheet_directory_uri() . '/js/html5-reset-child.js', false, true);
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>