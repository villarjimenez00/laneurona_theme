<?php 
//settings
$id_evento = get_field('id_evento');
//regogiendo patros
$colabos = neu_evento_colaboradores($id_evento['value']);
?>
	<div class="container-fluid colabos-content no-print">
		<div class="container">

			<div class="col-sm-12 col-md-6">
				<div class="titulo-colabos">
					<h2 class="" style="padding-bottom: .2em">Organiza</h2>
				</div>
				
				<div class="row">
					

					<div class="col-lg-6">

						<div class="patro-box">
						
						<a href=" <?php echo $c->url_patro ?>" target="_blank">
							<img class="img-responsive" src="<?php echo bloginfo('template_url') ?>/img/elkargi-sinslogan-crm.png" alt="<?php echo $c->nombre_patro ?>">
						</a>

						</div>
					</div>



				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="titulo-colabos">
					<h2 class="" style="padding-bottom: .2em">Promueve</h2>
				</div>
				
				<div class="row">
					

					<div class="col-lg-6">

						<div class="patro-box">
						
						<a href=" <?php echo $c->url_patro ?>" target="_blank">
							<img class="img-responsive" src="<?php echo bloginfo('template_url') ?>/img/la-neurona-crm.png" alt="<?php echo $c->nombre_patro ?>">
						</a>

						</div>
					</div>



				</div>				
			</div>


		</div><!-- /.container -->
	</div>	<!-- /.ponentes-content /.container-fluid -->