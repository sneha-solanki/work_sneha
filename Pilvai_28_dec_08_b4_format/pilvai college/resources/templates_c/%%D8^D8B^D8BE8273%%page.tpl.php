<?php /* Smarty version 2.6.12, created on 2008-12-27 10:12:21
         compiled from page.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>

		<link REL="SHORTCUT ICON" HREF="resources/images/page_tpl/europe visa HELP.ico"  type="image/x-icon" />
		<meta http-equiv="Content-Type;" content="text/html; charset=windows-1251;" />
		<META HTTP-EQUIV="imagetoolbar" CONTENT="on">
		<title><?php echo $this->_tpl_vars['site_title']; ?>
</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"  >
		<link rel="stylesheet" type="text/css" href="css/modal-message.css" >
		<link rel="stylesheet" type="text/css" href="css/tab-view.css" />
		<link rel="stylesheet" type="text/css" href="css/styles_om1lt.css"  />
		<link rel="stylesheet" type="text/css" href="css/style.css"  />
		<link rel="stylesheet" type="text/css" href="css/paging_stylesheet.css"  />
		
		<link href="../../css/style.css" rel="stylesheet" type="text/css" />    

		<?php echo '
		<script type="text/javascript">
		function changestatusbarText(str) {
		window.status = str;
		}
		changestatusbarText(\'\');
		</script>

		
		<script type="text/javascript" src="js/prototype.js"></script>
		<script type="text/javascript" src="js/smarty_ajax.js"></script>
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/modal-message.js"></script>
		<script type="text/javascript" src="js/ajax-dynamic-content.js"></script>
		<script type="text/javascript" src="js/timepicker.js"></script>
		<script type="text/javascript" src="js/dropdown.js"></script>
		<script type="text/javascript" src="js/tab-view.js"></script>
		<script type="text/javascript" src="js/scom1lt.js"></script>
		<script type="text/javascript" src="js/dropdown.js"></script>
		
	
		'; ?>

	</head>
	<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"  >
	 <div id="container" style=" width:1000">
	    <div id="header" style="width:100%" >
	     	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['headerFile'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			
	    </div>
  	  	<div id="content" style="width:100%">
  		  	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['page_template']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  		</div>
		<div id="footer" align="right"   style="height:30px; width:100% vertical-align:middle">
        	<a href="http://www.shivaprabhasolutions.in" target="_blank" class="shiva"  >&copy; Shivaprabha Solutions Pvt. Ltd. All rights reserved</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  		</div>
    </div>
	  
<div  class="ajax_load_Style"  id="ajax-process">
</div>
</body>
</html>

<SCRIPT language="JavaScript">
<?php echo '
messageObj = new DHTML_modalMessage();	// We only create one object of this class
messageObj.setShadowOffset(5);	// Large shadow

function displayMessage(url,mWidth,mHeight)
{
	messageObj.setSource(url);
	messageObj.setCssClassMessageBox(false);
	messageObj.setSize(mWidth,mHeight);
	messageObj.setShadowDivVisible(false);	// Enable shadow for these boxes
	messageObj.display();
}

function displayStaticMessage(messageContent,cssClass,mWidth,mHeight)
{
	messageObj.setHtmlContent(messageContent);
	messageObj.setSize(mWidth,mHeight);
	messageObj.setCssClassMessageBox(cssClass);
	messageObj.setSource(false);	// no html source since we want to use a static message here.
	messageObj.setShadowDivVisible(false);	// Disable shadow for these boxes	
	messageObj.display();
}

function closeMessage()
{
	messageObj.close();	
}
function pageRedirect(page)
{
	window.open(page,\'_self\');
}
	


var message="Function Disabled!";

function showSearchdiv(controlName){

	if(document.getElementById(controlName).style.display == \'inline\'){
		document.getElementById(controlName).style.display = \'none\';
	}else{
	document.getElementById(controlName).style.display = \'inline\';
	}
}
///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("return false")
'; ?>

</SCRIPT> 