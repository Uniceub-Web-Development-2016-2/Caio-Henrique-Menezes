<?php
include ('httpful.phar');
if ($_POST ["email"] != null && $_POST ["pwd"] != null) {
	$login_array = array (
			'email' => $_POST ["email"],
			'pwd' => $_POST ["pwd"] 
	);
	
	$url = "http://localhost/easytrip/server/user/login";
	$body = json_encode ( $login_array );
	$response = \Httpful\Request::post ( $url )->sendsJson ()->body ( $body )->send ();
	
	$array = json_decode ( $response->body, true ) [0];
	if (! empty ( $array ) && $array ["email"] == $_POST ["email"] && $array ["pwd"] == $array ["pwd"])
		header ( "Location: profile.php" );
	else
		// var_dump($array);
		echo "Pode não mano veio!";
		
	// chamar página de erro
}

?>
