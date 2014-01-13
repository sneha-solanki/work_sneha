<%@ Page Language="C#" MasterPageFile="~/dialzone.master" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" Title="Dial Zone" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
        <tr>
            <td style="width: 80%">
    <table border="0" cellpadding="0" cellspacing="0" style="width: 98%">
        <tr>
            <td align="left">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                    <tr>
                        <td  style="background-position:left; background-image: url(images/callcenter1_17.jpg);
                                width: 135px; background-repeat:no-repeat; height: 181px;">
                        </td>
                        <td style="height: 181px" >
                        </td>
                        <td style="height: 181px">
                        </td>
                    </tr>
                </table>
            </td>
            <td style="height: 185px">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="left" >
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                    <tr>
                        <td style="width: 490px; height: 205px;">
                        </td>
                        <td style="background-position:left; background-image: url(images/callcenter1_34.jpg);
                                width: 300px; background-repeat:no-repeat; height: 205px;">
                        </td>
                    </tr>
                </table>
                </td>
        </tr>
        <tr>
            <td style="width: 112px">
            </td>
            <td>
            </td>
        </tr>
    </table>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
            </td>
            <td style="width: 98%" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" style="width: 21%">
                                <tr>
                                    <td rowspan="2" style="background-position: 50% bottom; background-image: url(images/callcenter1_14.jpg);
                                        width: 316px; background-repeat: no-repeat; height: 49px">
                                    </td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td style="width: 316px; height: 86px">
                                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                                            <tr>
                                                <td align="right">
                                                    <img alt="" src="images/callcenter1_21.jpg" /></td>
                                                <td rowspan="1" style="background-position: left 50%; background-image: url(images/callcenter1_22.jpg);
                                                    width: 10px; background-repeat: no-repeat" valign="top">
                                                </td>
                                                <td rowspan="1" style="background-position: left 50%; background-image: url(images/callcenter1_22.jpg);
                                                    width: 948px; background-repeat: no-repeat" valign="top">
                                                    <asp:TextBox ID="txt_username" runat="server" Width="150px"></asp:TextBox></td>
                                            </tr>
                                            <tr>
                                                <td align="right" rowspan="2" style="height: 33px">
                                                    <img alt="" src="images/callcenter1_24.jpg" /></td>
                                                <td rowspan="2" style="background-position: left 50%; background-image: url(images/callcenter1_22.jpg);
                                                    width: 10px; background-repeat: no-repeat; height: 33px" valign="top">
                                                </td>
                                                <td rowspan="2" style="background-position: left 50%; background-image: url(images/callcenter1_22.jpg);
                                                    width: 948px; background-repeat: no-repeat; height: 33px" valign="middle">
                                                    <asp:TextBox ID="txt_password" runat="server" TextMode="Password" Width="150px"></asp:TextBox></td>
                                            </tr>
                                            <tr>
                                            </tr>
                                        </table>
                                        &nbsp;<asp:Label ID="error_msg" runat="server" ForeColor="Red" Text="Label" Visible="False"
                                            Width="212px"></asp:Label></td>
                                </tr>
                                <tr>
                                    <td style="width: 316px">
                                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                                            <tr>
                                                <td style="width: 100px; height: 24px">
                                                </td>
                                                <td style="width: 100px; height: 24px">
                                                    <asp:ImageButton ID="ImageButton1" runat="server" ImageUrl="~/images/callcenter1_27.jpg"
                                                        OnClick="ImageButton1_Click" /></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
            </td>
        </tr>
    </table>
</asp:Content>

