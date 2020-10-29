<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php

	//primary tax term settings 
	//devuelve el termino selccionado como principal en el backoffice


	$wpseo_primary_term_object = new WPSEO_Primary_Term('perfil', $post->ID);
	$wpseo_primary_term_function = $wpseo_primary_term_object->get_primary_term();

	//si tiene varios perfiles seleccionados
	//coge la seleccionada como wpseo_primary_term
	if( $wpseo_primary_term_function && $wpseo_primary_term_function != false ){
		$primary_term = get_term($wpseo_primary_term_function);
		$tax_term = $primary_term->name;
	}else{
		
		$term = wp_get_post_terms($post->ID, 'perfil', array("fields" => "names"));
		$tax_term = $term[0];
	}
?>
<!-- setting img -->
<?php $imagen_patrocinador = get_field('imagen_patrocinador'); ?>
<div class="container">
	<div class="row">
		

	<?php if( get_field('imagen_patrocinador') ): ?>	

		<div class="col-sm 12 big-patrobox">
			<p>Contenido <strong>ofrecido</strong> por:</p>
			<img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>" class="img-responsive">			
		</div>


	<?php endif; ?>

		<main class="col-sm-12 col-md-8 video-info" style="margin-bottom: 2em">
		
			<h6 class="nodecoration post-perfil" style="text-transform: uppercase;:"><?php echo $tax_term ?></h6>
		
			<h1 class="post-title"><?php the_title() ?></h1>
		
			<h3 class="post-autor dorado"><?php the_field('nombre_ponente') ?></h3>
			<h4 class="post-autor-data dorado"><?php the_field('cargo_ponente') ?></h4>
			
			<?php $canal = get_field('canal'); ?>
			<?php if($canal!=''): ?>
				<h6 class="nodecoration post-canal"><span style="text-transform: uppercase;:"><?php the_field('canal') ?></span></h6>
			<?php endif; ?>
			
		
			<?php the_content() ?>     
		</main>

		<aside class="col-sm-12 col-md-4 video-aside">
			
			<?php if( get_field('imagen_patrocinador') ): ?>	
					<div class="aside-patrobox">
						<p class="text-center">Contenido <strong>ofrecido</strong> por:</p>
						<a href=" <?php echo ( get_field('url_destino_patrocinador') ? the_field('url_destino_patrocinador') : '#') ?> ">	
							<img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>" class="img-responsive">
						</a>			
					</div>
					<div class="separator sep-smallbox"></div>
			<?php endif; ?>		

			<?php get_template_part('templates/share-buttons') ?>

			<?php get_template_part('templates/post-banner_template') ?>
	

		</aside>
	
	</div>
</div>
<?php endwhile; endif; ?>