jQuery(function(){
	       


	       console.log('fancybox working...');

			jQuery(".gallery-informe").fancybox({

		    beforeShow : function(){
		    	

					//replicamos acciones scroll_functions
					//si está visible el fancybox con el video el menu queda oculto
					jQuery('.menu_bar').removeClass('nav-down').addClass('nav-up');
					//jQuery('.video_slide').attr( 'style', 'transform : translate(0px,0px) !important' );
					jQuery('.fancybox_content').attr( 'style','padding : 0px !important' );
					jQuery('.fancybox_content').attr( 'style', 'overflow : hidden' );
					

		    }, 

		    afterClose : function(){
		    	
		    	//replicamos acciones scroll_functions
		    	//cuando cierra el fancybox vuelve a ser visible el menú
		    	jQuery('.menu_bar').removeClass('nav-up').addClass('nav-down');

		    }
		    			    	
			});


  			//altura 
			var height = screen.height/1.5;
			jQuery(".playVideo-des").fancybox({



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
						
						jQuery('.menu_bar').removeClass('nav-down').addClass('nav-up');
						
						//jQuery('.video_slide').attr( 'style', 'transform : translate(0px,0px) !important' );
						
						jQuery('.fancybox_content').attr( 'style','padding : 0px !important; overflow : hidden' );
						

			    }, 

			    afterClose : function(){
			    	
			    	//replicamos acciones scroll_functions
			    	//cuando cierra el fancybox vuelve a ser visible el menú
			    	$('.menu_bar').removeClass('nav-up').addClass('nav-down');

			    }       
			
			});			

	        
});