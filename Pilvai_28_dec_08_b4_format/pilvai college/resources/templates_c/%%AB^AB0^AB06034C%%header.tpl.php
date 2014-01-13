<?php /* Smarty version 2.6.12, created on 2008-12-27 10:12:21
         compiled from header/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ajax_update', 'header/header.tpl', 33, false),)), $this); ?>
<link href="../../../css/style.css" rel="stylesheet" type="text/css" />
<div align="center" style="vertical-align:top; " >
<table width="990" height="309" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="5" colspan="5" bgcolor="#D9BCD8"></td>
      </tr>
      <tr>
        <td width="24" height="257" rowspan="2" style="background-image:url(resources/images/collage_03.jpg); background-repeat:repeat-x;"></td>
        <td width="212" height="32" align="center" bgcolor="#BF91BF" class="link_left">Site under construction... </td>
        <td width="4" bgcolor="#D9BCD8">&nbsp;</td>
        <td width="722" rowspan="2" align="left" valign="top" bgcolor="#D9BCD8" >
		
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="722" height="255">
          <param name="movie" value="resources/images/collage.swf" />
          <param name="quality" value="high" />
		   <param name="wmode" value="transparent" />
          <embed src="resources/images/collage.swf" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="722" height="255"></embed>
        </object>
		
		</td>
        <td width="28" rowspan="2" style="background-image:url(resources/images/collage_03.jpg); background-repeat:repeat-x;">&nbsp;</td>
      </tr>
      <tr>
        <td height="212" colspan="2"  style="background-image:url(resources/images/collage_06.jpg); background-repeat:no-repeat;"></td>
    </tr>
      <tr>
        <td height="5" colspan="5" bgcolor="#D9BCD8"></td>
    </tr>
      <tr>
        <td height="37" colspan="5"><table width="98%" border="0" cellspacing="0" cellpadding="0">
          <tr>
		  
            <td width="10%" height="32" align="center" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=home.php"), $this);?>
" >
		<div class="dbx-box"  onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'dymenu_contents','function' => 'update_dymenu','params' => "dymenu=home"), $this);?>
"  >		          <a href="#"  onMouseOver='xpe("om1lto");' onMouseOut='xpe("om1ltn");' onMouseDown='xpe("om1ltc");' onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=home.php"), $this);?>
" class="MENU">Home
		</a>
		</div>
		</td>
            <td width="2%" style="background-image:url(resources/images/collage_12.jpg); background-repeat:no-repeat;">&nbsp;</td>
            
			<td width="11%" align="center" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=about_us.php"), $this);?>
">
			<div class="dbx-box"  onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'dymenu_contents','function' => 'update_dymenu','params' => "dymenu=about_us"), $this);?>
"  >
			<a href="#" onMouseOver='xpe("wm1lto");' onMouseOut='xpe("wm1ltn");' onMouseDown='xpe("wm1ltc");' onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'onload_update_middle_contents','params' => "page=about_us.php"), $this);?>
"  class="MENU">About us
			</a>
			</div>
			</td>
            <td width="2%" style="background-image:url(resources/images/collage_12.jpg); background-repeat:no-repeat;">&nbsp;</td>
            
			<td width="12%" align="center" class="MENU" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=faculty.php"), $this);?>
">
			<div class="dbx-box"  onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'dymenu_contents','function' => 'update_dymenu','params' => "dymenu=faculty"), $this);?>
"  >
			<a  href="#" onMouseOver='xpe("wm1lto");' onMouseOut='xpe("wm1ltn");' onMouseDown='xpe("wm1ltc");' onclick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'onload_update_middle_contents','params' => "page=Facility.php"), $this);?>
"  class="MENU">Faculty
			</a>
			</div>
			</td>
            <td width="2%" style="background-image:url(resources/images/collage_12.jpg); background-repeat:no-repeat;">&nbsp;</td>
            
			<td width="11%" align="center" class="MENU" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=programme.php"), $this);?>
">
			<div class="dbx-box"  onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'dymenu_contents','function' => 'update_dymenu','params' => "dymenu=programme"), $this);?>
"  >
			<a  href="#" onMouseOver='xpe("wm1lto");' onMouseOut='xpe("wm1ltn");' onMouseDown='xpe("wm1ltc");' onclick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'onload_update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f1'])), $this);?>
"  class="MENU">Programme
			</a>
			</div>
			</td>
            <td width="2%" style="background-image:url(resources/images/collage_12.jpg); background-repeat:no-repeat;">&nbsp;</td>
            <td width="10%" align="center" class="MENU" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=Facility.php"), $this);?>
">
			<div class="dbx-box"  onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'dymenu_contents','function' => 'update_dymenu','params' => "dymenu=facility"), $this);?>
"  >
			<a  href="#" onMouseOver='xpe("wm1lto");' onMouseOut='xpe("wm1ltn");' onMouseDown='xpe("wm1ltc");' onclick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'onload_update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f1'])), $this);?>
"  class="MENU">Facility
			</a>
			</div>
			</td>
            <td width="2%" style="background-image:url(resources/images/collage_12.jpg); background-repeat:no-repeat;">&nbsp;</td>
            <td width="9%" align="center" class="MENU" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=Activities.php"), $this);?>
">
			<div class="dbx-box"  onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'dymenu_contents','function' => 'update_dymenu','params' => "dymenu=activities"), $this);?>
"  >
			<a  href="#" onMouseOver='xpe("wm1lto");' onMouseOut='xpe("wm1ltn");' onMouseDown='xpe("wm1ltc");' onclick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'onload_update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f1'])), $this);?>
"  class="MENU">Activities
			</a>
			</div>
			</td>
            <td width="2%" style="background-image:url(resources/images/collage_12.jpg); background-repeat:no-repeat;">&nbsp;</td>
            <td width="11%" align="center" class="MENU" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=Achivement.php"), $this);?>
">
			<div class="dbx-box"  onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'dymenu_contents','function' => 'update_dymenu','params' => "dymenu=achivement"), $this);?>
"  >
			<a  href="#" onMouseOver='xpe("wm1lto");' onMouseOut='xpe("wm1ltn");' onMouseDown='xpe("wm1ltc");' onclick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'onload_update_middle_contents','params' => "page=".($this->_tpl_vars['dy_menu_f1'])), $this);?>
"  class="MENU">Achivement
			</a>
			</div>
			</td>
            <td width="2%" style="background-image:url(resources/images/collage_12.jpg); background-repeat:no-repeat;">&nbsp;</td>
            <td width="12%" align="center" class="MENU" onClick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=contact_us.php"), $this);?>
">
			
			<a  href="#" onMouseOver='xpe("wm1lto");' onMouseOut='xpe("wm1ltn");' onMouseDown='xpe("wm1ltc");' onclick="<?php echo smarty_function_ajax_update(array('update_id' => 'middle_contents','function' => 'update_middle_contents','params' => "page=contact_us.php"), $this);?>
"  class="MENU">Contact us 
			</a>
			
			</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="18" colspan="5"  style="background-image:url(resources/images/collage_14.jpg); background-repeat:repeat-x;"></td>
      </tr>
  </table>
	
    
</div>