<?php get_header() ?>
<?php get_template_part('templates/informe/informe-head_template') ?>
<div class="container">
<?php get_template_part('templates/informe/main-informe_template') ?>
<?php get_template_part('templates/informe/informpost-aside_template') ?>
</div>
<?php get_template_part('templates/related-content') ?>

<div class="container-fluid">
	<?php get_template_part('templates/sliders/ideas-slider_template') ?>
	<?php get_template_part('templates/sliders/impulsos-slider_template') ?>
	<?php get_template_part('templates/sliders/respuestas-slider_template') ?>
	<?php get_template_part('templates/sliders/aprendizaje-slider_template') ?>
	<?php get_template_part('templates/sliders/analisis-slider_template') ?>		
</div>

<?php get_footer() ?>