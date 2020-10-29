jQuery(document).ready(function(){


	console.log('hover file working...');

	    jQuery( '.rrss-menu ul li a img' ).hover(function(){
	    	
					var imagen = jQuery(this).data().imagen;

		             var src = "https://laneurona.com/wp-content/themes/la_neurona_20/img/";
				        switch(imagen){
				            case "facebook":
				                src+="icon-facebook-over.png";
				            break;
				            case "email":
				                src+="icon-email-over.png";
				            break;
				            case "twitter":
				                src+="icon-twitter-over.png";
				            break;		
				            case "linkedin":
				                src+="icon-linkedin-over.png";
				            break;
				            case "youtube":
				                src+="icon-youtube-over.png";
				            break;  
				            case "instagram":
				                src+="icon-instagram-over.png";
				            break;          		                        		            

				            default:
				                src=jQuery(this).attr("src");
				            break;
				            }
				    jQuery(this).attr("src",src);
				
			  
			  }, function(){
			  
					var imagen = jQuery(this).data().imagen;
			
		             var src = "https://laneurona.com/wp-content/themes/la_neurona_20/img/";
				        switch(imagen){
				            case "facebook":
				                src+="icon-facebook-off.png";
				            break;
				            case "email":
				                src+="icon-email-off.png";
				            break;
				            case "linkedin":
				                src+="icon-linkedin-off.png";
				            break;		
				            case "youtube":
				                src+="icon-youtube-off.png";
				            break;
				            case "twitter":
				                src+="icon-twitter-off.png";
				            break; 
				            case "instagram":
				                src+="icon-instagram-off.png";
				            break;          		                        		            

				            default:
				                src=jQuery(this).attr("src");
				            break;
				            }
					jQuery(this).attr("src",src);				            
				
			  }
		);

	    jQuery( '.post-socialbox ul li a img' ).hover(function(){
	    		

					var imagen = jQuery(this).data().imagen;

		             var src = "https://laneurona.com/wp-content/themes/la_neurona_20/img/";
				        switch(imagen){
				            case "facebook":
				                src+="icon-facebook-color-over.png";
				            break;
				            case "email":
				                src+="icon-email-color-over.png";
				            break;
				            case "twitter":
				                src+="icon-twitter-color-over.png";
				            break;		
				            case "linkedin":
				                src+="icon-linkedin-color-over.png";
				            break;
				            case "google":
				                src+="icon-google-color-over.png";
				            break;   


				            default:
				                src=jQuery(this).attr("src");
				            break;
				            }
				    jQuery(this).attr("src",src);
				
			  
			  }, function(){
			  
					var imagen = jQuery(this).data().imagen;
			
		             var src = "https://laneurona.com/wp-content/themes/la_neurona_20/img/";
				        switch(imagen){
				            case "facebook":
				                src+="icon-facebook-color-off.png";
				            break;
				            case "email":
				                src+="icon-email-color-off.png";
				            break;
				            case "linkedin":
				                src+="icon-linkedin-color-off.png";
				            break;		
				            case "google":
				                src+="icon-google-color-off.png";
				            break;
				            case "twitter":
				                src+="icon-twitter-color-off.png";
				            break;  
	       		                        		            

				            default:
				                src=jQuery(this).attr("src");
				            break;
				            }
					jQuery(this).attr("src",src);				            
				
			  }
		);

	    jQuery( '.evento-socialbox ul li a img' ).hover(function(){
	    		

					var imagen = jQuery(this).data().imagen;

		             var src = "https://laneurona.com/wp-content/themes/la_neurona_20/img/";
				        switch(imagen){
				            case "facebook":
				                src+="icon-facebook-color-over.png";
				            break;
				            case "email":
				                src+="icon-email-color-over.png";
				            break;
				            case "twitter":
				                src+="icon-twitter-color-over.png";
				            break;		
				            case "linkedin":
				                src+="icon-linkedin-color-over.png";
				            break;
				            case "google":
				                src+="icon-google-color-over.png";
				            break;   


				            default:
				                src=jQuery(this).attr("src");
				            break;
				            }
				    jQuery(this).attr("src",src);
				
			  
			  }, function(){
			  
					var imagen = jQuery(this).data().imagen;
			
		             var src = "https://laneurona.com/wp-content/themes/la_neurona_20/img/";
				        switch(imagen){
				            case "facebook":
				                src+="icon-facebook-color-off.png";
				            break;
				            case "email":
				                src+="icon-email-color-off.png";
				            break;
				            case "linkedin":
				                src+="icon-linkedin-color-off.png";
				            break;		
				            case "google":
				                src+="icon-google-color-off.png";
				            break;
				            case "twitter":
				                src+="icon-twitter-color-off.png";
				            break;  
	       		                        		            

				            default:
				                src=jQuery(this).attr("src");
				            break;
				            }
					jQuery(this).attr("src",src);				            
				
			  }
		);	


			jQuery( '.menu-perfiles-up ul li a img' ).hover(function(){
	    		

					var imagen = jQuery(this).data().imagen;

		             var src = "https://laneurona.com/wp-content/uploads/2018/02/";
				        switch(imagen){
				            case "finanzas":
				                src+="la-neurona-finanzas-on.png";
				            break;

				            case "marketing-y-ventas":
				                src+="la-neurona-marketing-y-ventas-on.png";
				            break;
				            
				            case "personas":
				                src+="la-neurona-personas-on.png";
				            break;		
				            
				           


				            default:
				                src=jQuery(this).attr("src");
				            break;
				            }
				    jQuery(this).attr("src",src);
				
			  
			  }, function(){
			  
					var imagen = jQuery(this).data().imagen;
			
		             var src = "https://laneurona.com/wp-content/uploads/2018/02/";
				        switch(imagen){
				            
				            case "finanzas":
				                src+="la-neurona-finanzas.png";
				            break;

				            case "marketing-y-ventas":
				                src+="la-neurona-marketing-y-ventas.png";
				            break;
				            
				            case "personas":
				                src+="la-neurona-personas.png";
				            break;		
				            
				            
				    
	       		                        		            

				            default:
				                src=jQuery(this).attr("src");
				            break;
				            }
					jQuery(this).attr("src",src);				            
				
			  }
		);		


			jQuery( '.menu-perfiles-down ul li a img' ).hover(function(){
	    		

					var imagen = jQuery(this).data().imagen;

		             var src = "https://laneurona.com/wp-content/uploads/2018/02/";
				        switch(imagen){
				            case "pymes":
				                src+="la-neurona-pymes-on.png";
				            break;

				            case "ecommerce":
				                src+="la-neurona-ecommerce-on.png";
				            break;
				            
				            case "retail":
				                src+="la-neurona-retail-on.png";
				            break;		
				            
				           


				            default:
				                src=jQuery(this).attr("src");
				            break;
				            }
				    jQuery(this).attr("src",src);
				
			  
			  }, function(){
			  
					var imagen = jQuery(this).data().imagen;
			
		             var src = "https://laneurona.com/wp-content/uploads/2018/02/";
				        switch(imagen){
				            
				            case "pymes":
				                src+="la-neurona-pymes.png";
				            break;

				            case "ecommerce":
				                src+="la-neurona-ecommerce.png";
				            break;
				            
				            case "retail":
				                src+="la-neurona-retail.png";
				            break;		
		          	
		       
				    
	       		                        		            

				            default:
				                src=jQuery(this).attr("src");
				            break;
				            }
					jQuery(this).attr("src",src);				            
				
			  }
		);	


});