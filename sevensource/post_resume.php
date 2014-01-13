<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Post Resume</title>
<link href="css/seven_style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="post_resume.php" method="post" style="text-align:center" enctype="multipart/form-data" >
<table width="100%" height="348" border="0" cellpadding="0"  cellspacing="0" style="background-image:url(images/resume.gif); background-repeat:no-repeat;"  >
  <tr>
    <td width="38%"></td>
    <td width="60%"  valign="top" ><table width="100%" border="0" cellspacing="2" cellpadding="0">
      <tr>
        <td width="2%" rowspan="17">&nbsp;</td>
        <td width="42%">Under Construction </td>
        <td width="1%">&nbsp;</td>
        <td width="53%">&nbsp;</td>
        <td width="2%" rowspan="17">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label" >First Name : </td>
        <td align="right" valign="top" class="label" >&nbsp;</td>
        <td align="left" valign="top"><label>
          <input name="txt_f_name" type="text" id="txt_f_name" size="30" />
        </label></td>
        </tr>
      
      <tr>
        <td align="right" valign="top" class="label">Last Name : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_l_name" type="text" id="txt_l_name" size="30" /></td>
      </tr>
      

      <tr>
        <td align="right" valign="top" class="label">Email ID : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_email" type="text" id="txt_email" size="50" /></td>
        </tr>
      <tr>
        <td align="right" valign="top" class="label">Alternate Email ID : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_email_2" type="text" id="txt_email_2" size="50" /></td>
      </tr>
      
      <tr>
        <td align="right" valign="top" class="label">Mobile No : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_mobile_no" type="text" id="txt_mobile_no" size="20" /></td>
        </tr>
      <tr>
        <td align="right" valign="top" class="label">Alternate Mobile No: </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_mobile_2" type="text" id="txt_mobile_2" size="20" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Residancy Contact No: </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_res_no" type="text" id="txt_res_no" size="20" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Current Title : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_current_title" type="text" id="txt_current_title" size="20" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Current Responsibility : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_current_respo" type="text" id="txt_current_respo" size="20" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Gender : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><label>
          <select name="cmb_gender" id="cmb_gender">
            <option selected="selected" value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Maritial Status : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><label>
          <select name="cmb_maritial_status" id="cmb_maritial_status">
            <option selected="selected" value="Married">Married</option>
            <option value="Unmarried">Unmarried</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Total Work Experiance : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_work_exp" type="text" id="txt_work_exp" size="15" /> 
          <span class="label">Month</span></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Current Salary : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><label>
          <input name="txt_salary" type="text" id="txt_salary" size="15" />
          <select name="cmb_salary" id="cmb_salary">
			  <option value="Netherlands Antilles Guilder">Netherlands Antilles Guilder</option>
			  <option value="Australian dollar">Australian dollar</option>
			  <option value="Canadian dollar">Canadian dollar</option>
			  <option value="Swiss franc">Swiss franc</option>
			  <option value="Chinese yuan">Chinese yuan</option>
			  <option value="Danish krone">Danish krone</option>
			  <option value="Euro" selected="selected">Euro</option>
			  <option value="British pound">British pound</option>
			  <option value="Hong Kong dollar">Hong Kong dollar</option>
			  <option value="Indian rupee">Indian rupee</option>
			  <option value="Japanese yen">Japanese yen</option>
			  <option value="South Korean won">South Korean won</option>
			  <option value="Mexican peso">Mexican peso</option>
			  <option value="Norwegian krone">Norwegian krone</option>
			  <option value="New Zealand dollar">New Zealand dollar</option>
			  <option value="Russian ruble">Russian ruble</option>
			  <option value="Swedish kron">Swedish kron</option>
			  <option value="Singapore dollar">Singapore dollar</option>
			  <option value="Taiwan dollar">Taiwan dollar</option>
			  <option value="U.S. dollar">U.S. dollar</option>
			  <option value="South African rand">South African rand</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Join Period : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><label>
          <select name="cmb_join_mon" id="cmb_join_mon">
            <option selected="selected" value="1 Month">1 Month</option>
            <option value="2 Month">2 Month</option>
            <option value="3 Month">3 Month</option>
          </select>
        </label></td>
      </tr>
      
      <tr>
        <td align="right" valign="top" class="label"><label for="file">Upload Resume :</label> </td>
		
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="file" type="file" id="file" size="38" /> </td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="55%">
			  <input class="button"  align="left" name="btn_submit" type="submit" id="btn_submit" value="Submit" />
			  <input class="button" align="right"  name="btn_cancel" type="submit" id="btn_cancel" value="Cancel" /></td>
            <td width="45%">&nbsp;</td>
          </tr>
        </table></td>
        </tr>
    </table></td>
  </tr>
