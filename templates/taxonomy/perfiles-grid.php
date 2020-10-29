<?php if(have_posts()): ?>


<?php 

	if( is_tax('perfil','finanzas') ){
		$titulo = 'Ideas';
		//$subtitulo= 'TENDENCIAS, EXPERIENCIAS & ENTREVISTAS';
	}
	if( is_tax('perfil','marketing-ventas') ){
		$titulo = 'Impulsos';
		//$subtitulo= 'DOCUMENTALES & MOTIVACIÓN';
	}
	if( is_tax('perfil','personas') ){
		$titulo = 'Respuestas';
		//$subtitulo= 'SOLUCIONES & CURIOSIDADES';
	}
	if( is_tax('perfil','ecommerce') ){
		$titulo = 'Aprendizaje';
		//$subtitulo= 'EVENTOS & EXPERTOS';
	}
	if( is_tax('perfil','pymes') ){
	
		$titulo = 'Análisis';
		//$subtitulo= 'ESTUDIOS, INFORMES & INFOGRAFIAS';
	
	}
	if( is_tax('perfil','retail') ){
	
		$titulo = 'Análisis';
		//$subtitulo= 'ESTUDIOS, INFORMES & INFOGRAFIAS';
	
	}
	

?>


<div class="container-fluid" style="padding: 0em 1em !important">
	
<!-- 	<div class="row" style="margin-top: 110px;margin-bottom: 2em">
	<div class="seccion-tittle" style="width: 100%;margin: 0px 1em">
       	<h1 class="titulo-accion"><?php //echo $titulo ?></h1>
	      	<p class="subtitulo-accion"><?php //echo $subtitulo ?></p>
    </div>
</div>

<div class="row testing">
	    <?php 
	    	//$perfiles = get_terms(array('perfil'));
	    ?>
</div>
 -->



	<div class="row">	

<!-- loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	<?php $post_type = get_post_type(); ?>
	
	<?php //if(  $post_type !='agenda_evento' && $post_type !='postevento' ): ?>

		<?php $perfil = wp_get_post_terms($post->ID, 'perfil', array("fields" => "names")); ?>
		<?php $accion = wp_get_post_terms($post->ID, 'accion', array("fields" => "names")); ?>

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

							
									<p class="carouselperfil" style="text-transform: uppercase;"><?php echo $accion[0] ?></p>
								
									<h3 class="bold carouselTitulo"><span><?php the_title() ?></span></h3>

									<h5 class="carouselponente dorado"><?php the_field('nombre_ponente') ?></h5>

									<p class="carouselcanal"><span style="text-transform: uppercase;">
										<?php if(get_field('canal')): ?>
											<?php the_field('canal') ?>
										<?php elseif(get_field('canal_texto')): ?>
											<?php the_field('canal_texto') ?>
										<?php else: ?>	
											LA NEURONA
										<?php endif; ?>			
									</span></p>
							
								</a>
								</div>

					</div><!-- fin .smallpanel -->

			</div> <!-- fin .col -->



	<?php //endif; ?> <!-- fin if cpt  exclusion agenda+postevento-->
<?php endwhile; endif; ?>
<!-- fin loop -->

	</div> <!-- fin .row -->

	<?php get_template_part('templates/pagination_template') ?>

</div> <!-- fin .container-fluid -->
<?php endif; ?>