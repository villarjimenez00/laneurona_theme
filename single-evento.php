<?php get_header() ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

<?php 


//$url_destino = get_field('url_destino');



/*header("Location:http://erpcrmbi.com/");
exit;*/

//redirecciona a los subdominios del evento en el caso de que lo tenga
//

	/*if( is_single( 334 ) ){
		header('Location:https://adnpymes.laneurona.com/');
		exit;
	}
	if( is_single( 576 ) ){
		header('Location:https://summits.laneurona.com/');
		exit;
	}*/

?>
<?php //get_template_part('templates/evento/evento_full_head') ?>
<?php //get_template_part('templates/evento/evento_full_content') ?>

<?php //get_template_part('templates/evento/evento_full_patros') ?>
<?php //get_template_part('templates/evento/evento_full_colabos') ?>
<?php //get_template_part('templates/evento/evento_full_banner') ?>
<?php //get_template_part('templates/evento/evento_full_contact') ?>

<div class="container-fluid">
	<?php //get_template_part('templates/evento/evento_full_slider_template') ?>
</div>




<?php endwhile; endif; ?>
<?php get_footer() ?>