</table>
</form>
</body>
</html>

<form action="post_resume.php" method="post" style="text-align:center" enctype="multipart/form-data" >
<?php
	
	//include('connection.php');
	//include('functions.php');
	
	

	if (isset($_POST['btn_submit'] ) )
	{
	
			
						/*$attachFile = $_FILES["file"]["tmp_name"];
						
						$file = fopen($attachFile,'rb');
						$data = fread($file,filesize($attachFile));
						fclose($file);

						
						$data = chunk_split(base64_encode(file_get_contents($file)));*/
			
		     			$ToEmail = "patel.pradipmca@gmail.com"; 
						$EmailSubject = 'New Enquiry'; 
						$mailheader = "From: info@7sources.net"; 
						$mailheader .= "Content-type: text/html; charset=iso-8859-1 \r\n"; 
						$MESSAGE_BODY = "First Name : ".$_REQUEST[txt_f_name]." \r\n" ;
						$MESSAGE_BODY .= "Last Name : ".$_REQUEST[txt_l_name]." \r\n"; 
						$MESSAGE_BODY .= "Email ID: ".$_REQUEST[txt_email]." \r\n"; 
						$MESSAGE_BODY .= "Alternate Email ID : ".$_REQUEST[txt_email_2]." \r\n"; 
						$MESSAGE_BODY .= "Mobile NO : ".$_REQUEST[txt_mobile_no]." \r\n"; 
						$MESSAGE_BODY .= "Atlernate Mobile NO : ".$_REQUEST[txt_mobile_2]." \r\n"; 
						$MESSAGE_BODY .= "Residancy NO : ".$_REQUEST[txt_res_no]." \r\n"; 
						$MESSAGE_BODY .= "Current Title : ".$_REQUEST[txt_current_title]." \r\n"; 
						$MESSAGE_BODY .= "Current Responsibility : ".$_REQUEST[txt_current_respo]." \r\n";
						$MESSAGE_BODY .= "Gender : ".$_REQUEST[cmb_gender]." \r\n"; 
						$MESSAGE_BODY .= "Maritial Status : ".$_REQUEST[cmb_maritial_status]." \r\n"; 
						$MESSAGE_BODY .= "Working Expriance : ".$_REQUEST[txt_work_exp]." Month \r\n"; 
						$MESSAGE_BODY .= "Salary : ".$_REQUEST[txt_salary]." ".$_REQUEST[cmb_salary]."\r\n"; 
						$MESSAGE_BODY .= "Join in Month : ".$_REQUEST[cmb_join_mon]." \r\n"; 
						//$MESSAGE_BODY .= "Attachment: ". $data ." \r\n"; 
						
						mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
						
						// Mail Sent to Visiter 
						
						$ToEmail = $_REQUEST[txt_email]; 
						$EmailSubject = 'Respons From Sevensources '; 
						$mailheader = "From: info@7sources.net"; 
						$mailheader .= "Content-type: text/html; charset=iso-8859-1 \r\n"; 
						$MESSAGE_BODY = "First Name : ".$_REQUEST[txt_f_name]." \r\n" ;
						$MESSAGE_BODY .= "Last Name : ".$_REQUEST[txt_l_name]." \r\n"; 
						$MESSAGE_BODY .= "Email ID: ".$_REQUEST[txt_email]." \r\n"; 
						$MESSAGE_BODY .= "Alternate Email ID : ".$_REQUEST[txt_email_2]." \r\n"; 
						$MESSAGE_BODY .= "Mobile NO : ".$_REQUEST[txt_mobile_no]." \r\n"; 
						$MESSAGE_BODY .= "Atlernate Mobile NO : ".$_REQUEST[txt_mobile_2]." \r\n"; 
						$MESSAGE_BODY .= "Residancy NO : ".$_REQUEST[txt_res_no]." \r\n"; 
						$MESSAGE_BODY .= "Current Title : ".$_REQUEST[txt_current_title]." \r\n"; 
						$MESSAGE_BODY .= "Current Responsibility : ".$_REQUEST[txt_current_respo]." \r\n";
						$MESSAGE_BODY .= "Gender : ".$_REQUEST[cmb_gender]." \r\n"; 
						$MESSAGE_BODY .= "Maritial Status : ".$_REQUEST[cmb_maritial_status]." \r\n"; 
						$MESSAGE_BODY .= "Working Expriance : ".$_REQUEST[txt_work_exp]." \r\n"; 
						$MESSAGE_BODY .= "Salary : ".$_REQUEST[txt_salary]." ".$_REQUEST[cmb_salary]."\r\n"; 
						$MESSAGE_BODY .= "Join in Period : ".$_REQUEST[cmb_join_mon]." \r\n"; 
						//$MESSAGE_BODY .= "Attachment: ". $data ." \r\n"; 
						
						mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
	
	
		//	//Upload Resume 
//			
//				 if ($_FILES["file"]["size"] < 20000000)
//						  {
//								  if ($_FILES["file"]["error"] > 0)
//									{
//									echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
//									}
//								  else
//									{
//									//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
//									
//									 move_uploaded_file($_FILES["file"]["tmp_name"],"upload/". $_FILES["file"]["name"]);
//									 $fileParth="upload/". $_FILES["file"]["name"];
//									/* echo "<b>Stored in:</b> " . "upload/". $_FILES["file"]["name"]."<br/>";
//									 echo "Upload: " . $_FILES["file"]["name"] . "<br />";
//									 echo "Type: " . $_FILES["file"]["type"] . "<br />";
//									 echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";*/
//									 
//									 echo "<b>Your Resume Succesfully Uploaded</b>"	;	
//									
//									}
//						  }
//						else
//						  {
//						  				echo "Invalid file";
//						  }
//			
//			// Save Record in databse
//			$Max_id = MaxValue(TABLE_JOB_PROFILE,"profile_id");
//				
//				$sqlQry="INSERT INTO ".TABLE_JOB_PROFILE." VALUES ('$Max_id','"
//						.$_REQUEST[txt_first_name]."','"
//						.$_REQUEST[txt_m_name]."','"
//						.$_REQUEST[txt_l_name]."','"
//						.$_REQUEST[txt_email]."','"
//						.$_REQUEST[txt_email_2]."','"
//						.$_REQUEST[txt_tel_no]."','"
//						.$_REQUEST[txt_mobile_no]."','"
//						.$_REQUEST[cboDegree1]."','"
//						.$_REQUEST[cboDegree2]."','"
//						.$_REQUEST[txt_cur_desig]."','"
//						.$_REQUEST[txt_inter_in]."','"
//						.$fileParth."')";
//			
//						$rslt_sqlQry = mysql_query($sqlQry);
	}
	if (isset($_POST['btn_cancel'] ) )
	{
		/*$_REQUEST[txt_company_name]="";
		$_REQUEST[txt_person_name]="";
		$_REQUEST[txt_tel_no]="";
		$_REQUEST[txt_mobile_no]="";
		$_REQUEST[txt_subject]="";
		$_REQUEST[txt_inq_details]="";
		$_REQUEST[txt_email]="";*/
	}
	
	
		
?>
</form>
