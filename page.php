<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	
	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="text-center"><h1><?php the_title() ?></h1></div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<?php the_content() ?>
			</div>
		</div>
	</div>
	
<?php endwhile; endif; ?>
<?php get_footer() ?>