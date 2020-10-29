<?php if( get_field('audio_1') || get_field('audio_2') || get_field('audio_3') ): ?>
	<div class="container-fluid tapiz">
		<div class="container">
			<div class="row audio-title">
				<h1 class="dorado">Audios</h1>
				
				<?php if(is_single(1636)): ?>
				<p>
					Entrevistamos a los expertos que asistieron al evento. Si te lo perdiste, hemos recopilado para ti su testimonio. Cada `podcast´ está disponible para escucharlo en línea, descargarlo y reproducirlo en el dispositivo que se deseéis ¡A qué estás esperando!
				</p>
				<?php else: ?>
				<p>
					Entrevistamos a los expertos que asistieron al evento de La Neurona ADN Pymes. Si te lo perdiste, hemos recopilado para ti su testimonio. Cada `podcast´ está disponible para  escucharlo en línea, descargarlo y reproducirlo en el dispositivo que se deseéis ¡A qué estás esperando! 
				</p>
				<?php endif; ?>	


			</div>
			<div class="row audios-container">
				<div class="col-sm-12 col-md-4">
					<?php the_field('audio_1') ?>
				</div>
				<div class="col-sm-12 col-md-4">
					<?php the_field('audio_2') ?>
				</div>
				<div class="col-sm-12 col-md-4">
					<?php the_field('audio_3') ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>