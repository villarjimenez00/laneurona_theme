<?php 
//settings
//recogemos los datos del evento
$id_evento = get_field('id_evento');
$evento_data = neu_evento_data($id_evento['value']);
?>
<!--Page Content -->
<div class="container-fluid bg-head" style="background-image: url('<?php the_field('imagen_cabecera_agenda') ?>');">

	<div class="carousel-inner row">


		<div class="container head-content">	

			<?php if(is_single(809)): ?>

			<img src="https://laneurona.com/wp-content/themes/la_neurona_20/img/organizado-elkargi-agenda.png" class="img-responsive" alt="finanzas" style="max-width: 350px !important; margin-top: -1.5em; margin-bottom: 2em;">
			<?php endif; ?>	

			<h2><?php echo $evento_data->nombre_hotel ?></h2>
			<h1 class="agenda-title"><?php the_field('titulo_cabecera') ?></h1>
			<h1 class="agenda-subtitle"><?php the_field('subtitulo_cabecera') ?></h1>

	
		</div><!-- fin container item -->


	</div> <!-- fin	carousel-inner -->


</div><!-- /container-fluid -->


