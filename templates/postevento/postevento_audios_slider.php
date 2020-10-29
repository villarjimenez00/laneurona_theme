<style>
	.bx-controls-direction{
		display: none !important;
	}
</style>
<?php if( get_field('audio_1') || get_field('audio_2') || get_field('audio_3') ): ?>
	<div class="container-fluid tapiz">
		<div class="container">
			<div class="row audio-title">
				<h1 class="dorado">Audios</h1>
				<p>
					Entrevistamos a los expertos que asistieron al evento de La Neurona. Si te lo perdiste, hemos recopilado para ti su testimonio. Cada `podcast´ está disponible para  escucharlo en línea, descargarlo y reproducirlo en el dispositivo que se deseéis ¡A qué estás esperando! 
				</p>
			</div>
			<div class="row audios-container">

				<div class="audio-slider">

					<div class="audio-slide">          
						<div class="">

							<div class="col-sm-12">
								<?php the_field('audio_1') ?>
							</div>

						</div><!-- fin .sin clase -->
					</div><!-- fin .audio-slide -->
				
					<div class="audio-slide">          
						<div class="">

							<div class="col-sm-12">
								<?php the_field('audio_2') ?>
							</div>

						</div><!-- fin .sin clase -->
					</div><!-- fin .audio-slide -->
				
					<div class="audio-slide">          
						<div class="">

							<div class="col-sm-12">
								<?php the_field('audio_3') ?>
							</div>

						</div><!-- fin .sin clase -->
					</div><!-- fin .audio-slide -->

					<?php if(the_field('audio_') !=''): ?>
						<div class="audio-slide">          
							<div class="">

								<div class="col-sm-12">
									<?php the_field('audio_1') ?>
								</div>

							</div><!-- fin .sin clase -->
						</div><!-- fin .audio-slide -->		
					<?php endif; ?>

					<?php if(the_field('audio_4') !=''): ?>
						<div class="audio-slide">          
							<div class="">

								<div class="col-sm-12">
									<?php the_field('audio_4') ?>
								</div>

							</div><!-- fin .sin clase -->
						</div><!-- fin .audio-slide -->		
					<?php endif; ?>

					<?php if(the_field('audio_5') !=''): ?>
						<div class="audio-slide">          
							<div class="">

								<div class="col-sm-12">
									<?php the_field('audio_5') ?>
								</div>

							</div><!-- fin .sin clase -->
						</div><!-- fin .audio-slide -->		
					<?php endif; ?>

					<?php if(the_field('audio_6') !=''): ?>
						<div class="audio-slide">          
							<div class="">

								<div class="col-sm-12">
									<?php the_field('audio_6') ?>
								</div>

							</div><!-- fin .sin clase -->
						</div><!-- fin .audio-slide -->		
					<?php endif; ?>

					<?php if(the_field('audio_7') !=''): ?>
						<div class="audio-slide">          
							<div class="">

								<div class="col-sm-12">
									<?php the_field('audio_7') ?>
								</div>

							</div><!-- fin .sin clase -->
						</div><!-- fin .audio-slide -->		
					<?php endif; ?>

					<?php if(the_field('audio_8') !=''): ?>
						<div class="audio-slide">          
							<div class="">

								<div class="col-sm-12">
									<?php the_field('audio_8') ?>
								</div>

							</div><!-- fin .sin clase -->
						</div><!-- fin .audio-slide -->		
					<?php endif; ?>	

					<?php if(the_field('audio_9') !=''): ?>
						<div class="audio-slide">          
							<div class="">

								<div class="col-sm-12">
									<?php the_field('audio_9') ?>
								</div>

							</div><!-- fin .sin clase -->
						</div><!-- fin .audio-slide -->		
					<?php endif; ?>	

					<?php if(the_field('audio_10') !=''): ?>
						<div class="audio-slide">          
							<div class="">

								<div class="col-sm-12">
									<?php the_field('audio_10') ?>
								</div>

							</div><!-- fin .sin clase -->
						</div><!-- fin .audio-slide -->		
					<?php endif; ?>	

					<?php if(the_field('audio_11') !=''): ?>
						<div class="audio-slide">          
							<div class="">

								<div class="col-sm-12">
									<?php the_field('audio_11') ?>
								</div>

							</div><!-- fin .sin clase -->
						</div><!-- fin .audio-slide -->		
					<?php endif; ?>																																			

													




				</div>

			</div>
		</div>
	</div>
<?php endif; ?>