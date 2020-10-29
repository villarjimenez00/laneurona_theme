<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- devuelve un objeto con los datos de la taxonomia que indiquemos -podemos acotar los campos que devuelve- --> 
	<!-- solo queremos mostrar el termino de la taxonomia -->
<?php $term = wp_get_post_terms($post->ID, 'perfil', array("fields" => "names")); ?>
<!-- Setting informe - -->
<?php $file = get_field('archivo');?>
<!-- setting img -->
<?php $imagen_portada = get_field('imagen_portada') ?>	
<?php $imagen_patrocinador = get_field('imagen_patrocinador') ?>
<?php $captura_1 = get_field('captura_1') ?>
<?php $captura_2 = get_field('captura_2') ?>
<?php $captura_3 = get_field('captura_3') ?>
<!-- contenido del template -->
<main class="col-sm-12 col-md-8 informpost-content">


				<div class="inform-bigbox  text-center">
					<img src="<?php echo $imagen_portada['url'] ?>" alt="<?php echo $file['title'] ?>" class="img-responsive" style="border: solid 1px #cccccc">
					<div style="height: 2em;"></div>
					<a href="<?php echo $file['url'] ?>" class="btn btn-dark btn-download"><i class="glyphicon glyphicon-save"></i> Descargar Informe</a>
				</div>
		
			<?php if( get_field('imagen_patrocinador') ): ?>
				<div class="separator sep-bigpatro"></div>
				<div class="col-sm 12 big-patrobox">
					<p>Contenido <strong>ofrecido</strong> por:</p>
					<img src="<?php echo $imagen_patrocinador['url'] ?>" alt="<?php echo $imagen_patrocinador['title'] ?>" class="img-responsive">			
				</div>
				<div class="separator sep-bigpatro" style="margin-top: 2.5em;"></div>

			<?php endif; ?>
		
				<h4 style="text-transform: uppercase;"><?php echo $term[0] ?></h4>
		
				<h1 class="informpost-title"><span class="dorado">#</span> <?php the_title() ?></h1>

				<h3 class="informpost-subtitle h4"><?php the_field('tipo_informe') ?></h3>


	
				
				<div class="informpost-article">	

					<?php the_content() ?>
					
				<div class="capturas row">
					<a class="gallery-informe" rel="gallery" data-fancybox href="<?php echo $captura_1['url'] ?>"><img src="<?php echo $captura_1['url'] ?>" alt="<?php echo $captura_1['title'] ?>" class="captura-small thumbnail"></a>

					<a class="gallery-informe" rel="gallery" data-fancybox href="<?php echo $captura_2['url'] ?>"><img src="<?php echo $captura_2['url'] ?>" alt="<?php echo $captura_2['title'] ?>" class="captura-small thumbnail"></a>
					
					<a class="gallery-informe" rel="gallery" data-fancybox href="<?php echo $captura_3['url'] ?>"><img src="<?php echo $captura_3['url'] ?>" alt="<?php echo $captura_3['title'] ?>" class="captura-small thumbnail"></a>
				</div>

					<div class="text-center btn-container">
					 	<a href="<?php echo $file['url'] ?>" class="btn btn-dark btn-download" style="text-decoration: none !important"><i class="glyphicon glyphicon-save"></i> Descargar Documento</a>
					</div>
				</div>

</main>
<?php endwhile; endif; ?>