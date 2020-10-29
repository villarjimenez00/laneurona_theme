<?php get_header() ?>
<?php setlocale (LC_TIME, "es_ES"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

	<?php //agendas summit con video en la cabecera ?>
	<?php if( is_single(9993229) || is_single(9993232) || is_single(9993225) || is_single(9995266) || is_single(9995264) || is_single(9995263) || is_single(9995265) || is_single(9995260) ): ?>
		<?php get_template_part('templates/agenda_evento/video_agenda') ?>
	<?php else: ?>
		<?php get_template_part('templates/agenda_evento/evento_head') ?>
	<?php endif; ?>	

	<?php get_template_part('templates/agenda_evento/evento_data_maquetacion'); ?>
	<?php 

		//comprobamos si hay agenda del evento
		$id_evento = get_field('id_evento');
		$agendas = neu_evento_agenda($id_evento['value']);

		
		if( $agendas && !empty($agendas)){

			if(is_single(3216)){
				get_template_part('templates/agenda_evento/evento_agenda-dinamica-bilbao-19');	
			}else{
				get_template_part('templates/agenda_evento/evento_agenda-dinamica');	
			}
			
		}else{
			
			//cargamos el template de agenda generica
			//recoge datos dentro del template
			get_template_part('templates/agenda_evento/evento_agenda-generica');
		}

	?>
	
		<?php get_template_part('templates/agenda_evento/evento_ponentes') ?>
		
		<?php get_template_part('templates/agenda_evento/evento_ventajas') ?>

		<?php if(is_single(5265)||is_single(3232) ||is_single(3229) ||is_single(3225) ||is_single(5266) ||is_single(5264) ||is_single(5263) ||is_single(5265) ||is_single(5260) ||is_single(3054) ): ?>
			<?php get_template_part('templates/agenda_evento/evento_custom_patros_summit_madrid') ?>
		<?php elseif(is_single(3031)):?>
			<?php get_template_part('templates/agenda_evento/evento_custom_patros_adnpymes_albacete') ?>
		<?php endif; ?>			

		<?php if(is_single(3216)): ?>
			<?php get_template_part('templates/agenda_evento/evento_custom_patros') ?>
		<?php endif; ?>			
		<?php get_template_part('templates/agenda_evento/evento_patros') ?>
		<?php if(is_single(3037)): ?>
			<?php get_template_part('templates/agenda_evento/evento_custom_patros_adn') ?>
		<?php endif; ?>	
		<?php get_template_part('templates/agenda_evento/evento_mediapartner') ?>
		<?php get_template_part('templates/agenda_evento/evento_colabos') ?>




<?php endwhile; endif; ?>
<?php get_footer() ?>