<?php 
$id_evento = get_field('id_evento');
$evento_data = neu_evento_data($id_evento['value']);
?>
<div class="container-fluid ventajas-content no-print">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<h3 style="font-size: 1.8em !important"><strong>Ventajas</strong> para todos los asistentes</h3>
				<a href="<?php echo $evento_data->link_formulario ?>" class="track">¡Quiero inscribirme!</a>
			</div>
			<div class="col-md-4 col-sm-12">
				<h3><span class="fa fa-files-o dorado"></span><strong>Documentaciones</strong></h3>
				<p>Descarga las presentaciones impartidas por los expertos y profesionales.</p>
				
			</div>
			<div class="col-md-4 col-sm-12">
				<h3><span class="fa fa-handshake-o dorado"></span><strong>Zona Networking</strong></h3>
				<p>Espacio destinado al intercambio de experiencias con otros asistentes, ponentes y patrocinadores.</p>
				
			</div>
			<div class="col-md-4 col-sm-12">
				<h3><span class="fa fa-coffee dorado"></span><strong>Invitación a Café</strong></h3>
				<p>Momentos de distensión con invitación a café para el fomento de relaciones.</p>
				
			</div>
			<div class="col-md-4 col-sm-12">
				<h3><span class="fa fa-gift dorado"></span><strong>Welcome Pack</strong></h3>
				<p>Entrega de una bolsa con información de actualidad y soluciones para las empresas.</p>
				
			</div>
			<div class="col-md-4 col-sm-12">
				<h3><span class="fa fa-bookmark-o dorado"></span><strong>Diploma</strong></h3>
				<p>¡Solicita tu diploma acreditativo de asistencia al evento y te lo enviamos a casa!</p>
				
			</div>
		</div>
	</div><!-- /.container -->
</div><!-- /.container-fluid -->