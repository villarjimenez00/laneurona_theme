<?php 
//video & gallery settings
$gallery = get_field('galeria_postevento');
$postevento_video = get_field('video_postevento');
?>
<?php if ( ($gallery && !empty($gallery)) || ( $postevento_video && !empty($postevento_video) ) ): ?>
	<div class="container-fluid tapiz">
	<!-- VIDEO POSTEVENTO -->
	<?php if($postevento_video && !empty($postevento_video)): ?>	
		<div class="container">
			<div class="row postevento-video-title">
				<div class="col-sm-12 col-md-6">
					<h1>Vídeo <span class="dorado">resumen</span></h1>
					<p>
					Estos son algunos de los buenos momentos que disfrutamos a lo largo de las jornadas que tuvieron lugar en La Neurona. ¡Te esperamos el año que viene con más novedades y nuevos ponentes! 
					</p>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class=" videobox embed-responsive embed-responsive-16by9">
						<?php the_field('video_postevento') ?>	
					</div>
					
				</div>
			</div>
		</div>
	<?php endif; ?>
	<!-- FIN VIDEO POSTEVENTO -->

	<!-- GALERIA IMAGENES -->
	<?php if($gallery && !empty($gallery)): ?>
		<div class="container">
			<div class="row gallery-title">
				<h1>Dossier <span class="dorado">fotográfico</span></h1>

			<?php if(!$postevento_video): ?>
	
				<?php if(is_single(1636)): //post evento financiacion pyme madrileña 2018?>
				<p>
					Estos son algunos de los buenos momentos que disfrutamos a lo largo de la jornada
				</p>
				<?php else: ?>
				<p>
					Estos son algunos de los buenos momentos que disfrutamos a lo largo de las jornadas que tuvieron lugar en La Neurona. ¡Te esperamos el año que viene con más novedades y nuevos ponentes! 
				</p>
				<?php endif; ?>	

			<?php endif; ?>	
			</div>
			<div class="row gallery_container">
				
					 <?php //echo $gallery  ?>

				<?php foreach ($gallery as $img): ?>

				<div class="col-xs-3 gallery-item">
					<a class="gallery-informe" rel="gallery" href="<?php echo $img['url'] ?>" data-fancybox>
						<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['title'] ?>" class="captura-small">
					</a>
				</div>

				<?php endforeach; ?>
				
			</div>
		</div>
	<?php endif; ?>
	</div>
<?php endif; ?>