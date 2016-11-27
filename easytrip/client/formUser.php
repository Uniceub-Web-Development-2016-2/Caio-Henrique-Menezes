<?php
header('Content-Type: text/html; charset=utf-8');
include ('httpful.phar');
include ('crypt.php');

	

	$url = "http://localhost/easytrip/server/user/register";

	// $userPwd = (new Crypt)->generateHash($_POST['pwd']);

	// $_POST['pwd'] = $userPwd;

	// var_dump($_POST['pwd']);
	// die();
	
	$body = json_encode($_POST);

	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();