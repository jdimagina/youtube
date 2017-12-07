<?php 

/* PERSONALIZACION DEL TEMA YOUTUBE
YOUTUBE_SETUP =======================*/

	if ( ! function_exists( 'youtube_setup' ) ) :

	// creacion de la funcion
	function youtube_setup() {
		/*
		 funcion que carga el nombre del sitio o el llamado bloginfo('name')
		 ademas de que cambia los title y agrega la etique al header <title>
		 */
		add_theme_support( 'title-tag' );

		/*
		 Agregar la posibilidad de cargar en personalizar el logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 130,
			'width'       => 465,
			'flex-height' => true,
		) );

		/*
		Agregar post-thumbnails y tamaños personalizados,
		el primer numero 1200 es el ancho, el numero 9999
		es una forma de decir que el alto es proporcional
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1200, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary' => __( 'Menu Principal', 'youtube' ),
			'legal'  => __( 'Menu Politicas', 'youtube' ),
			'otro'  => __( 'Otro menu', 'youtube' ),
		) );
	}
	endif; // youtube_setup
	add_action( 'after_setup_theme', 'youtube_setup' );


/*
Crear llamado al
CUSTOM LOGO ================================== */
	if ( ! function_exists( 'youtube_the_custom_logo' ) ) :
		function youtube_the_custom_logo() {
			if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
		}
	endif;


/*
Manejar las inclusiones de
CSS y Javascript en la plantilla ==========================*/
	function youtube_scripts() {

		
		// Add Bootstrap, used in the main stylesheet.
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css');

		// Load the html5 shiv.
		wp_enqueue_script( 'youtube-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
		wp_script_add_data( 'youtube-html5', 'conditional', 'lt IE 9' );

		// Somera stylesheet.
		wp_enqueue_style( 'youtube-style', get_stylesheet_uri() );

		// Scripts personalizados.
		
		wp_enqueue_script( 'jquery' );

		// Scripts personalizados.
		wp_enqueue_script( 'youtube-script', get_template_directory_uri() . '/js/generales.js', array( 'jquery' ), '1', true );
	}
	add_action( 'wp_enqueue_scripts', 'youtube_scripts' );

/*
Registrar los 
widget propios ========================== */

	function reg_widget_map(){
	    include_once(get_template_directory().'/inc/widgets.php');
	    register_widget('datos_contacto_widget');
	    register_widget('redes_widget');
	}

	add_action('widgets_init','reg_widget_map');


/*
Crear los widgets
del tema YOUTUBE ================================== */
	function youtube_widget() {
		register_sidebar( array(
			'name'          => 'Datos Contacto',
			'id'            => 'datos-contacto',
			'description'   => 'Incluir los datos del contacto del footer',
			'before_widget'  => '',
			'after_widget'   => '',
			
		) );

		register_sidebar( array(
			'name'          => 'Redes sociales',
			'id'            => 'redes-sociales',
			'description'   => 'Las redes sociales',
			'before_widget'  => '',
			'after_widget'   => '',
			
		) );

	}
	add_action( 'widgets_init', 'youtube_widget' );


// cargar los meta box
// ============================

	add_filter( 'ot_meta_boxes', '__return_true' );
	load_template( trailingslashit( get_template_directory() ) . 'inc/meta-boxes.php' );