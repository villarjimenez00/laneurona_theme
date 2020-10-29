<?php 


//cambiar el logo de la página de login de WordPress
function neu_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
        	padding: 0em .1em !important;
            width: auto !important;
            background-image: url("<?php echo get_stylesheet_directory_uri();?>/img/logo.png") !important;
            background-size: 98% !important;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'neu_login_logo' );


//cambiar el enlace del logo de la página de login de WordPress 
function neu_login_logo_url() {
    return home_url();
}

add_filter( 'login_headerurl', 'neu_login_logo_url' );
 
//cambiar el titulo del enlace
function neu_login_logo_url_title() {
    return 'La Neurona';
}

add_filter( 'login_headertitle', 'neu_login_logo_url_title' );


//encolar nuevas hojas de estilo y archivos js
function neu_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/css/style-login.css' );
    //wp_enqueue_script( 'custom-login', get_template_directory_uri() . '/js/style-login.js' );
}

add_action( 'login_enqueue_scripts', 'neu_login_stylesheet' );


//cambia el logo esquina izquierda de dashboard
function neu_custom_logo() {
echo '
        <style type="text/css">
            
            #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
                background-image: url(' . get_bloginfo('stylesheet_directory') . '/img/N-negativo.png) !important;
                
                background-position: 0 0;
                color:rgba(255, 255, 255, .8);
                content: "\f030" !important;
            }

            #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
                background-position: 0 0;
            }

        </style>';
}
 
//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'neu_custom_logo');



?>