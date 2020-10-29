(function($) {
		// Ahora puedes usar $. Puedes comprobarlo usando la siguiente línea:
   		// Recuerda que solo puedes usar $ DENTRO de esta función.

	console.log('video_plus_funtion_script_working');
		

	//averiguar dispositivo movil
	var isMobile = {
	    Android: function() {
	        return navigator.userAgent.match(/Android/i);
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i);
	    },
	    iOS: function() {
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	    },
	    Opera: function() {
	        return navigator.userAgent.match(/Opera Mini/i);
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i);
	    },
	    any: function() {
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	    }
	};


	//aplicamos hover solo en escritorio
	if(!isMobile.any()) {
  		/*aparece el texto de la etiqueta on hover*/
		$('.label-container').hover( function(){

			$('.label-container').addClass('background-label');
		  	$('.label-text' ).fadeIn('slow');
		  	$('.label-arrow' ).fadeIn('slow');

		  },function() {	

		  	$( '.label-text' ).fadeOut('slow');
		  	$( '.label-arrow' ).fadeOut('slow');

		  	$('.label-container').removeClass('background-label');
		  
		  }
		);
		/*fin aparece el texto de la etiqueta on hover*/
	}

		//aparicion de etiqueta info cada 30seg
		function etiqueta(){
			console.log('label in...');
			$('.label-container').addClass('background-label');
			$( '.label-text' ).fadeIn('slow');
		  	$( '.label-arrow' ).fadeIn('slow');      
		  	setTimeout(function(){
		  		console.log('label out...');
		  		$( '.label-text' ).fadeOut('slow');
		  		$( '.label-arrow' ).fadeOut('slow');
		  		$('.label-container').removeClass('background-label');
		  	},5000);
		}

		// FIN aparicion de etiqueta info cada 30seg

/*			var url_frame = 'http://player.vimeo.com/video/290496887';

			console.log(url_frame);

		$('iframe').attr('src',url_frame +'?player_id=vimeo_player&loop=0&autopause=0');*/


		var iframe = document.querySelector('#vimeo_player');



        $(".playContent").click(function(){



			//VIMEO API PLAYER
			console.log('api loading');

			var iframe_options = {

        		id: '290496887',

        	};

        	$('iframe').attr('style','height: 100% !important; width:100% !important');
        	

			//vimeo api segun su doc
			//




			//var url_frame = $('iframe').attr('src');

/*			
			var url_frame = 'http://player.vimeo.com/video/290496887';

			console.log(url_frame);

			$('iframe').attr('src',url_frame +'?player_id=vimeo_player&loop=0&autopause=0');


			*/


		    //metemos el iframe en una variable para darselo como parametro al constructor del player
		    /*var iframe = document.querySelector('#vimeo_player');*/
		    

/*		    console.log('outsider iframe');
		    console.log(test_iframe);

		    console.log('iframe');
		    console.log(iframe);*/


			var player = new Vimeo.Player('vimeo_player',iframe_options);
		    //var player = new Vimeo.Player(iframe , iframe_options);

		    player.origin = '*';

	
        	console.log('clic playContent');

		    console.log(player);


		    //console.log(player);

			console.log('playing video');
			console.log(player.origin);

			//forzamos play
			player.play().catch(function(error) {
			    console.log('error playing the video:', error);
			});



			/*		    player.on('play', function() {
		        console.log('played the video!');
		    });*/

		    player.on('play',onPlay);

		    player.on('pause',onPause);

		    player.on('ended', onFinish);

		    player.on('loaded', onLoaded);		    

		    //player.on('progress',onPlayProgress);

		    //player.on('seeked',isSeeked);



			/*			
			player.getVideoUrl().then(function(url) {
			    console.log('url:');
			    console.log( url);
			}).catch(function(error) {
				console.log('error: ')
			    console.log(error.name);
			});
			*/

/*		    player.getVideoTitle().then(function(title) {
		        console.log('title:', title);
		    });

			player.getVideoId().then(function(id) {
			    // id = the video id
			    console.log('id');
			    console.log(id);

			}).catch(function(error) {
			    // an error occurred
			    console.log(error);

			});*/

			///------------------------------------------///

			/*		function callback(data){
					console.log('finished callback');
					console.log(data);
					$.fancybox.close();
				}*/

				function onPlay(data) {
				    console.log('play!!');
				    console.log(data);
				    console.log('boton cierre');
					//eliminamos el boton de cierre del iframe
					$('button.fancybox-close-small').attr('style','display : none');

					/* -  Aparece el icono de info 15s despues cargar el video  - */

					setTimeout(function(){
						jQuery('.label-container').fadeIn();       
		   	   		}, 10000);

					//intervalo de 30seg
					//setInterval(etiqueta,30000);

					var interval = setInterval(etiqueta,30000);

				/* -  Fin Aparece el icono de info 15s despues cargar el video  - */

					console.log('go to ajax');
					//ejemplo ajax wp
					/*$.ajax({

					   type: "POST",
					    url: "/wp-admin/admin-ajax.php", 
					    data: {'action':'test_ajax','idevento':'321'},
					    success: function(dataResponse){

					    	//console.log(dataResponse);

					    },

					    error: function(dataResponse){
					    	console.log('error!!');
					    	con
					        console.log(msg.statusText);
					    }

					});*/


				}//fin onPlay

				function onPause(data) {
				    console.log('paused');
				     console.log(data);
				}


				function onLoaded(data){
					console.log('loaded');
					console.log(data);
				}

				function onFinish(data) {

				     //console.log(testing);
				     $.fancybox.close();
				     $('.video-plus-container .container').fadeOut();
				     $('.video-plus-container .container-final').fadeIn();

				    console.log('CLEAR INTERVAL');
				     //clearInterval(interval);
				     console.log('to destroy');
			
					player.unload().then(function() {
						console.log('unload player');
					    // the player was destroyed
					}).catch(function(error) {
					    // an error occurred
					});


				}

/*				function onPlayProgress(data) {
				    console.log(data.seconds + '\'s played');
				}

				function isSeeked(data){
					console.log('seeked');
					console.log(data);
				}*/


        });//fin onclick



        //altura 
		var height = screen.height/1.5;

		//70% del ancho de pantalla
		//var width = screen.width*.7;


		/*fancy box*/
		$(".playVideo").fancybox({

			touch: {
			   vertical: true, // Allow to drag content vertically
			   //momentum: true // Continue movement after releasing mouse/touch when panning
			},


		    beforeShow : function(){
		    	
		    		//asignamos tamaño
					this.width =  16/9 * height;
					this.height = height;

					console.log('beforeShow fancybox');

					//replicamos acciones scroll_functions
					//si está visible el fancybox con el video el menu queda oculto
					
					$('.menu_bar').removeClass('nav-down').addClass('nav-up');
					
					//$('.video_slide').attr( 'style', 'transform : translate(0px,0px) !important' );
					
					$('.fancybox_content').attr( 'style','padding : 0px !important; overflow : hidden' );
					

		    }, 

		    afterClose : function(){
		    	
		    	//replicamos acciones scroll_functions
		    	//cuando cierra el fancybox vuelve a ser visible el menú
		    	$('.menu_bar').removeClass('nav-up').addClass('nav-down');

		    }       
		
		});
		/*fancy box*/

})( jQuery );