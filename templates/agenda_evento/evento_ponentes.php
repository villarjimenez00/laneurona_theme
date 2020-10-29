<?php 
//settings
$id_evento = get_field('id_evento');

//regogiendo ponentes
$ponentes = neu_evento_ponentes($id_evento['value']);
?>
<?php if( $ponentes && !empty($ponentes) ): ?>

	<div class="container-fluid ponentes-content tapiz no-print">
		<div class="container">
			<h1 class="text-center">Ponentes y Expertos</h1>
			<p class="text-center">Estos son algunos de los profesionales y expertos con los que podrás conectar y compartir conocimientos</p>
			<div class="row">
				

			<?php foreach($ponentes as $p): ?>

				<?php 
					//setting foto ponente
					$img = 	$p->foto_ponente;
					//si no tiene foto ponemos una generica dependiendo del genero	
					if($img == ''){
						if($p->sexo_ponente==0){
							$img = 'http://filesiniciativapymes.interbanservices.com/images/ponentes/generic-man.png';
						}else{
							$img = 'http://filesiniciativapymes.interbanservices.com/images/ponentes/generic-woman.png';
						}
					}
				?>

				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="ponente-box">
						<div class="ponente-img">
							<img class="img-responsive" src="<?php echo $img ?>" alt="<?php echo $p->nombre_ponente ?><?php echo $p->apellidos_ponente ?>">
						</div>
						<div class="ponente-data">
							<h3><?php echo $p->nombre_ponente ?> <?php echo $p->apellidos_ponente ?></h3>
							<h4 class="dorado"><?php echo $p->empresa_ponente ?></h4>
							<p><?php echo $p->cargo_ponente ?></p>
						</div>
					</div>
				</div>

			<?php endforeach; ?>


			</div>
		</div><!-- /.container -->
	</div>	<!-- /.ponentes-content/.container-fluid -->
<?php endif; ?>