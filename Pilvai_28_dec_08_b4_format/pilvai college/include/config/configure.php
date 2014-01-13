<?php

	//Configuration File


	define('LOGIN','');
	
	

	//-----------------------------------------------------------------------------------


	define('HTTP_SERVER', 'http://localhost/Khyati/');

	define('HOST', 'http://localhost/');


// define our database connection For localmachine
//
	define('DB_SERVER', 'localhost');			  	// eg, localhost - should not be NULL
	define('DB_USERNAME', 'root');		  		// MySql user
	define('DB_PASSWORD', ''); 		  		// MySql user password
	define('DB_DATABASE', 'pcollage');	  		// MySql DB



// define our database connection For maindomain
	
	/*define('DB_SERVER', 'localhost');			  	// eg, localhost - should not be NULL
	define('DB_USERNAME', 'akashcer_akash');		  		// MySql user
	define('DB_PASSWORD', 'paresh123'); 		  		// MySql user password
	define('DB_DATABASE', 'akashcer_europevisa');	  		// MySql DB
*/
  		// MySql DB

	//define admin module style sheet path

	define('INCLUDE_PATH_ADMIN_STYLE',"css/");

	define('INCLUDE_PATH_ADMIN_JS',"js/");



	//define admin module constants

	define('INCLUDE_ADMIN_TOP',"top/");

	define('INCLUDE_ADMIN_LEFT',"left/");

	define('INCLUDE_ADMIN_MIDDLE',"middle/");

	

	//define user module style sheet path

	define('INCLUDE_PATH_USER_STYLE',"css/");

	define('INCLUDE_PATH_USER_JS',"js/");

	

	//define user module constants

	define('INCLUDE_USER_TOP',"top/");

	define('INCLUDE_USER_LEFT',"left/");

	define('INCLUDE_USER_MIDDLE',"middle/");

	define('INCLUDE_USER_BOTTOM',"bottom/");

	//define user module height and width for top, left, middle, bottom sections

	define('TOP_HEIGHT','25');

	define('LEFT_WIDTH','22%');

	define('MIDDLE_WIDTH','100%');

	define('BOTTOM_HEIGHT','25');

	//define table constants
	
	define('TABLE_MODULE_MASTER','module_master');
	
	define('TABLE_STAFF_DETAILS','staff_details');
	
	define('TABLE_UNKNOWN','UnknwonFunds_Details');
	//------------------------------------------------------------------------//
	
	putenv("TZ=Asia/Calcutta");
	

	//------------------------------------------------------------------------//


	$conn = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

	mysql_select_db(DB_DATABASE, $conn);	

?>