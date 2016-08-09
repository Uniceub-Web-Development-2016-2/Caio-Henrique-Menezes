<?php

class Request {
	
	private $method;
	private $protocol;
	private $ip;
	private $resource;
	private $parameters;
	
	public function __construct($method, $protocol, $ip, $resource, $parameters){
	
		$this->method = $method;
		$this->protocol = $protocol;
		$this->ip = $ip;
		$this->resource = $resource;
		$this->parameters = $parameters;
	}

	public function toString($method, $protocol, $ip, $resource, $parameters){

		$url = $getProtocol() ."://".$getIp()."/".$getResource."?".$getMethod()
		foreach($this->parameters as $key => $value){
			$parameters = $parameters . $key . "=" . $value . "&";
		}
		
		return $url;

		
	}

//Get's

	public getMethod(){
		return $this->method;
	}

	public getProtocol(){
		return $this->protocol;
	}

	public getIp(){
		return $this->ip;
	}

	public getResource(){
		return $this->resource;
	}

	public getParameters(){
		return $this->parameters;
	}

//Set's
	
	public setMethod(){
		$this->method = method;
	}
	
	public setProtocol(){
		$this->protocol = protocol;
	}	
	
	public setIp(){
		$this->ip = ip;
	}	
	
	public setResource(){
		$this->resource = resource;
	}	
	
	public setParameters(){
		$this->parameters = parameters;
	}
}

$request = new Request("get", "http", "google.com", "pesquisa", array("busca" => "cameras", "usuario" => "Caio", "esporte" => "videos"));
echo $request->toString();
