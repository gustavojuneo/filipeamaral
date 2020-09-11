<?php

function jQuery3(){
// Apenas para mudar a versão automaticamente
$date = date("dmy");
// Le a função apenas no front do site
if (!is_admin()){
	// Tira o registro do Jquery que estava funcionando
	wp_deregister_script('jquery');
	// Registra o novo script
	wp_register_script('jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", false, $date);
	// Aponta o carregamento do script
	wp_enqueue_script('jquery');
}
}
add_action('init', 'jQuery3');

function load_scripts() {

	if(is_home()) :
		wp_enqueue_script( 'mixitup-js', 'https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js', array( 'jquery' ), null, true );
		wp_enqueue_script( 'jobs-js', get_template_directory_uri() . '/assets/js/jobs.js', array( 'jquery' ), '1.0', true );
	endif;
	if(is_home() || is_front_page()) :
		wp_enqueue_script( 'lightbox-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js', array( 'jquery' ), '2.11.3', true );
		wp_enqueue_script( 'hovereffect-js', get_template_directory_uri() . '/assets/js/hoverEffect.js', array( 'jquery' ), '1.0', true );
	endif;

  // Folhas de Estilos em Fila
  //wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );
  wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', array(), '5.14', 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.0' , 'all' );

	if(is_home() || is_front_page()) :
		wp_enqueue_style( 'lightbox-css', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css', array(), '2.11.3', 'all' );
	endif;

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


function filipeamaral_config(){
	// Registro de Menus
	register_nav_menus(
		array(
            'main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
		)
	);


	$args = array (
		'width'		=> 1920,
		'height'	=> 1080
  );

	// Theme Support
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );

}
add_action( 'after_setup_theme', 'filipeamaral_config', 0 );

// Custom excerpt length

function custom_excerpt_length( $length ) {
	return 15;
 }
add_filter( 'excerpt_length', 'custom_excerpt_length');

function wpdocs_excerpt_more( $more ) {
	return ' ...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// Add Widget

// add_action( 'widgets_init', 'random_sidebars' );
// function random_sidebars(){
// 	register_sidebar( array(
// 		'name'          => 'Woo Widget Filter', // Name widget
// 		'id'            => 'filter-sidebar', // Id Widget
// 		'before_widget' => '<aside>', // Before Widget
// 		'after_widget'  => '</aside>', // After Widget
// 		'before_title'  => '<h2>', // Before Title Widget
// 		'after_title'   => '</h2>', // After Title Widget
// 	) );
// }
