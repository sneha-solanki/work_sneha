<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Business Inquiry</title>
<link href="css/seven_style.css" rel="stylesheet" type="text/css" />
<link href="js/agenda.js"  /> 
<script language=javascript type="text/javascript">
    var message="Function Disabled!";

    function showSearchdiv(controlName){

	    if(document.getElementById(controlName).style.display == 'inline'){
		    document.getElementById(controlName).style.display = 'none';
    	}else{
	    document.getElementById(controlName).style.display = 'inline';
	    }
    }
</script>
</head>

<body>
<form action="inquiry.php" method="post" style="text-align:center" >
<table width="97%" height="348" border="0" cellpadding="0"  cellspacing="0" style="background-image:url(images/enq_03.gif); background-repeat:no-repeat;"  >
  <tr>
    <td width="38%"></td>
    <td width="62%"  valign="top" ><table width="95%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="2%" rowspan="12">&nbsp;</td>
        <td width="46%">&nbsp;</td>
        <td width="2%">&nbsp;</td>
        <td width="48%">&nbsp;</td>
        <td width="2%" rowspan="12">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" align="right" valign="top" class="label" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><label>
              <input name="radiobutton" type="radio" value="radiobutton" onclick="showSearchdiv('staff')" />
              Outsources</label></td>
            <td><label>
              <input name="radiobutton" type="radio" value="radiobutton" onclick="showSearchdiv('staff')"  />
              Staffing Services</label></td>
            <td><label>
              <input name="radiobutton" type="radio" value="radiobutton"  onclick="showSearchdiv('free')"/>
              Free Scrutinity</label></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td align="right" valign="top" class="label" >&nbsp;</td>
        <td align="right" valign="top" class="label" >&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label" >Company  : </td>
        <td align="right" valign="top" class="label" >&nbsp;</td>
        <td align="left" valign="top"><label>
          <input name="txt_company_name" type="text" id="txt_company_name" size="30" />
        </label></td>
        </tr>
      <tr>
        <td align="right" valign="top" class="label">Contact : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_company_name2" type="text" id="txt_company_name2" size="30" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Mobile  : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_company_name22" type="text" id="txt_company_name22" size="30" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Contact Person  : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_person_name" type="text" id="txt_person_name" size="30" /></td>
        </tr>
      
      <tr>
        <td align="right" valign="top" class="label">Contact Person Mobile : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_person_name2" type="text" id="txt_person_name2" size="30" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Functional Roal : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_email" type="text" id="txt_email" size="47" /></td>
        </tr>
      <tr >
        <td colspan="3" align="right" valign="top" class="label">
		<div id="free" style="display:none;">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="44%" align="right" valign="top" class="label">Inquiry Details : </td>
            <td width="2%" >&nbsp;</td>
            <td width="54%" align="left"><textarea name="txt_email23" cols="35" rows="5" id="txt_email23"></textarea></td>
          </tr>

        </table>
		</div></td>
        </tr>
	<div id="out/staff" style="display:none;">	
      <tr >
        <td colspan="3" align="right" valign="top" class="label">
		<div  id="staff" style="display:none;">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="44%" align="right" valign="top" class="label">Duration : </td>
            <td width="2%" >&nbsp;</td>
            <td width="54%" align="left"><input name="txt_email2" type="text" id="txt_email2" size="10" /></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="label">Min Experiance : </td>
            <td>&nbsp;</td>
            <td align="left"><input name="txt_email22" type="text" id="txt_email22" size="10" /></td>
          </tr>
          <tr>
            <td  align="right" valign="top" class="label">Join Date : </td>
            <td >&nbsp;</td>
            <td align="left"><a href="javascript:void(0)" onclick="if(self.gfPop)gfPop.fPopCalendar(document.inquiry.txt_start_date);return false;" ><span >
              <input name="txt_start_date" type="text" id="txt_start_date" maxlength="12" />
            </span><img src="images/calbtn.gif" alt="calender" name="popcal" width="16" height="16" border="0" align="absmiddle" id="popcal" /></a></td>
            </tr>
        </table>
		</div>
		
		</td>
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
            <td width="62%">
			  <input class="button"  align="left" name="btn_submit" type="submit" id="btn_submit" value="Submit" />
			  <input class="button" align="right"  name="btn_cancel" type="submit" id="btn_cancel" value="Cancel" /></td>
            <td width="38%">&nbsp;</td>
          </tr>
        </table></td>
        </tr>
    </table></td>
  </tr>
