<?php 

//añade etiquetas y categorias por defecto de WP a los CPT
//?????????? no va!!!
function neu_add_custom_types_to_tax( $query ) {
	if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

		// Get all your post types
		$post_types = get_post_types();

		$query->set( 'post_type', $post_types );
		return $query;
		}
}

add_filter( 'pre_get_posts', 'neu_add_custom_types_to_tax' );

//añade los proximos eventos al ACF id_evento select


function acf_load_neu_events_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();
    
    

    $proximos_eventos = neu_proximos_eventos();

    foreach ($proximos_eventos as $evento) {
    	
    	$field['choices'][ $evento->id_evento ] = $evento->evento;

    }

    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=id_evento', 'acf_load_neu_events_field_choices');


/////////////////////////////////////////////////////


function neu_nav_menus(){
	$locations = array(
			'left-nav-menu' => __('Menú Tipos de Contenido -Izquierda-', 'neu' ),
			'rightup-nav-menu' => __('Menú Perfiles Superior -Derecha-', 'neu'),
			'rightdown-nav-menu' => __('Menú Perfiles Inferior -Derecha-', 'neu'),
			
		);

	register_nav_menus ($locations );
}


add_action( 'init', 'neu_nav_menus');

?>