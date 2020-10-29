<?php  

/*
 * Personalización del número de posts o artículos por página de una taxonomia.
 * Capacidad de añadir que se ignoren algunos artículos iniciales
 */


//asignamos 24 post por pagina
//excluimos los cpt agenda evento y postevento
//no tienen caja pequeña solo post individual

function custom_neu_prefix_query_offset(&$query){


 if ( !is_admin() && $query->is_main_query() && $query->is_tax() ) {
       $query->set( 'posts_per_page', '24' );
 }
  //exluimos los cpts (agedas_evento, postevento ) 
  if ( $query->is_tax('perfil') || $query->is_tax('accion')) {
        $query->set( 'post_type', array('informe','evento','texto','video') );
    }

    return $query;


}

add_action('pre_get_posts', 'custom_neu_prefix_query_offset', 1 );


/*-------------------------------------------------------------------------------------------*/


/*
 * Función que permite ajustar correctamente
 * el número de páginas a mostrar
 */

function neu_prefix_adjust_offset_pagination($found_posts, $query) {

  //Escribe otra vez el número de artículo por el que empezar
  $offset = 0;

  //Asegúrate de que aplicas esto sobre el tipo de artículo correcto.
  if ( $query->is_tax('accion') || $query->is_search() ) {
  //Restamos al número de artículos encontrados
  //el del artículo por el que empezar
    return $found_posts - $offset;

  }

  //Si no es nuestro caso particular dejamos todo como estaba
  return $found_posts;

}

add_filter('found_posts', 'neu_prefix_adjust_offset_pagination', 1, 2 );

/*-------------------------------------------------------------------------------------------*/




//pinta el plantilla el bloque de paginacion
function neu_paint_pagination(){

      // EXAMPLE - escoge la opcion de permalink 
      // la estructura de “format” depende de si usamos enlaces permanentes "humanos"
      $format =  !get_option('permalink_structure')  ? '&page=%#%' : 'page/%#%/';

      $template_pagination = '<div class="row"><div class="col-xs-12 text-center"><div class="pagination">';

      $template_pagination .= paginate_links( array(

                                  'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),//Esta es la ruta de los enlaces de número de página, sin incluir la parte específica de paginación de la URL. Los caractes %_% se sustituirán en esa URL para la pa rte específica de la página de la URL.
                                  
                                  //'total'        => $query->max_num_pages,//El numéro total de páginas disponibles.
                                  
                                  'current'      => max( 1, get_query_var( 'paged' ) ), //El número de la página actual.
                                  
                                  //'format'       => '?paged=%#%',  //Esta es la parte de la “página” de la URL. %#% se sustituye pro el número de página.. Por ejemplo, page/%#% o ?page=%#%.
                                
                                  'format'       => $format,

                                  'show_all'     => false, //Lista todos los enlaces a páginas en vez de limitarlo a un cierto número de enlaces a izquierda o derecha de la página actual..
                                  
                                  'type'         => 'plain', //Te permite especificar el estilo de salida. Por defecto es “plain”, o sea, una lista de enlaces. También puede establecerse a formatos de “list” (o sea, enlaces englobados en ul y li) o de “array” (lo que mostrará una selección de enlaces a páginas que pueden definirse como tu quieras).

                                  'end_size'     => 1, //El número de enlaces a páginas a mostrar al final. Por defecto está a 1 (por ejemplo: 1 2 3 … 10).
                                  
                                  'mid_size'     => 1, //El número de páginas a mostrar en cada lado de la página actual. Por defecto está puesto a 2 (ejemplo: 1 … 3 4 5 6 7 … 10).
                                  
                                  'prev_next'    => true, //ncluye los enlaces a “Anterior” y “Siguiente” (si procede), como harías normalmente con la función previous_posts_link(). Solo funcionará si también ponemos previamente la función prev_next en “True”.
                                  
                                  'prev_text'    => sprintf( '<i></i> %1$s', __( 'Prev', 'text-domain' ) ), //Texto que irá dentro de los enlaces “Anterior” y “Siguiente”.
                                  
                                  'next_text'    => sprintf( '%1$s <i></i>', __( 'Next', 'text-domain' ) ), //Texto que irá dentro de los enlaces “Anterior” y “Siguiente”.
                                  
                                  'add_args'     => false,
                                  
                                  'add_fragment' => '', //También puedes añadir argumentos y fragmentos de query, a tu gusto.

                            ) ); 

      $template_pagination .= '</div></div></div>';

      return $template_pagination;

}






function neu_prefix_query_offset(&$query) {

  //Antes de nada, asegúrate de trabajar con la consulta correcta
  //incluir las consultas sobre las queremos paginar
  //

/*  if ( (!$query->is_tax('accion') && !$query->is_search() ) ) {
    error_log('pagination no es tax=accion');
    return;

  }*/

  /*if($query->is_tax('perfil')){
    error_log('error log working 22');
    return;
  }*/







  	//si viene valor post, lo establecemos como pos per page
  //cuantos artículos quieres ver por página

	/*if( isset( $_POST['num_post_per_page'] ) ){

    echo "paginacion por post";
    $_SESSION['num_post_per_page'] = $_POST['num_post_per_page'];
		$ppp = $_POST['num_post_per_page'];	
    echo "ppp $ppp";

	}else{

    $ppp = 24;
  
  }*/



  //Comprobamos si estamos en una página distinta a la primera
  /*if ( $query->is_paged ) {

    //Si estamos en la segunda página o siguientes definimos el artículo por el que debemos empezar como: El número de artículos que hemos decidido saltarnos al principio más el producto del número de página donde estamos menos 1 por el número de artículos por página.
    $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );
    //Aplicamos estos ajustes a la consulta. Tanto el número de artículo por el que empezar como los artículos por página
    $query->set('offset', $page_offset );
    $query->set('posts_per_page', $ppp );

  }else{


  $ppp = 24;
  //Define el artículo por el que vas a empezar. 0 es el primero, 1 el segundo...
  $offset = 0;
  //Esta es la primera página. Aplicamos el valor del artículo por que empezar con el que tu has definido al principio. También definimos el número de artículos por página
  $query->set('offset',$offset);
  $query->set('posts_per_page', 24 );

  }*/

  //$query->set('posts_per_page', 24 );
  $query->query_vars['posts_per_page'] = 10;
  if(is_tax('perfil')){
    //var_dump($query);
    error_log('final pre get post ');
  }
  //var_dump($query);


}

//add_action('pre_get_posts', 'neu_prefix_query_offset', 1 );






?>