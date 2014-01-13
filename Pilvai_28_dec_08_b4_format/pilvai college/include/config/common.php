<?php
	/* set the cache limiter to 'private' */
	
	/* set the cache expire to 30 minutes */
	session_cache_expire(20);
	$cache_expire = session_cache_expire();
	
	/* start the session */
	
	session_start();

	include_once('include/config/configure.php');
	include_once('include/Date/Date.php');
	include_once('include/Date/dateObj.class.php');
	include_once('include/config/messages.php');
	//include_once('include/config/dbclass.php');
	include_once('include/config/functions.php');
	include_once('include/smarty/Smarty.class.php');
	include_once('include/config/paging.php');
	
	
	$tpl  = new Smarty;
	//$db   = new db_class;
	
	$tpl->compile_check = true;
	$tpl->debugging     = false;	
	
	$tpl->assign("css_path", INCLUDE_PATH_USER_STYLE);
	$tpl->assign("js_path",  INCLUDE_PATH_USER_JS);
	//mysql_query("set time_zone='-05:00'");
?>