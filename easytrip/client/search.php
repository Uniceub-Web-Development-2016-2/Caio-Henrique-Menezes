<!DOCTYPE html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script> 

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACeINkvYJeWxeaSs7u4ZVJNfmQdCSvE6Q&libraries=places"></script>

<title>Search Page</title>
</head>
<body>
	<div class="search_user" id="search_user">
	<h3>Busca de usuário</h3>
		<form class="form-horizontal" action="search_user.php" method="get">
			<input type='text' name='name' placeholder='Name...'>
			<input type='submit' value='submit'>
		</form>
		<br>
		<form class="form-horizontal" action="allUsers.php" method="get">
			<input type='submit' value='Procurar todos os Usuários'>
		</form>
	</div>

	<div class="search_cities" id="search_cities">
	<h3>Busca de cidades</h3>
		<form class="form-horizontal" action="search_cities.php" method="get">
			<p>Digite o nome da cidade abaixo:</p>
			<input type='text' id="pac-input" name='cityName' placeholder='City Name...' autocomplete="off">
			<input type='submit' value='submit'>
		</form>
		<br>
		<form class="form-horizontal" action="allCities.php" method="get">
			<input type='submit' value='Procurar todas as cidades'>
		</form>
	</div>

  <?php

  	include ('httpful.phar');

  	$url = 'https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyA0cpoHLov_9bYKK5EjN9ZThLTKwOHzRI0';

  	// $url = 'http://getnearbycities.geobytes.com/GetNearbyCities?callback=?&radius=100&latitude=40.74879&longitude=-73.9845';

  	$response = \Httpful\Request::get ( $url )->send ();

  	print_r($response);

  ?>

</body>
</html>
