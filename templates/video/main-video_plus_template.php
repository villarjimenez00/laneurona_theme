<!-- Page Content -->
<?php if (have_posts()) : while (have_posts()) : the_post() ;?>
<?php 
//setings img
$img = get_field('imagen_portada_video');
$img_final = 'https://laneurona.com/wp-content/themes/la_neurona_20/img/frame-final-cyc.jpg' ;
?>

<div class="container-fluid videobg">

	<div class="destacado-container video-plus-container" style="background-image: url( '<?php bloginfo('template_url') ?>/img/destacados-bg.png' );">


		<!-- imagen video  -->
		<div class="container" style="margin-top: 83px;">
			<div class="videobox" style="position: relative;">

					
				<a data-fancybox class="playVideo playContent playButton" href="#myvideo"><img src="<?php bloginfo('template_url') ?>/img/play-off.png" alt=""></a><img src="<?php echo $img['url'] ?>" alt="" class="img-responsive">

			</div>
		</div>
		<!-- fin imagen video -->


		<?php if(!is_single(4377)): ?>

			<?php get_template_part('templates/video/frame-final'); ?>

		<?php else: ?>
		
			<?php get_template_part('templates/video/frame-final-versia'); ?>

		<?php endif; ?>	
		
	</div>	
</div><!-- /container-fluid -->


	<!-- contenido fancybox -->
	<div class="video_slide" style="display: none; overflow: hidden; position: relative;" id="myvideo">

		<!-- etiqueta info -->

		<div class="label-container" style="position: absolute; top: 12px; right: 20px;display: none; padding: .4em;">

			<a href="<?php the_field('url_destino_etiqueta') ?>?b=verSoluciones" class="label_enlace col-xs-12" style="background-color: rgba(0,0,0,.1);" target="_blank">
				<div style="" class="label" style="line-height: 1.2">
					<!-- flecha cyc -->
					<!-- <span class="label-arrow" style="display:none;">
						<img src="https://laneurona.com/wp-content/themes/la_neurona_20/img/red-arrow.png" alt="" style="height: 30px;padding-bottom: .5em">
					</span> -->
					<!-- fin flecha cyc -->
					<span class="label-text" style="display:none;font-weight:100;font-size: 2em; margin-top: -.5em; cursor:pointer; padding: 10px"><?php the_field('texto_etiqueta') ?></span>
					<span class="fa fa-info-circle fa-3x info-icon" style=""></span>
				
				</div>
			</a>
		</div>

		<!-- fin etiqueta info -->
		
		<div id="vimeo_player" data-vimeo-url="<?php the_field('video_plus') ?>" style="width: 100%; height: 100%"></div>

<!-- 		<iframe id="vimeo_player" src="<?php the_field('video_plus') ?>" width="100%" height="100%" frameborder="0"></iframe> -->

	</div>
	<!-- fin contenido fancybox -->
<?php endwhile; endif; ?>