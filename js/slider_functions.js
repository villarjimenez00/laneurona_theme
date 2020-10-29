jQuery(document).ready(function(){

        console.log('slider file working...');
        $('.destacado_wrapper .bx-viewport').attr('style','overflow:visible !important');
        console.log('custom bxslider')

        jQuery('.new-slider-destacado').bxSlider({

            //infiniteLoop: false,
            hideControlOnEnd: true,
            //slideWidth: 2300,
            minSlides: 1,
            maxSlides: 1,
            moveSlides: 1,
            auto: true,
            pause: 15000,
            infiniteLoop: true,
            slideMargin: 0,
            responsive: true,
            touchEnabled:true,
            wrapperClass : 'destacado_wrapper',
            //autoControls: true,
            pager: true,
            mode: 'fade',

        });


        jQuery('.audio-slider').bxSlider({

            infiniteLoop: false,
            hideControlOnEnd: true,
            slideWidth: 450,
            minSlides: 1,
            maxSlides: 3,
            moveSlides: 1,

            slideMargin: 5,
            responsive: true,
            touchEnabled:true,
            wrapperClass:'slider_audio_wrapper',

        });


        //************************************
        // slider acciones    

        //slider acciones FULL WIDTH
        jQuery('.slider-ideas').bxSlider({

            infiniteLoop: false,
            hideControlOnEnd: true,
            slideWidth: 256,
            minSlides: 1,
            maxSlides: 7,
            moveSlides: 3,
            slideMargin: 25,
            responsive: true,
            touchEnabled:true,

            wrapperClass:'slider_ideas_wrapper',
        });

        //slider acciones FULL WIDTH
        jQuery('.slider-impulsos').bxSlider({

            infiniteLoop: false,
            hideControlOnEnd: true,
            slideWidth: 256,
            minSlides: 1,
            maxSlides: 7,
            moveSlides: 3,
            slideMargin: 25,
            responsive: true,
            touchEnabled:true,

            wrapperClass:'slider_impulsos_wrapper',
        });

        //slider acciones FULL WIDTH
        jQuery('.slider-respuestas').bxSlider({

            infiniteLoop: false,
            hideControlOnEnd: true,
            slideWidth: 256,
            minSlides: 1,
            maxSlides: 7,
            moveSlides: 3,
            slideMargin: 25,
            responsive: true,
            touchEnabled:true,

            wrapperClass:'slider_respuestas_wrapper',
        });  
        
        //slider acciones FULL WIDTH
        jQuery('.slider-aprendizaje').bxSlider({

            infiniteLoop: false,
            hideControlOnEnd: true,
            slideWidth: 256,
            minSlides: 1,
            maxSlides: 7,
            moveSlides: 3,
            slideMargin: 25,
            responsive: true,
            touchEnabled:true,

            wrapperClass:'slider_aprendizaje_wrapper',
        });

        //slider acciones FULL WIDTH
        jQuery('.slider-analisis').bxSlider({

            infiniteLoop: false,
            hideControlOnEnd: true,
            slideWidth: 256,
            minSlides: 1,
            maxSlides: 7,
            moveSlides: 3,
            slideMargin: 25,
            responsive: true,
            touchEnabled:true,

            wrapperClass:'slider_analisis_wrapper',
        });  

        // fin sliders acciones
        //****************************************                      



        jQuery('.slider-relacionado').bxSlider({

            infiniteLoop: false,
            hideControlOnEnd: true,
            slideWidth: 256,
            minSlides: 1,
            maxSlides: 7,
            moveSlides: 3,
            slideMargin: 25,
            responsive: true,
            touchEnabled:true,

            wrapperClass:'slider_relacionado_wrapper',
        });  




        jQuery('.slider-destacado').bxSlider({

            infiniteLoop: false,
            hideControlOnEnd: true,
            slideWidth: 2300,
            minSlides: 1,
            maxSlides: 1,
            moveSlides: 1,
            auto: true,
            pause: 15000,
            infiniteLoop: true,
            slideMargin: 0,
            responsive: true,
            touchEnabled:true,
            wrapperClass : 'old_destacado_wrapper',
        });






        //anulamos el overflow hidden
        //averiguamos la anchura de la ventana y desencadenamso un evento
        //usar para posicionar la caja de texto dentro del slider

    jQuery(document).ready(function( $ ) {
    // Ahora puedes usar $. Puedes comprobarlo usando la siguiente línea:

            $(window).resize(function() {
              console.log("El tamanno ha cambiado!");

              var ancho_img = $('.video_portada').height();

              console.log(ancho_img);


            });




    });



        ///setting para solucionar incidencia de clik en los enlaces dentro de un bxslider
            //en chrome
            
            var sBrowser, sUsrAg = navigator.userAgent;

            if(sUsrAg.indexOf("Chrome") > -1) {
                sBrowser = "Google Chrome";
            } else if (sUsrAg.indexOf("Safari") > -1) {
                sBrowser = "Apple Safari";
            } else if (sUsrAg.indexOf("Opera") > -1) {
                sBrowser = "Opera";
            } else if (sUsrAg.indexOf("Firefox") > -1) {
                sBrowser = "Mozilla Firefox";
            } else if (sUsrAg.indexOf("MSIE") > -1) {
                sBrowser = "Microsoft Internet Explorer";
            }

            console.log("Usted está utilizando: " + sBrowser);


               


        if (navigator.userAgent.search("Firefox") >= 0) {

            console.log('inside Firefox navigator if');

            var ff_version = navigator.userAgent.match(/Firefox\/([\d]+\.[\d])+/);
            ff_version = parseFloat(ff_version[1]);
            
            if(ff_version == 0 || ff_version >= 59) {
                jQuery('body').on('mousedown', '.bx-viewport a', function() {
                    var ff_link = jQuery(this);
                    var ff_href = ff_link.attr('href');
                    if(ff_href) {
                        location.href = ff_href;
                        return false;
                    }
                });
            }
        }


        if (navigator.userAgent.search("Chrome") >= 0) {

                jQuery('body').on('mousedown', '.bx-viewport a', function() {
                    var ff_link = jQuery(this);
                    var ff_href = ff_link.attr('href');
                    if(ff_href) {
                        location.href = ff_href;
                        return false;
                    }
                });






        }

});