</table>
</form>
</body>
</html>

<iframe  name="gToday:normal:agenda.js" id="gToday:normal:agenda.js" src="js/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

<form action="inquiry.php" method="post" style="text-align:center" >
<?php
	
	//include('connection.php');
//	include('functions.php');
	
	

	if (isset($_POST['btn_submit'] ) )
	{
			// Save Record in databse
			/*$Max_id = MaxValue(TABLE_QUR_MASTER,"inq_id");
				
				$sqlQry="INSERT INTO ".TABLE_QUR_MASTER." VALUES ('$Max_id','"
						.$_REQUEST[txt_name]."','"
						.$_REQUEST[txt_m_name]."','"
						.$_REQUEST[txt_l_name]."','"
						.$_REQUEST[txt_email]."','"
						.$_REQUEST[txt_tel_no]."','"
						.$_REQUEST[txt_mobile_no]."','"
						.$_REQUEST[txt_subject]."','"
						.$_REQUEST[txt_inq_details]."')";
			
						$rslt_sqlQry = mysql_query($sqlQry);*/
						
						// Send Mail to 7Sources
						
						
				
					    $ToEmail = "pradip_patelmca@yahoo.co.in"; 
						$EmailSubject = 'New Enquiry'; 
						$mailheader = "From: info@7sources.net"; 
						$mailheader .= "Content-type: text/html; charset=iso-8859-1 \r\n"; 
						$MESSAGE_BODY = "Company Name: ".$_REQUEST[txt_company_name]." \r\n" ;
						$MESSAGE_BODY .= "Person Name: ".$_REQUEST[txt_person_name]." \r\n"; 
						$MESSAGE_BODY .= "Email ID: ".$_REQUEST[txt_email]." \r\n"; 
						$MESSAGE_BODY .= "Tel No: ".$_REQUEST[txt_tel_no]." \r\n"; 
						$MESSAGE_BODY .= "Mobile: ".$_REQUEST[txt_mobile_no]." \r\n"; 
						$MESSAGE_BODY .= "Requiry Functional Area: ".$_REQUEST[cmbo_req_area]." \r\n"; 
						$MESSAGE_BODY .= "Subject: ".$_REQUEST[txt_subject]." \r\n"; 
						$MESSAGE_BODY .= "Inquiry Details: ".$_REQUEST[txt_inq_details]." \r\n"; 
						

						mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
						
						
						// Send Mail to Visiter
						
						$ToEmail = $_REQUEST[txt_email]; 
						$EmailSubject = "Thanks For 7 Sources Enquiry"; 
						$mailheader = "From: info@7sources.net\r\n"; 
						$mailheader .= "Reply-To: info@7sources.net\r\n"; 
						$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
						$MESSAGE_BODY = "Thanks For 7 Sources Enquiry\r\n"; 
						$MESSAGE_BODY = "We will contact you through below details\r\n"; 
						$MESSAGE_BODY = "Company Name: ".$_REQUEST[txt_company_name]."\r\n"; 
						$MESSAGE_BODY .= "Person Name: ".$_REQUEST[txt_person_name]."\r\n"; 
						$MESSAGE_BODY .= "Email ID: ".$_REQUEST[txt_email]."\r\n"; 
						$MESSAGE_BODY .= "Tel No: ".$_REQUEST[txt_tel_no]."\r\n"; 
						$MESSAGE_BODY .= "Mobile: ".$_REQUEST[txt_mobile_no]."\r\n"; 
						$MESSAGE_BODY .= "Requiry Functional Area: ".$_REQUEST[cmbo_req_area]."\r\n"; 
						$MESSAGE_BODY .= "Subject: ".$_REQUEST[txt_subject]."\r\n"; 
						$MESSAGE_BODY .= "Inquiry Details: ".$_REQUEST[txt_inq_details]."\r\n"; 
						
						mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
						
						$action_status = 'Your Inquiry successfully done';											
						
						echo $action_status ;
		
		
	}
	if (isset($_POST['btn_cancel'] ) )
	{
		$_REQUEST[txt_company_name]="";
		$_REQUEST[txt_person_name]="";
		$_REQUEST[txt_tel_no]="";
		$_REQUEST[txt_mobile_no]="";
		$_REQUEST[cmbo_req_area]="";
		$_REQUEST[txt_subject]="";
		$_REQUEST[txt_inq_details]="";
		$_REQUEST[txt_email]="";
	}
	
	
		
?>
</form>
