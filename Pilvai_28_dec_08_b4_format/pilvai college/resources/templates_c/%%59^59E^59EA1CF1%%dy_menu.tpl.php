<?php /* Smarty version 2.6.12, created on 2008-12-27 10:12:21
         compiled from header/dy_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ajax_update', 'header/dy_menu.tpl', 17, false),)), $this); ?>
<html>
<body  >
<div align="left" style="height:100%" >
	<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0"  id="table11"  >
		<tr>
        	<td width="100%"  valign="top">
				<div align="center">
            	<table border="0" cellpadding="0" cellspacing="0" width="97%" height="250" id="table15">
				<tr>
					<td height="30"  bgcolor="#BF91BF" >
						<div align="center" class="link_left"><?php echo $this->_tpl_vars['menu_name']; ?>

			      </div></td>
				</tr>
                	<tr   >
                    	<td height="200" width="100%" valign="top" style="background-image:url(resources/images/collage_19.jpg); background-repeat:no-repeat; background-position:bottom;" >
						
						  <div align="left" style="height:25px; text-indent:25px; cursor:pointer; vertical-align:bottom" class="SideMenu" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f1']).",".($this->_tpl_vars['dy_menu_mid1']).",".($this->_tpl_vars['dy_menu_type1'])), $this);?>
" ><?php echo $this->_tpl_vars['dy_menu_p1']; ?>
 
						   </div>
						
						<div align="left" style="height:25px; text-indent:25px; cursor:pointer; vertical-align:bottom" class="SideMenu" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f2']).",".($this->_tpl_vars['dy_menu_mid2']).",".($this->_tpl_vars['dy_menu_type2'])), $this);?>
" ><?php echo $this->_tpl_vars['dy_menu_p2']; ?>
 
						   </div>
						   <div align="left" style="height:25px; text-indent:25px; cursor:pointer; vertical-align:bottom" class="SideMenu" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f3']).",".($this->_tpl_vars['dy_menu_mid3']).",".($this->_tpl_vars['dy_menu_type3'])), $this);?>
" ><?php echo $this->_tpl_vars['dy_menu_p3']; ?>
 
						   </div>
						   <div align="left" style="height:25px; text-indent:25px; cursor:pointer; vertical-align:bottom" class="SideMenu" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f4']).",".($this->_tpl_vars['dy_menu_mid4']).",".($this->_tpl_vars['dy_menu_type4'])), $this);?>
" ><?php echo $this->_tpl_vars['dy_menu_p4']; ?>
 
						   </div>
						   <div align="left" style="height:25px; text-indent:25px; cursor:pointer; vertical-align:bottom" class="SideMenu" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f5']).",".($this->_tpl_vars['dy_menu_mid5']).",".($this->_tpl_vars['dy_menu_type5'])), $this);?>
" ><?php echo $this->_tpl_vars['dy_menu_p5']; ?>
 
						   </div>
						   <div align="left" style="height:25px; text-indent:25px; cursor:pointer; vertical-align:bottom" class="SideMenu" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f6']).",".($this->_tpl_vars['dy_menu_mid6']).",".($this->_tpl_vars['dy_menu_type6'])), $this);?>
" ><?php echo $this->_tpl_vars['dy_menu_p6']; ?>
 
						   </div>
						   <div align="left" style="height:25px; text-indent:25px; cursor:pointer; vertical-align:bottom" class="SideMenu" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f7']).",".($this->_tpl_vars['dy_menu_mid7']).",".($this->_tpl_vars['dy_menu_type7'])), $this);?>
" ><?php echo $this->_tpl_vars['dy_menu_p7']; ?>
 
						   </div>
						   <div align="left" style="height:25px; text-indent:25px; cursor:pointer; vertical-align:bottom" class="SideMenu" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f8']).",".($this->_tpl_vars['dy_menu_mid8']).",".($this->_tpl_vars['dy_menu_type8'])), $this);?>
" ><?php echo $this->_tpl_vars['dy_menu_p8']; ?>
 
						   </div>
						</td>
                    </tr>
                </table>
                </div>
			</td>
        </tr>
  </table>
</div>
</body>
</html>