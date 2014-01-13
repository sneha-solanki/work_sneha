<?php /* Smarty version 2.6.12, created on 2008-12-27 10:11:30
         compiled from middle/staff_details.tpl */ ?>
<div align="center" style="vertical-align:top">
	<table  border="0" cellpadding="0" cellspacing="0" width="100%" id="table10" style="vertical-align:top">
		<tr valign="top" align="center"  >
		    <td height="19" align="center" valign="middle" class="banner_text">
				<div align="center"><span ><?php echo $this->_tpl_vars['Form_Name']; ?>
</span></div>
		  	</td >
	    </tr> 
		<tr valign="top" align="center">
		    <td  align="center" valign="middle">
				<div align="center"><span class="FormHeader"><?php echo $this->_tpl_vars['Error_Message']; ?>
</span></div>
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
									<div align="left" id="div_add_dialog" style="cursor:pointer"<?php echo $this->_tpl_vars['Add_Right']; ?>
>
									<!--<img  src="resources/images/Grid_images/add.png"  title="Add New" />--></div></td>
								<td align="left" width="5%">
									<div align="left" id="div_add_dialog" style="cursor:pointer"<?php echo $this->_tpl_vars['Export_Right']; ?>
 >
									<!--<img src="resources/images/Grid_images/excel_r.gif"   title="Export to Excel"/>--></div></td>
								<td align="left" width="5%">
									<div align="left" id="div_add_dialog" style="cursor:pointer;"<?php echo $this->_tpl_vars['Export_doc_Right']; ?>
 >
									<!--<img src="resources/images/Grid_images/word_icon.jpg"   title="Export to Word"/>--></div></td>
								<td align="left" width="5%">
									<div align="left" id="div_add_dialog" style="cursor:pointer"<?php echo $this->_tpl_vars['Print_Right']; ?>
 >
									<!--<img  src="resources/images/Grid_images/print_r.gif" title="Print" />--></div></td>
							</tr>
					</table>
				 </div>
			</td>
	    </tr> 
		<tr valign="top" align="center" >
		  <td  align="center" valign="top"><?php echo $this->_tpl_vars['Header_Data_Grid']; ?>
</td>
	  	</tr>
		<tr valign="top" align="center" >
		    <td  align="center" valign="top" ><!-- class="Td_DataGrid" -->
				<div    id="datagrid_contents" align="center"> <!--  class="Div_DataGrid" -->	<?php echo $this->_tpl_vars['Data_Grid']; ?>
</div>
		  </td>
	    </tr>  
		<tr valign="top" align="center">
		    <td  align="left" valign="middle">
				  <div id="div_Data_Grid_Footer" align="center" > <span class="FormHeader">
				 <?php echo $this->_tpl_vars['Data_Grid_Footer']; ?>
 </span>
				 </div>
				<!-- <div>
					 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "middle/gird_paging.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
				</div> -->
		  	</td>
	    </tr> 
  </table>
</div> 

