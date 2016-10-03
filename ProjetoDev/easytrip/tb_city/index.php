<?php
include('request_controller.php');

$controller = new RequestController();

echo json_encode($controller->execute());

/*	$dados = $controller->execute();
	 
	$arr = utf8_converter($dados);
	 
	function utf8_converter($array)
	{
	    array_walk_recursive($array, function(&$item, $key){
		if(!mb_detect_encoding($item, 'utf-8', true)){
		        $item = utf8_encode($item);
		}
	    });
	 
	    return $array;
	}
*/
