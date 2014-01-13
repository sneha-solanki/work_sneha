<table width="100%">
  <tr>
    <td height="29" ><input name="txt_goto" type="text" id="txt_goto" size="5" maxlength="5" class="goto_textbox" onchange="setCookies('goto_page','txt_goto');" />
    <span class="boldcolor"  onclick="{ajax_update update_id="update_middle_contents"  function="update_paging_contents" params="page=GotoPage"}"  > GO !</span></td>
    <td width="327" align="right">
	<span  style="cursor:pointer" class="redheading" onclick="{ajax_update update_id="update_middle_contents"  function= "update_paging_contents" params="page=PrePage"}">BACK</span> </td>
    <td width="50" align="right" class="smallheading">{$cPage}/{$tPages}</td>
    <td width="50" align="right">
	<span  style="cursor:pointer" class="redheading" onclick="{ajax_update update_id="update_middle_contents"  function= "update_paging_contents" params="page=NextPage"}">NEXT</span></td>
  </tr>
  <tr>
  <td>[goto page enter page no] </td>
  </tr>
   
</table>


