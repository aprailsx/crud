<?php

class ConInfo{
	private $hostname;
	private $db_username;
	private $db_password;
	private $db_name;
	
	function __construct($hostname, $db_username, $db_password, $db_name){
		$this->hostname = $hostname;
		$this->db_username = $db_username;
		$this->db_password = $db_password;
		$this->db_name = $db_name; 
	}
	
	function connect(){
		mysql_connect($this->hostname, $this->db_username, $this->db_password) or die(mysql_error());
		mysql_select_db($this->db_name);
	}
}

$con = new ConInfo("127.0.0.1", "root", "root", "crud");

$con->connect();