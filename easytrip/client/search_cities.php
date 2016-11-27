<?php
header('Content-Type: text/html; charset=utf-8');
include ('httpful.phar');

	utf8_encode($_SERVER['QUERY_STRING']);

	// var_dump ($_SERVER['QUERY_STRING']);
	// die();

	$stringSearch = iconv('UTF-8', 'ISO-8859-1//TRANSLIT//IGNORE', $_GET['cityName']);

	// var_dump ($stringSearch);
	// die();
	
	// $url = "http://localhost/easytrip/server/city/?".$stringSearch;
	$url = "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=".$stringSearch."&language=pt_BR&key=AIzaSyAufXuuBKyshSWSgAjk87BHLiDS3iquQLs";


	$response = \Httpful\Request::get($url)->send();
	
	// $response->body;
	// echo "$response";
	// die();
	$predictions = json_decode($response, true);

	// var_dump($predictions);
	// die();

	foreach ($predictions['predictions'] as $key => $value) {
		echo 'Cidade: '.$value['description'].'<br>';
	}
