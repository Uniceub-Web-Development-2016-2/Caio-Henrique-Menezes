<?php

class Request {
	
	private $method;
	private $protocol;
	private $serverIp;
	private $remoteIp;
	private $resource;
	private $parameters;
	
	public function __construct($method, $protocol, $serverIp, $remoteIp, $resource, $parameters){
	
		$this->method = $method;
		$this->protocol = $protocol;
		$this->serverIp = $serverIp;
		$this->remoteIp = $remoteIp;
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
	return $this->protocol.'://'.$this->serverIp.'/'.$this->resource.'?'.$String;
        }

//Get's

	public function getMethod(){
		return $this->method;
	}

	public function getProtocol(){
		return $this->protocol;
	}

	public function getServerIp(){
		return $this->serverIp;
	}

	public function getRemoteIp(){
		return $this->remoteIp;
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
	
	public function setServerIp(){
		$this->serverIp = serverIp;
	}	
	
	public function setRemoteIp(){
		$this->remoteIp = remoteIp;
	}

	public function setResource(){
		$this->resource = resource;
	}	
	
	public function setParameters(){
		$this->parameters = parameters;
	}
}
