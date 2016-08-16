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

        public function toString(){
		$String = "";
		$Inc = 1;
		foreach($this->parameters as $var) {
			$String .= "P".$Inc."=".$var."&amp";
			$Inc++;
		}
	return $this->protocol.'://'.$this->ip.'/'.$this->resource.'?'.$String;
        }

//Get's

	public function getMethod(){
		return $this->method;
	}

	public function getProtocol(){
		return $this->protocol;
	}

	public function getIp(){
		return $this->ip;
	}

	public function getResource(){
		return $this->resource;
	}

	public function getParameters(){
		return $this->parameters;
	}

//Set's
	
	public function setMethod(){
		$this->method = method;
	}
	
	public function setProtocol(){
		$this->protocol = protocol;
	}	
	
	public function setIp(){
		$this->ip = ip;
	}	
	
	public function setResource(){
		$this->resource = resource;
	}	
	
	public function setParameters(){
		$this->parameters = parameters;
	}
}

$request = new Request("get", "http", "google.com", "pesquisa", array("NBA", "New York", "Knicks", "Videos"));
echo $request->toString();
