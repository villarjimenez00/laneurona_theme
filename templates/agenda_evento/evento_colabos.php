<?php 
//settings
$id_evento = get_field('id_evento');
//regogiendo patros
$colabos = neu_evento_colaboradores($id_evento['value']);
?>
<?php if( $colabos && !empty($colabos) ): ?>
	<div class="container-fluid colabos-content no-print">
		<div class="container">
			<div class="titulo-colabos">
				<h2 class="">Colaboradores</h2>
			</div>
			
			<div class="row">
				
			<?php foreach($colabos as $c): ?>

				<div class="col-lg-2 col-md-3 col-xs-4">

					<div class="patro-box">
					
					<a href=" <?php echo $c->url_patro ?>" target="_blank">
						<img class="img-responsive" src="<?php echo $c->img_patro ?>" alt="<?php echo $c->nombre_patro ?>">
					</a>

					</div>
				</div>


			<?php endforeach; ?>



			</div>
		</div><!-- /.container -->
	</div>	<!-- /.ponentes-content /.container-fluid -->
<?php endif; ?>