<?php 
//settings
//evento adnpymes madrid 18
//$patros = neu_evento_patrocinadores('285');
//eventos adnpymes
$patros = neu_patros_tipo_evento(1);

?>
<div class="container-fluid" style="background-color: #f7f7f7;padding: 1.5em 0em; border-top: 1px solid rgba(0,0,0,.4); border-bottom: 1px solid rgba(0,0,0,.4)">
	<div class="container">
		<div class="row">
			<div class="col-xs-12" style="margin-top: 2.5em">
				<p style="color: #666666;text-align: justify; font-size: 1.5em"><strong>La Neurona</strong> es un proyecto de <strong>Interban Network</strong>, una empresa <strong>con más de 20 años</strong> de <strong>experiencia en entornos B2B, organización de eventos y generación de contenidos</strong>, con una trayectoria avalada por un gran número de empresas que confian en nosotros para alcanzar el éxito: </p>
			</div>
		</div> <!-- ./row -->


		<!-- logos row -->
		<div class="row patro-slider" style="margin: 1.5em 0em;">
			<?php foreach ($patros as $patro) : ?>		
					<div class="col-lg-2 col-md-3 col-xs-6 slide">
						<div class="patro-box">
							<a href=" <?php echo $patro->url_patro ?>" target="_blank">	
								<img class="img-responsive" src="<?php echo $patro->img_patro ?>" alt="<?php echo $patro->nombre_patro ?>">
							</a>						
						</div>
					</div>
			<?php endforeach; ?>			
		</div> <!-- /.row -->
	

			
	</div> <!-- ./container -->
</div> <!-- /.container-fluid -->


<script>
	//eliminar clase de bootstrap y darle un width fijo a  la caja del patro
	/*jQuery(document).ready(function(){
		 jQuery('.patro-slider').bxSlider({

            infiniteLoop: true,
            hideControlOnEnd: true,
            //slideWidth: 450,
            minSlides: 1,
            maxSlides: 20,
            moveSlides: 1,
            pager: false,

            auto: true,
            speed: 500,            
            pause: 500,

            
            autoStart: true;

            slideMargin: 5,
            responsive: true,
            touchEnabled:true
        });
	});*/
</script>