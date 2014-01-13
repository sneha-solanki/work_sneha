<?php

	require_once('include/loader.php');
	include_once("include/config/common.php");

	
		
	if ((($_FILES["file"]["type"] == "image/gif")
	    || ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/jpeg"))
		&& ($_FILES["file"]["size"] < 2000000))
  	{
  		if ($_FILES["file"]["error"] > 0)
    	{
    		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    	}
  		else
    	{
			
			 if (file_exists("UploadImages/" . $_FILES["file"]["name"]))
      		{
      			echo $_FILES["file"]["name"] . " already exists. ";
				
      			}else{
	  					 
						 $folderPath="UploadImages/" ;
						 $_SESSION['image_path'] = $folderPath."/" . $_FILES["file"]["name"];
						
						 
						 if (is_dir($folderPath)==false){
							mkdir($folderPath, 0700);
						 }
									 
						 //echo($_SESSION['m_project_id']);
						 move_uploaded_file($_FILES["file"]["tmp_name"],$folderPath."/". $_FILES["file"]["name"]);
						 echo "<b>Stored in:</b> " . "$folderPath/". $_FILES["file"]["name"]."<br/>";
						 echo "Upload: " . $_FILES["file"]["name"] . "<br />";
						 echo "Type: " . $_FILES["file"]["type"] . "<br />";
						 echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
						 echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
						 echo $_SESSION['image_path'];
						 echo "<b>Succesfully Uploaded</b>"	;									
					
	  
    
      }
    }
  }
else
  {
  
  }
	
	$t->assign('upload_file','upload_img_project.php');
	$t->display('middle/upload_file.tpl');
	
	
?>



