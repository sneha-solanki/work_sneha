<link href="../../../css/style.css" rel="stylesheet" type="text/css" />

<div align="left">
  <table width="70%" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="5" style="background-color:#BF91BF" >&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5"><table width="98%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="12%" height="26" class="text_2">Name : </td>
          <td colspan="2"><input name="txt_name" type="text" class="text" id="txt_name" value="{$fields[1]}" size="40" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="15%" rowspan="4"><img  src="{$img_path}" height="100"  width="100" /></td>
        </tr>
        <tr>
          <td class="text_2">Designation : </td>
          <td width="25%"><input name="txt_designation" type="text" class="text" id="txt_designation" value="{$fields[2]}" /></td>
          <td width="24%" align="right">Department :&nbsp;</td>
          <td width="21%" class="text_2"><input name="txt_department" type="text" class="text" id="txt_department" value="{$fields[3]}" /> </td>
          <td width="2%"></td>
          <td width="1%">&nbsp;</td>
          </tr>
        <tr>
          <td class="text_2">Birth Date : </td>
          <td><input name="txt_p_birth_date" type="text" class="text" id="txt_p_birth_date" value="{$fields[4]}" size="20" />
              <img src="resources/images/calbtn.gif"  onclick="if(self.gfPop)gfPop.fPopCalendar(document.regstration.txt_p_birth_date);return false;" alt="calender" name="popcal" width="16" height="16" border="0" align="absmiddle" id="popcal" style="cursor:pointer" /></td>
          <td align="right"><span class="text_2">Join Date : &nbsp;</span></td>
          <td align="center" class="text_2"><input name="txt_join_date" type="text" class="text" id="txt_join_date" value="{$fields[5]}" size="20" maxlength="100" /></td>
          <td>
            <a href="javascript:void(0)" onclick="if(self.gfPop)gfPop.fPopCalendar(document.ContactDetail.txt_join_date);return false;" ><img name="popcal" align="absmiddle" src="resources/images/calbtn.gif" width="16" height="16" border="0" alt="calender" id="popcal" /></a></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td class="text_2">Qulification : </td>
          <td><input name="txt_qulif" type="text" id="txt_qulif" value="{$fields[6]}" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="5" class="contact">Teaching Experiance Level :</td>
    </tr>
    <tr>
      <td  colspan="5"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="12%" class="text_2">At AU :</td>
          <td width="24%"><span class="text_2">
            <input name="txt_au" type="text" class="text" id="txt_au" value="{$fields[7]}" />
          </span></td>
          <td width="12%" align="center" class="text_2">At PG :</td>
          <td width="22%"><input name="txt_pg" type="text" class="text" id="txt_pg" value="{$fields[8]}" /></td>
          <td width="9%"><span class="text_2">Research </span></td>
          <td width="21%"><input name="txt_research" type="text" class="text" id="txt_research" value="{$fields[9]}" /></td>
        </tr>
        
        <tr>
          <td height="20" colspan="4" class="contact">Researsh &amp; Publication Out put : - Research Paper : </td>
          <td width="9%">&nbsp;</td>
          <td width="21%">&nbsp;</td>
        </tr>
        
        <tr>
          <td class="text_2">Published : </td>
          <td><input name="txt_publish" type="text" class="text" id="txt_publish" value="{$fields[10]}" /></td>
          <td class="text_2">Presented : </td>
          <td width="22%"><input name="txt_present" type="text" class="text" id="txt_present" value="{$fields[11]}" /></td>
          <td width="9%">&nbsp;</td>
          <td width="21%">&nbsp;</td>
        </tr>
        <tr>
          <td height="24" class="text_2">Articles : </td>
          <td><input name="txt_articales" type="text" class="text" id="txt_articales" value="{$fields[12]}" /></td>
          <td class="text_2">Books : </td>
          <td><input name="txt_books" type="text" class="text" id="txt_books" value="{$fields[13]}" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    
    
   
    <tr>
      <td height="20" colspan="5" class="contact">No of Research Student :</td>
    </tr>
    <tr>
      <td colspan="5"><table width="98%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="14%" class="text_2">Working : </td>
          <td width="34%"><input name="txt_working" type="text" class="text" id="txt_working" value="{$fields[14]}" /></td>
          <td width="12%" class="text_2">Competed : </td>
          <td width="40%"><input name="txt_completed" type="text" class="text" id="txt_completed" value="{$fields[15]}" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="5" class="contact">Participation In..........Courses :</td>
    </tr>
    <tr>
      <td colspan="5"><table width="98%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="14%" class="text_2">Orientation : </td>
          <td width="37%"><input name="txt_orient" type="text" class="text" id="txt_orient" value="{$fields[16]}" /></td>
          <td width="11%" class="text_2">Refresher  : </td>
          <td width="38%"><input name="txt_refresh" type="text" id="txt_refresh" value="{$fields[17]}" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="5"class="contact">Conferences/ Seminar </td>
    </tr>
    <tr>
      <td colspan="5"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="7%" class="text_2">State : </td>
          <td width="23%"><input name="txt_state" type="text" class="text" id="txt_state" value="{$fields[18]}" /></td>
          <td width="10%" class="text_2">National : </td>
          <td width="23%"><input name="txt_national" type="text" class="text" id="txt_national" value="{$fields[19]}" /></td>
          <td width="15%" class="text_2">International :</td>
          <td width="22%"><input name="txt_international" type="text" class="text" id="txt_international" value="{$fields[20]}" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="5" class="contact">Associations with ....................... </td>
    </tr>
    <tr>
      <td colspan="5"><table width="98%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="47%" align="center" class="text_2"> University/Organization Name </td>
          <td width="29%" class="text_2">Name of Body </td>
          <td width="24%" class="text_2">Working as </td>
        </tr>
        <tr>
          <td align="center"><input name="txt_univ_1" type="text" class="text" id="txt_univ_1" value="{$fields[21]}" /></td>
          <td><input name="txt_body_1" type="text" class="text" id="txt_body_1" value="{$fields[24]}" /></td>
          <td align="right"><input name="txt_working_1" type="text" class="text" id="txt_working_1" value="{$fields[27]}" /></td>
        </tr>
        <tr>
          <td align="center"><input name="txt_univ_2" type="text" class="text" id="txt_univ_2" value="{$fields[22]}" /></td>
          <td><input name="txt_body_2" type="text" class="text" id="txt_body_2" value="{$fields[25]}" /></td>
          <td align="right"><input name="txt_working_2" type="text" class="text" id="txt_working_2" value="{$fields[28]}" /></td>
        </tr>
        <tr>
          <td align="center"><input name="txt_univ_3" type="text" class="text" id="txt_univ_3" value="{$fields[23]}" /></td>
          <td><input name="txt_body_3" type="text" class="text" id="txt_body_3" value="{$fields[26]}" /></td>
          <td align="right"><input name="txt_working_3" type="text" class="text" id="txt_working_3" value="{$fields[29]}" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="5"><table width="98%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="12%" class="text_2">Achivment : </td>
          <td width="23%"><input name="txt_achivment" type="text" class="text" id="txt_achivment" value="{$fields[30]}" /></td>
          <td width="12%" class="text_2">&nbsp;Hobbies :</td>
          <td width="53%"><input name="txt_hobbies" type="text" class="text" id="txt_hobbies" value="{$fields[31]}" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="5" align="center"><input   name="result" type="text" class="text" id="result" style="border:none; background-color:F1F9FF; color:#FF0000" size="50" maxlength="0" /></td>
    </tr>
    
    <tr>
      <td colspan="5" style="background-color:#BF91BF"><table width="98%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="16%">&nbsp;</td>
          <td width="26%" align="right"><!--<img style="cursor:pointer" onClick="{ajax_call function="submit_data" params_func="submit_data.params" callback="submit_data.cb"}" src="resources/images/buttons/{$imagebutton}" />--></td>
          <td width="42%"><img  style="cursor:pointer" src="resources/images/buttons/close_button.jpg" onclick="closeMessage();" /></td>
          <td width="16%">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  0</table>
	
