<?php

include("con_info.php");

class Crud {

	function __construct(){
		
	}
	
	function get_one($id){
		$result = mysql_query("select * from info where info_id='".$id."'") or die(mysql_error());
		return $result;
	}
	
	function get_all(){
		$result = mysql_query("select * from info") or die(mysql_error());
		return $result;
	}
	
	function add($data){
		$query = "insert into info (name, email, message) values(";
			$ctr = 1;
			$num_array = count($data);
			foreach($data as $key => $value){
				if($ctr != $num_array)
					$query .= "'$value'".", ";
				else
					$query .= "'$value'".") ";
				$ctr++;
			}
		
		mysql_query($query) or die(mysql_error());
		
	}
	
	function edit($id, $data){
		$query = "update info set ";
			$ctr = 1;
			$num_array = count($data);
			foreach($data as $key => $value){
				if($ctr != $num_array)
					$query .= $key."='$value'".", ";
				else
					$query .= $key."='$value' " ;
				$ctr++;
			}	
		$query .="where info_id='".$id."'";
		mysql_query($query) or die(mysql_error());
	}
	
	function remove($id){
		mysql_query("delete from info where info_id='".$id."'") or die(mysql_error());
	}
	
	function disp(){
		echo "test";
	}
	
}

$crud = new Crud();