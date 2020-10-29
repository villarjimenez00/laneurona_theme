<?php 
function neu_get_track_code(){
 if( session_status() != PHP_SESSION_ACTIVE ){session_start();}
error_log('session',$_SESSION);

if ($_GET['u']) { $_SESSION['u']=$_GET['u']; }

    wp_localize_script( 'custom_functions', 'session',  
                        array(
                          'u' => $_SESSION['u']
                         ));

}
add_action( 'wp_enqueue_scripts', 'neu_get_track_code');
?>