    jQuery(document).ready(function( $ ) {
    // Ahora puedes usar $. Puedes comprobarlo usando la siguiente línea:
	    $("#perfil-filter").change(function(){
	              //alert('evento change');
	              $('#filter-form').submit();
	    });
            
    });