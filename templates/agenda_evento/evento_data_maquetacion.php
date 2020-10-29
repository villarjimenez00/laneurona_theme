<?php 

//settings
//recogemos los datos del evento
$id_evento = get_field('id_evento');
$evento_data = neu_evento_data($id_evento['value']);
?>
<div class="container-fluid tapiz no-print">
	<div class="container datos-evento">
		<div class="col-md-9 col-sm-12 descripcion-evento">
			<div class="descripcion-titulo">
				<h2><?php echo $evento_data->provincia ?>, <?php echo date_i18n('j F Y', strtotime($evento_data->fecha_evento) )  ?></h2>
			
			</div>
			<div class="descripcion-content">
				<?php the_excerpt() ?>
				<?php if(is_single(1458)): ?>
					<div class="media-partner" style="margin-top: 1.5em;">
						<span style="font-size: 1.3em; color: #747474;display: block;margin-bottom: .5em"><strong>Media Partner</strong></span>
						<img src="<?php bloginfo('template_url') ?>/img/logo-horizontal-positivo.png" alt="la_neurona" style="width: 37%;">
					</div>
				<?php endif; ?>
			</div>

			<nav class="evento-socialbox">
					<p><strong>Comparte </strong>este evento con otros directivos y profesionales en:</p>
				<ul>
					<li>
						<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo urlencode( the_title() ); ?>" target="_blank" onclick="window.open(this.href, 'mywin','left=20,top=20,width=600,height=500,toolbar=1,resizable=0'); return false;">

							<img src="<?php bloginfo('template_url') ?>/img/icon-twitter-color-off.png" alt="" data-imagen="twitter">
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
							<img src="<?php bloginfo('template_url') ?>/img/icon-facebook-color-off.png" alt="" data-imagen="facebook">
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo (get_the_excerpt() ? urlencode(get_the_excerpt()) : ''); ?>&source=LinkedIn">
							<img src="<?php bloginfo('template_url') ?>/img/icon-linkedin-color-off.png" alt="" data-imagen="linkedin">
						</a>
					</li>
					<li>

						<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>">
							<img src="<?php bloginfo('template_url') ?>/img/icon-google-color-off.png" alt="" data-imagen="google">
						</a>

					</li>
					<li>
						<a href="mailto:?subject=Creo que te interesará este contenido&body=<?php the_title() ?> <?php the_permalink() ?>">
							<img src="<?php bloginfo('template_url') ?>/img/icon-email-color-off.png" alt="" data-imagen="email">
						</a>
					</li>
				</ul>
			</nav>
			</nav>
			
			<div class="clearboth"></div>
			
			

		</div>
		<div class="col-md-3 col-sm-12 data-list">
			<div class="data-titulo">
				<h2>Datos Evento</h2>	
			</div>
			<ul>
				<li>
				
					<div class="col-xs-1">	<span class="data-evento-icon fa fa-thumb-tack dorado" aria-hidden="true"></span></div>
					<div class="col-xs-10"><span><?php echo $evento_data->provincia ?></span></div>

				</li>
				<li>
				
					<div class="col-xs-1"><span class="data-evento-icon fa fa-calendar dorado" aria-hidden="true"></span></div>
					
					<div class="col-xs-10"><span>  <?php echo date_i18n('j F Y', strtotime($evento_data->fecha_evento) )  ?></span></div>

				</li>
				

				<li>
				
					<div class="col-xs-1"><span class="data-evento-icon fa fa-hospital-o dorado" aria-hidden="true"></span></div>
					<div class="col-xs-10"><span><?php echo $evento_data->nombre_hotel ?></span></div>


				</li>
				
				<li>
					<div class="col-xs-1"><span class="data-evento-icon fa fa-road dorado" aria-hidden="true"></span></div>



						<div class="col-xs-10">
							<span><?php echo $evento_data->direccion ?></span>

						
						<?php if($evento_data->id_evento == '261'):  ?>
							<p style="padding-left: 2em">	
								<a class="gallery-informe" rel="gallery" href="<?php bloginfo('template_url') ?>/img/plano-ifema.jpg">Ver plano</a>
							</p>
						<?php else: ?>
							<p>	
								<a class="gallery-informe" rel="gallery" href="<?php echo $evento_data->url_googlemaps ?>">Ver mapa</a>
							</p>
						<?php endif; ?>	
						</div>
					</li>

				<li>
					
					<div class="col-xs-1"><span class="data-evento-icon fa fa-flag dorado" aria-hidden="true"></span></div>
					<div class="col-xs-10"><span>  <?php echo $evento_data->cpostal ?> <?php echo $evento_data->provincia_hotel ?></span></div>
				</li>
				<li>
					<div class="col-xs-1"><span class="data-evento-icon fa fa-clock-o dorado" aria-hidden="true"></span></div>
					<div class="col-xs-10"><span>  <?php echo $evento_data->aforo ?></span></div>
				</li>
				<li>
					<div class="col-xs-1"><span class="data-evento-icon fa fa-eur dorado" aria-hidden="true"></span></div>
					<div class="col-xs-10"><span>Inscripción gratuita</span></div>
				</li>
			</ul>


			<div class="col-xs-12">			<a href="<?php echo $evento_data->link_formulario ?>" class="track inscripcion" id="track">inscribirme gratis</a></div>
		</div>
	</div>
</div>