</div>

<iframe width=199 height=178 name="gToday:normal:agenda.js" id="gToday:normal:agenda.js" src="js/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

<script type="text/javascript">
{literal}
var submit_data = {
		params: function() {
			//alert("start return");	
			return {
						 p_name : $F("txt_name"),
						 p_desig : $F("txt_designation"),
						 p_dept : $F("txt_department"),
						 p_birth : $F("txt_p_birth_date"),
						 p_join : $F("txt_join_date"),
						 p_qulif: $F("txt_qulif"),
						 p_au : $F("txt_au"),
						 p_pg : $F("txt_pg"),
						 p_research : $F("txt_research"),
						 p_publish : $F("txt_publish"),
						 p_present : $F("txt_present"),
						 p_artical : $F("txt_articales"),
						 p_books : $F("txt_books"),
						 p_working : $F("txt_working"),
						 p_complete : $F("txt_completed"),
						 p_orient : $F("txt_orient"),
						 p_refresher: $F("txt_refresh"),
						 p_state : $F("txt_state"),
						 p_national : $F("txt_national"),
						 p_international : $F("txt_international"),
						 p_univ_1 : $F("txt_univ_1"),
						 p_univ_2 : $F("txt_univ_2"),
						 p_univ_3 : $F("txt_univ_3"),
						 p_body_1 : $F("txt_body_1"),
						 p_body_2 : $F("txt_body_2"),
						 p_body_3 : $F("txt_body_3"),
						 p_working_1 : $F("txt_working_1"),
						 p_working_2 : $F("txt_working_2"),
						 p_working_3 : $F("txt_working_3"),
						 p_achivment : $F("txt_achivment"),
						 p_hobbies : $F("txt_hobbies")
			
					}
				
		 },
		  cb:function(originalRequest) {
			
				if (originalRequest.responseText=='true')
				{
					alert("Successfully Done");
					closeMessage();
					pageRedirect("index.php");
				}
				else if (originalRequest.responseText=='ok')
				{
					closeMessage();
				}
				else
				{
					alert(originalRequest.responseText);
				}
			}
	}
{/literal}
</script>

