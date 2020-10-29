<?php 
	$args = neu_aprendizaje_slider_args();
	//recojemos la taxonomia y el termino de la misma
	$accion_slug = $args['tax_query'][0]['terms'] ;
	$tax_slug = $args['tax_query'][0]['taxonomy'];
?>
<?php $query = new WP_Query( $args ); ?>

	<!-- SLIDE CONTENIDO -->
<?php if( $query->have_posts() ): ?>
	  <div class="row aprendizaje-slider">
	    <div class="col-xs-12 aprendizaje-slider-container">
	    
	        <div class="seccion-tittle">
	        	<a href="<?php bloginfo('url') ?>/<?php echo $tax_slug.'/'.$accion_slug ?>" style="color: #000000 !important"><h1 class="titulo-accion">Aprendizaje</h1></a>
	        	
	        		        	<p class="subtitulo-accion" style=""><span>EVENTOS & EXPERTOS</span><a class="ver_todo" href="<?php bloginfo('url') ?>/<?php echo (( !get_option('permalink_structure') ) ? '?'.$tax_slug.'='.$accion_slug : $tax_slug.'/'.$accion_slug  ) ?>" style="float: right; font-size: 1.6em;margin-top: -1em"><span class="fa fa-angle-right fa-2x dorado" style="margin-right: .2em;"></span><span style="margin-right: 2em;letter-spacing: 0em !important;color: #000 !important;" >Ver todo</span></a></p>
	        </div>

			<div class="slider-aprendizaje">

	<!-- slide -->
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<?php 	/*<!-- devuelve un objeto con los datos de la taxonomia que indiquemos -podemos acotar los campos que devuelve- --> 
	<!-- solo queremos mostrar el termino de la taxonomia -->*/ ?>
	<?php $perfil = wp_get_post_terms($post->ID, 'perfil', array("fields" => "names")); ?>
		
		<?php//seeting desactivar eventos realizados 
			$id = get_the_ID() ;
	
			if($id == 576 || $id == 581 || $id == 334 || $id == 1460 || $id == 573 || $id == 1583){
				echo "REALIADO";
				$evento_realizado = true;	
			}else{
				echo "NO 0 REALIADO";
				$evento_realizado = true;
			}
		?>
			<?php 
			//img settings
			//devuelve array con url, title y alt
				$imagen_patrocinador = get_field('imagen_patrocinador');
				$imagen_carousel = get_field('imagen_carousel');

			?>

				<div class="slide">          
				<div class="">


				<div class="aprendizaje-panelsmall" style="width: 255px;">
				
				

				<div class="aprendizaje-carousel-header">
			

					<?php if(get_field('numero_ciudades')): ?>
							<p><span class="eventolabel">EVENTO</span><span style="float: right;">

							<?php if( $imagen_patrocinador ): ?>
								<img style="width: 56px" src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>">
							<?php endif; ?>
							</span></p>

					<?php elseif( get_field('conectados') ): ?>

							<p><span class="ondemandlabel">EXPERTOS</span><span style="float: right;">
							<?php if(get_field('imagen_patrociandor')): ?>
								<img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>">
							<?php endif; ?>
							</span></p>

					<?php else: ?>

							<p><span class="ondemandlabel">ON DEMAND</span><span style="float: right;">
							<?php if(get_field('imagen_patrociandor')): ?>
								<img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>">
							<?php endif; ?>
							</span></p>

					<?php endif; ?>
						</div>


							
					<div class="carouselSlide-header aprendizaje-panelsmall-heading ">
								

						<a href="<?php (get_field('url_destino')) ? the_field('url_destino') : the_permalink() ?>" class="nodecoration">
				
							<img  class="aprendizaje-imgSmallCarousel img-responsive" src="<?php echo $imagen_carousel['url'] ?>" alt="<?php echo $imagen_carousel['title'] ?>">
							
 							<div class="playbox">								
								<div class="time">
						<?php if(get_field('numero_ciudades')): ?>			
									<span style="text-transform: uppercase;"><?php the_field('numero_ciudades') ?></span>
						<?php elseif(get_field('conectados')): ?>
									<span style="text-transform: uppercase;"> <?php echo neu_expertos_label($perfil[0]) ?></span>
						<?php else: ?>
									<span class="fa fa-play" aria-hidden="true"> <?php the_field('duracion') ?></span>
						<?php endif; ?>	
								</div>
							</div>

		
				 		</a>
				
					</div>
				
				</span>
				
							<div class="aprendizaje-carouselSlide-footer">
									
					
								<a href="<?php (get_field('url_destino'))? the_field('url_destino') : the_permalink() ?>" class="nodecoration">
											
								<h3 class="aprendizajecarouselTitulo bold"><?php the_title() ?></h3>

								<p class="aprendizajecarouselextracto"><?php neu_excerpt(21) ?></p>	

						
								<p class="aprendizajecarouselperfil">		
									<?php for($i=0;$i<=count($perfil);$i++): ?>
									
										<span style="text-transform: uppercase;">
										<?php 
											if($i!=0 && $i!=count($perfil)){
												echo "&middot; ";
											}
											echo $perfil[$i];  
										?>										
										</span>
						
									<?php endfor; ?>	
								</p>	
						
	
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