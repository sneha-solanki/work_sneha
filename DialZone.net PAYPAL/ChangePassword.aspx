<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ChangePassword.aspx.cs" Inherits="ChangePassword" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>ChangePassword</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <table border="0" cellpadding="0" cellspacing="0" style="width: 350px">
            <tr>
                <td style="width: 17px">
                </td>
                <td colspan="2">
                    <asp:Image ID="Image1" runat="server" ImageUrl="~/image/popupheader.gif" /></td>
                <td style="width: 14px">
                </td>
            </tr>
            <tr>
                <td style="width: 17px">
                </td>
                <td style="text-align: center;" bgcolor="#516a80" class="headtext" colspan="2">
                    Change Password</td>
                <td style="width: 14px">
                </td>
            </tr>
            <tr>
                <td style="width: 17px">
                </td>
                <td class="gridtext" style="width: 128px">
                    Current Password :</td>
                <td style="width: 95px">
                    <asp:TextBox ID="txt_curr_pass" runat="server" TextMode="Password"></asp:TextBox></td>
                <td style="width: 14px">
                </td>
            </tr>
            <tr>
                <td style="width: 17px">
                    &nbsp;</td>
                <td class="gridtext" style="width: 128px">
                    New Password :</td>
                <td style="width: 95px">
                    <asp:TextBox ID="txt_new_pass" runat="server" TextMode="Password"></asp:TextBox></td>
                <td style="width: 14px">
                </td>
            </tr>
            <tr>
                <td style="width: 17px">
                </td>
                <td class="gridtext" style="width: 128px">
                    Confimr Password :</td>
                <td style="width: 95px">
                    <asp:TextBox ID="txt_confirm_pass" runat="server" TextMode="Password"></asp:TextBox></td>
                <td style="width: 14px">
                </td>
            </tr>
            <tr>
                <td style="width: 17px">
                </td>
                <td style="width: 128px">
                </td>
                <td style="width: 95px">
                    &nbsp;</td>
                <td style="width: 14px">
                </td>
            </tr>
            <tr>
                <td style="width: 17px">
                </td>
                <td colspan="2" style="text-align: center">
                    <table border="0" cellpadding="2" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>
                                    <asp:ImageButton ID="img_btn_gen" runat="server" OnClick="img_btn_gen_Click" /></td>
                                <td>
                                    <asp:ImageButton ID="img_btn_cancel" runat="server" OnClick="img_btn_cancel_Click" /></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td style="width: 14px">
                </td>
            </tr>
            <tr>
                <td style="width: 17px">
                </td>
                <td colspan="2" style="text-align: center">
                    &nbsp;</td>
                <td style="width: 14px">
                </td>
            </tr>
        </table>
    
    </div>
    </form>
</body>
</html>
