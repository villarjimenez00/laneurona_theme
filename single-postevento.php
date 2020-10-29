<?php get_header() ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
<?php  ?>

<?php 	

if( is_single(4891) ){
	//postevento especial DES
	get_template_part('templates/postevento/des/postevento-des-head');
	get_template_part('templates/postevento/des/postevento-des-texto-1');
	get_template_part('templates/postevento/des/postevento-des-mosaico-img');
	get_template_part('templates/postevento/des/postevento-des-texto-2');
	get_template_part('templates/postevento/des/postevento-des-mosaico-video');
	get_template_part('templates/postevento/des/postevento-des-texto-3');
	get_template_part('templates/postevento/des/postevento-des-testimonio');		
	get_template_part('templates/postevento/des/postevento-des-texto-video');
	get_template_part('templates/postevento/des/postevento-des-mosaico-img-2');
	get_template_part('templates/postevento/des/postevento-des-testimonio-group');	
	get_template_part('templates/postevento/des/postevento-des-mosaico-img-3');

}elseif(is_single(5205)){
	//postevento especial Open expo
	get_template_part('templates/postevento/open/postevento-open-head');
	get_template_part('templates/postevento/open/postevento-open-texto-1');
	get_template_part('templates/postevento/open/postevento-open-mosaico-img');
	get_template_part('templates/postevento/open/postevento-open-texto-2');
	get_template_part('templates/postevento/open/postevento-open-mosaico-video');
	get_template_part('templates/postevento/open/postevento-open-texto-3');
	get_template_part('templates/postevento/open/postevento-open-testimonio');		
	get_template_part('templates/postevento/open/postevento-open-texto-video');
	get_template_part('templates/postevento/open/postevento-open-mosaico-img-2');
	get_template_part('templates/postevento/open/postevento-open-testimonio-group');	
	get_template_part('templates/postevento/open/postevento-open-mosaico-img-3');
}else{


	get_template_part('templates/postevento/postevento_head');

		//si es un evento summit cargamos su vista
	if(  is_single(3871) || is_single(1469) || is_single(1977) || is_single(4594) || is_single(5362) || is_single(5991) ){

		get_template_part('templates/postevento/postevento_description_summit');

	}else{

		get_template_part('templates/postevento/postevento_description');

	}


	//si es un evento summit cargamos su vista
	if(  is_single(1339) || is_single(1469) || is_single(1615) || is_single(1977)  || is_single(4594) || is_single(5991)){
		
		get_template_part('templates/postevento/postevento_audios_slider');
	
	}else{
	
		get_template_part('templates/postevento/postevento_audios');
	
	}



	get_template_part('templates/postevento/postevento_notaprensa') ;


	//si es un evento summit cargamos su vista
	if( is_single(3871) || is_single(1469) || is_single(1977)  || is_single(4594) || is_single(5991)){

		get_template_part('templates/postevento/postevento_galery_summit');
	
	}else{
	
		get_template_part('templates/postevento/postevento_galery');
	
	} 




	 get_template_part('templates/postevento/postevento_banner');
	 get_template_part('templates/agenda/evento_patros');
	 get_template_part('templates/agenda/evento_colabos'); 


}//fin custom postventos



?>
<div class="container-fluid" style="padding-top: 2.5em">

		<?php //get_template_part('templates/postevento/postevento_slider_template') ?>
		<?php get_template_part('templates/related-content') ?>
		<?php get_template_part('templates/sliders/contenido_relacionado_slider_template') ?>

</div>



<?php endwhile; endif; ?>
<?php get_footer() ?>