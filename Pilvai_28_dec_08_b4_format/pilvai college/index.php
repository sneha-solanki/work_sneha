<?php
	require_once('include/loader.php');
	include_once("include/config/common.php");

	if (	$_SESSION['dymenu']==NULL || $_SESSION['dymenu']=="")
	{
		$_SESSION['dymenu']="home";
		
	}
	if (	$_SESSION['middle_contents_page']==NULL || $_SESSION['middle_contents_page']=="")
	{
		$_SESSION['middle_contents_page']="home.php";
		
	}
	
	$qry_SubMenuDetail = " SELECT  Module_Name,File_Name,Module_Id FROM ".TABLE_MODULE_MASTER
						." WHERE Module_Group='".$_SESSION['dymenu']."'";


	$rslt_SubMenuDetail = mysql_query($qry_SubMenuDetail);
	$noRow =mysql_num_rows($rslt_SubMenuDetail);
	
	$i=1;
	while ($i<=10) 
	{
		$t->assign('dy_menu_p'.$i, '');
		$t->assign('dy_menu_f'.$i, '');
		$t->assign('dy_menu_mid'.$i, 0);
		$t->assign('dy_menu_type'.$i, 0);
		$dymenu .= $i.'-'.$row[1];
		$i=$i+1;
	}
	$i=1;
		
	if (!$rslt_SubMenuDetail) {
		$dymenu = mysql_error();
					
	}elseif($noRow <= 0){
		$dymenu = "No Data found";
				$_SESSION['middle_contents_page']='contents_detail.php';
				$_SESSION['module_id']=0;
				$_SESSION['module_type']=0;
	} else{
		$i=1;
		
		while ($dymenu_row = mysql_fetch_array($rslt_SubMenuDetail, MYSQL_NUM)) 
		{
			if($i==1 && $_SESSION['middle_contents_page']=='Null'){
				
				$_SESSION['middle_contents_page']=$dymenu_row[1];
				$_SESSION['module_id']=$dymenu_row[2];
				$_SESSION['module_type']=$dymenu_row[3];
			}
			$t->assign('dy_menu_p'.$i, $dymenu_row[0]);
			$t->assign('dy_menu_f'.$i, $dymenu_row[1]);
			$t->assign('dy_menu_mid'.$i, $dymenu_row[2]);
			//$t->assign('dy_menu_type'.$i, $dymenu_row[3]);
			$dymenu .= $i.'-'.$dymenu_row[1];
			$i=$i+1;
		}
		
	}
	
	function update_dymenu() {
		$_SESSION['dymenu']=$_GET['dymenu'];
		include('dymenu.php');
	}
	
	function update_middle_contents() {
  		global $t;
		$tokens = ",";
		$fndaction = strtok($_GET['page'],$tokens);
		$cnt =0;
		$params = array();

		while($fndaction){
				$params[$cnt] = $fndaction;	
				$fndaction = strtok($tokens);
				$cnt++;
		}
		if ($params[0]<>NULL ||$params[0]<>"")
		{	
			$_SESSION['middle_contents_page']=$params[0];
		}
		//$_SESSION['middle_contents_page']=$_GET['page'];
		$_SESSION['module_id']=$params[1];
		//$_SESSION['module_type']=$params[2];
		//print($_GET['page']);
				
		include($_SESSION['middle_contents_page']);	
		
	}	
	
	function onload_update_middle_contents() {
  		global $t;
		include($_SESSION['middle_contents_page']);	
	}
	
	function update_paging_contents() {
  		global $t;
		$tokens = ",";
		$fndaction = strtok($_GET['page'],$tokens);
		$cnt =0;
		$params = array();

		while($fndaction){
				$params[$cnt] = $fndaction;	
				$fndaction = strtok($tokens);
				$cnt++;
		}
		
		$_SESSION['mPaging']=$params[0];
		
		if ($_SESSION['mPaging']=='PrePage'){
			if ($_SESSION['Grid_Page_No'] > 1){
				$_SESSION['Grid_Page_No']--;			}
		}elseif($_SESSION['mPaging']=='NextPage'){
			if ($_SESSION['Grid_Page_No'] < $_SESSION['tPages']){
				$_SESSION['Grid_Page_No'] ++;			}
		}elseif($_SESSION['mPaging']=='GotoPage'){
				if ($_COOKIE['goto_page']=='' || $_COOKIE['goto_page']==NULL){
					$_COOKIE['goto_page']=1;				}
				if($_COOKIE['goto_page']>=1 and $_COOKIE['goto_page']<=$_SESSION['tPages']){
					$_SESSION['Grid_Page_No']=$_COOKIE['goto_page'];				}
		}			
		include($_SESSION['middle_contents_page']);			
	}
	
	//function left_menu_upadate() {
//  		global $t;
//		
//		$_SESSION['left_menu_upadate']=$_GET['page'];
//		include($_GET['page']);	
//	}
	
	
	
	ajax_register('update_middle_contents');
	//ajax_register('left_menu_upadate');
	ajax_register('on_load_update_middle_contents');
	ajax_register('update_dymenu');
	ajax_register('update_paging_contents');
	
	
	
	ajax_process_call();
	
	
	$_SESSION['page_title']='Pilavi collage';	
	$t->assign('page_title',$_SESSION['page_title']);
	
		

	$t->assign('headerFile', 'header/header.tpl');
	$t->assign('page_template', 'index');
	$t->assign('left_panel', 'middle/menu/left_panel.tpl');
	$t->assign('dymenutpl', 'header/dy_menu.tpl');
	

	//$t->assign('footerFile', 'footer/footer.tpl');
	
		
	$t->display('page.tpl');

?>

