<?php

	require_once('include/loader.php');
	include_once("include/config/common.php");
	
	
	
	$Error_Message='';
	$Footer='';
	$Data_Grid_Contents='';
	$action_status='false';
		
		$Grid_Table = array("tName"=>'Staff List', 	"tClass"=>'TableStyle', 
							"tAlign"=>"Left" ,				"tWidth"=>'100%',
							"tHeight"=>'',					"tCellspacing"=>1,
							"tCellpadding"=>0,				"t_tr_Height"=>5,
							"tBorder"=>0,					"Visible"=>true
							);
							
		$Grid_Row_Format = array("r_cellHeight"=>8,
										"rAlign"=>"Center" ,
										"rWidth"=>20,
										"rClass"=>'cellStyle',
										"rClass_Alt"=>'cellStyle_Alt', 
										"link_page"=>'add_staff_member.php',
										"dlgWidth"=>610,
										"dlgHeight"=>530
									);
		$Grid_Header[0] = array(
				
				"staff_id" =>array("hName"=>'Staff ID',	"hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'50',"hColspan"=>1,"Visible"=>false),
									
				"name"  =>array(	"hName"=>'Name',"hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'100',"hColspan"=>1,"Visible"=>true),
				"designation"  =>array(	"hName"=>'Designation',"hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'100',"hColspan"=>1,"Visible"=>true),
				"department"  =>array(	"hName"=>'Department', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'100',"hColspan"=>1,	"Visible"=>true),
				"birth_date"  =>array(	"hName"=>'Birth Date', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"join_date"  =>array("hName"=>'Join Date', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"qulification"  =>array("hName"=>'Qulification', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>true),					
				"tech_exp_au"  =>array(	"hName"=>'Experiance At AU Level', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"tech_exp_pg"  =>array(	"hName"=>'Experiance At PG Level', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"tech_exp_research"  =>array(	"hName"=>'Experiance At Research Level', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"res_pub_published"  =>array(	"hName"=>'Research Paper Published', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"res_pub_present"  =>array(	"hName"=>'Research Paper Presented', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"res_pub_articales"  =>array(	"hName"=>'Articles', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"res_pub_books"  =>array(	"hName"=>'Books', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"res_pub_working"  =>array(	"hName"=>'Research Student Working', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"res_pub_completed"  =>array(	"hName"=>'Research Student Completed', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"partic_orientation"  =>array(	"hName"=>'Participat Oriantation Courses', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"partic_refresher"  =>array(	"hName"=>'Participat Refresher Courses', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"partic_state"  =>array(	"hName"=>'Participation State', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"partic_national"  =>array(	"hName"=>'Participation National', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"partic_international"  =>array(	"hName"=>'Participation International', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"assos_univ_name_1"  =>array(	"hName"=>'Univ_name_1', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"assos_univ_name_2"  =>array(	"hName"=>'Univ_name_2', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"assos_univ_name_3"  =>array(	"hName"=>'Univ_name_3', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"assos_body_1"  =>array(	"hName"=>'Body_Name_1', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"assos_body_2"  =>array(	"hName"=>'Body_Name_2', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"assos_body_3"  =>array(	"hName"=>'Body_Name_3', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"assos_working_as_1"  =>array(	"hName"=>'Working_as_1', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"assos_working_as_2"  =>array(	"hName"=>'Working_as_2', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"assos_working_as_3"  =>array(	"hName"=>'Working_as_3', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"achievement"  =>array(	"hName"=>'Achivment', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"hobbies"  =>array(	"hName"=>'Hobbies', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>false),
				"image"  =>array(	"hName"=>'Image', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'auto',"hColspan"=>1,	"Visible"=>true),																																																																																																																			
				"View_Button" =>array("hName"=>'View', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'30',"Visible"=>true)
																				
				/*"Edit_Button" =>array("hName"=>'Edit', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'30',"Visible"=>true),
									
												
			    "Delete_Button" =>array("hName"=>'Delete', "hClass"=>'cellHeadStyle', 
									"hAlign"=>"Center" ,"hWidth"=>'30',"Visible"=>true)*/
									
							  );
				 
			$qry_Project =  "SELECT staff_id,name,designation,department,birth_date,join_date,qulification," . 
							" tech_exp_au,tech_exp_pg,tech_exp_research,res_pub_published,res_pub_present,res_pub_articales,".
							" res_pub_books,res_pub_working,res_pub_completed,partic_orientation,partic_refresher,partic_state,".
							" partic_national,partic_international,assos_univ_name_1,assos_univ_name_2,assos_univ_name_3,".
							" assos_body_1,assos_body_2,assos_body_3,assos_working_as_1,assos_working_as_2,assos_working_as_3,".
							" achievement,hobbies,image From ". TABLE_STAFF_DETAILS ."";
					
			             			 
			/*$Obj=new Paging($qry_Project);
			$Obj->setLimit(RECORD_LIMIT);
			
			$limit=$Obj->getLimit();
			$offset=$Obj->getOffset($_SESSION['Grid_Page_No']);
			
			$_SESSION['tPages']=$Obj->getNoOfPages();
			$t->assign('tPages',$_SESSION['tPages']);
			$t->assign('cPage',$_SESSION['Grid_Page_No']);

			$qry_Project.= " limit $offset,$limit";*/
			
				
				$rslt_Project = mysql_query($qry_Project);
				$noRow =mysql_num_rows($rslt_Project);
				
				
				if (!$rslt_Project) {
					$Data_Grid_Contents = mysql_error();
				}elseif($noRow <= 0){
					$Data_Grid_Contents = "No Data found";
				} else{
					$i=0;
					$Rows_Contents = array();
				while ($row = mysql_fetch_array($rslt_Project,MYSQL_NUM)) {
		                
						$row[32]='<img src="'.$row[32].'" width="80" height="70" >';
		
		$Rows_Contents[$i] = array(
						
							"staff_id"   =>array(	"cName"=>$row[0], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" ,"para_id"=>true),
				            "name"         =>array(	"cName"=>$row[1], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" ,"para_id"=>false),
						   "designation"    =>array(	"cName"=>$row[2], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),		
							"department"	   =>array(	"cName"=>$row[3], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),									
							"birth_date" =>array(	"cName"=>$row[4], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" ,"para_id"=>false),
							"join_date" =>array(	"cName"=>$row[5], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" ,"para_id"=>false),				
							"qulification"       =>array(	"cName"=>$row[6], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" ,"para_id"=>false),
							"tech_exp_au"=>array(	"cName"=>$row[7], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"tech_exp_pg"=>array(	"cName"=>$row[8], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"tech_exp_research"=>array(	"cName"=>$row[9], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"res_pub_published"=>array(	"cName"=>$row[10], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"res_pub_present"=>array(	"cName"=>$row[11], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"res_pub_articales"=>array(	"cName"=>$row[12], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),								
							"res_pub_books"=>array(	"cName"=>$row[13], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"res_pub_working"=>array(	"cName"=>$row[14], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),	
                            "res_pub_completed"=>array(	"cName"=>$row[15], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),												
							"partic_orientation"=>array(	"cName"=>$row[16], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),												
							"partic_refresher "=>array(	"cName"=>$row[17], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),												
							"partic_state"=>array(	"cName"=>$row[18], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),												
							"partic_national"=>array(	"cName"=>$row[19], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),												
							"partic_international"=>array(	"cName"=>$row[20], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),												
							"assos_univ_name_1"=>array(	"cName"=>$row[21], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"assos_univ_name_2"=>array(	"cName"=>$row[22], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"assos_univ_name_3"=>array(	"cName"=>$row[23], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"assos_body_1"=>array(	"cName"=>$row[24], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"assos_body_2"=>array(	"cName"=>$row[25], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"assos_body_3"=>array(	"cName"=>$row[26], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"assos_working_as_1"=>array(	"cName"=>$row[27], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"assos_working_as_2"=>array(	"cName"=>$row[28], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),	
							"assos_working_as_3"=>array(	"cName"=>$row[29], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),	
							"achievement"=>array(	"cName"=>$row[30], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),	
							"hobbies"=>array(	"cName"=>$row[31], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),
							"image"=>array(	"cName"=>$row[32], 
											"cClass"=>'cellStyle', 
											"cAlign"=>"left" , "para_id"=>false),					
								
				);
					
					$i=$i+1;
			 }
			 
			}
		
			
			$AddTable = "<table width='100%' border='0'><tr><td>";
			$AddTable .=data_grid($Grid_Table,$Grid_Header,$Grid_Row_Format,$Rows_Contents);
			$AddTable.=	 "</td></tr></table>";
			$Data_Grid_Contents= $AddTable;
			$_SESSION['ExportData']= $AddTable;
			
			$t->assign('Data_Grid',$Data_Grid_Contents);
			$t->assign('Add_Right','onclick="displayMessage(\'add_staff_member.php?action=New(0)\',649,700);"');
			$t->assign('Form_Name','Staff Detail');
	

	$t->display('middle/staff_details.tpl');
?>

