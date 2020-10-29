<?php $perfil = wp_get_post_terms($post->ID, 'perfil', array("fields" => "slugs")); ?>

<?php //SLIDER postevento

			$args = array(
				'post_type' => array('video','texto','webinar','informe','evento'), //caulquier post_type
				'posts_per_page' => -1, //devuelve todos los post
				'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
									array(
										'taxonomy' => 'perfil',
										'field'    => 'slug',
										'terms'    => $perfil[0],
									),
								),	
			);

$query = new WP_Query( $args );

?>
<?php if( $query->have_posts() ): ?>
<!-- TEMPLATE -->
	  <div class="row ideas-slider">
	    <div class="col-xs-12 ideas-slider-container">
	    
	        <div class="seccion-tittle">
	        	<h2 class="titulo-accion" style="color: #666666">Contenido <span class="dorado">relacionado</span></h2>
				
	        </div>

			<div class="slider-home" style="background-color: transparent !important; ">


	<!-- slide -->

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

	<?php 	//<!-- devuelve un objeto con los datos de la taxonomia que indiquemos -podemos acotar los campos que devuelve- --> 
	//<!-- solo queremos mostrar el termino de la taxonomia --> ?>
	<?php $tax_term = wp_get_post_terms($post->ID, array('perfil','accion'), array("fields" => "names")); ?>
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
							<p><span>Contenido <strong>ofrecido</strong> por:</span><img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>" style="float: right;"></p>
						<?php endif; ?>				
						</div>
					
						<div class="carouselSlide-header ideas-panelsmall-heading ">
							<a href="<?php the_permalink() ?>" class="nodecoration">
								<img  class="ideas-imgSmallCarousel" src="<?php echo $imagen_carousel['url'] ?>" alt="<?php echo $imagen_carousel['title'] ?>">
								
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

						
													
								<p class="carouselperfil" style="text-transform: uppercase;"><?php echo $tax_term[1] ?></p>

								<h3 class="bold carouselTitulo"><span><?php the_title() ?></span></h3>


								<p class="carouselcanal"><span style="text-transform: uppercase;">
									<?php echo $tax_term[0] ?>			
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
	
<!-- ========================================================================== -->
			</div>
	    </div> <!-- fin slider container -->
	  </div>
		<!-- SLIDE CONTENIDO -->
<?php endif; ?>
	