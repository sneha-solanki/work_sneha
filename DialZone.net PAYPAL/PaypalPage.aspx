<%@ Page Language="C#" AutoEventWireup="true" CodeFile="PaypalPage.aspx.cs" Inherits="paypal_PaypalPage" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head id="Head1" runat="server">
    <title>Paypal Payment</title>
</head>
<body onload="document.Paypal.submit();">
    <form id="Paypal" name="Paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" id="cmd" value="_xclick"/>
        <input type="hidden" name="business" id="business" value="" runat="server" />
        <input type="hidden" name="item_name" id="item_name" value=""  runat="server" />
        <input type="hidden" name="amount" id="amount" value=""  runat="server" />
        
        <input type="hidden" name="no_shipping" id="no_shipping" value="1"  runat="server" />
        <input type="hidden" name="return" id="return" value="success.htm"  />
        <input type="hidden" name="cancel_return" id="cancel_return" value="failure.htm" />
        <input type="submit" value="Please wait" />
    </form>
</body>
</html>
