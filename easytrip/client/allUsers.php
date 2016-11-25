<?php
header('Content-Type: text/html; charset=utf-8');
include('httpful.phar');

$get_request = 'http://localhost/easytrip/server/user/allUsers';

$response = \Httpful\Request::get($get_request)->send();

// $response->body;
$arr = json_decode($response->body, true);

// var_dump($arr);
// die();

foreach ($arr as $key => $value) {
	echo 'Nome: '.$value['name'].'<br>';
	echo 'E-Mail: '.$value['email'].'<br>';
}