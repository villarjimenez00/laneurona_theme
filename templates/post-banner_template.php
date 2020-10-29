<?php setlocale (LC_TIME, "es_ES"); ?>
<?php $perfil = wp_get_post_terms($post->ID, 'perfil', array("fields" => "slugs")); ?>
<?php $accion = wp_get_post_terms($post->ID, 'accion', array("fields" => "slugs")); ?>
<?php if(get_field('url_banner')&&get_field('post-banner')): ?>
		<div class="post-banner">				
			<p class="text-center smalltext publi-label"><span class="glyphicon glyphicon-chevron-down"></span> TE RECOMENDAMOS <span class="glyphicon glyphicon-chevron-down"></span></p>
			<a class="" href=" <?php echo trim(get_field('url_banner')) ?> " target="_blank">
				<img src="<?php echo the_field('post-banner'); ?>" alt="" class="img-responsive">
			</a>
		</div>	
<?php else: ?>
		<div class="post-banner">				
			<p class="text-center smalltext publi-label"><span class="glyphicon glyphicon-chevron-down"></span> TE RECOMENDAMOS <span class="glyphicon glyphicon-chevron-down"></span></p>
			<a class="" href="https://interbanservices.com/formularios/newsletter_neurona/a000X000013DEnB" target="_blank">
				<img src="<?php bloginfo('template_url') ?>/img/newsletter_300x250.jpg" alt="" class="img-responsive">
			</a>
		</div>
<?php endif; ?>