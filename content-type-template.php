<?php 
/**
 * Template Name: Content Type Page
 *
 */
?>
<?php get_header(); ?>
<?php if(is_page('podcast') ): ?>
	<?php get_template_part('templates/content-type/podcast-grid') ?>
<?php elseif(is_page('eventos')): ?>
	<?php get_template_part('templates/content-type/eventos-grid') ?>
<?php else: ?>	
	<?php get_template_part('templates/content-type/textos-grid') ?>	
<?php endif; ?>	


<?php //get_template_part('templates/sliders/destacado-slider_template') ?>

<!-- <div class="container">
	<?php //get_template_part('templates/sliders/ideas-slider_template') ?>	
	<?php //get_template_part('templates/sliders/impulsos-slider_template') ?>	
	<?php //get_template_part('templates/sliders/respuestas-slider_template') ?>	
	<?php //get_template_part('templates/sliders/aprendizaje-slider_template') ?>	
	<?php //get_template_part('templates/sliders/analisis-slider_template') ?>	
</div> -->

<?php get_footer(); ?>