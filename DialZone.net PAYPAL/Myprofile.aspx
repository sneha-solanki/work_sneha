<%@ Page Language="C#" MasterPageFile="~/dialzone.master" AutoEventWireup="true" CodeFile="Myprofile.aspx.cs" Inherits="Myprofile" Title="DialZon/Myprofile" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <table border="0" cellpadding="0" cellspacing="0" style="border-right: black 1px solid;
        border-top: black 1px solid; border-left: black 1px solid; border-bottom: black 1px solid">
        <tr>
            <td style="width: 100px">
    <table border="0" cellpadding="0" cellspacing="0" style="width: 590px">
        <tr>
            <td rowspan="1" style="width: 10px">
            </td>
            <td class="headtext" colspan="4">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                    <tr>
                        <td style="width: 99px; height: 19px;">
                            </td>
                        <td class="title" style="width: 328px; text-align: center; height: 19px;" valign="bottom">
                            </td>
                        <td style="height: 19px">
                        </td>
                    </tr>
                </table>
            </td>
            <td rowspan="1" style="width: 10px">
            </td>
        </tr>
        <tr>
            <td rowspan="1" style="width: 10px">
            </td>
            <td class="title" colspan="4" style="height: 19px">
                My Profile</td>
            <td rowspan="1" style="width: 10px">
            </td>
        </tr>
        <tr>
            <td rowspan="15" style="width: 10px">
            </td>
            <td bgcolor="#516a80" class="headtext" colspan="4" style="height: 19px">
                Personal Details</td>
            <td rowspan="15" style="width: 10px">
            </td>
        </tr>
        <tr>
            <td class="gridtext" style="width: 90px; height: 19px">
                First Name :</td>
            <td style="width: 148px">
                <asp:TextBox ID="txt_firstname" runat="server" Width="170px"></asp:TextBox></td>
            <td class="gridtext" style="width: 90px">
                Status :</td>
            <td style="height: 24px; width: 173px; text-align: left;">
                <asp:CheckBox ID="chk_status" runat="server" /></td>
        </tr>
        <tr>
            <td class="gridtext" style="width: 90px; height: 19px">
                Middel Name:</td>
            <td style="width: 148px">
                <asp:TextBox ID="txt_middelname" runat="server" Width="170px"></asp:TextBox></td>
            <td class="gridtext" style="width: 90px">
                Gender :</td>
            <td style="width: 173px; text-align: left">
                <asp:DropDownList ID="cbo_gender" runat="server">
                    <asp:ListItem Value="1">Male</asp:ListItem>
                    <asp:ListItem Value="2">Female</asp:ListItem>
                </asp:DropDownList></td>
        </tr>
        <tr>
            <td class="gridtext" style="width: 90px; height: 19px">
                Last Name :</td>
            <td style="width: 148px">
                <asp:TextBox ID="txt_lastname" runat="server" Width="170px"></asp:TextBox></td>
            <td class="gridtext" style="width: 90px">
                Occupation :</td>
            <td style="width: 173px; text-align: left">
                <asp:TextBox ID="txt_occupation" runat="server" Width="165px"></asp:TextBox></td>
        </tr>
        <tr>
            <td class="gridtext" style="width: 90px">
                Date Of Birth :</td>
            <td style="width: 148px; text-align: left;" valign="middle">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 89%">
                    <tr>
                        <td>
                            <asp:TextBox ID="txt_dateofBirth" runat="server" onclick="showCalendarControl(this);"
                                Width="79px"></asp:TextBox></td>
                        <td>
                        </td>
                        <td style="width: 100px">
                            &nbsp;</td>
                    </tr>
                </table>
            </td>
            <td class="gridtext" style="width: 90px">
                Address :</td>
            <td rowspan="2" valign="top" style="width: 173px; text-align: left">
                <asp:TextBox ID="txt_address" runat="server" Height="46px" TextMode="MultiLine" Width="165px"></asp:TextBox></td>
        </tr>
        <tr>
            <td class="gridtext" style="width: 90px; height: 19px">
                Phone No :</td>
            <td style="width: 148px">
                <asp:TextBox ID="txt_phone" runat="server" Width="170px"></asp:TextBox></td>
            <td style="width: 90px">
            </td>
        </tr>
        <tr>
            <td class="gridtext" style="width: 90px; height: 19px">
                Mobile No :</td>
            <td style="width: 148px">
                <asp:TextBox ID="txt_mobile" runat="server" Width="170px"></asp:TextBox></td>
            <td class="gridtext" style="width: 90px">
                City :</td>
            <td style="width: 173px; height: 24px; text-align: left;">
                <asp:TextBox ID="txt_city" runat="server" Width="165px"></asp:TextBox></td>
        </tr>
        <tr>
            <td class="gridtext" style="width: 90px; height: 19px">
                E Mail Id :</td>
            <td style="width: 148px">
                <asp:TextBox ID="txt_email" runat="server" Width="170px"></asp:TextBox></td>
            <td class="gridtext" style="width: 90px">
                Zip code :</td>
            <td style="width: 173px; text-align: left">
                <asp:TextBox ID="txt_zip" runat="server" Width="165px"></asp:TextBox></td>
        </tr>
        <tr>
            <td style="width: 90px; height: 19px">
            </td>
            <td style="width: 148px">
            </td>
            <td style="width: 90px">
            </td>
            <td style="width: 173px">
            </td>
        </tr>
        <tr>
            <td bgcolor="#516a80" class="headtext" colspan="4" style="height: 19px">
                Login Details</td>
        </tr>
        <tr>
            <td class="gridtext" style="width: 90px; height: 19px">
                User Name:</td>
            <td style="width: 148px">
                <asp:TextBox ID="txt_userName" runat="server" Width="170px"></asp:TextBox></td>
            <td style="width: 90px">
            </td>
            <td style="width: 173px; height: 19px">
            </td>
        </tr>
        <tr>
            <td class="gridtext" style="width: 90px; height: 19px">
                Password :</td>
            <td style="width: 148px">
                <asp:TextBox ID="txt_password" runat="server" Width="170px"></asp:TextBox></td>
            <td style="width: 90px">
            </td>
            <td style="width: 173px; height: 19px">
            </td>
        </tr>
        <tr>
            <td class="gridtext" style="width: 90px; height: 19px">
                User Type:</td>
            <td style="width: 148px; text-align: left;">
                <asp:DropDownList ID="cbo_user_type" runat="server">
                </asp:DropDownList></td>
            <td style="width: 90px">
            </td>
            <td style="width: 173px">
            </td>
        </tr>
        <tr>
            <td style="width: 90px; height: 19px">
            </td>
            <td style="width: 148px">
                &nbsp;</td>
            <td style="width: 90px">
            </td>
            <td style="width: 173px">
            </td>
        </tr>
        <tr>
            <td colspan="4" style="text-align: center">
            </td>
        </tr>
        <tr>
            <td rowspan="1" style="width: 10px">
            </td>
            <td colspan="4" style="text-align: center">
                </td>
            <td rowspan="1" style="width: 10px">
            </td>
        </tr>
    </table>
            </td>
        </tr>
    </table>
</asp:Content>

