<?php
include ('httpful.phar');

	$url = "http://localhost/easytrip/server/user/register";
	
	$body = json_encode ( $register_array );
	var_dump($body);
	die();
	$response = \Httpful\Request::post ( $url )->sendsJson ()->body ( $body )->send ();