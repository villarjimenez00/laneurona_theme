<?php 
$id_evento = get_field('id_evento');
$evento_data = neu_evento_data($id_evento['value']);
$agendas = neu_evento_agenda($id_evento['value']);
?>
<div class="container" style="margin-top: .5em">
	<div class="row">
		<div class="col-xs-12 agenda_evento">


		<h2>Agenda</h2>

			
	<?php $i=0; //indicador agenda de tarde ?>

	<?php foreach( $agendas as $agenda ): ?>
		
		<?php 
			//para gestionar si es agenda de tarde
			//si es posterior a las 15h añade uno al contador
			if($agenda->hora_inicio > '15:00:00'){
				$i++;	
			}	

		?>

	<?php if($i==0): ?>
		<?php if( $agenda->hora_inicio == $agenda->hora_fin ): //titulo de bloque?>
			<div class="row row-agenda">
				<div class="col-xs-12 titulo-bloque"><p><?php echo $agenda->titulo_ponencia ?></p></div>
			</div>	


		<?php else: ?>


			<div class="row row-agenda" style="border-bottom: 1px dotted #cccccc; 	padding-bottom: 1em;">

				<?php if($agenda->id_agenda==2341): ?>
				<?php //ponencia patrocinada ANDBILBAO ?>
					<div class="offset-md-2 col-md-10 col-sm-12 patro-label" style="margin-bottom: -1em;margin-bottom: -1em; margin-top: .5em;">
						<span style="font-size: 1.3em; color: #666666;">Ponencia cortesía de: </span><img src="<?php bloginfo('template_url') ?>/img/yoigo-crm.png" alt="yoigo" style="width: 130px;" class="">
					</div>

				<?php endif; ?>	

			
				<div class="col-sm-12 col-md-2">
					<h2 class="dorado agenda-time"><?php echo substr($agenda->hora_inicio, 0, -3) ?>-<?php echo substr($agenda->hora_fin, 0, -3) ?></h2>
				</div>

				<div class="col-sm-12 col-md-10 data">
					<h2 class="nombre-bloque"><?php echo $agenda->titulo_ponencia ?></h2>
					<h3 class="descrip-bloque"><?php echo $agenda->descripcion ?></h3>

					<?php
					//recogemos ponentes según agenda
					$ponentes = neu_ponentes_agenda($agenda->id_agenda); 
					?>
					<?php foreach ($ponentes as $p): ?>

						<p class="ponentes-bloque">
							<strong>
								<?php echo isset( $p->nombre_ponente )&&$p->nombre_ponente!='' ?  $p->nombre_ponente :'' ?>
								<?php echo isset( $p->apellidos_ponente) ?  $p->apellidos_ponente.'. ' : '' ?>
					
							</strong>
							<?php echo isset($p->cargo_ponente)&&$p->cargo_ponente!='' ? $p->cargo_ponente.'. ' : '' ?>
							<strong>
								<?php echo isset($p->empresa_ponente)&&$p->empresa_ponente!='' ? $p->empresa_ponente : '' ?>
							</strong>
							<?php echo isset($p->cargo2_ponente)&&$p->cargo2_ponente!='' ? '. '.$p->cargo2_ponente : '' ?>
							<strong>
								<?php echo isset($p->empresa2_ponente)&&$p->empresa2_ponente!='' ? $p->empresa2_ponente : '' ?>
							</strong>
							<?php //settings twitter ?>
							<?php $twitter=null;?>
							<?php if ($p->url_twitter): ?>
								<?php $postwitter=strpos($p->url_twitter, "twitter.com/"); ?>
								<?php $twitter= substr($p->url_twitter,$postwitter+12); ?>
								<span><a class="dorado twitter" href="<?php echo isset($p->url_twitter) ? $p->url_twitter : '#' ?>"><?php echo isset($p->url_twitter)?'@'.$twitter : '' ?></a></span>
							<?php endif; ?>

						</p>
					
					<?php endforeach; ?>
					
				</div>

				
			</div> <!-- fin .row-agenda -->

		<?php endif ?>
	<?php endif; ?>


	<?php endforeach; ?>



		</div>
	</div><!-- /.row -->



	<div class="row agenda_botones">
		<div class="col-sm-12 col-md-6">
			<a href="<?php echo $evento_data->link_formulario ?>" class="btn_inscripcion track"><span class="button-icon" aria-hidden="true"></span><span>inscribirse gratis</span></a>
		</div>
		<!-- <div class="col-sm-12 col-md-6">
		
		<script>
		var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 1;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = 'https://laneurona.com/wp-content/themes/la_neurona_20/css/printpdf.css';var pfBtVersion='2';(function(){var js,pf;pf=document.createElement('script');pf.type='text/javascript';pf.src='//cdn.printfriendly.com/printfriendly.js';document.getElementsByTagName('head')[0].appendChild(pf)})();
		</script>
		
			<a href="" class="btn_agenda printfriendly" href="https://www.printfriendly.com" onclick="window.print();return false;" title="Printer Friendly and PDF"><span class="button-icon" aria-hidden="true"></span><span>imprimir agenda</span>
		
		
			</a>
			
			
		
		</div> -->

	</div>
</div>