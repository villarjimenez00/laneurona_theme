<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Setting informe - -->
<?php $file = get_field('archivo');?>
<!-- Setting img -->
<?php $imagen_patrocinador = get_field('imagen_patrocinador') ?>
<?php $imagen_portada = get_field('imagen_portada') ?>	
			<aside class="col-sm-12 col-md-4 informpost-aside">
			
			<?php if( get_field('imagen_patrocinador') ): ?>
				
				<div class="aside-patrobox informpost-aside-patrobox">
					<p class="text-center">Contenido <strong>ofrecido</strong> por:</p>
					
					<a href=" <?php echo ( get_field('url_destino_patrocinador') ? the_field('url_destino_patrocinador') : '#') ?> ">	<img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>" class="img-responsive">			</a>
				
				</div>
				<div class="separator sep-smallbox"></div>

			<?php endif; ?>
		

				<div class="inform-smallbox text-center">
						<img src="<?php echo $imagen_portada['url'] ?>" alt="<?php echo $imagen_portada['title'] ?>" class="img-responsive" style="border: solid 1px #cccccc">
					<a href="<?php echo $file['url'] ?>" class="btn btn-dark btn-download" style="font-size: 16px;"><i class="glyphicon glyphicon-save" style="font-size: 22px;"></i>  Descargar Documento</a>
				</div>
		
				<div class="separator"></div>

					<?php get_template_part('templates/share-buttons') ?>

				


		<?php get_template_part('templates/post-banner_template') ?>
			</aside>
<?php endwhile; endif; ?>			