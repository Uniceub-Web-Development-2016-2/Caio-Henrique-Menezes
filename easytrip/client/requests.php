<?php

include('httpful.phar');

// $get_request = 'http://localhost/easytrip/server/AllCities';
// $get_request = '';

// $response = \Httpful\Request::get($get_request)->send();
// echo  $response->body;


$get_request = "http://localhost/easytrip/city/search?".{$_GET['search']};

$response = \Httpful\Request::get($get_request)->send();

echo  $response->body;
