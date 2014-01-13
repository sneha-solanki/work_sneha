<div align="center" style="vertical-align:top">
	<table  border="0" cellpadding="0" cellspacing="0" width="100%" id="table10" style="vertical-align:top">
		<tr valign="top" align="center"  >
		    <td height="19" align="center" valign="middle" class="banner_text">
				<div align="center"><span >{$Form_Name}</span></div>
		  	</td >
	    </tr> 
		<tr valign="top" align="center">
		    <td  align="center" valign="middle">
				<div align="center"><span class="FormHeader">{$Error_Message}</span></div>
		  	</td>
	    </tr> 
		<tr valign="top" align="center">
		    <td  align="right" valign="top">
				 <div align="right" >
				 	<table  border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
							  <td colspan="5" align="left">&nbsp;</td>
					  </tr>
							<tr>
								<td width="75%"></td>
								<td align="left" width="5%">
									<div align="left" id="div_add_dialog" style="cursor:pointer"{$Add_Right}>
									<!--<img  src="resources/images/Grid_images/add.png"  title="Add New" />--></div></td>
								<td align="left" width="5%">
									<div align="left" id="div_add_dialog" style="cursor:pointer"{$Export_Right} >
									<!--<img src="resources/images/Grid_images/excel_r.gif"   title="Export to Excel"/>--></div></td>
								<td align="left" width="5%">
									<div align="left" id="div_add_dialog" style="cursor:pointer;"{$Export_doc_Right} >
									<!--<img src="resources/images/Grid_images/word_icon.jpg"   title="Export to Word"/>--></div></td>
								<td align="left" width="5%">
									<div align="left" id="div_add_dialog" style="cursor:pointer"{$Print_Right} >
									<!--<img  src="resources/images/Grid_images/print_r.gif" title="Print" />--></div></td>
							</tr>
					</table>
				 </div>
			</td>
	    </tr> 
		<tr valign="top" align="center" >
		  <td  align="center" valign="top">{$Header_Data_Grid}</td>
	  	</tr>
		<tr valign="top" align="center" >
		    <td  align="center" valign="top" ><!-- class="Td_DataGrid" -->
				<div    id="datagrid_contents" align="center"> <!--  class="Div_DataGrid" -->	{$Data_Grid}</div>
		  </td>
	    </tr>  
		<tr valign="top" align="center">
		    <td  align="left" valign="middle">
				  <div id="div_Data_Grid_Footer" align="center" > <span class="FormHeader">
				 {$Data_Grid_Footer} </span>
				 </div>
				<!-- <div>
					 {include file=middle/gird_paging.tpl} 
				</div> -->
		  	</td>
	    </tr> 
  </table>
</div> 


