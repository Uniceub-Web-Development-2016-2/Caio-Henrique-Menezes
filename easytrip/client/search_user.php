<?php
include ('httpful.phar');

// var_dump($_SERVER['QUERY_STRING']);
// 	die();
	
	$url = "http://localhost/easytrip/server/user/?".$_SERVER['QUERY_STRING'];

	$response = \Httpful\Request::get ( $url )->send ();
	
	echo $response->body;
