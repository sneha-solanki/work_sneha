<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>

		<link REL="SHORTCUT ICON" HREF="resources/images/page_tpl/europe visa HELP.ico"  type="image/x-icon" />
		<meta http-equiv="Content-Type;" content="text/html; charset=windows-1251;" />
		<META HTTP-EQUIV="imagetoolbar" CONTENT="on">
		<title>{$site_title}</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"  >
		<link rel="stylesheet" type="text/css" href="css/modal-message.css" >
		<link rel="stylesheet" type="text/css" href="css/tab-view.css" />
		<link rel="stylesheet" type="text/css" href="css/styles_om1lt.css"  />
		<link rel="stylesheet" type="text/css" href="css/style.css"  />
		<link rel="stylesheet" type="text/css" href="css/paging_stylesheet.css"  />
		
		<link href="../../css/style.css" rel="stylesheet" type="text/css" />    

		{literal}
		<script type="text/javascript">
		function changestatusbarText(str) {
		window.status = str;
		}
		changestatusbarText('');
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
		
	
		{/literal}
	</head>
	<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"  >
	 <div id="container" style=" width:1000">
	    <div id="header" style="width:100%" >
	     	{include file=$headerFile}
			
	    </div>
  	  	<div id="content" style="width:100%">
  		  	{include file="`$page_template`.tpl"}
  		</div>
		<div id="footer" align="right"   style="height:30px; width:100% vertical-align:middle">
        	<a href="http://www.shivaprabhasolutions.in" target="_blank" class="shiva"  >&copy; Shivaprabha Solutions Pvt. Ltd. All rights reserved</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  		</div>
    </div>
	  
<div  class="ajax_load_Style"  id="ajax-process">
</div>
</body>
</html>

<SCRIPT language="JavaScript">
{literal}
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
	window.open(page,'_self');
}
	


var message="Function Disabled!";

function showSearchdiv(controlName){

	if(document.getElementById(controlName).style.display == 'inline'){
		document.getElementById(controlName).style.display = 'none';
	}else{
	document.getElementById(controlName).style.display = 'inline';
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
{/literal}
</SCRIPT> 
