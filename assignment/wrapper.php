<?php

include_once("settings.php");

class wrapper{
	var $db=null;
	var $result=null;

	function wrapper(){

	}

	function connect(){
		
		//connect
		$this->db=new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
		if($this->db->connect_errno){
			//no connection, exit
			return false;
		}
		return true;
	}
	
	function query($strQuery){
		if(!$this->connect()){
			return false;
		}
		$this->result=$this->db->query($strQuery);
		if($this->result==false){
			echo("query failed");
		}
		return true;
	}

	function fetch(){
		if($this->result==null or false){
			return false;
		}
		return $this->result->fetch_assoc();
	}
}
?>