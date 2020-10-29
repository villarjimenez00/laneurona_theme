<?php 

//funcines que devuelven los args para los wpquery
//en los slider que corresponden a las acciones
function neu_ideas_slider_args(){
	//front-page.php // temporalmente tb cuando está en sigle lo trae todo
	if( is_front_page() ){
		$args = array(
			//'post_type' => array( 'video_plus', 'video', 'texto' ),
			//'post_type' => 'video_plus', //caulquier post_type
			'post__in ' => 5004,
			'posts_per_page' => -1, //devuelve todos los post

			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'ideas',
				),
			),
			'orderby' => 'date',
			'order'   => 'DESC',
		);
	}
	//taxonomy.php
	if( is_tax() ){
		if( is_tax('perfil','marketing-ventas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'ideas',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'marketing-ventas',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','ecommerce') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'ideas',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'ecommerce',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','personas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'ideas',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'personas',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','retail') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'ideas',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'retail',
					),
				),
			);
		}		
		////////
		if( is_tax('perfil','pymes') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'ideas',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'pymes',
					),
				),
			);
		}	
		if( is_tax('perfil','finanzas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'ideas',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'finanzas',
					),
				),
			);
		}		
	}
	//////////////////////////////////////////
	//single-$post-type.php
	if( is_page('videos') ){
		$args = array(
			'post_type' => array('video'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'ideas',
				),
			),	

		);
	}

	if( is_page('informes') ){
		$args = array(
			'post_type' => array('informe'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'ideas',
				),
			),	

		);
	}

	if( is_page('eventos') ){
		$args = array(
			'post_type' => array('evento'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'ideas',
				),
			),	

		);
	}

	if( is_page('textos') ){
		$args = array(
			'post_type' => array('texto'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'ideas',
				),
			),	

		);
	}

	if( is_page('webinar') ){
		$args = array(
			'post_type' => array('webinar'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'ideas',
				),
			),	

		);
	}


	return $args;

}

//analisis
function neu_analisis_slider_args(){
	//front-page.php
	if( is_front_page() || is_single() ){
		$args = array(
			'post_type' => 'any', //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post

			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'analisis',
				),
			),
		);
	}
	//taxonomy.php
	if( is_tax() ){
		if( is_tax('perfil','marketing-ventas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'analisis',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'marketing-ventas',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','ecommerce') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'analisis',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'ecommerce',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','personas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'analisis',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'personas',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','retail') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'analisis',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'retail',
					),
				),
			);
		}		
		////////
		if( is_tax('perfil','pymes') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'analisis',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'pymes',
					),
				),
			);
		}	
		if( is_tax('perfil','finanzas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'analisis',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'finanzas',
					),
				),
			);
		}		
	}
	//////////////////////////////////////////
	//single-$post-type.php
	if( is_page('videos') ){
		$args = array(
			'post_type' => array('video'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'analisis',
				),
			),	

		);
	}

	if( is_page('informes') ){
		$args = array(
			'post_type' => array('informe'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'analisis',
				),
			),	

		);
	}

	if( is_page('eventos') ){
		$args = array(
			'post_type' => array('evento'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'analisis',
				),
			),	

		);
	}

	if( is_page('textos') ){
		$args = array(
			'post_type' => array('texto'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'analisis',
				),
			),	

		);
	}

	if( is_page('webinar') ){
		$args = array(
			'post_type' => array('webinar'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'analisis',
				),
			),	

		);
	}


	return $args;

}

