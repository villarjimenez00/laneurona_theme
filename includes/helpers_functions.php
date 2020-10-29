<?php 

/*limita el numero de caracteres del extracto
admite como parametro el numero de caracteres
en la plantilla en vez de usar el template tag llamamos a la funcion
ej echo excerpt(70)*/

function neu_excerpt($num) {
	$limit = $num+1;
	if( get_the_excerpt() ){
		$excerpt = get_the_excerpt();
	}else{
		//no hay extracto es un postevento
		$excerpt = get_field('descripcion_postevento');
	}
	$excerpt = explode(' ', $excerpt, $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)." [...]"; 
	echo $excerpt;
}


//genera un extracto a partir de un contenido dado y un numero de caracteres


function neu_custom_excerpt($content, $num) {
	
	$limit = $num+1;

	$custom_excerpt = $content;


	$custom_excerpt = explode(' ', $custom_excerpt, $limit);

	array_pop($custom_excerpt);

	$custom_excerpt = implode(" ",$custom_excerpt)." [...]"; 

	echo $custom_excerpt;

}



//agrega parametros (autoplay+hd) al src del iframe en los post tipo video

function neu_custom_iframe_video(){
	// get iframe HTML
	$iframe = get_field('video');


	// use preg_match to find iframe src
	preg_match('/src="(.+?)"/', $iframe, $matches);
	$src = $matches[1];


	// add extra params to iframe src
	$params = array(
	    /*'controls'    => 0,*/
	    'hd'        => 1,
	    'autoplay'    => 0,
	    'rel' 	=> 0,
	);

	$new_src = add_query_arg($params, $src);

	$iframe = str_replace($src, $new_src, $iframe);


	// add extra attributes to iframe html
	$attributes = 'frameborder="0"';

	$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

	return $iframe;
}

?>