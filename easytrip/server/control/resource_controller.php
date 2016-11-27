<?php

include_once ('./model/request.php');
include_once ('./control/db_manager.php');

class ResourceController
{	
 	private $METHODMAP = ['GET' => 'search' , 'POST' => 'create' , 'PUT' => 'update', 'DELETE' => 'remove' ];
	
	public function treat_request($request) {

		//var_dump($request);
		//die();

		if($request->getMethod() == "POST" && $request->getOperation() == "login")
		{	
			return $this->login($request);
		}
		else if($request->getMethod() == "DELETE" && $request->getOperation == "me"){
			return $this->remove($request);
		}
		return $this->{$this->METHODMAP[$request->getMethod()]}($request);
	
	}

	public function login($request) {
		$query = 'SELECT * FROM '.$request->getResource().' WHERE '.self::bodyParams($request->getBody());
		$result = (new DBConnector())->query($query); 
                return $result->fetchAll(PDO::FETCH_ASSOC);
		
	}

	public function remove($request) {
		update($request);
	}

	private function search($request) {

		$query = 'SELECT * FROM '.$request->getResource().' WHERE '.self::queryParams($request->getParameters());
		if ($request->getResource() == "user"){
			$query." AND active = 'y';";
		}
		// var_dump($query);
		// die();
		$result = (new DBConnector())->query($query);
		return $result->fetchAll(PDO::FETCH_ASSOC);
		//return $query; 
	}


	private function select($query){
		$connect = (new DBConnector())->query($query);
		// var_dump($query);
		return $connect->fetchAll(PDO::FETCH_ASSOC);
        	// return $connect;
	}

	private function update($request) {
		$body = $request->getBody();
		$resource = $request->getResource();
		$query = 'UPDATE '.$resource.' SET '. $this->getUpdateCriteria($body);
		//var_dump($query);
		return self::execution_query($query);
        }

	private function create($request) {		
		$body = $request->getBody();
		//var_dump($body);
		$resource = $request->getResource();		
		$query = 'INSERT INTO '.$resource.' ('.$this->getColumns($body).') VALUES ('.$this->getValues($body).')';
		return self::execution_query($query);		 
	}

	private function bodyParams($json) {
		$criteria = "";
                $array = json_decode($json, true);
                foreach($array as $key => $value) {
                                $criteria .= $key." = '".$value."' AND ";
                 
                }
                return substr($criteria, 0, -5);
	
		
	}
		
	private function queryParams($params) {

		$query = "";		
		foreach($params as $key => $value) {
			$query .= $key.' = '."'".$value."'".' AND ';	
		}	
		
		$query = substr($query,0,-5);
		
		if($params != null){				
			$query = "";		
			foreach($params as $key => $value) {
				$query .= $key." = '".$value."' AND ";	
			}
			$query = substr($query,0,-5);
			return $query;
		}else{
			return 1;
		}
	}

	private function execution_query($query){
		$conn = (new DBConnector());
		//$conn->query($query);
		//echo ($query);

		if ($conn->query($query) == TRUE) {
                	echo "New record created successfully!";
        	} else {
                	echo "Error: " . $query . "<br>";
        	}
	}
		
	private function getUpdateCriteria($json){
		$criteria = "";
		$where = " WHERE ";
		$array = json_decode($json, true);
		foreach($array as $key => $value) {
			if($key != 'id')
				$criteria .= $key." = '".$value."',";
			
		}
		return substr($criteria, 0, -1).$where." id = '".$array['id']."'";
	}
	
	private function getColumns($json){
		$array = json_decode($json, true);
		$keys = array_keys($array);
		return implode(",", $keys);
	
	}

	private function getValues($json){
                $array = json_decode($json, true);
                $values = array_values($array);
                $string = implode("','", $values);
		return "'".$string."'";
        
        }
	
}