//aprendizaje
function neu_aprendizaje_slider_args(){
	//front-page.php
	if( is_front_page() || is_single() ){
		$args = array(
			'post_type' => 'any', //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post

			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'aprendizaje',
				),
			),
		);
	}
	//taxonomy.php
	if( is_tax() ){
		if( is_tax('perfil','marketing-ventas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'aprendizaje',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'marketing-ventas',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','ecommerce') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'aprendizaje',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'ecommerce',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','personas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'aprendizaje',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'personas',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','retail') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'aprendizaje',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'retail',
					),
				),
			);
		}		
		////////
		if( is_tax('perfil','pymes') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'aprendizaje',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'pymes',
					),
				),
			);
		}	
		if( is_tax('perfil','finanzas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'aprendizaje',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'finanzas',
					),
				),
			);
		}		
	}
	//////////////////////////////////////////
	//single-$post-type.php
	if( is_page('videos') ){
		$args = array(
			'post_type' => array('video'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'aprendizaje',
				),
			),	

		);
	}

	if( is_page('informes') ){
		$args = array(
			'post_type' => array('informe'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'aprendizaje',
				),
			),	

		);
	}

	if( is_page('eventos') ){
		$args = array(
			'post_type' => array('evento'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'aprendizaje',
				),
			),	

		);
	}

	if( is_page('textos') ){
		$args = array(
			'post_type' => array('texto'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'aprendizaje',
				),
			),	

		);
	}

	if( is_page('webinar') ){
		$args = array(
			'post_type' => array('webinar'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'aprendizaje',
				),
			),	

		);
	}


	return $args;

}



//respuestas
function neu_respuestas_slider_args(){
	//front-page.php
	if( is_front_page() || is_single() ){
		$args = array(
			'post_type' => 'any', //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post

			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'respuestas',
				),
			),
		);
	}
	//taxonomy.php
	if( is_tax() ){
		if( is_tax('perfil','marketing-ventas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'respuestas',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'marketing-ventas',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','ecommerce') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'respuestas',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'ecommerce',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','personas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'respuestas',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'personas',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','retail') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'respuestas',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'retail',
					),
				),
			);
		}		
		////////
		if( is_tax('perfil','pymes') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'respuestas',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'pymes',
					),
				),
			);
		}	
		if( is_tax('perfil','finanzas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'respuestas',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'finanzas',
					),
				),
			);
		}		
	}
	//////////////////////////////////////////
	//single-$post-type.php
	if( is_page('videos') ){
		$args = array(
			'post_type' => array('video'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'respuestas',
				),
			),	

		);
	}

	if( is_page('informes') ){
		$args = array(
			'post_type' => array('informe'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'respuestas',
				),
			),	

		);
	}

	if( is_page('eventos') ){
		$args = array(
			'post_type' => array('evento'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'respuestas',
				),
			),	

		);
	}

	if( is_page('textos') ){
		$args = array(
			'post_type' => array('texto'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'respuestas',
				),
			),	

		);
	}

	if( is_page('webinar') ){
		$args = array(
			'post_type' => array('webinar'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'respuestas',
				),
			),	

		);
	}






	return $args;
}

//impulsos
function neu_impulsos_slider_args(){
	//front-page.php
	if( is_front_page() || is_single()){
		$args = array(
			'post_type' => 'any', //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post

			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'impulsos',
				),
			),
		);
	}
	
	if( is_tax() ){
		if( is_tax('perfil','marketing-ventas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'impulsos',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'marketing-ventas',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','ecommerce') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'impulsos',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'ecommerce',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','personas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'impulsos',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'personas',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','retail') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'impulsos',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'retail',
					),
				),
			);
		}		
		////////
		if( is_tax('perfil','pymes') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'impulsos',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'pymes',
					),
				),
			);
		}	
		if( is_tax('perfil','finanzas') ){
			$args = array(
				'post_type' => 'any', //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'accion',
						'field'    => 'slug',
						'terms'    => 'impulsos',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'finanzas',
					),
				),
			);
		}		
	}

	//////////////////////////////////////////
	//single-$post-type.php
	//single-$post-type.php
	if( is_page('videos') ){
		$args = array(
			'post_type' => array('video'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'impulsos',
				),
			),	

		);
	}

	if( is_page('informes') ){
		$args = array(
			'post_type' => array('informe'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'impulsos',
				),
			),	

		);
	}

	if( is_page('eventos') ){
		$args = array(
			'post_type' => array('evento'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'impulsos',
				),
			),	

		);
	}

	if( is_page('textos') ){
		$args = array(
			'post_type' => array('texto'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'impulsos',
				),
			),	

		);
	}

	if( is_page('webinar') ){
		$args = array(
			'post_type' => array('webinar'), //caulquier post_type
			'posts_per_page' => -1, //devuelve todos los post
			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'accion',
					'field'    => 'slug',
					'terms'    => 'impulsos',
				),
			),	

		);
	}


	return $args;
}


//delvuelve los $args para el slider destacado
//dependiendo desde donde se accede


