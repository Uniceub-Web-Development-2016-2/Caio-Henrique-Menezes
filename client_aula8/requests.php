<?php

include('httpful.phar');


//$get_request = 'http://127.0.0.1/aula8/user/search?first_name="'.$_GET['search'].'"';



$post_request = 'http://172.22.51.134/aula8/user/create"';
$response = \Httpful\Request::post($post_request)
->sendsJson() 
->body(json_encode($_POST))
->send(); 
echo  $response->body;
