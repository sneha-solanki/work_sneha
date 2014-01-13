<?php
/*$db_name="test";// Database name
$connection=mysql_connect("hostname","username","password") or die("I Couldn't connect");
$db=mysql_select_db($db_name,$connection) or die("I Couldn't select your database");
$branch="emp_branch"; // Table name*/


	define('DB_SERVER', 'localhost');			  	// eg, localhost - should not be NULL
	define('DB_USERNAME', 'root');		  		// MySql user
	define('DB_PASSWORD', ''); 		  		// MySql user password
	define('DB_DATABASE', '7sources');
	
	define('TABLE_QUR_MASTER','inq_master');
	
	define('TABLE_JOB_PROFILE','job_profile');
	
	define('TABLE_UNKNOWN','UnknwonFunds_Details');
	
	$conn = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
	mysql_select_db(DB_DATABASE, $conn);

?>