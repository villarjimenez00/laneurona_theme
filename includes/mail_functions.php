<?php 

add_action('phpmailer_init','neu_send_smtp_email');
function neu_send_smtp_email( $phpmailer ){

    error_log('-----------mail functions working...------');

    

    //$phpmailer->SMTPDebug = 2; //permite modo debug para ver mensajes de las cosas que van ocurriendo

    // Define que estamos enviando por SMTP
    $phpmailer->isSMTP();
 
    // La dirección del HOST del servidor de correo SMTP p.e. smtp.midominio.com
    $phpmailer->Host = "mx01.laneurona.com";
 
    // Uso autenticación por SMTP (true|false)
    $phpmailer->SMTPAuth = true;
 
    // Puerto SMTP - Suele ser el 25, 465 o 587
    $phpmailer->Port = "465";
 
    /*
    * Para corregir esto hay que reemplazar el certificado inválido, mal configuraro o auto-firmado por uno bueno.
    * Si todo eso falla, puedes configurarle a PHPMailer (desde la 5.2.10) aceptar conexiones inseguras añadiendo a la función de mas abajo     esta opción:
    */

        $phpmailer->SMTPOptions = array(
         'ssl' => array(
         'verify_peer' => false,
         'verify_peer_name' => false,
         'allow_self_signed' => true
        ));


    $phpmailer->addAddress('gdpr@laneurona.com', 'Contact Form');

    // Usuario de la cuenta de correo
    $phpmailer->Username = "noreply@interbanservices.com";
 
    // Contraseña para la autenticación SMTP
    $phpmailer->Password = "Gkv1r2&4";
 
    // El tipo de encriptación que usamos al conectar - ssl (deprecated) o tls
    $phpmailer->SMTPSecure = "ssl";
 
    $phpmailer->From = "noreply@laneurona.com";
    $phpmailer->FromName = "Formulario contacto La Neurona";

    error_log('mail erro message->'.$phpmailer->ErrorInfo);

}


//////////////////////////////////////////////////////
?>