<?php 

/*

En primer lugar tenemos la función set_post_views() que utilizaremos para ir contando las visitas a nuestros posts. La manera de hacerlo es agregando esta función al hook wp. En este punto podemos preguntar si estamos en un single o detalle de un post. En este caso obtenemos el ID y consultamos las visualizaciones que tiene nuestro post a través de un custom field que hemos llamado “post_views“. En caso de estar vacío (la primera vez que visitamos un post), lo establecemos a “1”. En caso de tener un valor simplemente sumamos 1 más al valor (++$count). Con esta función estaremos contabilizando cada vez que alguien visualiza un post.

*/



// Función para contar visualizaciones de un post.
function set_post_views() {
	//todos los tipos de post
    if (is_single()) {
        $post_ID = get_the_ID();
        $count = get_post_meta( $post_ID, 'post_views', true );
 
        if ( $count == '' ) {
            delete_post_meta( $post_ID, 'post_views' );
            add_post_meta( $post_ID, 'post_views', 1 );
        } else {
            update_post_meta( $post_ID, 'post_views', ++$count );
        }
    }
}
add_action( 'wp', 'set_post_views' );
 

/*

La segunda función get_post_views() la utilizaremos para mostrar el número de visualizaciones de nuestro post. Como tenemos el control absoluto, podríamos llamar a este dato en un listado de posts y poner el número de visualizaciones en un label o badge, o simplemente poner un texto tipo: Este post ha sido visto N veces. Por ejemplo, en el loop del single.php podríamos poner algo como esto:

*/


// Función para obtener el número de visualizaciones de un post
function get_post_views($post_ID){
    $count = get_post_meta($post_ID, 'post_views', true);
 
    if ($count == ''){
        delete_post_meta($post_ID, 'post_views');
        add_post_meta($post_ID, 'post_views', 0);
        return 0;
    }
    return $count;
}


/*---------------------------------------------------------------------------------------*/
/*
ejemplo de consulta post más vistos
 
<?php
$args = array(
    'posts_per_page' => 4,
    'meta_key' => 'post_views',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
);
 
$popular_posts = new WP_Query( $args );

while ( $popular_posts->have_posts() ) : $popular_posts->the_post();?>
 
    <h2><?php the_title();?></h2>
    <?php the_excerpt();
 
endwhile;?>

*/



/*--------------------------------------------------------------------------------------*/


// Añadir columna al listado de post de wp-admin
function posts_column_views($defaults){
    $defaults['post_views'] = __('Vistas', 'neu');
    return $defaults;
}
add_filter('manage_posts_columns', 'posts_column_views');
 

 
function posts_custom_column_views($column_name, $id){
    if ($column_name === 'post_views'){
        echo get_post_views(get_the_ID());
    }
}
add_action('manage_posts_custom_column', 'posts_custom_column_views', 5, 2);


?>