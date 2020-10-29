<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 	$imagen_patrocinador = get_field('imagen_patrocinador'); ?>
			


			<aside class="col-sm-12 col-md-4 textpost-aside">
			
			<?php if( get_field('imagen_patrocinador') ): ?>
				<div class="aside-patrobox">
					<p class="text-center">Contenido <strong>ofrecido</strong> por:</p>
					<a href=" <?php echo ( get_field('url_destino_patrocinador') ? the_field('url_destino_patrocinador') : '#') ?> ">	<img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>" class="img-responsive">			</a>			
				</div>
				<div class="separator"></div>
			<?php endif; ?>	

				

		<?php get_template_part('templates/share-buttons') ?>


			<?php get_template_part('templates/post-author_template') ?>

				<div class="separator"></div>

			<?php get_template_part('templates/post-banner_template') ?>


			</aside>
<?php endwhile; endif; ?>			