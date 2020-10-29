<?php 
//file settings
$file=get_field('pdf_prensa')
?>
<div class="container-fluid row-padding">
	<div class="container notaprensa-container">
		<div class="row">
			<h1>Nota de <span class="dorado">prensa</span></h1>
			<div class="col-xs-12 notaprensa">
				
					<?php the_field('nota_de_prensa') ?>
				
			</div>
		</div>
		<div class="row text-ceter">
			<a href="<?php echo $file['url'] ?>" class="btn-notaprensa"><strong>DESCARGAR</strong> NOTA DE PRENSA COMPLETA (PDF)</a>
		</div>

	</div>
</div>