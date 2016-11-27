

function initMap() {
		var UserPosition = new google.maps.LatLng(-18.8800497, -47.05878999999999);
	    var myOptions = {
	        center: UserPosition,
	        zoom: 4,
	        maxZoom: 19,
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
	  center:latlon,zoom:8,
	  mapTypeId:google.maps.MapTypeId.ROADMAP,
	  mapTypeControl:false,
	  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
	  };
	  var map = new google.maps.Map(document.getElementById("map"),myOptions);
	  var marker = new google.maps.Marker({position:latlon,map:map, title:"Você está Aqui!"});

	  showCities(lat, lon);
	  }

	  function showCities(lat, lon){
	  	getnearbycities.geobytes.com/GetNearbyCities?callback=?&radius=100&latitude=lat&longitude=-lon;

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