function neu_destacado_slider_args(){
	//front-page.php
	if( is_front_page() || is_single() ){
		$args = array(
		
			'post_type' => array('video','texto','webinar','informe','evento','postevento'), //caulquier post_type
			'posts_per_page' => 5, //devuelve 5 post
				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					array(
						'taxonomy' => 'contenido-destacado',
						'field'    => 'slug',
						'terms'    => 'slider-destacados',
					),
				),		
		);
	}



	//taxonomy.php
	if( is_tax() ){
		if( is_tax('perfil','marketing-ventas') ){
			$args = array(
				'post_type' => array('video','texto','webinar','informe','evento'), //caulquier post_type
				'posts_per_page' => 5, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					
					array(
						'taxonomy' => 'contenido-destacado',
						'field'    => 'slug',
						'terms'    => 'slider-destacados',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'marketing-ventas',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','ecommerce') ){
			$args = array(
				'post_type' => array('video','texto','webinar','informe','evento'), //caulquier post_type
				'posts_per_page' => 5, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'contenido-destacado',
						'field'    => 'slug',
						'terms'    => 'slider-destacados',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'ecommerce',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','personas') ){
			$args = array(
				'post_type' => array('video','texto','webinar','informe','evento'), //caulquier post_type
				'posts_per_page' => 5, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'contenido-destacado',
						'field'    => 'slug',
						'terms'    => 'slider-destacados',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'personas',
					),
				),
			);
		}
		////////
		if( is_tax('perfil','retail') ){
			$args = array(
				'post_type' => array('video','texto','webinar','informe','evento'), //caulquier post_type
				'posts_per_page' => 5, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'contenido-destacado',
						'field'    => 'slug',
						'terms'    => 'slider-destacados',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'retail',
					),
				),
			);
		}		
		////////
		if( is_tax('perfil','pymes') ){
			$args = array(
				'post_type' => array('video','texto','webinar','informe','evento'), //caulquier post_type
				'posts_per_page' => 5, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'contenido-destacado',
						'field'    => 'slug',
						'terms'    => 'slider-destacados',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'pymes',
					),
				),
			);
		}	
		if( is_tax('perfil','finanzas') ){
			$args = array(
				'post_type' => array('video','texto','webinar','informe','evento'), //caulquier post_type
				'posts_per_page' => 5, //devuelve todos los post

				'tax_query' => array( //datos de taxonomia
									  //inidicar aqui relacion entre grupos de datos
									  // AND | OR	
					'relation' => 'AND',
					array(
						'taxonomy' => 'contenido-destacado',
						'field'    => 'slug',
						'terms'    => 'slider-destacados',
					),
					array(
						'taxonomy' => 'perfil',
						'field'    => 'slug',
						'terms'    => 'finanzas',
					),
				),
			);
		}		
	}


	//single-$post-type.php
	if( is_page('videos') ){
		$args = array(
			'post_type' => array('video'), //caulquier post_type
			'posts_per_page' => 5, //devuelve todos los post
			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'contenido-destacado',
					'field'    => 'slug',
					'terms'    => 'slider-destacados',
				),
			),	

		);
	}

	if( is_page('informes') ){
		$args = array(
			'post_type' => array('informe'), //caulquier post_type
			'posts_per_page' => 5, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'contenido-destacado',
					'field'    => 'slug',
					'terms'    => 'slider-destacados',
				),
			),	

		);
	}

	if( is_page('eventos') ){
		$args = array(
			'post_type' => array('evento'), //caulquier post_type
			'posts_per_page' => 5, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'contenido-destacado',
					'field'    => 'slug',
					'terms'    => 'slider-destacados',
				),
			),	

		);
	}

	if( is_page('textos') ){
		$args = array(
			'post_type' => array('texto'), //caulquier post_type
			'posts_per_page' => 5, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'contenido-destacado',
					'field'    => 'slug',
					'terms'    => 'slider-destacados',
				),
			),	

		);
	}

	if( is_page('webinars') ){
		$args = array(
			'post_type' => array('webinar'), //caulquier post_type
			'posts_per_page' => 5, //devuelve todos los post
						'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'contenido-destacado',
					'field'    => 'slug',
					'terms'    => 'slider-destacados',
				),
			),	

		);
	}

	return $args;

}




?>