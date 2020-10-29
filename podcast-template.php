<?php 
/**
 * Template Name: Podcast Page
 *
 */
?>
<?php get_header(); ?>
<?php 

	if( is_page('podcast') ){
		
		$titulo_pag = 'Podcast';
		
		$args = array(
			'post_type' => array('postevento'), //caulquier post_type
			'posts_per_page' => $ppp, //devuelve todos los post
			'paged'=>$paged,
		);
	}	

?>


<?php get_template_part('templates/content-type/textos-grid') ?>
<?php //get_template_part('templates/sliders/destacado-slider_template') ?>

<!-- <div class="container">

	<?php //get_template_part('templates/sliders/ideas-slider_template') ?>	
	<?php //get_template_part('templates/sliders/impulsos-slider_template') ?>	
	<?php //get_template_part('templates/sliders/respuestas-slider_template') ?>	
	<?php //get_template_part('templates/sliders/aprendizaje-slider_template') ?>	
	<?php //get_template_part('templates/sliders/analisis-slider_template') ?>	
</div> -->

<?php get_footer(); ?>