<!DOCTYPE html>
<html lang="<?php bloginfo('languaje') ?>">
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- youtube verification -->
    <meta name="google-site-verification" content="Qm4flZn2-a3OR00gu_1sdZyndPRt-Z9l8vfJlLr9ZUg" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?></title>

<!-- GOOGLEFONTS -->


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '847913815541400'); 
fbq('track', 'PageView');
</script>

<noscript>
<img height="1" width="1" 
src="https://www.facebook.com/tr?id=847913815541400&ev=PageView
&noscript=1"/>
</noscript>

<!-- End Facebook Pixel Code -->


<meta name="google-site-verification" content="nDVqSbVOdjcFx5efyPUjN12wCefUx3oNDVs-RP2P8uw"/>

<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,800" rel="stylesheet"> -->

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Raleway:200,400,700,800" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?> 
<style>
    html { margin-top: 0px !important; }
  * html body { margin-top: 0px !important; }
  @media screen and ( max-width: 70px ) {
    html { margin-top: 0px !important; }
    * html body { margin-top: 0px !important; }
  }
</style>
</head>
<body <?php body_class() ?> id="neurona-body">
  <?php get_template_part('templates/navbar-menu') ?>