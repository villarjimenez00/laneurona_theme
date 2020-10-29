<?php 

	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

/*	if( isset($_POST['num_post_per_page'])){
		$ppp = filter_input(INPUT_POST, $_POST['num_post_per_page'], FILTER_SANITIZE_SPECIAL_CHARS);	
	}else{
		$ppp = 24;
	}*/
	

	$ppp = 24;

////////////////////////////////////////////////////////

	//////////////////////////////////////////
	//single-$post-type.php
	if( is_page('videos') ){
		
		$titulo_pag = 'Videos';
		
		$args = array(
			'post_type' => array('video'), //caulquier post_type
			'posts_per_page' => $ppp, //devuelve todos los post
			'paged'=>$paged,			

		);
	}

	if( is_page('informes') ){
		
		$titulo_pag = 'Informes';
		
		$args = array(
			'post_type' => array('informe'), //caulquier post_type
			'posts_per_page' => $ppp, //devuelve todos los post
			'paged'=>$paged,

		);
	}

	if( is_page('eventos') ){
		
		$titulo_pag = 'Eventos';
		
		$args = array(
			'post_type' => array('evento'), //caulquier post_type
			'posts_per_page' => $ppp, //devuelve todos los post
			'paged'=>$paged,	

		);
	}

	if( is_page('textos') ){
		
		$titulo_pag = 'Posts';
		
		$args = array(
			'post_type' => array('texto'), //caulquier post_type
			'posts_per_page' => $ppp, //devuelve todos los post
			'paged'=>$paged,
		);
	}	

	



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


		<div class="row">

		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		<?php $perfil = wp_get_post_terms($post->ID, 'perfil', array("fields" => "names")); ?>
		

			<?php 
			//img settings
			//devuelve array con url, title y alt
			$imagen_patrocinador = get_field('imagen_patrocinador');
			$imagen_carousel = get_field('imagen_carousel');
			?>




			<div class="col-xs-6 col-md-4 col-lg-2">
			
				<div class="ideas-panelsmall" style="">

						<div class="carousel-patrobox smalltext">
						<?php if( get_field('imagen_patrocinador') ): ?>	
							<p><span>Contenido <strong>ofrecido</strong> por:</span><img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>" class="patroicon img-responsive"></p>
						<?php endif; ?>				
						</div>
					
						<div class="carouselSlide-header ideas-panelsmall-heading ">
							<a href="<?php the_permalink() ?>" class="nodecoration">
								<img  class="ideas-imgSmallCarousel img-responsive" src="<?php echo $imagen_carousel['url'] ?>" alt="<?php echo $imagen_carousel['title'] ?>">
								
							<?php if(get_field('duracion')): ?>
								<div class="playbox" style="display: block;">								
									<div class="time">
										<span class="fa fa-play" aria-hidden="true"> <?php the_field('duracion')?></span>
									</div>
								</div>
							<?php endif; ?>


							</a>
						</div>
				
				
							<div class="ideas-carouselSlide-footer">
								<a class="nodecoration" href="<?php the_permalink() ?>">

							
									<p class="carouselperfil" style="text-transform: uppercase;"><?php //echo $perfil[0] ?></p>
								
									<h3 class="bold carouselTitulo"><span><?php the_title() ?></span></h3>

									<h5 class="carouselponente dorado"><?php the_field('nombre_ponente') ?></h5>

									<p class="carouselcanal">
										<span style="text-transform: uppercase;">

											<?php if(get_field('canal')): ?>
												
												<?php the_field('canal') ?>

											<?php elseif(get_field('canal_texto') ): ?>
												
												<?php the_field('canal_texto') ?>
											
											<?php else: ?>
											
												<?php foreach ($perfil as $p): ?>
											
													<?php echo $p; ?>
											
												<?php endforeach; ?>	

											<?php endif; ?>

										</span>
									</p>
							
								</a>
							</div>

				</div><!-- fin .smallpanel -->

			</div> <!-- fin .col -->

		<?php wp_reset_postdata(); ?>
		<?php endwhile; endif; ?>		

		</div> <!-- fin .row -->

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