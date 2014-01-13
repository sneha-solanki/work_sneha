<?php /* Smarty version 2.6.12, created on 2008-12-20 16:43:25
         compiled from middle/upload_file.tpl */ ?>
<html>
<body leftmargin="0" topmargin="0">
<form action="<?php echo $this->_tpl_vars['upload_file']; ?>
" method="post" enctype="multipart/form-data">
<!--<?php echo $this->_tpl_vars['upload_file']; ?>
 for Display File Name-->  
<table width="400">
  <tr>
    <td colspan="5" background="resources/images/line.jpg"></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4"></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4" align="center"><strong> Upload Image/File </strong></td>
    </tr>
  <tr>
    <td width="61">&nbsp;</td>
    <td colspan="2"><label for="label">Filename:</label></td>
    <td colspan="2"><input type="file" name="file" id="file" value="Select File" /></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="1">&nbsp;</td>
    <td width="233"><input type="submit" name="submit" value="Submit" />&nbsp;
	 </td>
    <td width="39">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="5" background="resources/images/line.jpg">	 </td>
    </tr>
</table>

</form>
</body>
</html>