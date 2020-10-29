<?php 
/**
 * Template Name: Testing Page
 *
 */
?>
<?php get_header(); ?>
<?php 
//$a = neu_get_podcast();
echo "<pre>";
var_dump($a);
echo "</pre>";
?>
<div style="margin-top: 120px;height: 20px;background-color: tomato;width: 100%"></div>
<?php echo "testing repeater...."; ?>
<?php 

// check if the repeater field has rows of data
if( have_rows('repeater') ):

 	// loop through the rows of data
    while ( have_rows('repeater') ) : the_row();

        // display a sub field value
        the_sub_field('item');

    endwhile;

else :

    // no rows found

endif;
?>


<?php get_footer(); ?>