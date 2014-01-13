<?php
class db_class{	
	function db_class(){			
		$conn = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

		if(!$conn){	
			$this->error("Connection Attempt Failed");		}

		if(!mysql_select_db(DB_DATABASE,$conn)){	
			$this->error("Database Selection Failed");		}

		$this->CONN = $conn;
		return true;
	}
	
	function close(){	
		$conn = $this->CONN ;
		$close = mysql_close($conn);

		if(!$close){	
			$this->error("Close Connection Failed");	
		}
		return true;
	}
	
	function error($text = "", $sql = ""){
		$no = mysql_errno();
		$msg = mysql_error();
		echo "<hr><font face='Verdana' size='1'>";
		echo "Custom Message : ".$text."<br><br>";
		echo "Error Number : ".$no."<br><br>";
		echo "Error Message	: ".$msg."<br><br>";
		echo "<hr></font>";
		exit;
	}
	
	function select ($sql = ""){	
		if(empty($sql)){ 
			return false; 
		}

		if(empty($this->CONN)){ 
			return false; 
		}

		$conn = $this->CONN;
		
		$results = @mysql_query($sql,$conn);
		
		if((!$results) or empty($results)){	
			return false;		
		}

		$count = 0;
		$data  = array();

		while ( $row = mysql_fetch_array($results)){	
			$data[$count] = $row;
			$count++;		
		}

		mysql_free_result($results);
		return $data;
	}
	
	//----------------------------------------------------------//
	
	function db_action($table, $data = '', $action = 'insert', $parameters = '', $debug = false){
		$conn = $this->CONN;
		
		if($data != '') reset($data);

		if ($action == "insert"){
			$query = "insert into " . $table . " (";
      
			while (list($columns, ) = each($data)){
				$query .= "`" . $columns . "` ,";
			}

			$query = substr($query, 0, -2) . ") values (";

			reset($data);

			while (list(, $value) = each($data)){
            	$query .= "'" . trim($value) . "', ";
      		}
      
	  		$query = substr($query, 0, -2) . ")";

			if($debug == true){	
				echo $query;	
			}
			
  	  		$db_res = mysql_query($query, $conn);
	  
	  		if($db_res){	
				return mysql_insert_id();	
			}else{	
				return false;	
			}
    	}elseif ($action == "delete"){
			$query = "delete from " . $table . " where " . $parameters;
			
			if($debug == true){	
				echo $query;	
			}
			
  	  		$db_res = mysql_query($query, $conn);
	  
	  		if($db_res){	
				return true;	
			}else{	
				return false;	
			}
		}
		elseif ($action == "update"){
			$query = "update " . $table . " set ";
      
			while (list($columns, $value) = each($data)){
         		$query .= $columns . " = '" . trim($value) . "', ";
      		}
      
	  		$query = substr($query, 0, -2) . " where " . $parameters;

			if($debug == true){	
				echo $query;	
			}
			
			$db_res = mysql_query($query, $conn);
	  		return ($db_res)?$db_res:false;
    	}
  	}
	
	//----------------------------------------------------------//
}
?>
