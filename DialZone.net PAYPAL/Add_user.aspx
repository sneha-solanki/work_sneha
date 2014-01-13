<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Add_user.aspx.cs" Inherits="Add_user" %>
<%@ Register Assembly="System.Web.Extensions, Version=1.0.61025.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35"
    Namespace="System.Web.UI" TagPrefix="asp" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Create User</title>
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
    <div>
        &nbsp;</div>
        <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td style="width: 100px">
                    <asp:ScriptManager ID="ScriptManager1" runat="server">
                    </asp:ScriptManager>
                </td>
            </tr>
            <tr>
                <td style="width: 100px">
                    <asp:UpdatePanel ID="UpdatePanel1" runat="server">
                        <ContentTemplate>
        <table border="0" cellpadding="0" cellspacing="0" style="width: 590px">
            <tr>
                <td rowspan="1" style="width: 10px">
                </td>
                <td class="headtext" colspan="4">
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                        <tr>
                            <td style="width: 99px">
                                <asp:Image ID="Image1" runat="server" ImageUrl="~/image/popupheader.gif" /></td>
                            <td class="title" style="width: 328px; text-align: center" valign="bottom">
                                User Master</td>
                            <td>
                            </td>
                        </tr>
                    </table>
                </td>
                <td rowspan="1" style="width: 10px">
                </td>
            </tr>
            <tr>
                <td rowspan="15" style="width: 10px">
                </td>
                <td style="height: 19px" bgcolor="#516a80" class="headtext" colspan="4"  >
                    Personal Details</td>
                <td rowspan="15" style="width: 10px">
                </td>
            </tr>
            <tr>
                <td   class="gridtext" style="width: 90px; height: 19px">
                    First Name :</td>
                <td style="width: 148px"  >
                    <asp:TextBox ID="txt_firstname" runat="server" Width="170px"></asp:TextBox></td>
                <td   class="gridtext" style="width: 90px">
                    Status :</td>
                <td style="height: 24px"  >
                    <asp:CheckBox ID="chk_status" runat="server" /></td>
            </tr>
            <tr>
                <td   class="gridtext" style="width: 90px; height: 19px">
                    Middel Name:</td>
                <td style="width: 148px"  >
                    <asp:TextBox ID="txt_middelname" runat="server" Width="170px"></asp:TextBox></td>
                <td   class="gridtext" style="width: 90px">
                    Gender :</td>
                <td  >
                    <asp:DropDownList ID="cbo_gender" runat="server">
                    <asp:ListItem Value="1">Male</asp:ListItem>
                     <asp:ListItem Value="2">Female</asp:ListItem>
                    </asp:DropDownList></td>
            </tr>
            <tr>
                <td   class="gridtext" style="width: 90px; height: 19px">
                    Last Name :</td>
                <td style="width: 148px"  >
                    <asp:TextBox ID="txt_lastname" runat="server" Width="170px"></asp:TextBox></td>
                <td   class="gridtext" style="width: 90px">
                    Occupation :</td>
                <td  >
                    <asp:TextBox ID="txt_occupation" runat="server"></asp:TextBox></td>
            </tr>
            <tr>
                <td class="gridtext" style="width: 90px;">
                    Date Of Birth :</td>
                <td style="width: 148px;" valign="middle"  >
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 89%">
                        <tr>
                            <td >
                                <asp:TextBox ID="txt_dateofBirth" runat="server" Width="79px" onclick="showCalendarControl(this);"></asp:TextBox></td>
                            <td>
                            </td>
                            <td style="width: 100px">
                                &nbsp;<img alt="calendar" src="image/PopUpCalendar.gif" onclick="showCalendarControl(txt_dateofBirth);" /></td>
                        </tr>
                    </table>
                </td>
                <td   class="gridtext" style="width: 90px; ;">
                    Address :</td>
                <td rowspan="2" valign="top"  >
                    <asp:TextBox ID="txt_address" runat="server" Height="46px" TextMode="MultiLine" Width="149px"></asp:TextBox></td>
            </tr>
            <tr>
                <td   class="gridtext" style="width: 90px; height: 19px">
                    Phone No :</td>
                <td style="width: 148px"  >
                    <asp:TextBox ID="txt_phone" runat="server" Width="170px"></asp:TextBox></td>
                <td style="width: 90px"  >
                </td>
            </tr>
            <tr>
                <td style="width: 90px; height: 19px;" class="gridtext">
                    Mobile No :</td>
                <td style="width: 148px;">
                    <asp:TextBox ID="txt_mobile" runat="server" Width="170px"></asp:TextBox></td>
                <td style="width: 90px;" class="gridtext">
                    City :</td>
                <td style="width: 100px; height: 24px;">
                    <asp:TextBox ID="txt_city" runat="server"></asp:TextBox></td>
            </tr>
            <tr>
                <td   class="gridtext" style="width: 90px; height: 19px">
                    E Mail Id :</td>
                <td style="width: 148px"  >
                    <asp:TextBox ID="txt_email" runat="server" Width="170px"></asp:TextBox></td>
                <td   class="gridtext" style="width: 90px">
                    Zip code :</td>
                <td  >
                    <asp:TextBox ID="txt_zip" runat="server"></asp:TextBox></td>
            </tr>
            <tr>
                <td style="width: 90px; height: 19px"  >
                </td>
                <td style="width: 148px"  >
                </td>
                <td style="width: 90px"  >
                </td>
                <td  >
                </td>
            </tr>
            <tr>
                <td class="headtext" style="height: 19px" bgcolor="#516a80" colspan="4">
                    Login Details</td>
            </tr>
            <tr>
                <td style="width: 90px; height: 19px" class="gridtext">
                    User Name:</td>
                <td style="width: 148px;">
                <asp:TextBox id="txt_userName" runat="server" Width="170px"></asp:TextBox></td>
                <td style="width: 90px;">
                </td>
                <td style="width: 100px; height: 19px">
                </td>
            </tr>
            <tr>
                <td style="width: 90px; height: 19px" class="gridtext">
                    Password :</td>
                <td style="width: 148px;">
                <asp:TextBox id="txt_password" runat="server" Width="170px"></asp:TextBox></td>
                <td style="width: 90px;">
                </td>
                <td style="width: 100px; height: 19px">
                </td>
            </tr>
            <tr>
                <td   class="gridtext" style="width: 90px; height: 19px">
                    User Type:</td>
                <td style="width: 148px"  >
                <asp:DropDownList id="cbo_user_type" runat="server">                
                </asp:DropDownList></td>
                <td style="width: 90px"  >
                </td>
                <td  >
                </td>
            </tr>
            <tr>
                <td style="width: 90px; height: 19px"  >
                </td>
                <td style="width: 148px"  >
                    &nbsp;</td>
                <td style="width: 90px"  >
                </td>
                <td  >
                </td>
            </tr>
            <tr>
                <td colspan="4" style="text-align: center">
                    
                </td>
            </tr>
        </table>
                        </ContentTemplate>
                        <Triggers>
                            <asp:AsyncPostBackTrigger ControlID="img_general" EventName="Click" />
                        </Triggers>
                    </asp:UpdatePanel>
                </td>
            </tr>
            <tr>
                <td style="text-align: center">
                <table border="0" cellpadding="2" cellspacing="0">
                        <tr>
                            <td style="width: 33px">
                                <asp:ImageButton ID="img_general" runat="server" OnClick="img_general_Click" /></td>
                            <td style="width: 33px">
                                <asp:ImageButton ID="img_close" runat="server" OnClick="img_close_Click" /></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
