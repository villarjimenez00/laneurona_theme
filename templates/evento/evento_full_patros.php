<?php 
//settings

//regogiendo patros segun tipo de evento
$patros = neu_patros_tipo_evento(5);

?>


<div class="container-fluid patros-content">
	<div class="container">
		<div class="titulo-patros">
			<h1 style="font-size: 2em !important">Sponsors</h1>
		</div>
		
		<div class="row">
			

		<?php foreach($patros as $patro): ?>

			<div class="col-lg-3 col-md-6 col-xs-6">
				<div class="patro-box">
					<a href=" <?php echo $patro->url_patro ?>" target="_blank">
						<img class="img-responsive" src="<?php echo $patro->img_patro ?>" alt="<?php echo $patro->nombre_patro ?>">		
					</a>
	
				</div>
			</div>

		<?php endforeach; ?>

		</div>
	</div><!-- /.container -->
</div>	<!-- /.ponentes-content/.container-fluid -->