<?php
header('Content-Type: text/html; charset=utf-8');
include ('httpful.phar');

$url = "http://localhost/easytrip/server/user/me";

	$body = json_encode($_POST);
	var_dump($body);
	die();

	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();