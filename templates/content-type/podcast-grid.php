<?php 

	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

/*	if( isset($_POST['num_post_per_page'])){
		$ppp = filter_input(INPUT_POST, $_POST['num_post_per_page'], FILTER_SANITIZE_SPECIAL_CHARS);	
	}else{
		$ppp = 24;
	}*/
	

	$ppp = 24;

////////////////////////////////////////////////////////

	$titulo_pag = 'Podcast';
		
	$args = array(

		'post_type' => array('postevento'), //caulquier post_type
		'posts_per_page' => $ppp, //devuelve todos los post
		'paged'=>$paged,
		
	);
	
	

	



////////////////////////////////////////////////////////	

	//GENERAMOS EL OBJETO CON LA CONSULTA
	$query = new WP_Query( $args );

?>


<?php if( $query->have_posts() ): ?>

	
	<div class="container-fluid" style="padding: 0em 1em !important">

		<div class="row" style="margin-top: 110px;margin-bottom: 2em">
			<div class="seccion-tittle" style="width: 100%;margin: 0px 1em">
		       	<h1 class="titulo-accion"><?php echo $titulo_pag ?></h1>
		      	<!-- <p class="subtitulo-accion">DOCUMENTALES & MOTIVACIÓN</p> -->
		    </div>
		</div>





		<?php $audios_array = [] ; ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		<?php $perfil = wp_get_post_terms($post->ID, 'perfil', array("fields" => "names")); ?>


			<?php 
				//img settings
				//devuelve array con url, title y alt
				$imagen_patrocinador = get_field('imagen_patrocinador');
				$imagen_carousel = get_field('imagen_carousel');
			?>


			<?php 

				//introducimos todos los audios de los diferentes posteventos en un array
			//a partir del 3 puede que no esten establecidos evaluamos a fondo para eliminarlos del array

				if( strlen(get_field('audio_1')) >0 && !is_null(get_field('audio_1')) ){
					$audio_1 = get_field('audio_1');
					array_push($audios_array, $audio_1);				
				}
				if(strlen(get_field('audio_2')) >0 && !is_null(get_field('audio_2'))){
					$audio_2 = get_field('audio_2');
					array_push($audios_array, $audio_2);				
				}
				if(strlen(get_field('audio_3')) >0 && !is_null(get_field('audio_3'))){
					$audio_3 = get_field('audio_3');
					array_push($audios_array, $audio_3);				
				}
				if(strlen(get_field('audio_4')) >0 && !is_null(get_field('audio_4'))){
					$audio_4 = get_field('audio_4');
					array_push($audios_array, $audio_4);				
				}
				if(strlen(get_field('audio_5')) >0 && !is_null(get_field('audio_5'))){
					$audio_5 = get_field('audio_5');
					array_push($audios_array, $audio_5);				
				}
				if(strlen(get_field('audio_6')) >0 && !is_null(get_field('audio_6'))){
					$audio_6 = get_field('audio_6');
					array_push($audios_array, $audio_6);				
				}
				if(strlen(get_field('audio_7')) >0 && !is_null(get_field('audio_7'))){
					$audio_7 = get_field('audio_7');
					array_push($audios_array, $audio_7);				
				}
				if(strlen(get_field('audio_8')) >0 && !is_null(get_field('audio_8'))){
					$audio_8 = get_field('audio_8');
					array_push($audios_array, $audio_8);				
				}
				if(strlen(get_field('audio_9')) >0 && !is_null(get_field('audio_9'))){
					$audio_9 = get_field('audio_9');
					array_push($audios_array, $audio_9);				
				}
				if(strlen(get_field('audio_10')) >0 && !is_null(get_field('audio_10'))){
					$audio_10 = get_field('audio_10');
					array_push($audios_array, $audio_10);				
				}
																									

			?>


		<?php wp_reset_postdata(); ?>
		<?php endwhile; endif; ?>		

	

	<div class="row">
		<?php foreach($audios_array as $audio): ?>	
			<div class="col-xs-12 col-sm-6 col-md-4">          
				<div class="col-sm-12">
					<?php echo $audio ?>
				</div>
			</div> <!-- fin .col-xs-12 col-sm-6 col-md-4 -->
		<?php endforeach; ?>
	</div>



		<!-- paginacion -->
	<div class="row">
		<div class="col-xs-12 text-center">
			<div class="pagination">

				<?php //EJEMPLO PAGINACION $args DETALLADOS Y EXPLICADOS ?>
			    <?php 

				     // EXAMPLE - escoge la opcion de permalink	
				     // la estructura de “format” depende de si usamos enlaces permanentes "humanos"
				     $format = !get_option('permalink_structure')  ? '&page=%#%' : 'page/%#%/';



			        echo paginate_links( array(

				            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),//Esta es la ruta de los enlaces de número de página, sin incluir la parte específica de paginación de la URL. Los caractes %_% se sustituirán en esa URL para la pa rte específica de la página de la URL.
				            
				            'total'        => $query->max_num_pages,//El numéro total de páginas disponibles.
				            
				            'current'      => max( 1, get_query_var( 'paged' ) ), //El número de la página actual.
				            
				            'format'       => '?paged=%#%',  //Esta es la parte de la “página” de la URL. %#% se sustituye pro el número de página.. Por ejemplo, page/%#% o ?page=%#%.
				          
				            'show_all'     => false, //Lista todos los enlaces a páginas en vez de limitarlo a un cierto número de enlaces a izquierda o derecha de la página actual..
				            
				            'type'         => 'plain', //Te permite especificar el estilo de salida. Por defecto es “plain”, o sea, una lista de enlaces. También puede establecerse a formatos de “list” (o sea, enlaces englobados en ul y li) o de “array” (lo que mostrará una selección de enlaces a páginas que pueden definirse como tu quieras).

				            'end_size'     => 2, //El número de enlaces a páginas a mostrar al final. Por defecto está a 1 (por ejemplo: 1 2 3 … 10).
				            
				            'mid_size'     => 1, //El número de páginas a mostrar en cada lado de la página actual. Por defecto está puesto a 2 (ejemplo: 1 … 3 4 5 6 7 … 10).
				            
				            'prev_next'    => true, //ncluye los enlaces a “Anterior” y “Siguiente” (si procede), como harías normalmente con la función previous_posts_link(). Solo funcionará si también ponemos previamente la función prev_next en “True”.
				            
				            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Prev', 'text-domain' ) ), //Texto que irá dentro de los enlaces “Anterior” y “Siguiente”.
				            
				            'next_text'    => sprintf( '%1$s <i></i>', __( 'Next', 'text-domain' ) ), //Texto que irá dentro de los enlaces “Anterior” y “Siguiente”.
				            
				            'add_args'     => false,
				            
				            'add_fragment' => '', //También puedes añadir argumentos y fragmentos de query, a tu gusto.


				        ) 
			    	);
			    ?>
			</div>
		</div>
	</div> <!-- fin .row -->
		<!-- fin paginacion -->
</div> <!-- fin .container-fluid -->


<?php endif; ?>	