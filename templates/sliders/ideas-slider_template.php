<?php 
$args2 = array(
			//'p' => 5004,
			'post_type' => 'video_plus',
			'posts_per_page' => -1, //devuelve todos los post
);
$query2 = new WP_Query($args2);
?>
<?php //SLIDER IDEAS
$args = neu_ideas_slider_args();  
//print_r($args);
//recojemos la taxonomia y el termino de la misma
$accion_slug = $args['tax_query'][0]['terms'] ;
$tax_slug = $args['tax_query'][0]['taxonomy'];

$query = new WP_Query( $args );
?>


<?php if( $query->have_posts() ): ?>

	<?php //$accion = wp_get_post_terms($post->ID, 'accion', array("fields" => "slugs")); ?>

<!-- TEMPLATE -->
<!-- style="margin-top: -8em" -->
	  <div class="row ideas-slider bg_ideas" style=" <?php echo( is_front_page() ? 'margin-top: -15vw !important':'' ) ?> ">
	    <div class="col-xs-12 ideas-slider-container" style=" <?php echo( is_front_page() ? 'padding-top: 3em !important':'' ) ?> ">
	    
	        <div class="seccion-tittle">
	        	<a href="<?php bloginfo('url') ?>/<?php echo $tax_slug.'/'.$accion_slug ?>" style="color: #000000 !important"><h1 class="titulo-accion">Ideas</h1></a>
	        	<p class="subtitulo-accion" style=""><span>TENDENCIAS, EXPERIENCIAS & ENTREVISTAS</span><a class="ver_todo" href="<?php bloginfo('url') ?>/<?php echo ( !get_option('permalink_structure' ) ? '?'.$tax_slug.'='.$accion_slug : $tax_slug.'/'.$accion_slug  ) ?>" style="float: right; font-size: 1.6em;margin-top: -1em"><span class="fa fa-angle-right fa-2x dorado" style="margin-right: .2em;"></span><span style="margin-right: 2em;letter-spacing: 0em !important;color: #000 !important;" >Ver todo</span></a></p>	        	
	        </div>

			<div class="slider-ideas">



	<!-- slide -->

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<?php /*	<!-- devuelve un objeto con los datos de la taxonomia que indiquemos -podemos acotar los campos que devuelve- --> 
	<!-- solo queremos mostrar el termino de la taxonomia -->*/ ?>

	<?php $perfil = wp_get_post_terms($post->ID, 'perfil', array("fields" => "slugs")); ?>
	<?php $accion = wp_get_post_terms($post->ID, 'accion', array("fields" => "slugs")); ?>
	
	<!-- SLIDE CONTENIDO -->
			<?php 
			//img settings
			//devuelve array con url, title y alt
			$imagen_patrocinador = get_field('imagen_patrocinador');
			$imagen_carousel = get_field('imagen_carousel');
			?>
				<div class="slide">          
				<div class="">


				<div class="ideas-panelsmall" style="width: 255px;">

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

						
								<p class="carouselperfil" style="text-transform: uppercase;"><?php echo $perfil[0] ?></p>
							
								<h3 class="bold carouselTitulo"><span><?php the_title() ?></span></h3>

								<h5 class="carouselponente dorado"><?php the_field('nombre_ponente') ?></h5>

								<p class="carouselcanal"><span style="text-transform: uppercase;">
									<?php if(get_field('canal')): ?>
										<?php the_field('canal') ?>
									<?php else: ?>
										<?php the_field('canal_texto') ?>
									<?php endif; ?>			
								</span></p>
						
							</a>
							</div>





				</div><!-- fin .smallpanel -->
				</div><!-- fin .sin clase -->
				</div><!-- fin .slide -->
		

				<!-- /slides -->								
					<!--/ slide -->
				<?php wp_reset_postdata(); ?>
				<?php endwhile; endif; ?>		



<!-- custom video plus slide -->



	<?php if ( $query2->have_posts() ) : while ( $query2->have_posts() ) : $query2->the_post(); ?>




	<?php //echo "<br> POST->>>"; ?>
	<?php //print_r($post); ?>

		<?php $perfil = wp_get_post_terms($post->ID, 'perfil', array("fields" => "slugs")); ?>
		<?php print_r($perfil); ?>
		<?php $accion = wp_get_post_terms($post->ID, 'accion', array("fields" => "slugs")); ?>
		<?php $contenido_destacado = wp_get_post_terms($post->ID, 'contenido-destacado', array("fields" => "slugs")); ?>
		
		<!-- SLIDE CONTENIDOpppppppppppppppppppp -->
				<?php 
				//img settings
				//devuelve array con url, title y alt
				$imagen_patrocinador = get_field('imagen_patrocinador');
				$imagen_carousel = get_field('imagen_carousel');
				?>
					<div class="slide">          
					<div class="">


					<div class="ideas-panelsmall" style="width: 255px;">

							<div class="carousel-patrobox smalltext">
							<?php if( get_field('imagen_patrocinador') ): ?>	
								<p><span>Contenido <strong>ofrecido</strong> por:</span><img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>" class="patroicon img-responsive"></p>
							<?php endif; ?>				
							</div>
					
								<div class="carouselSlide-header ideas-panelsmall-heading ">
								<a onclick=” ga(‘send’, ‘event’, ‘categoría‘, ‘acción‘, ‘etiqueta‘);” href="<?php the_permalink() ?>" class="nodecoration view-class">
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

							
									<p class="carouselperfil" style="text-transform: uppercase;"><?php echo $perfil[1] ?></p>
								
									<h3 class="bold carouselTitulo"><span><?php the_title() ?></span></h3>

									<h5 class="carouselponente dorado"><?php the_field('nombre_ponente') ?></h5>

									<p class="carouselcanal"><span style="text-transform: uppercase;">
										<?php if(get_field('canal')): ?>
											<?php the_field('canal') ?>
										<?php else: ?>
											<?php the_field('canal_texto') ?>
										<?php endif; ?>			
									</span></p>
							
								</a>
								</div>





					</div><!-- fin .smallpanel -->
					</div><!-- fin .sin clase -->
					</div><!-- fin .slide -->

	<?php wp_reset_postdata(); ?>
	<?php endwhile; endif; ?>			




	<!-- ----------------------------------------------------------------------------------------- -->
<!-- fin custom video plus slide -->



	
<!-- ========================================================================== -->
			</div>
	    </div> <!-- fin slider container -->
	  </div>
		<!-- SLIDE CONTENIDO -->
<?php endif; ?>
	