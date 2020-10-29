<?php 
/**
 * Enable ACF 5 early access
 * Requires at least version ACF 4.4.12 to work
 */
define('ACF_EARLY_ACCESS', '5');

//*******************************//
//activa imagen destacada
/*add_theme_support('post-thumbnails');*/

//encolamiento de styles and scripts
//* Enqueue Scripts and Styles
add_action( 'wp_enqueue_scripts', 'laneurona_enqueue_scripts_styles' );

function laneurona_enqueue_scripts_styles(){

	//estilos
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css', array() );
	wp_enqueue_style( 'hamburgers_style', get_stylesheet_directory_uri().'/css/hamburgers.css', array() );
	wp_enqueue_style( 'main_style', get_stylesheet_directory_uri().'/style.css', array() );
	wp_enqueue_style( 'responsive_style', get_stylesheet_directory_uri().'/css/responsive.css', array() );
	wp_enqueue_style( 'custom_style', get_stylesheet_directory_uri().'/css/custom.css', array() );
	wp_enqueue_style( 'new-destacado-slider-style', get_stylesheet_directory_uri().'/css/new-destacado-slider-style.css', array() );

	
	wp_enqueue_style( 'bootstrap_cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' , array() );
	wp_enqueue_style( 'bxSlider_style', get_stylesheet_directory_uri().'/library/bxslider/jquery.bxslider.css', array() );
	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri().'/library/fontawesome/css/font-awesome.min.css', array() );
	//fancybox
	wp_enqueue_style( 'fancibox', get_stylesheet_directory_uri().'/library/fancybox/jquery.fancybox.min.css' , array() );

	//custom scrollbar
	wp_enqueue_style( 'scrollbar_style', get_stylesheet_directory_uri().'/css/scrollbar_style.css' , array() );

	if(is_single(4891) || is_single(5205) ){
		wp_enqueue_style( 'special_postevento_style', get_stylesheet_directory_uri().'/css/special-postevento.css' , array() );		
	}



	//JQUERY------------------
	
	if( !is_admin() ){
		//eliminamos el jquery que viene por defecto
		wp_deregister_script( 'jquery' );
		wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',array(),'3.3.1',true);
		wp_enqueue_script('jquery-ui','https://code.jquery.com/ui/1.12.1/jquery-ui.min.js',array('jquery'),'1.12.1',true);
	}


	//bxSlider
	wp_enqueue_script('bxSlider', get_bloginfo('stylesheet_directory') . '/library/bxslider/jquery.bxslider.min.js',array('jquery'),false,true );


	//custom scripts
	//dependencia jquery
	if(!is_admin()){ 
		
		wp_enqueue_script('slider_functions', get_bloginfo('stylesheet_directory') . '/js/slider_functions.js',array('jquery','bxSlider'),false,true );
		wp_enqueue_script('custom_functions', get_bloginfo('stylesheet_directory') . '/js/custom_functions.js',array('jquery'),false,true );			
		wp_enqueue_script('menu_functions', get_bloginfo('stylesheet_directory') . '/js/menu_functions.js',array('jquery'),false,true );
		wp_enqueue_script('over_functions', get_bloginfo('stylesheet_directory') . '/js/over_functions.js',array('jquery'),false,true );		
		wp_enqueue_script('scroll_functions', get_bloginfo('stylesheet_directory') . '/js/scroll_functions.js',array('jquery'),false,true );	
		wp_enqueue_script('fancybox_functions', get_bloginfo('stylesheet_directory') . '/js/fancybox_functions.js',array('jquery','fancybox_min'),false, true );	
		wp_enqueue_script('filter_functions', get_bloginfo('stylesheet_directory') . '/js/filter_functions.js',array('jquery'),false, true );
		//links function (relativas a enlaces solucion incidencias)
		wp_enqueue_script('links_functions', get_bloginfo('stylesheet_directory') . '/js/links_functions.js',array('jquery'),false, true );	
	}

	//footer scripts
	wp_enqueue_script('tether', 'https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js' ,array(),false,true );

	wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js' ,array('jquery'),false,true );	
	wp_enqueue_script('hamburgers', get_bloginfo('stylesheet_directory') . '/js/hamburgers.js',array('jquery'),false,true );


	//fancybox------------------
	if( is_singular('video_plus')  ) {
		
		//si es CPT video_plus usamos fancybox.js custom    	
		wp_enqueue_script('fancybox', get_bloginfo('stylesheet_directory').'/library/fancybox/jquery.fancybox.js', array('jquery'),'3.3',true );	
	
		//funciones relativas al CPT video_plus
		wp_enqueue_script('video_plus', get_bloginfo('stylesheet_directory') . '/js/video_plus_functions.js',array('jquery','fancybox'),false, true );

	}else{
		//para el resto de CPT usamos el fancybox por defecto
		wp_enqueue_script('fancybox_min', get_bloginfo('stylesheet_directory').'/library/fancybox/jquery.fancybox.min.js', array('jquery'),'3.3',true );	
	}	

	//fin fancybox --------------------------------------------

	//vimeo api
	wp_enqueue_script('vimeo_api',  'https://player.vimeo.com/api/player.js', array('jquery'), false, true );
	//youtube api
	wp_enqueue_script('youtube_api', get_bloginfo('stylesheet_directory') . '/library/youtube/iframe_api.js', array('jquery'),false,true );




}

function neu_my_action($actions, $post ){

	$actions['in_google'] = '<a href="https://www.google.com/search?q='.get_permalink($post->ID).'">Google </a>';

	return $actions;
}

add_filter('row_actions','neu_my_action');

/////////////////////////////////////////

//INCLUDES

//funciones que devuelven los $args para los wp_query de los sliders
include_once('includes/slider_functions.php');

/**
* HOOKS
* - Carga eventos a ACF
* - Carga de menus
* - Etiquetas a CPT
*/
include_once('includes/hooks_functions.php');

//funciones de ayuda (extractos | iframe | )
include_once('includes/helpers_functions.php');
//funciones que indican la etiqueta en el slider aprendizaje
include_once('includes/aprendizaje_functions.php');

//funciones que modifican la pantalla de login
include_once('includes/login_style_functions.php');

//funciones que modifican la pantalla de login
include_once('includes/video_plus_functions.php');

//funciones relativas a paginacion y numero de post mostrados en pagina
include_once('includes/pagination_functions.php');

//funciones y hooks relativos a la busqueda
include_once('includes/search_functions.php');

//funciones relativas al numero de visitas de los post
include_once('includes/populate_post_functions.php');

//funciones relativas a los filtros por perfil en la vista taxonomy-accion.php
include_once('includes/filter_functions.php');

//envio de correos SMTP
include_once('includes/mail_functions.php');

//maneja el track de los codigos de patrocinador o la id_crm del usuario
include_once('includes/track_functions.php');

?>