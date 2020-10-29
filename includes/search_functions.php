<?php 

/*
WordPress te permite extender al búsqueda a campos personalizados o custom fields a través de meta_query, pero con el operador lógico AND. Es decir, podrías construir una búsqueda para que encuentre resultados que coincidan en el título, o en el extracto, o en el contenido…y además también en el custom field que indiquemos:
*/



/*---------------------------------------------------------------------------------------------------------------------------------------------*/

 function neu_custom_search_query( $query ){ 

	/* 	$metaq_1 = array( 'key' => 'nombre_ponente', 'value' => $query->query_vars['s'], 'compare' => 'LIKE' );
	 	$metaq_2 = array( 'key' => 'cargo_ponente', 'value' => $query->query_vars['s'], 'compare' => 'LIKE' );*/

 	if ( !is_admin() && $query->is_search ){ 
 		$query->set('meta_query', array( array( 'key' => 'cargo_ponente', 'value' => $query->query_vars['s'], 'compare' => 'LIKE' ) ));
 		//$query->set('meta_query', array( array( 'key' => 'cargo_ponente', 'value' => $query->query_vars['s'], 'compare' => 'LIKE' ) ));
 	 };

} 

/* 
function neu_custom_search_query_2( $query ){ 

	/* 	$metaq_1 = array( 'key' => 'nombre_ponente', 'value' => $query->query_vars['s'], 'compare' => 'LIKE' );
	 	$metaq_2 = array( 'key' => 'cargo_ponente', 'value' => $query->query_vars['s'], 'compare' => 'LIKE' );*/

/* 	if ( !is_admin() && $query->is_search ){ 
 		$query->set('meta_query', array( array( 'key' => 'cargo_ponente', 'value' => $query->query_vars['s'], 'compare' => 'LIKE' ) ));
 		//$query->set('meta_query', array( array( 'key' => 'cargo_ponente', 'value' => $query->query_vars['s'], 'compare' => 'LIKE' ) ));
 	 };*/
/* } */

 //add_filter( 'pre_get_posts', 'neu_custom_search_query'); 

 //add_filter( 'pre_get_posts', 'neu_custom_search_query_2',11,1); 


/*---------------------------------------------------------------------------------------------------------------------------------------------*/


/*
De esta forma nuestra búsqueda quedaría: (título Ó extracto Ó contenido) Y (campo personalizado). Ésto puede resultar restrictivo porque lo que nos interesa es que nos devuelva todos los posts que contengan donde sea al menos una coincidencia con lo que estoy buscando.

Para ésto necesitamos tirar de ingenio. Lo que podemos hacer es a través del filtro posts_where un reemplazo del mismo donde hacemos el like al post_title, lo reemplazaremos por el like al post title más “o en el campo personalizado”:
*/
 
function neu_custom_search_where( $where ) {

  global $pagenow, $wpdb;
 
  if ( is_search() && !is_admin() ) {
    $where = preg_replace("/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/", "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
  }

  return $where;

}

//add_filter( 'posts_where', 'neu_custom_search_where' );



/*---------------------------------------------------------------------------------------------------------------------------------------------*/



/*

-- listado de acf // para añadir a la busqueda --

nombre_ponente
cargo_ponente
nota_de_prensa
canal_texto

tipo_informe
tipo_archivo

canal

descripcion_postevento
titulo_cabecera_postevento

hotel
ciudad
fecha
codigo_postal
horario


*/





////////////////////////////////////////////////////////////////////////////

//https://bitado.com/busqueda-avanzada-en-wordpress/

////////////////////////////////////////////////////////////////////////////

add_filter('posts_join', 'neu_search_join');

function neu_search_join($join){
	global $wpdb;
	
	if ( is_search() ) {
		$join .= "INNER JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id INNER JOIN {$wpdb->term_taxonomy} tt ON tt.term_taxonomy_id=tr.term_taxonomy_id INNER JOIN {$wpdb->terms} t ON t.term_id = tt.term_id INNER JOIN {$wpdb->postmeta} pm ON {$wpdb->posts}.ID = pm.post_id ";
	}
	return $join;
}

///////////////////////////////////

add_filter('posts_where','neu_search_where');

function neu_search_where($where){
	
	global $wpdb;
	
	if ( is_search() ) {
		$where .= " OR (t.name LIKE '%".get_search_query()."%') ";
		$where .= " OR (pm.meta_value LIKE '%".get_search_query()."%') ";
	}

	return $where;
}

//////////////////
add_filter('posts_groupby', 'neu_search_groupby');

function neu_search_groupby($groupby){
    
    global $wpdb;
    //agrupa por id de post -no repite-
    // we need to group on post ID
    $groupby_id = "{$wpdb->posts}.ID";
    if(!is_search() || strpos($groupby, $groupby_id) !== false) return $groupby;

    // groupby was empty, use ours
    if(!strlen(trim($groupby))) return $groupby_id;

    // wasn't empty, append ours
    return $groupby.", ".$groupby_id;
}  


/*
Con el hook posts_join añadimos a la consulta de la base de datos las tablas de taxonomías ( wp_term_relationships, wp_term_taxonomy, wp_terms ) y la tabla de campos personalizados ( wp_postmeta )

Con el hook posts_where buscamos en los terminos de las taxonomías ( wp_terms -> name ) y en los valores de los campos personalizados ( wp_postmeta -> meta_value )

Y con el hook posts_groupby nos aseguramos de que el resultado salga agrupado por entradas, así evitamos que puedan salir entradas repetidas.

*/

/*-------------------------------------------------------------------------------------------------------------------------------------------------------*/

//ORDENA LOS RESULTADOS DE LA BUSQUEDA ||FECHA DESCENDENTE

function neu_order_search_results( $query ) { 

	/*   if ( $query->is_home() && $query->is_main_query() ) { 

     $query->set( 'orderby', 'title' ); 

     $query->set( 'order', 'DESC' ); 

   }*/ 


   /*example $query->set*/
   /*
		$query->set('meta_key', 'wpcf-object-sold-status' );
		$query->set('orderby', array('meta_value' => 'ASC', 'date' => 'DESC'));
   */



   if ( $query->is_search() ) { 

     $query->set( 'orderby', 'date' ); 

     $query->set( 'order', 'DESC' ); 

   } 

} 

add_action( 'pre_get_posts', 'neu_order_search_results' );

?>