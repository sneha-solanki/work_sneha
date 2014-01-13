<?php
	
	require_once('include/loader.php');
	include_once("include/config/common.php");
	
	if ($_REQUEST['action'] !=''){
	
		$tokens = "(;)";
		$fndaction = strtok($_REQUEST['action'],$tokens);
		$cnt =0;
		$Action = array();
	
		while($fndaction){
				$Action[$cnt] = $fndaction;
				$fndaction = strtok($tokens);
				$cnt++;
				
			}
			
				$_SESSION['m_Action']=$Action[0];
				$_SESSION['mStaff_id'] =$Action[1];
		}	
		
	function submit_data() {
		
			$action_status='';
				
			if( $_GET[p_name] =='' || $_GET[p_desig] ==''){
			
					if( $_GET[p_name] ==''){
						$action_status .='Name not be Blank ';
					}else if( $_GET[p_description] ==''){
						$action_status .='Designation Sbould not be Blank ';
					}
			}else{
						if ($_SESSION['m_Action']=="New"){
								
								$Max_id = MaxValue(TABLE_STAFF_DETAILS,"staff_id");
								$sqlQry="INSERT INTO ".TABLE_STAFF_DETAILS." VALUES ('$Max_id ','"
								.$_GET[p_name]."','"
								.$_GET[p_desig]."','"
								.$_GET[p_dept]."','"
								.$_GET[p_birth]."','"
								.$_GET[p_join]."','"
								.$_GET[p_qulif]."','"
								.$_GET[p_au]."','"
								.$_GET[p_pg]."','"
								.$_GET[p_research]."','"
								.$_GET[p_publish]."','"
								.$_GET[p_present]."','"
								.$_GET[p_artical]."','"
								.$_GET[p_books]."','"
								.$_GET[p_working]."','"
								.$_GET[p_complete]."','"
								.$_GET[p_orient]."','"
								.$_GET[p_refresher]."','"
								.$_GET[p_state]."','"
								.$_GET[p_national]."','"
								.$_GET[p_international]."','"
								.$_GET[p_univ_1]."','"
								.$_GET[p_univ_2]."','"
								.$_GET[p_univ_3]."','"
								.$_GET[p_body_1]."','"
								.$_GET[p_body_2]."','"
								.$_GET[p_body_3]."','"
								.$_GET[p_working_1]."','"
								.$_GET[p_working_2]."','"
								.$_GET[p_working_3]."','"
								.$_GET[p_achivment]."','"
								.$_GET[p_hobbies]."','"
								.$_SESSION['image_path']."')";
						
								$rslt_sqlQry = mysql_query($sqlQry);
				
								if(mysql_affected_rows() == -1 ) {												
										$action_status .= mysql_error();
								}else{
										$action_status = 'true';											
								}		
						}
	
						if ($_SESSION['m_Action']=="Edit"){
								
						 $sqlQry="UPDATE ".TABLE_STAFF_DETAILS. " SET "
								."name  ='".$_GET[p_category_name]."', "
								."designation  ='".$_GET[p_category_name]."', "
								."department  ='".$_GET[p_category_name]."', "
								."birth_date  ='".$_GET[p_category_name]."', "
								."join_date  ='".$_GET[p_category_name]."', "
								."qulification  ='".$_GET[p_category_name]."', "
								."tech_exp_au  ='".$_GET[p_category_name]."', "
								."tech_exp_pg  ='".$_GET[p_category_name]."', "
								."tech_exp_research  ='".$_GET[p_category_name]."', "
								."res_pub_published  ='".$_GET[p_category_name]."', "
								."res_pub_present  ='".$_GET[p_category_name]."', "
								."res_pub_articales  ='".$_GET[p_category_name]."', "
								."res_pub_books  ='".$_GET[p_category_name]."', "
								."res_pub_working  ='".$_GET[p_category_name]."', "
								."res_pub_completed  ='".$_GET[p_category_name]."', "
								."partic_orientation  ='".$_GET[p_category_name]."', "
								."partic_refresher  ='".$_GET[p_category_name]."', "
								."partic_state  ='".$_GET[p_category_name]."', "
								."partic_national  ='".$_GET[p_category_name]."', "
								."partic_international  ='".$_GET[p_category_name]."', "
								."assos_univ_name_1  ='".$_GET[p_category_name]."', "
								."assos_univ_name_2  ='".$_GET[p_category_name]."', "
								."assos_univ_name_3  ='".$_GET[p_category_name]."', "
								."assos_body_1  ='".$_GET[p_category_name]."', "
								."assos_body_2  ='".$_GET[p_category_name]."', "
								."assos_body_3  ='".$_GET[p_category_name]."', "
								."assos_working_as_1  ='".$_GET[p_category_name]."', "
								."assos_working_as_2  ='".$_GET[p_category_name]."', "
								."assos_working_as_3  ='".$_GET[p_category_name]."', "
								."achievement  ='".$_GET[p_category_name]."', "
								."hobbies  ='".$_GET[p_category_name]."', "
								."image  ='".$_SESSION['image_path']."'"
								." WHERE  staff_id=".$_SESSION['mStaff_id'] ;
								
								$rslt_sqlQry = mysql_query($sqlQry);
				
								if(mysql_affected_rows() == -1 ) {												
										$action_status .= mysql_error();
								}else{
										$action_status = 'true';											
								}		
						}
				}
				if ($_SESSION['m_Action']=="Delete"){

						$sqlQry="DELETE  FROM ".TABLE_STAFF_DETAILS." Where staff_id="
						.$_SESSION['mStaff_id'];
				
						$rslt_sqlQry = mysql_query($sqlQry);
		
						if(mysql_affected_rows() == -1 ) {												
								$action_status .= mysql_error();
						}else{
								$action_status = 'true';											
						}		
				}

			echo	$action_status	;
		}
		
	ajax_register('submit_data');
	ajax_process_call();
	
	if( $_SESSION['m_Action'] !='New')
		{
	 	  
			$sqlQry=" SELECT  staff_id,name,  designation ,department,birth_date,join_date," . 
			        " qulification,tech_exp_au,tech_exp_pg,tech_exp_research,res_pub_published , " . 
					" res_pub_present,res_pub_articales,res_pub_books,res_pub_working,res_pub_completed , " . 
					" partic_orientation,partic_refresher,partic_state,partic_national,partic_international, " . 
					" assos_univ_name_1,assos_univ_name_2,assos_univ_name_3,assos_body_1,assos_body_2," .
					" assos_body_3,assos_working_as_1,assos_working_as_2,assos_working_as_3, " . 
					" achievement,hobbies,image FROM ".TABLE_STAFF_DETAILS. " Where staff_id="
					.$_SESSION['mStaff_id'];
					
				$rslt_sqlQry = mysql_query($sqlQry);
				if ($rslt_sqlQry) {
					$noRow =mysql_num_rows($rslt_sqlQry);
	
					if (!$rslt_sqlQry) {
						$action_status = mysql_error();			
					}elseif($noRow == 0){
					} else{
						$row = mysql_fetch_array($rslt_sqlQry, MYSQL_NUM);
						
						$t->assign('img_path',$row[32]);
						$t->assign('fields',$row);
						
					}
				}
		}
	
	
	if($_SESSION['m_Action']=='Delete'){	
		$t->assign('imagebutton','delete_button.jpg');	}
	else if($_SESSION['m_Action']=='Edit')	{
		$t->assign('imagebutton','save_button.jpg');	}
	else{
		$t->assign('imagebutton','save_button.jpg');	}
	
	$t->display('middle/add_staff_member.tpl');
?>

