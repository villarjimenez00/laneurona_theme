<?php get_header() ?>


<?php get_template_part('templates/video/main-video_template') ?>
<?php get_template_part('templates/video/main-video-info_template') ?>

<?php get_template_part('templates/pagination_post_template') ?>

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