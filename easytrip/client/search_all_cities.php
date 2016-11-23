<?php
include ('httpful.phar');


	
	$url = "http://localhost/easytrip/server/city/?";

	$response = \Httpful\Request::get ( $url )->send ();

	// var_dump($response);
	// die();
	
	echo $response->body;

