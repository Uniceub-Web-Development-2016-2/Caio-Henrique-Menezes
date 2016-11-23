<?php
include ('httpful.phar');

	utf8_encode($_SERVER['QUERY_STRING']);

	// var_dump ($_SERVER['QUERY_STRING']);
	// die();

	
	$url = "http://localhost/easytrip/server/city/?".$_SERVER['QUERY_STRING'];

	$response = \Httpful\Request::get ( $url )->send ();
	
	echo $response->body;
