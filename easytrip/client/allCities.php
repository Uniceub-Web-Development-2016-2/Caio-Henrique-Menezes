<?php

header('Content-Type: text/html; charset=utf-8');
include('httpful.phar');
$get_request = 'http://localhost/easytrip/city/allRoutes';
$response = \Httpful\Request::get($get_request)->send();
echo ( $response->body );