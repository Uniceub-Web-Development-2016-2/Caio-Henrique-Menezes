<?php
header('Content-Type: text/html; charset=utf-8');
include('httpful.phar');

$get_request = 'http://localhost/easytrip/server/city/allCities';

$response = \Httpful\Request::get($get_request)->send();

$response->body;
$arr = json_decode($response->body, true);

foreach ($arr as $key => $value) {
	echo 'Cidade:'.$value['cityName'];
}


// $get_request = "http://localhost/easytrip/city";

// $response = \Httpful\Request::get($get_request)->send();

// echo  $response->body;
