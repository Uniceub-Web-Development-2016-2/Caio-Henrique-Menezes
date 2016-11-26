<!DOCTYPE html>
<head>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script> 

			<?php

				function logout(){
						echo '<script language="javascript">';
						echo 'alert("Logging Out!")';
						echo '</script>';
						header ( "Location: index.php" );
				}
					
			?>	

</head>
<label >Logging Out!</label>
<br>

<button type="button" class="btn btn-primary" data-toggle="modal" onclick="logout()" data-target=".bd-example-modal-sm">OK</button>

			
<body>
			

</body>
</html>


