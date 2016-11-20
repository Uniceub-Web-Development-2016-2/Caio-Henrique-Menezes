<?php
include_once('../easytrip/control/request_controller.php');
//$controller = new RequestController();
//var_dump($controller->execute());
//die();
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
print_r($arr);