<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $background_head = get_field('imagen_cabecera') ?>	
<div class="container-fluid informe-head" style="background-image: url(<?php echo $background_head['url'] ?>)"></div>
<?php endwhile; endif; ?>