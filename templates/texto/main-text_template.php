<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
<?php 	/*<!-- devuelve un objeto con los datos de la taxonomia que indiquemos -podemos acotar los campos que devuelve- --> 
	<!-- solo queremos mostrar el termino de la taxonomia -->*/ ?>
<?php $term = wp_get_post_terms($post->ID, 'perfil', array("fields" => "names")); ?>
<!-- setting img -->
<?php $imagen_patrocinador = get_field('imagen_patrocinador') ?>
<?php $imagen_texto = get_field('imagen_texto') ?>
	

			<main class="col-sm-12 col-md-8 textpost-content">


				<h4 style="text-transform: uppercase;:"><?php echo $term[0] ?></h4>
		
				<h1 class="textpost-title"><?php the_title() ?></h1>

				<h3 class="textpost-subtitle "><?php the_excerpt() ?></h3>

				<img src="<?php echo $imagen_texto['url'] ?>" alt="<?php echo $imagen_texto['title'] ?>" class="img-responsive posttext-img">

	<?php if( get_field('imagen_patrocinador') ): ?>	
				<div class="col-sm 12 big-patrobox">
					<p>Contenido <strong>ofrecido</strong> por:</p>
					<img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>" class="img-responsive">			
				</div>
	<?php endif; ?>
				
				<div class="textpost-sep posrelative" style="padding-bottom: .5em; font-size:1.2em; font-weight: bold">
					<div class="separator"></div>
					<p class="text-center">	Tiempo de lectura: <?php the_field('tiempo_lectura') ?> min.</p>
					<div class="separator"></div>
					<img src="<?php bloginfo('template_url') ?>/img/separador.png" alt="" class="posabsolute center-absolute">
				</div>


				<div class="row textpost-date">
					<div class="col-xs-6"><h5 class="h4"><span style="text-transform: uppercase;"><?php echo get_the_date() ?></span></h5></div>
					<div class="col-xs-6 text-right post-canal textpost-canal">
						<h5 class="h4"><span style="text-transform: uppercase;"><?php the_field('canal_texto') ?></span></h5>
					</div>
				</div>		
				
				<div class="textpost-article">	

					<?php the_content() ?>

				</div>
			</main>
<?php endwhile; endif; ?>