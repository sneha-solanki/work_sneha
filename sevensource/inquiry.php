<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Business Inquiry</title>
<link href="css/seven_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/agenda.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
		
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
        <td width="2%" rowspan="15">&nbsp;</td>
        <td width="46%">&nbsp;</td>
        <td width="2%">&nbsp;</td>
        <td width="48%">&nbsp;</td>
        <td width="2%" rowspan="15">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" align="right" valign="top" class="label" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
          
          <tr>
            <td><label>
              <input name="chk_out" type="checkbox" id="chk_out" value="checkbox" onclick="showSearchdiv('staff')" />
              Outsources</label></td>
            <td><label>
              <input name="chk_staff" type="checkbox" id="chk_staff" value="checkbox" onclick="showSearchdiv('staff')" />
              Staffing Services</label></td>
            <td><label>
              <input name="chk_free" type="checkbox" id="chk_free" value="checkbox" onclick="showSearchdiv('free')" />
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
          <input name="txt_com_name" type="text" id="txt_com_name" size="30" />
        </label></td>
        </tr>
      <tr>
        <td align="right" valign="top" class="label">Contact No: </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_contact_no" type="text" id="txt_contact_no" size="30" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Mobile  : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_com_mobile" type="text" id="txt_com_mobile" size="30" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Contact Person  : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_contact_person" type="text" id="txt_contact_person" size="30" /></td>
        </tr>
      
      <tr>
        <td align="right" valign="top" class="label"> Direct NO : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_contact_pers_no" type="text" id="txt_contact_pers_no" size="20" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Alternate Mobile : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_contact_pers_no2" type="text" id="txt_contact_pers_no2" size="20" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="label">Functional Roal : </td>
        <td align="right" valign="top" class="label">&nbsp;</td>
        <td align="left" valign="top"><input name="txt_fun_roal" type="text" id="txt_fun_roal" size="47" /></td>
        </tr>
      <tr>
        <td colspan="3" align="right" valign="top" class="label">
		
			<div  id="staff"   >
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="42%" align="right" valign="top" class="label">Duration : </td>
            <td width="1%" rowspan="2"  ></td>
            <td width="57%" align="left"><label>
              <select name="cmb_duration" id="cmb_duration">
                <option selected="selected" value="3 Month">3 Month</option>
                <option value="6 Month">6 Month</option>
                <option value="1 Year">1 Year</option>
                <option value="2 Year">2 Year</option>
              </select>
            </label></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="label">Min Experiance : </td>
            <td align="left"><input name="txt_min_exp" type="text" id="txt_min_exp" size="10" />
              Month</td>
          </tr>
          <tr>
            <td align="right" valign="top" class="label">Join Date : </td>
            <td  ></td>
            <td align="left"><input name="txt_join_date" type="text" class="text" id="txt_join_date" size="20" maxlength="100" />
            <a href="javascript:void(0)" onclick="if(self.gfPop)gfPop.fPopCalendar(document.inquiry.txt_join_date);return false;" ><img name="popcal" align="absmiddle" src="images/calbtn.gif" width="16" height="16" border="0" alt="calender" id="popcal" /></a></td>
          </tr>
        </table>
		</div>		</td>
        </tr>
      <tr>
        <td colspan="3" align="right" valign="top" class="label">
		<div id="free"  >
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="41%" align="right" valign="top" class="label">Inquiry Details : </td>
            <td width="2%" >&nbsp;</td>
            <td width="57%" align="left"><textarea name="txt_inq_details" cols="35" rows="5" id="txt_inq_details"></textarea></td>
          </tr>
        </table>
		</div>		</td>
        </tr>
      <tr >
        <td colspan="3" align="right" valign="top" class="label">		</td>
        </tr>
	
      
      <tr>
        <td colspan="3"><table width="36%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="44%" align="center"><input class="button"  align="left" name="btn_submit" type="submit" id="btn_submit" value="Submit" /></td>
            <td width="56%" align="center"><input class="button" align="right"  name="btn_cancel" type="submit" id="btn_cancel" value="Cancel" /></td>
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
						
						
				
					   // $ToEmail = "sevensources@gmail.com";
						$ToEmail = "patel.pradipmca@gmail.com";
						$EmailSubject = 'New Business Inquiry'; 
						$mailheader = "From: info@7sources.net"; 
						$mailheader .= "Content-type: text/html; charset=iso-8859-1 \r\n"; 
						$MESSAGE_BODY = "Company Name: ".$_REQUEST[txt_com_name]." \r\n" ;
						$MESSAGE_BODY .= "Company Contact No: ".$_REQUEST[txt_contact_no]." \r\n"; 
						$MESSAGE_BODY .= "Company Mobile No : ".$_REQUEST[txt_com_mobile]." \r\n"; 
						$MESSAGE_BODY .= "Contact Person : ".$_REQUEST[txt_contact_person]." \r\n"; 
						$MESSAGE_BODY .= "Direct NO : ".$_REQUEST[txt_contact_pers_no]." \r\n";
						$MESSAGE_BODY .= "Alternate No : ".$_REQUEST[txt_contact_pers_no2]." \r\n"; 
						$MESSAGE_BODY .= "Functional Roal : ".$_REQUEST[txt_fun_roal]." \r\n"; 
						$MESSAGE_BODY .= "Duration : ".$_REQUEST[cmb_duration]." \r\n"; 
						$MESSAGE_BODY .= "Min Experance : ".$_REQUEST[txt_min_exp]." Month \r\n"; 
						$MESSAGE_BODY .= "Inquiry Details: ".$_REQUEST[txt_inq_details]." \r\n"; 
						

						mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader);
						
						
						// Send Mail to Visiter
						
						/*$ToEmail = $_REQUEST[txt_email]; 
						$EmailSubject = "Thanks For 7 Sources Enquiry"; 
						$mailheader = "From: info@7sources.net\r\n"; 
						$mailheader .= "Reply-To: info@7sources.net\r\n"; 
						$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
						$MESSAGE_BODY = "Thanks For 7 Sources Enquiry\r\n"; 
						$MESSAGE_BODY = "We will contact you through below details\r\n"; 
						$MESSAGE_BODY = "Company Name: ".$_REQUEST[txt_com_name]." \r\n" ;
						$MESSAGE_BODY .= "Company Contact No: ".$_REQUEST[txt_contact_no]." \r\n"; 
						$MESSAGE_BODY .= "Company Mobile No : ".$_REQUEST[txt_com_mobile]." \r\n"; 
						$MESSAGE_BODY .= "Contact Person : ".$_REQUEST[txt_contact_person]." \r\n"; 
						$MESSAGE_BODY .= "Contact Person No : ".$_REQUEST[txt_contact_pers_no]." \r\n"; 
						$MESSAGE_BODY .= "Functional Roal : ".$_REQUEST[txt_fun_roal]." \r\n"; 
						$MESSAGE_BODY .= "Duration : ".$_REQUEST[txt_duration]." \r\n"; 
						$MESSAGE_BODY .= "Min Experance : ".$_REQUEST[txt_min_exp]." \r\n"; 
						$MESSAGE_BODY .= "Inquiry Details: ".$_REQUEST[txt_inq_details]." \r\n"; 
						
						mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");*/
						
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
