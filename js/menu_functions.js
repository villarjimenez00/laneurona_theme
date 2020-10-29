
jQuery(document).ready(main_izq);
jQuery(document).ready(main_dcha);



	var contador = 1;
	var contador2 = 1;

	function main_izq(){

		jQuery('.bt-menu-izq').click(function(){

			console.log('btn-menu-izq working...');

			if(contador == 1){
				jQuery('.menu-izq').animate({
					left: '0'
				});
				contador = 0;
				if(contador2==0){
					jQuery('.menu-dcha').animate({
						right: '-100%'
					});	
				
					jQuery(".bt-menu-dcha").removeClass("is-active");
					jQuery(".bt-menu-dcha img").attr("src","https://laneurona.com/wp-content/themes/la_neurona_20/img/perfiles-off.png");  
					contador2=1;				
				}
			}else{
				contador = 1;
				jQuery('.menu-izq').animate({
					left: '-100%'
				});
			}

		});

	};

	
	function main_dcha(){

			jQuery('.bt-menu-dcha').click(function(){

				console.log('btn-menu-dcha working...');

				if(contador2 == 0){
					jQuery('.menu-dcha').animate({
						right: '-100%'
					});
					jQuery(".bt-menu-dcha").removeClass("is-active");
					jQuery(".btnperfil").attr("src","https://laneurona.com/wp-content/themes/la_neurona_20/img/perfiles-off.png"); 

					contador2 = 1;

				}else{
					contador2 = 0;
					jQuery('.menu-dcha').animate({
						right: '0'
					});
					jQuery(".bt-menu-dcha img").attr("src","https://laneurona.com/wp-content/themes/la_neurona_20/img/perfiles-active.png");  
					jQuery(".bt-menu-dcha").addClass("is-active");
					if(contador==0){
						
						jQuery('.menu-izq').animate({
							left: '-100%'
						});

						jQuery(".bt-menu-izq").removeClass("is-active");
						contador = 1;

					}
				}

			});
	};


    jQuery(document).ready(function( $ ) {
    // Ahora puedes usar $. Puedes comprobarlo usando la siguiente línea:

    	//MY CODE

    	//si pulsamos en la lupa mostramos el searchform

    	$('.open').click(function(){

    		console.log('open');

    		$('.menu_bar').removeClass('menu_height');
    		
    		$('.menu_bar').addClass('menu_big_height');

    		$('.big_search .open').attr('style','display:none');
      		
      		$('.big_search .close').attr('style','color:#ccc');  		

    		$('.big_search .close').attr('style','display:inline');

    		$('.big_search .close').attr('style','margin-top:-2.2em');
    		
    		$('.search-form-container').css('top','90px');

    		$('.big_search').css('top','-65px !important');

    		$('.big-search-form').attr('style','display:block ');


    	});


    	$('.close').click(function(){

    		console.log('close');

    		$('.menu_bar').removeClass('menu_big_height');
    		
    		$('.menu_bar').addClass('menu_height');
    		
    		$('.big_search .close').attr('style','display:none');
    		
    		$('.big_search .open').attr('style','display:inline');
    		
    		$('.big-search-form').attr('style','display:none ');
    		
    		$('.search-form-container').css('top','30px');


    	});

    });