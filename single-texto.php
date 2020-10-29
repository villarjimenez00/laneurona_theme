<?php get_header() ?>

<div class="container" style="margin-top: 150px;">	
		<div class="row">

		  <?php get_template_part('templates/texto/main-text_template') ?>
		  <?php get_template_part('templates/texto/textpost-aside_template') ?>

		</div><!-- fin row -->
</div><!-- fin container -->

<?php get_template_part('templates/related-content') ?>

<div class="container-fluid">
	<?php get_template_part('templates/sliders/contenido_relacionado_slider_template') ?>
	<?php //get_template_part('templates/sliders/ideas-slider_template') ?>
	<?php //get_template_part('templates/sliders/impulsos-slider_template') ?>
	<?php //get_template_part('templates/sliders/respuestas-slider_template') ?>
	<?php //get_template_part('templates/sliders/aprendizaje-slider_template') ?>
	<?php //get_template_part('templates/sliders/analisis-slider_template') ?>		
</div>

<?php get_footer() ?>