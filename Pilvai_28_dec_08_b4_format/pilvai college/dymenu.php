<?php

		global $t;
	  	$dy_menu;

  		//$qry_SubMenuDetail = "select  module_name,file_name,Module_Id from module_master  where module_group='"
		//. $_SESSION['dymenu']."'";
		
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
					//$t->assign('dy_menu_type'.$i, 0);
					$dymenu .= $i.'-'.$row[1];
					$i=$i+1;
			}
			$i=1;
				
			if (!$rslt_SubMenuDetail) {
				$dymenu = mysql_error();
							
			}elseif($noRow <= 0){
				$dymenu = "No Data found";
				$_SESSION['middle_contents_page']='home.php';
				$_SESSION['module_id']=0;
				//$_SESSION['module_type']=0;
			} else{
				
				while ($row = mysql_fetch_array($rslt_SubMenuDetail, MYSQL_NUM)) 
				{
					if($i==1){
						
						$_SESSION['middle_contents_page']=$row[1];
						$_SESSION['module_id']=$row[2];
						//$_SESSION['module_type']=$row[3];
						}
					
					$t->assign('dy_menu_p'.$i, $row[0]);
					$t->assign('dy_menu_f'.$i, $row[1]);
					$t->assign('dy_menu_mid'.$i, $row[2]);
					//$t->assign('dy_menu_type'.$i, $row[3]);
					$dymenu .= $i.'-'.$row[1];
					$i=$i+1;
				}
			}
			if ($_SESSION['dymenu']== "about_us"){
				$t->assign('menu_name','About Us')	;
			}else{
				$t->assign('menu_name',$_SESSION['dymenu'])	;
			}
			$t->display( 'header/dy_menu.tpl');


?>


