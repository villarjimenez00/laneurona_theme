<?php $args = neu_destacado_slider_args(); ?>
<?php $query = new WP_Query( $args ); ?>
<!-- background-image settings -->
<?php  

if(is_tax()){

	if( is_tax('perfil','finanzas') ){
		$bgdestacado = 'https://laneurona.com/wp-content/themes/la_neurona_20/img/slider-finanzas.jpg';
	}
	if( is_tax('perfil','ecommerce') ){
		$bgdestacado = 'https://laneurona.com/wp-content/themes/la_neurona_20/img/slider-ecommerce.jpg';
	}
	if( is_tax('perfil','marketing-ventas') ){
		$bgdestacado = 'https://laneurona.com/wp-content/themes/la_neurona_20/img/slider-marketing.jpg';
	}
	if( is_tax('perfil','personas') ){
		$bgdestacado = 'https://laneurona.com/wp-content/themes/la_neurona_20/img/slider-personas.jpg';
	}
	if( is_tax('perfil','pymes') ){
		$bgdestacado = 'https://laneurona.com/wp-content/themes/la_neurona_20/img/slider-pymes.jpg';
	}
	if( is_tax('perfil','retail') ){
		$bgdestacado = 'https://laneurona.com/wp-content/themes/la_neurona_20/img/slider-retail.jpg';
	}

}elseif(is_single()){

	$bgdestacado = 'https://laneurona.com/wp-content/themes/la_neurona_20/img/destacados-bg.png';

}else{
	
	$bgdestacado = 'https://laneurona.com/wp-content/themes/la_neurona_20/img/destacados-bg.png';
}
?>
<!-- Page Content --> 
<div class="container-fluid bgmargin" style="background-image: url('<?php echo $bgdestacado ?>'); background-position: center center; background-size: cover;">
	<div class="slider-destacado">

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<?php /*<!-- devuelve un objeto con los datos de la taxonomia que indiquemos -podemos acotar los campos que devuelve- --> 
	<!-- solo queremos mostrar el termino de la taxonomia -->	*/ ?>
	

	<?php $tax_term = wp_get_post_terms($post->ID, array('perfil','accion'), array("fields" => "names")); ?>
	<?php $accion_term = wp_get_post_terms($post->ID, array('accion'), array("fields" => "names")); ?>
	<!-- SLIDE CONTENIDO -->
	<?php //img settings
		$img_slider_destacados = get_field('img_slider_destacados');
	?>
		
	<!-- slide -->
		<div class="destacado-container slide">



			<div class="container" style="margin-top: 83px;">	
					<div class="destacadobox">
					
				
						<div class="row ">
							<div class="col-sm-12 col-md-12 col-lg-7 destacadoimgbox">
							<div class="tb">
							<a href="<?php (get_field('url_destino'))? the_field('url_destino'): the_permalink() ?>">
								<img src="<?php echo $img_slider_destacados['url'] ?>" alt="<?php echo $img_slider_destacados['title'] ?>" class="img-responsive">
								
							<?php if(get_field('duracion')): ?>
								<div class="playbox" style="display: block;">								
									<div class="time">
										<span class="fa fa-play" aria-hidden="true"> <?php the_field('duracion')?></span>
									</div>
								</div>
							<?php endif; ?>
							</a>
							</div>
							</div>


							<div class="col-sm-12 col-md-12 col-lg-5 destacadodatabox">
														
							<?php if($accion_term[0]==='Respuestas'): ?>

									<p class="categoria-destacado"><a class="nodecoration" href="#"><span class="dorado"><?php echo $accion_term[0] ?> </span></a><a class="nodecoration" href="#"><span style="font-weight: 300;">&bull; <?php the_field('canal') ?></span></a></p>
							<?php else: ?>

									<p class="categoria-destacado"><a class="nodecoration" href="#"><span class="dorado"><?php echo $tax_term[0] ?> </span></a><a class="nodecoration" href="#"><span style="font-weight: 300;">&bull; <?php echo $tax_term[1] ?></span></a></p>

							<?php endif; ?>	

									<a href="<?php (get_field('url_destino'))? the_field('url_destino'): the_permalink() ?>">
									<h1 class="titulo-destacado"><span><?php the_title() ?></span></h1>
									<!-- with the_excerpt() remove <p> -->
									<div class="extracto-destacado"><p><?php neu_excerpt(35) ?></p></div>
									
								</a>
							</div>
						</div>


					</div>

		
			</div>
		</div>	<!-- fin container -->
	<!-- slide -->


	<!-- ==================================================================-->
				<?php wp_reset_postdata(); ?>
				<?php endwhile; endif; ?>		


	</div>
</div><!-- /container-fluid-->