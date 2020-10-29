<?php 
//settings
$id_evento = get_field('id_evento');

//regogiendo patros
$patros = neu_evento_patrocinadores($id_evento['value']);
?>
<?php if( $patros && !empty($patros) ): ?>
	<div class="container-fluid patros-content no-print" style="margin-bottom: 2em;">
		<div class="container">
			<div class="titulo-patros">
				<h1 style="font-size: 2em !important">Sponsors</h1>
			</div>
			
			<div class="row">
				

			<?php foreach($patros as $patro): ?>

				<?php if($patro->img_patro!=''&& strlen($patro->img_patro)>0 && $patro->nombre_patro != "Agencia para el Empleo" ): ?>
					<div class="col-lg-3 col-md-6 col-xs-6">
						<?php //FINANZAS BILBAO 2019 !!BORRAR!! ?>
						<?php if($patro->nombre_patro != "Elkargi" ): ?>	
						<div class="patro-box">
							<a href=" <?php echo $patro->url_patro ?>" target="_blank">	
								<img class="img-responsive" src="<?php echo $patro->img_patro ?>" alt="<?php echo $patro->nombre_patro ?>">
							</a>						
						</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>	

			<?php endforeach; ?>

			</div>
		</div><!-- /.container -->
	</div>	<!-- /.ponentes-content/.container-fluid -->
<?php endif; ?>