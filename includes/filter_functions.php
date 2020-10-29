<?php
//filtra por perfil dentro de taxonomy-acccion.php

function custom_neu_filter_query(&$query){

 if ( !is_admin() && $query->is_main_query() && $query->is_tax('accion') && isset($_POST['perfil-filter']) && $_POST['perfil-filter'] != 'any' && $_POST['perfil-filter'] != 101 ) {
       
       
        error_log('inside if filter SET query ');
        //$query->set( 'orderby',        'rand' );

        $tax_query = array(
            array(
            'taxonomy' => 'perfil',
            'field' => 'slug',
            'terms' => $_POST['perfil-filter'],
            'operator' => 'AND',
            ),

        );

        //$tax_query = new WP_Tax_Query($tax_query);

        //from StackExchange
        //https://wordpress.stackexchange.com/questions/146064/wp-tax-query-with-post-tag-not-working

        $query->set('tax_query', $tax_query); // do I need both of these lines?
        $query->tax_query = $tax_query;       // let's leave them both in for safety

    }



    //exluimos los cpts (agedas_evento, postevento ) 
    /*if ( $query->is_tax('perfil') ) {
        $query->set( 'post_type', array('informe','evento','texto','video') );
    }*/

    
    //var_dump($query);
    return $query;


}

add_action('pre_get_posts', 'custom_neu_filter_query', 1 );

?>