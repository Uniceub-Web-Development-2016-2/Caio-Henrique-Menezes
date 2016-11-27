<?php
header('Content-Type: text/html; charset=utf-8');
include('httpful.phar');


	function editProfile($id)
	{
		$request = 'http://localhost/easytrip/user/me?id='.$id;
		$response = \Httpful\Request::get($request)->send();
		$array = json_decode($response->body, true);

		var_dump($response);
		die();
        
		foreach ($array as $key => $value)
		{
			echo '

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Name:</label>  
                      <div class="col-md-4">
                      <input id="name" type="text" placeholder=".$value['name']." name="name" required autocomplete="off" class="form-control input-md">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Username:</label>  
                      <div class="col-md-4">
                      <input id="username" type="text" placeholder=".$value['username']." name="username" required autocomplete="off" class="form-control input-md">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Date: </label>  
                      <div class="col-md-4">
                      <input id="Date" type="Date" placeholder=".$value['dteBirth']." name="dteBirth" required pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" class="form-control input-md">
                      </div>
                    </div>

                    <input type="hidden" name="profile" value="u">
                    <input type="hidden" name="active" value="y">

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Email: </label>  
                      <div class="col-md-4">
                      <input id="email" type="email" id="email" placeholder=".$value['email']." name="email" required autocomplete="off" pattern="[^ @]+@[^ @]+.[a-z]+" class="form-control input-md">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Password:</label>  
                      <div class="col-md-4">
                      <input id="password" type="text" placeholder="Password..." name="pwd" required autocomplete="off" class="form-control input-md">
                      </div>
                    </div>

                    <br>
                    <button class="btn btn-success botao" type="saveEdit.php">Save</button>
                    <button class="btn btn-success botao" type="deleteUser.php">Delete</button>'
		}

	}