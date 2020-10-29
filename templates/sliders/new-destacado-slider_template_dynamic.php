<?php 
//settings

		$args = array(
			'post_type' => 'any', //caulquier post_type
			'posts_per_page' => 3, //devuelve todos los post

			'orderby'        => 'rand',

			'tax_query' => array( //datos de taxonomia
								  //inidicar aqui relacion entre grupos de datos
								  // AND | OR	
				array(
					'taxonomy' => 'contenido-destacado',
					'field'    => 'slug',
					'terms'    => 'slider-home-destacados',
				),
			),
		);

		$query = new WP_Query($args);	

?>
<?php if( $query->have_posts() ): ?>
<!-- Page Content --> 
<div class="container-fluid new-slider-destacado-container" style="padding: 0px !important;">
	
	<!-- new-slider-destacado -->
	<div class="new-slider-destacado" style="">


	<!-- comienza el bucle -->


		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php 
					//setting imagen
					$imagen_bg = get_field('big_img_slider_destacados');
					//setting para el tipo de post
					$url_destino = get_field('url_destino');
					$tiempo_lectura =get_field('tiempo_lectura');


				?>



		<!-- slide -->
		<div class="slide" >

			<div class="fixed" style=" ">
				<img src="<?php echo $imagen_bg['url'] ?>" alt="" class="img-responsive slider_bg" style="">				
			</div>

			<div class="row text-container">	
				<!-- col-lg-5 col-md-6 col-sm-12 -->
				<div class="col-xs-6" style="">
					
					<div class="row">

						<div class="" style="">
							<h1 style="color:<?php the_field('color_titulo') ?>"><?php the_title() ?></h1>
	
							<h3 style="color:<?php the_field('color_titulo') ?>"><?php the_field('subtitulo_destacado') ?></h3>	
						
						</div>

						<div class="row dest-button">
							<div class="col-xs-5" style="">
							
							<?php if(strlen($url_destino)>1 ): ?>
								
								<a href="<?php the_permalink() ?>" style="" class="big_play"><span class="fa fa-play" style="color: #666666; "></span><span style="padding-left: .5em;color: #666666; ">Reproducir</span></a>	
							
							<?php elseif (strlen($tiempo_lectura)>0 ): ?>

								<a href="<?php the_permalink() ?>" style="" class="big_play"><span class="fa fa-file" style="color: #666666; "></span><span style="padding-left: .5em;color: #666666; ">Ver Post</span></a>
							<?php else: ?>

								<a href="<?php the_permalink() ?>" style="" class="big_play"><span class="fa fa-play" style="color: #666666; "></span><span style="padding-left: .5em;color: #666666; ">Reproducir</span></a>	
							
							<?php endif; ?>

							</div>

						<?php if( get_field('imagen_patrocinador') ): ?>
							<?php $img_patro = get_field('imagen_patrocinador'); ?>	
							<div class="col-xs-7 patro-dest-box" style="margin-top: 1em" >
									
									<div class="col-xs-5">
										<span>Contenido <strong>ofrecido</strong> por:</span>	
									</div>
								<?php //var_dump($img_patro); ?>
									<div class="col-xs-7" style="margin-top: .5em">
										<img src="<?php echo $img_patro['url'] ?>" alt="" class="img-responsive" style="" >	
									</div>
									
							</div>	
						<?php endif; ?>

						</div>

					</div>
					
				</div> <!-- fin.text-container -->
			</div>


	
		</div> <!-- fin .slide -->
		<!-- fin slide -->
		<?php wp_reset_postdata(); ?>
		<?php endwhile; endif; ?>		

	<!-- ==================================================================-->

	</div> <!-- fin .new-slider-destacado -->	


	<!-- ==================================================================-->

</div><!-- /container-fluid-->

<?php endif; ?> <!-- ./if have_post() -->