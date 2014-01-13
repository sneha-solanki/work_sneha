<%@ Page Language="C#" AutoEventWireup="true" CodeFile="AddTransaction.aspx.cs" Inherits="AddTransaction" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Transaction Entry</title>
    
    <link href="js/CalendarControl.css"  rel="stylesheet" type="text/css" />   
    <link rel="stylesheet" href="css/style.css" />   
    <script type="text/javascript" src="js/CalendarControl.js" language="javascript"></script>    
    
</head>
<script type="text/javascript" language="javascript">
function refreshParent()
{
    window.opener.location.href = window.opener.location.href;
    if (window.opener.progressWindow)		
    {
        OnClientClick  ="refreshParent()" 
     
    }
}
</script>
<body onunload="refreshParent();">
    <form id="form1" runat="server">
        <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td rowspan="12" style="width: 28px">
                </td>
                <td colspan="5" style="text-align: left">
                    <strong><span>
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                            <tr>
                                <td style="width: 99px">
                                    <asp:Image ID="Image1" runat="server" ImageUrl="~/image/popupheader.gif" /></td>
                                <td class="title" style="width: 328px; text-align: center" valign="bottom">
                                    Transaction Master</td>
                                <td>
                                </td>
                            </tr>
                        </table>
                    </span></strong></td>
                <td rowspan="12" style="width: 31px">
                </td>
            </tr>
            <tr>
                <td bgcolor="#516a80" class="gridtext" colspan="5" style="text-align: right">
                </td>
            </tr>
            <tr>
                <td class="gridtext" style="width: 100px; text-align: right">
                    &nbsp;</td>
                <td style="width: 100px">
                </td>
                <td style="width: 30px">
                </td>
                <td class="gridtext" style="width: 115px; text-align: right">
                </td>
                <td style="width: 100px">
                </td>
            </tr>
            <tr>
                <td class="gridtext" style="width: 100px; text-align: right;">
                    Card Type :</td>
                <td style="width: 100px">
                    <asp:DropDownList ID="cbo_cardtype" runat="server" Width="153px">
                    </asp:DropDownList></td>
                <td style="width: 30px">
                </td>
                <td style="width: 115px; text-align: right;" class="gridtext">
                First Name :</td>
                <td style="width: 100px">
                <asp:TextBox ID="txt_firstname" runat="server"></asp:TextBox></td>
            </tr>
            <tr>
                <td class="gridtext" style="width: 100px; text-align: right;">
                Card Number :</td>
                <td style="width: 100px">
                <asp:TextBox ID="txt_cardnumber" runat="server" Width="147px"></asp:TextBox></td>
                <td style="width: 30px">
                </td>
                <td style="width: 115px; text-align: right;" class="gridtext">
                Last Name &nbsp; :</td>
                <td style="width: 100px">
                <asp:TextBox ID="txt_lastname" runat="server"></asp:TextBox></td>
            </tr>
            <tr>
                <td class="gridtext" style="width: 100px; text-align: right;" valign="top">
                Expire Date :</td>
                <td style="width: 100px" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="width: 100px">
                <asp:TextBox ID="txt_expiredate" runat="server" onclick="showCalendarControl(txt_expiredate);" Width="97px"></asp:TextBox></td>
                            <td style="width: 100px">
                <img onclick="showCalendarControl(txt_expiredate);" src="image/PopUpCalendar.gif"
                                        style="cursor: pointer" /></td>
                        </tr>
                    </table>
                </td>
                <td style="width: 30px">
                </td>
                <td style="width: 115px; text-align: right;" valign="top" class="gridtext">
                Billing Address :
                </td>
                <td rowspan="2" style="width: 100px" valign="top">
                <asp:TextBox ID="txt_billingaddress" runat="server" Height="36px" TextMode="MultiLine"
                    Width="148px"></asp:TextBox></td>
            </tr>
            <tr>
                <td class="gridtext" style="width: 100px; text-align: right; height: 24px;">
                Amount :</td>
                <td style="width: 100px; height: 24px;">
                <asp:TextBox ID="txt_tranAmount" runat="server" Width="147px"></asp:TextBox></td>
                <td style="height: 24px;" colspan="2" class="gridtext">
                    &nbsp;$<asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ControlToValidate="txt_tranAmount"
                        ErrorMessage="Only numeric value" ValidationExpression="^\d+$"></asp:RegularExpressionValidator></td>
            </tr>
            <tr>
                <td class="gridtext" style="width: 100px; text-align: right;">
                CVV :</td>
                <td style="width: 100px">
                <asp:TextBox ID="txt_CVV" runat="server" Width="147px"></asp:TextBox></td>
                <td style="width: 30px">
                </td>
                <td style="width: 115px; text-align: right;" class="gridtext">
                City :</td>
                <td style="width: 100px">
                <asp:TextBox ID="txt_city" runat="server"></asp:TextBox></td>
            </tr>
            <tr>
                <td class="gridtext" style="width: 100px; height: 24px; text-align: right;">
                </td>
                <td style="width: 100px; height: 24px;">
                </td>
                <td style="width: 30px; height: 24px;">
                </td>
                <td style="width: 115px; height: 24px; text-align: right;" class="gridtext">
                State :</td>
                <td style="width: 100px; height: 24px;">
                <asp:TextBox ID="txt_state" runat="server"></asp:TextBox></td>
            </tr>
            <tr>
                <td style="width: 100px">
                </td>
                <td style="width: 100px">
                </td>
                <td style="width: 30px">
                </td>
                <td style="width: 115px; text-align: right;" class="gridtext">
                Zipcode :</td>
                <td style="width: 100px">
                <asp:TextBox ID="txt_zipcode" runat="server"></asp:TextBox></td>
            </tr>
            <tr>
                <td style="width: 100px">
                </td>
                <td style="width: 100px">
                </td>
                <td style="width: 30px">
                </td>
                <td style="width: 115px; text-align: right;" class="gridtext">
                Phone No. :</td>
                <td style="width: 100px">
                <asp:TextBox ID="txt_phoneno" runat="server"></asp:TextBox></td>
            </tr>
            <tr>
                <td style="width: 100px">
                </td>
                <td style="width: 100px">
                </td>
                <td style="width: 30px">
                </td>
                <td style="width: 115px">
                </td>
                <td style="width: 100px">
                </td>
            </tr>
            <tr>
                <td rowspan="1" style="width: 28px">
                </td>
                <td style="width: 100px">
                </td>
                <td style="width: 100px">
                </td>
                <td style="width: 30px">
                </td>
                <td style="width: 115px">
                </td>
                <td style="width: 100px">
                </td>
                <td rowspan="1" style="width: 31px">
                </td>
            </tr>
            <tr>
                <td rowspan="1" style="width: 28px">
                </td>
                <td colspan="5" style="text-align: center">
                <table border="0" cellpadding="2" cellspacing="0">
                    <tr>
                        <td>
                <asp:ImageButton ID="img_general" runat="server" OnClick="img_general_Click"/></td>
                        <td style="width: 33px">
                <asp:ImageButton ID="img_close" runat="server" OnClick="img_close_Click" /></td>
                    </tr>
                </table>
                </td>
                <td rowspan="1" style="width: 31px">
                </td>
            </tr>
        </table>

    </form>
</body>
</html>
