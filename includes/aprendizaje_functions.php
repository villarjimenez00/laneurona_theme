<?php 

//devuelve la etiqueta dependiendo de la categoria perfil
function neu_expertos_label($perfil){

	$perfil = strtolower($perfil);

	switch ($perfil) {
		case 'finanzas':
			$label = 'Conversaciones financieras';
		break;
		
		case 'ecommerce':
			$label = 'Análisis ecommerce';
		break;
		
		case 'marketing-ventas':
			$label = 'Hablando de Marketing';
		break;
		
		case 'personas':
			$label = 'Sobre Personas';
		break;
		
		case 'pymes':
			$label = 'Experiencia Pymes';
		break;
		
		case 'retail':
			$label = 'Tendencias Retail';
		break;				


		default:
			$label = 'Tendencias Retail';
		break;				

	}

	return $label;
	exit;

}



?>