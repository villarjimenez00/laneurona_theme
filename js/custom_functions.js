jQuery(document).ready(function(){
        //flag
        console.log('custom + TRACK working...');

        jQuery("#wpadminbar").css("display", "none");


        jQuery('.sf_field_first_name input').attr("placeholder", "nombre");
        jQuery('.sf_field_email input').attr("placeholder", "email");
        jQuery('.sf_field_description textarea').attr("placeholder", "MENSAJE");


		//track boton inscripcion
	    var u = null;
		if(session.u!=null){
			u = session.u;
		}
        jQuery(".track").click(function() { 
	        console.log('click--');
	        if( u != null){ 
	        	var url=jQuery(this).attr('href');    
		    	console.log('click--'+url);
		    	jQuery(this).attr("href", url+'/'+u);	          
	        }
        });



});