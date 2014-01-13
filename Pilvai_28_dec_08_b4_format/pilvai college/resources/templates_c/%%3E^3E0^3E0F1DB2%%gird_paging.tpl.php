<?php /* Smarty version 2.6.12, created on 2008-12-27 10:11:30
         compiled from middle/gird_paging.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ajax_update', 'middle/gird_paging.tpl', 4, false),)), $this); ?>
<table width="100%">
  <tr>
    <td height="29" ><input name="txt_goto" type="text" id="txt_goto" size="5" maxlength="5" class="goto_textbox" onchange="setCookies('goto_page','txt_goto');" />
    <span class="boldcolor"  onclick="<?php echo smarty_function_ajax_update(array('update_id' => 'update_middle_contents','function' => 'update_paging_contents','params' => "page=GotoPage"), $this);?>
"  > GO !</span></td>
    <td width="327" align="right">
	<span  style="cursor:pointer" class="redheading" onclick="<?php echo smarty_function_ajax_update(array('update_id' => 'update_middle_contents','function' => 'update_paging_contents','params' => "page=PrePage"), $this);?>
">BACK</span> </td>
    <td width="50" align="right" class="smallheading"><?php echo $this->_tpl_vars['cPage']; ?>
/<?php echo $this->_tpl_vars['tPages']; ?>
</td>
    <td width="50" align="right">
	<span  style="cursor:pointer" class="redheading" onclick="<?php echo smarty_function_ajax_update(array('update_id' => 'update_middle_contents','function' => 'update_paging_contents','params' => "page=NextPage"), $this);?>
">NEXT</span></td>
  </tr>
  <tr>
  <td>[goto page enter page no] </td>
  </tr>
   
</table>

