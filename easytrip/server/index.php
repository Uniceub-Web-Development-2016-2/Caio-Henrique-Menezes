<?php
include_once('./control/request_controller.php');
//$controller = new RequestController();

//echo json_encode($controller->execute());
$controller = new RequestController();
$dados = $controller->execute();

$arr = utf8_converter($dados);

function utf8_converter($array){
	array_walk_recursive($array, function(&$item, $key){
		if(!mb_detect_encoding($item, 'utf-8', true)){
			$item = utf8_encode($item);
		}
	});

		return $array;
}

echo json_encode($arr);
// print_r($arr);



// $json = json_encode($controller->execute());
// echo utf8_encode($json);
