<?php 
	$args = neu_impulsos_slider_args();
	//recojemos la taxonomia y el termino de la misma
	$accion_slug = $args['tax_query'][0]['terms'] ;
	$tax_slug = $args['tax_query'][0]['taxonomy'];

?>
<?php $query = new WP_Query( $args ); ?>
	<!-- SLIDE CONTENIDO -->
<?php if( $query->have_posts() ): ?>
	  <div class="row impulsos-slider">
	    <div class="col-xs-12 impulsos-slider-container">
	    
	        <div class="seccion-tittle">
	        		<a href="<?php bloginfo('url') ?>/<?php echo $tax_slug.'/'.$accion_slug ?>" style="text-decoration: none;color: #000"><h1 class="titulo-accion">Impulsos</h1></a>
	        	
	        		<p class="subtitulo-accion" style=""><span>DOCUMENTALES & MOTIVACIÓN</span><a class="ver_todo" href="<?php bloginfo('url') ?>/<?php echo ((!get_option('permalink_structure') ) ? '?'.$tax_slug.'='.$accion_slug : $tax_slug.'/'.$accion_slug  ) ?>" style="float: right; font-size: 1.6em;margin-top: -1em"><span class="fa fa-angle-right fa-2x dorado" style="margin-right: .2em;"></span><span style="margin-right: 2em;letter-spacing: 0em !important;color: #000 !important;" >Ver todo</span></a></p>
	        </div>

			<div class="slider-impulsos">


	<!-- slide -->
	<!-- slide -->
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<?php 
/*	<!-- devuelve un objeto con los datos de la taxonomia que indiquemos -podemos acotar los campos que devuelve- --> 
	<!-- solo queremos mostrar el termino de la taxonomia -->*/ ?>
	<?php $perfil = wp_get_post_terms($post->ID, 'perfil', array("fields" => "names")); ?>	

			<?php 
			//img settings
			//devuelve array con url, title y alt
			$imagen_patrocinador = get_field('imagen_patrocinador');
			$imagen_carousel = get_field('imagen_carousel');
			?>
				<div class="slide">          
				<div class="">


				<div class="impulsos-panelsmall" style="width: 255px;">

				
						<div class="carousel-patrobox smalltext">
						<?php if( get_field('imagen_patrocinador') ): ?>	
							<p><span>Contenido <strong>ofrecido</strong> por:</span><img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>" class="patroicon img-responsive"></p>
						<?php endif; ?>				
						</div>
					

						<div class="carouselSlide-header impulsos-panelsmall-heading ">
						<a href="<?php the_permalink() ?>" class="nodecoration">
							<img  class="impulsos-imgSmallCarousel img-responsive" src="<?php echo $imagen_carousel['url'] ?>" alt="<?php echo $imagen_carousel['title'] ?>">
							
							<div class="up-playbox" style="display: block;">								
								<div class="up-time">
									<span class="fa fa-play" aria-hidden="true"> <?php the_field('duracion') ?></span>
								</div>
		
							</div>
						</a>
						</div>
				
				
							<div class="impulsos-carouselSlide-footer">
							<a class="nodecoration" href="<?php the_permalink() ?>">
																	
								<h3 class="bold impulsoscarouselTitulo"><span><?php the_title() ?></span></h3>

								<p class="carouselperfil" style="text-transform: uppercase;"><?php echo $perfil[0] ?></p>	
						
							</a>
							</div>





				</div><!-- fin .smallpanel -->
				</div><!-- fin .sin clase -->
				</div><!-- fin .slide -->
		

				<!-- /slides -->								
					<!--/ slide -->
							
	
		

				<?php wp_reset_postdata(); ?>
				<?php endwhile; endif; ?>					

<!--/ ================================================================ -->																											
				</div>
	    </div> <!-- fin slider container -->
	  </div>
<?php endif; ?>