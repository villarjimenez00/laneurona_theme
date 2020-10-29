<?php $perfil = wp_get_post_terms($post->ID, 'perfil', array("fields" => "names")); ?>
<div class="container-fluid">
	<div class="container description-container row-padding">
		

		<div class="row title-row">
			<h1>Post-evento</h1>
			
			<div class="sep-dorado-small" style="margin: 1em auto;"></div>
		</div>

		<div class="row" style="margin-top: 2em;">
				<div class="col-sm-12 col-md-6">

					<div class="col-sm-12 description-text">			
						<p style="margin-top: 1.5em;">
							<?php the_field('descripcion_postevento') ?>
						</p>
					</div>

					<div class="col-sm-12">

					<?php if($_SESSION ['u'] && $_SESSION['u']=='asistente'): ?>
					

						<div class="col-md-12">
							<?php //patro BMW 2018 ?>
							<?php if(is_single(1339)): ?>
								<div class="patro-box" style="width: 75%;margin: auto">
									<p><span style="font-size: 1.2em">Cortesía de: </span><img src="<?php bloginfo('template_url') ?>/img/bmw-crm.png" alt="bmw" style="float: right;margin-top: -19px; width: 50px;"></p>
								</div>
							<?php endif; ?>	

							<a class="btn-postevento-summit" href="http://gestion.interbanservices.com/frontend/login?p=bmw">DESCARGAR PONENCIAS</a>		
						
						</div>

						<?php if(is_single(1339)): ?>
							<div class="col-md-12"><div style="border-top: 1px dashed #cccccc;width: 75%;margin: .2em auto 1em"></div></div>
						<?php endif; ?>	
						
						<div class="col-md-12">
							<a class="btn-postevento-summit" href="<?php the_field('catalogo_expositores') ?>">CATÁLOGO EXPOSITORES</a>
						</div>

						<div class="col-md-12">
							<a class="btn-postevento-summit" href="<?php the_field('url_agenda_relacionada') ?>">DATOS EVENTO</a>
						</div>
						
						<div class="col-md-12">
							<a class="btn-postevento-summit" href="https://laneurona.com/perfil/<?php echo strtolower($perfil[0]) ?>">CONTENIDO RELACIONADO</a>						
						</div>	
											
					<?php else: ?>	
						
						<div class="col-md-12">
							<a class="btn-postevento-summit" href="<?php the_field('catalogo_expositores') ?>">CATÁLOGO EXPOSITORES</a>
						</div>

						<div class="col-md-12">
							<a class="btn-postevento-summit" href="<?php the_field('url_agenda_relacionada') ?>">DATOS EVENTO</a>
						</div>

						<div class="col-md-12">
							<a class="btn-postevento-summit" href="https://laneurona.com/perfil/<?php echo strtolower($perfil[0]) ?>">CONTENIDO RELACIONADO</a>
						</div>

			
					<?php endif; ?>

					</div>

				</div>
			
			<?php //if($postevento_video && !empty($postevento_video)): ?>	


			
				<div class="col-sm-12 col-md-6">
				<h1 style=" margin-bottom: .7em;">Video <span class="dorado">resumen</span></h1>

					<?php the_field('video_postevento') ?>								
				</div>


			<?php //endif; ?>			

		</div>

	</div><!-- /.container -->
</div><!-- /.container-fluid -->


