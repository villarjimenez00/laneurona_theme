<?php 
$id_evento = get_field('id_evento');

$evento_data = neu_evento_data($id_evento['value']);
$cat = $evento_data->id_categoria;
$agenda_generica = neu_agenda_generica($cat);
?>
<div class="container" style="margin-top: .5em">
	<div class="row">
		<div class="col-xs-12 agenda_evento">

		<h2>Agenda</h2>


	<?php $i=0; //indicador agenda de tarde ?>
	<?php foreach( $agenda_generica as $agenda ): ?>

		<?php 
			//para gestionar si es agenda de tarde
			//si es posterior a las 15h añade uno al contador
			if($agenda->hora_inicio > '15:00:00'){
				$i++;	
			}	

		?>

		<?php if( $agenda->hora_inicio == $agenda->hora_fin ): //titulo de bloque?>
			<div class="row row-agenda">
				<div class="col-xs-12 titulo-bloque"><p><?php echo $agenda->titulo_ponencia ?></p></div>
			</div>	


		<?php else: ?>


			<div class="row row-agenda" style="border-bottom: 1px dotted #cccccc; 	padding-bottom: 1em;">

			
			
				<div class="col-sm-12 col-md-2">
					<h2 class="dorado agenda-time"><?php echo substr($agenda->hora_inicio, 0, -3) ?>-<?php echo substr($agenda->hora_fin, 0, -3) ?></h2>
				</div>

				<div class="col-sm-12 col-md-10 data">
					<h2 class="nombre-bloque"><?php echo $agenda->titulo_ponencia ?></h2>
					<h3 class="descrip-bloque"><?php echo $agenda->descripcion ?></h3>

					<?php
					//recogemos ponentes según agenda
					//$ponentes = neu_ponentes_agenda($agenda->id_agenda); 
					?>
					<?php //foreach ($ponentes as $p): ?>

						<!-- <p class="ponentes-bloque"><strong><?php echo $p->nombre_ponente ?> <?php echo $p->apellidos_ponente ?>.</strong> <?php echo $p->cargo_ponente ?>. <strong><?php echo $p->empresa_ponente ?></strong> <?php echo $p->cargo2_ponente ?>. <strong><?php echo $p->empresa2_ponente ?></strong></p> -->
					
					<?php //endforeach; ?>
					
				</div>

				
			</div>

		<?php endif ?>	

		



	<?php endforeach; ?>



		</div>
	</div><!-- /.row -->



	<div class="row agenda_botones">
		<div class="col-sm-12 col-md-6">
			<a href="<?php echo $evento_data->link_formulario ?>" class="btn_inscripcion track"><span class="button-icon" aria-hidden="true"></span><span>inscribirse gratis</span></a>
		</div>
		<div class="col-sm-12 col-md-6">

		<script>
		var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 1;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = 'https://laneurona.com/wp-content/themes/la_neurona_20/css/printpdf.css';var pfBtVersion='2';(function(){var js,pf;pf=document.createElement('script');pf.type='text/javascript';pf.src='//cdn.printfriendly.com/printfriendly.js';document.getElementsByTagName('head')[0].appendChild(pf)})();
		</script>

			<a href="" class="btn_agenda printfriendly" href="https://www.printfriendly.com" onclick="window.print();return false;" title="Printer Friendly and PDF"><span class="button-icon" aria-hidden="true"></span><span>imprimir agenda</span>


			</a>
	
	

		</div>

	</div>
</div>