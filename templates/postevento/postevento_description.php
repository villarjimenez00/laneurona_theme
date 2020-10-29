<?php $perfil = wp_get_post_terms($post->ID, 'perfil', array("fields" => "slugs")); ?>
<div class="container-fluid">
	<div class="container description-container row-padding">
		

		<div class="row title-row">
			<h1>Post-evento</h1>
			
			<div class="sep-dorado-small" style="margin: 1em auto;"></div>
		</div>

		<div class="row" style="margin-top: 2em;">
			<div class="col-sm-12 col-md-8 description-text">			
				<p>
					<?php the_field('descripcion_postevento') ?>
				</p>
			</div>


			<div class="col-sm-12 col-md-4 button-box">

				<?php if($_SESSION ['u']&&$_SESSION['u']=='asistente'): ?>
					<a class="btn-postevento" href="http://gestion.interbanservices.com/frontend/login">DESCARGAR PONENCIAS</a>
				<?php endif; ?>					
				<a class="btn-postevento" href="<?php the_field('url_agenda_relacionada') ?>">DATOS EVENTO</a>
				
				<?php if(is_single(1937)): ?>
					<?php //post evento especifico ?>
				<a class="btn-postevento" href="http://summits.laneurona.com/">CONTENIDO RELACIONADO</a>
				<?php else: ?>
					<a class="btn-postevento" href="https://laneurona.com/perfil/<?php echo strtolower($perfil[0]) ?>">CONTENIDO RELACIONADO</a>
				<?php endif; ?>	
			</div>
		</div>

	</div><!-- /.container -->
</div><!-- /.container-fluid -->