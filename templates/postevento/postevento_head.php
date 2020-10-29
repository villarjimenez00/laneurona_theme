<?php 
//img settings
$fondo_cabecera = get_field('imagen_cabecera_postevento');
$logo_evento = get_field('logo_cabecera');
?>
<!--Page Content -->
<?php if(!is_single(1636)): ?>
	<div class="container-fluid bg-postevent-head" style="background-image: url('<?php echo $fondo_cabecera ?>');">

<?php else: ?>
	<?php //post-evento desarrollo pyme // imagen con logos manual ?>
	<div class="container-fluid bg-postevent-head" style="background-image: url('<?php echo $fondo_cabecera ?>'); background-repeat: no-repeat !important ;background-position: center !important">

<?php endif; ?>	

	<div class="carousel-inner row">


		<div class="container event-head-content text-center">	

			<img src="<?php echo $logo_evento['url'] ?>" alt="<?php echo $logo_evento['title'] ?>" class="img-responsive">


			<h1 style=""><?php the_field('titulo_cabecera_postevento') ?></h1>
			
				<!-- 			<div class="btn-head">
					<div class="col-sm-12 col-md-6">
						<a href="http://gestion.interbanservices.com/frontend/login">DESCARGAR PONENCIAS</a>
					</div>
					<div class="col-sm-12 col-md-6">
						<a href="<?php //the_field('url_agenda_relacionada') ?>">DATOS DEL EVENTO</a>
					</div>
					
					
				</div> -->
	
		</div><!-- fin container item -->


	</div> <!-- fin	carousel-inner -->


</div><!-- /container-fluid -->