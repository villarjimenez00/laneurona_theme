<?php 
	
	$args = neu_analisis_slider_args();
	//recojemos la taxonomia y el termino de la misma
	$accion_slug = $args['tax_query'][0]['terms'] ;
	$tax_slug = $args['tax_query'][0]['taxonomy'];

?>
<?php $query = new WP_Query( $args ); ?>
	<!-- SLIDE CONTENIDO -->

<?php if( $query->have_posts() ): ?>

	  <div class="row analisis-slider">
	    <div class="col-xs-12 analisis-slider-container">
	    
	        <div class="seccion-tittle">
	        	<a href="<?php bloginfo('url') ?>/<?php echo $tax_slug.'/'.$accion_slug ?>" style="color: #000000 !important"><h1 class="titulo-accion">Análisis</h1></a>
	        		<p class="subtitulo-accion" style=""><span>TENDENCIAS, EXPERIENCIAS & ENTREVISTAS</span><a class="ver_todo" href="<?php bloginfo('url') ?>/<?php echo (( !get_option('permalink_structure') ) ? '?'.$tax_slug.'='.$accion_slug : $tax_slug.'/'.$accion_slug  ) ?>" style="float: right; font-size: 1.6em;margin-top: -1em"><span class="fa fa-angle-right fa-2x dorado" style="margin-right: .2em;"></span><span style="margin-right: 2em;letter-spacing: 0em !important;color: #000 !important;" >Ver todo</span></a></p>
	        </div>

			<div class="slider-analisis">


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


				<div class="analisis-panelsmall" style="width: 255px;">

						<div class="carousel-patrobox smalltext">
						<?php if( get_field('imagen_patrocinador') ): ?>
							<p><span>Contenido patrocinado por:</span><span style="float: right;"><img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>" style="width:72px;height: 31px"></span></p>
						<?php endif; ?>
						</div>
					
						<div class="carouselSlide-header analisis-panelsmall-heading ">
						<a href="<?php the_permalink() ?>" class="nodecoration">
							<img  class="analisis-imgSmallCarousel img-responsive" src="<?php echo $imagen_carousel['url'] ?>" alt="<?php echo $imagen_carousel['title'] ?>">
							
 							<div class="playbox">								
								<div class="time">
									<span style="text-transform: uppercase;"><?php the_field('tipo_archivo') ?></span>
								</div>
		
							</div>


						</a>					
						</div>
				
				
							<div class="analisis-carouselSlide-footer">
							<a class="nodecoration" href="<?php the_permalink() ?>">
																	
								<h3 class="impulsoscarouselTitulo"><span class="dorado"># </span><?php the_title() ?></h3>

								<p class="carouselperfil" style="text-transform: uppercase;"><?php echo $perfil[0] ?></p>	
						
							</a>
							</div>    





				</div><!-- fin .smallpanel -->
				</div><!-- fin .sin clase -->
				</div><!-- fin .slide -->
		

				<!-- /slides -->								

	<?php wp_reset_postdata(); ?>
	<?php endwhile; endif; ?>		
	<!-- ======================================================================0 -->																


	

							
				</div>
	    </div> <!-- fin slider container -->
	  </div>
<!-- FIN SLIDER CONTENIDO -->
<?php endif; ?>