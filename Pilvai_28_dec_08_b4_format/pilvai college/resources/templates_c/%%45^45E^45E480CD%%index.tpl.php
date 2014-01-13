<?php /* Smarty version 2.6.12, created on 2008-12-27 10:12:21
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ajax_update', 'index.tpl', 6, false),)), $this); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Pilavai</title>
</head>
<body topmargin="0" leftmargin="0" bottommargin="0" rightmargin="0"  onLoad="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f1'])), $this);?>
"  > 
<div align="center" >
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   <td width="1%" >&nbsp;</td>
   <td width="22%" align="left" valign="top" ><table width="225" align="left" style="vertical-align:top">
     <tr>
       <td><table width="100%" height="41" border="0" align="left" cellpadding="0" cellspacing="0">
          
           <tr>
             <td height="41" colspan="3" align="left" valign="top" ><table width="98%" height="35" border="0" align="left" cellpadding="0" cellspacing="0" class="menu_left">
                 
                 <tr>
                   <td  width="100%" valign="top"> <div id="dymenu_contents" style="height:100%" > <font size="2" face="Verdana"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['dymenutpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </font> </div></td>
                   </tr>
                 
             </table></td>
           </tr>
       </table></td>
     </tr>
     <tr>
       <td align="left"><table  class="menu_left"width="100%" height="267" border="0" align="left" cellpadding="0" cellspacing="0">
           <tr>
             <td width="2%" height="31"></td>
             <td width="95%" align="center" bgcolor="#BF91BF" class="link_left">Student Corner </td>
             <td width="3%">&nbsp;</td>
           </tr>
           <tr>
             <td height="233" colspan="3" align="left" valign="top" style="background-image:url(resources/images/collage_19.jpg); background-repeat:no-repeat; background-position:top;"><table width="99%" border="0" align="left" cellpadding="0" cellspacing="0">
                 <tr>
                   <td width="17%">&nbsp;</td>
                   <td width="69%">&nbsp;</td>
                   <td width="14%">&nbsp;</td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td height="30" align="left"  ><a a href="#" onMouseOver='xpe("wm1lto");' onMouseOut='xpe("wm1ltn");' onMouseDown='xpe("wm1ltc");' onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'update_middle_contents','function' => 'update_middle_contents','params' => "page=syllabus.php"), $this);?>
" class="menu_left">Syllabus</a></td>
                   <td>&nbsp;</td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td height="30" align="left"><a a href="#" onMouseOver='xpe("wm1lto");' onMouseOut='xpe("wm1ltn");' onMouseDown='xpe("wm1ltc");' onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'update_middle_contents','function' => 'update_middle_contents','params' => "page=Attendance.php"), $this);?>
" class="menu_left">Attendance</a></td>
                   <td>&nbsp;</td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td height="30" align="left"><a  href="#" onMouseOver='xpe("wm1lto");' onMouseOut='xpe("wm1ltn");' onMouseDown='xpe("wm1ltc");' onclick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=Result.php"), $this);?>
"  class="menu_left">Result</a></td>
                   <td>&nbsp;</td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td height="30"><a  href="#" onMouseOver='xpe("wm1lto");' onMouseOut='xpe("wm1ltn");' onMouseDown='xpe("wm1ltc");' onclick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=fees_stru.php"), $this);?>
"  class="menu_left">Fee Structure </a> </td>
                   <td>&nbsp;</td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td height="30"><a a href="#" onMouseOver='xpe("wm1lto");' onMouseOut='xpe("wm1ltn");' onMouseDown='xpe("wm1ltc");' onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'update_middle_contents','function' => 'update_middle_contents','params' => "page=Awards.php"), $this);?>
" class="menu_left">Awards and Prizes </a></td>
                   <td>&nbsp;</td>
                 </tr>
             </table></td>
           </tr>
       </table></td>
     </tr>
   </table></td>
   <td width="76%" valign="top" >
   		<div id="middle_contents" align="center"  style="vertical-align:top ">
  							  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "middle/contents.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	</td>
   <td width="1%" >&nbsp;</td>
  </tr>

</table>
</div>
</html>
</body>