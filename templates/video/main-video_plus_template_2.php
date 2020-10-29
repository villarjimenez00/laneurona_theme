<!-- Page Content -->
<?php if (have_posts()) : while (have_posts()) : the_post() ;?>
<?php 
//setings img
$img = get_field('imagen_portada_video');
$img_final = 'https://laneurona.com/wp-content/themes/la_neurona_20/img/frame-final-cyc.jpg' ;



//setting 
//sacamos la id del video a partir de la url

$vimeo_url = get_field('video_plus'); 

$longitud = strlen($vimeo_url) ;

$cut = strrpos($vimeo_url, '/');

$vimeo_id = substr($vimeo_url, $cut+1);

?>

<div class="container-fluid videobg">

	<div class="destacado-container video-plus-container" style="background-image: url( '<?php bloginfo('template_url') ?>/img/destacados-bg.png' );">


		<!-- imagen video  -->
		<div class="container" style="margin-top: 83px;">
			<div class="videobox" style="position: relative;">

					
				<a data-fancybox class="playVideo playContent playButton" href="#myvideo"><span style="display: none" class="play-play">play</span><img src="<?php bloginfo('template_url') ?>/img/play-off.png" alt=""></a><img src="<?php echo $img['url'] ?>" alt="" class="img-responsive">

			</div>
		</div>
		<!-- fin imagen video -->

		<!-- imagen final video -->
		<div class="container container-final" style="margin-top: 83px; display: none; ">
			<div class="videobox-final col-xs-12" style="background-image: url('<?php bloginfo('template_url') ?>/img/final.png'); background-size: 100% auto; padding: 0em 0em 1.5em 0em">
				
				<div class="col-xs-6">

					<h2 class="text-center title-left">Descubra un horizonte de oportunidades</h2>
					<div class="col-xs-12 text-center"><img class="logo_cyc img-responsive" src="<?php bloginfo('template_url') ?>/img/logo_cyc.png" alt=""></div>
					<div class="col-xs-12 text-center masinfo-box" style="">
						<a href="" class="masinfo">Más Información</a>
					</div>
					<div class="col-xs-12 volver_a_ver">
						<a data-fancybox href="#myvideo" class="playVideo playAgain">
							<span class="fa fa-undo"></span>
							<span>Volver a ver</span>
						</a>
					</div>
				
							

				</div>
				
				<div class="col-xs-6">
					
					<div class="col-xs-12 title-right">
						<h3 style="">Te recomendamos: </h3>

					</div>
					<div class="col-xs-12 text-center sugest">

						<a href="#"><img src="<?php bloginfo('template_url') ?>/img/sugerencia_1.png" alt="" class="img-responsive"></a>
						

					</div>
					<div class="col-xs-12 text-center sugest">
						<a href="#"><img src="<?php bloginfo('template_url') ?>/img/sugerencia_2.png" alt="" class="img-responsive"></a>
						

					</div>


				</div>			

w
			</div>
		</div>
		<!-- fin imagen final video -->	
	</div>	


</div><!-- /container-fluid -->


	<!-- contenido fancybox -->
	<div class="video_slide" style="display: none; overflow: hidden; position: relative;" id="myvideo">

		<!-- etiqueta info -->

		<div class="label-container" style="position: absolute; top: 12px; right: 20px;display: none; padding: .4em;">
			<a href="<?php the_field('url_destino_etiqueta') ?>" class="label_enlace col-xs-12" style="background-color: rgba(0,0,0,.1);">
				<div style="" class="label" style="line-height: 1.2">
					<span class="label-arrow" style="display:none;"><img src="https://laneurona.com/wp-content/themes/la_neurona_20/img/red-arrow.png" alt="" style="height: 30px;padding-bottom: .5em"></span>
					<span class="label-text" style="display:none;font-weight:100;font-size: 2em; margin-top: -.5em; cursor:pointer; padding: 10px"><?php the_field('texto_etiqueta') ?></span>
					<span class="fa fa-info-circle fa-3x info-icon" style=""></span>
				</div>
			</a>
		</div>

		<!-- fin etiqueta info -->

		<iframe id="vimeo_player" width="100%" height="100%" src="<?php the_field('video_plus') ?>"></iframe>

	</div>
	<!-- fin contenido fancybox -->
<?php endwhile; endif; ?>