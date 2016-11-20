<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EasyTrip</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/easyTrip.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACeINkvYJeWxeaSs7u4ZVJNfmQdCSvE6Q&callback=initMap"></script>
	
	<script type="text/javascript">	
	function initMap() {
		 var UserPosition = new google.maps.LatLng(-18.8800497, -47.05878999999999);
	    var myOptions = {
	        center: UserPosition,
	        zoom: 4,
	        mapTypeId: google.maps.MapTypeId.ROADMAP,
	        mapTypeControl:false
	    };
	    var map = new google.maps.Map(document.getElementById("map"), myOptions);
	    var geocoder = new google.maps.Geocoder();
	    var infowindow = new google.maps.InfoWindow;
	}
	
	// var x=document.getElementById("demo");
	function getLocation()
	  {
	  if (navigator.geolocation)
	    {
	    navigator.geolocation.getCurrentPosition(showPosition,showError);
	    }
	  else{x.innerHTML="Lamentamos, mas a geolocalização não é suportada nesse navegador.";}
	  }
	 
	function showPosition(position)
	  {
	  lat=position.coords.latitude;
	  lon=position.coords.longitude;
	  latlon=new google.maps.LatLng(lat, lon)
	  mapholder=document.getElementById('map')
	 
	  var myOptions={
	  center:latlon,zoom:10,
	  mapTypeId:google.maps.MapTypeId.ROADMAP,
	  mapTypeControl:false,
	  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
	  };
	  var map = new google.maps.Map(document.getElementById("map"),myOptions);
	  var marker = new google.maps.Marker({position:latlon,map:map,title:"Você está Aqui!"});
	  }
	 
	function showError(error)
	  {
	  switch(error.code)
	    {
	    case error.PERMISSION_DENIED:
	      x.innerHTML="Usuário rejeitou a solicitação de Geolocalização."
	      break;
	    case error.POSITION_UNAVAILABLE:
	      x.innerHTML="Localização indisponível."
	      break;
	    case error.TIMEOUT:
	      x.innerHTML="O tempo da requisição expirou."
	      break;
	    case error.UNKNOWN_ERROR:
	      x.innerHTML="Algum erro desconhecido aconteceu."
	      break;
	    }
	  }
	</script>

  </head>
  <body onload="initMap()">

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-pills">
				<li class="active">
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">Profile</a>
				</li>
				<li class="disabled">
					<a href="#">Messages</a>
				</li>
				<li class="dropdown pull-right">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">Profile<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Edit Profile</a>
						</li>
						<li>
							<a href="#">Settings</a>
						</li>
						<li>
							<a href="#">Support</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">Log Off</a>
						</li>
					</ul>
				</li>
			</ul>

		</div>
	</div>
</div>
	<div class="contMap">
		<button type="button" class="btnLocal" onclick="getLocation()">Minha
			Localiza&ccedil;&atilde;o</button>
		<div id="map"></div>
		<address>
			<strong>Twitter, Inc.</strong> <br> 795 Folsom Ave, Suite 600<br>
			San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123)
			456-7890
		</address>
		<div class="row">
			<div class="col-md-6">
				<dl>
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget
						lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
					<dt>Felis euismod semper eget lacinia</dt>
					<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris
						condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
				</dl>
			</div>
			<div class="col-md-6">
				<img alt="Bootstrap Image Preview"
					src="http://lorempixel.com/140/140/" class="img-rounded">
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
