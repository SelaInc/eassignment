<?php
if ( function_exists('register_sidebars') ) {
register_sidebar(array(
	'name' => __( 'Home Top', 'squarecode' ),
	'id' => 'home',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => __( 'Blog', 'squarecode' ),
	'id' => 'blog',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => __( 'Page', 'squarecode' ),
	'id' => 'page',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => __( 'EDD Single Page Sidebar', 'squarecode' ),
	'id' => 'cr3ativ-edd',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => __( 'Footer', 'squarecode' ),
	'id' => 'footer',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => __( 'Error Page', 'squarecode' ),
	'id' => 'error_page',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));
}
?>