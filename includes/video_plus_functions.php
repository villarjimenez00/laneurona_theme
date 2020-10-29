<?php 

function test_ajax(){


	$result = testing_db($_POST['id_contenido']);
	$result_array = array();

	foreach ($result as $key => $value) {

		$item = array(
			'id' => $value->id,
			'id_contenido' => $value->id_contenido,
			'titulo_pregunta' => $value->titulo_pregunta,
		);

		array_push($result_array, $item);
	}


	//return $result;
	echo json_encode($result_array);
	
	die();	
	
}

add_action('wp_ajax_test_ajax', 'test_ajax');
add_action('wp_ajax_nopriv_test_ajax', 'test_ajax');  

?>