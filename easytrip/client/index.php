<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>EasyTrip</title>


<!--     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script> -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/easyTrip.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACeINkvYJeWxeaSs7u4ZVJNfmQdCSvE6Q&callback=initMap"></script>
	
	<script type="text/javascript" src="js/map.js">	</script>

  </head>
  <body onload="initMap()">

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-pills">
				<li class="active">
					<a href="#">Home</a>
				</li>
				<li >
					<a href="formUser.phtml">Register</a>
				</li>
				<li>
					<a href="search.php">Search</a>
				</li>
				<li class="dropdown pull-right">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i><strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="editProfile.phtml">Edit Profile</a>
						</li>
						<li>
							<a href="#" style="cursor:not-allowed">Settings</a>
						</li>
						<li>
							<a href="#" style="cursor:not-allowed">Support</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<li>
								<a href="login.phtml">Log In</a>
								<a href="logout.php">Log Out</a>

							</li>
							
						</li>
					</ul>
				</li>
			</ul>

		</div>
	</div>
</div>
	<div class="contMap">
				<button type="button" class="btnLocal" onclick="getLocation()"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>  Minha Localiza&ccedil;&atilde;o</button>
		
		<div id="map"></div>
		
		<div class="container-desc">
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
	</div>

	<script src="js/easytripJquery.js"></script>
    <script src="js/easytrip.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>