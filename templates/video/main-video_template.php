<!-- Page Content -->
<?php if (have_posts()) : while (have_posts()) : the_post() ;?>

<div class="container-fluid videobg">

	<div class="destacado-container" style="background-image: url( '<?php bloginfo('template_url') ?>/img/destacados-bg.png' );">

		<div class="container" style="margin-top: 83px;">
			<div class="videobox embed-responsive embed-responsive-16by9">

						<?php echo neu_custom_iframe_video() ?>
	
			</div>
		</div>
	</div>	


</div><!-- /container-fluid -->
<?php endwhile; endif; ?>
