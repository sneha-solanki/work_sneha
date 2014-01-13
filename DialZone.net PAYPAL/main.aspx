<%@ Page Language="C#" MasterPageFile="~/dialzone.master" AutoEventWireup="true" CodeFile="main.aspx.cs" Inherits="main" Title="DialZone" %>

<%@ Register Assembly="System.Web.Extensions, Version=1.0.61025.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35"
    Namespace="System.Web.UI" TagPrefix="asp" %>
   <asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <table border="0" cellpadding="0" cellspacing="0" align="center" style="width: 80%">
        <tr>
            <td colspan="2">
                &nbsp;</td>
        </tr>
        <tr>
            <td rowspan="4">
            </td>
            <td align="center">
                <asp:UpdatePanel id="up_user" runat="server">
                    <contenttemplate>
<TABLE cellSpacing=0 cellPadding=0 border=0><TBODY><TR><TD style="TEXT-ALIGN: center" class="gridmenu " align=right> User Information</TD></TR><TR><TD align=right><TABLE style="WIDTH: 550px" cellSpacing=0 cellPadding=0 border=0><TBODY><TR><TD style="WIDTH: 12px">&nbsp;&nbsp;</TD><TD>&nbsp;&nbsp;</TD><TD>&nbsp;&nbsp;</TD><TD style="WIDTH: 13px">&nbsp;&nbsp;</TD><TD style="WIDTH: 50px" align=right><asp:LinkButton id="lnk_add_user" onclick="lnk_add_user_Click" runat="server" CssClass="gridmenu " Width="35px">Add</asp:LinkButton></TD></TR></TBODY></TABLE></TD></TR><TR><TD style="WIDTH: 100px"><asp:DataGrid id="dg_user" runat="server" Width="656px" OnItemCommand="dg_user_ItemCommand" AutoGenerateColumns="False">
<ItemStyle CssClass="gridtext"></ItemStyle>
<Columns>
<asp:BoundColumn DataField="user_id" HeaderText="UserId" Visible="False"></asp:BoundColumn>
<asp:BoundColumn DataField="user_type" HeaderText="UserType"></asp:BoundColumn>
<asp:BoundColumn DataField="first_nm" HeaderText="FirstName"></asp:BoundColumn>
<asp:BoundColumn DataField="middle_nm" HeaderText="MiddelName"></asp:BoundColumn>
<asp:BoundColumn DataField="last_nm" HeaderText="LastName"></asp:BoundColumn>
<asp:BoundColumn DataField="mobile_no" HeaderText="MobileNo"></asp:BoundColumn>
<asp:BoundColumn DataField="city" HeaderText="City"></asp:BoundColumn>
<asp:BoundColumn DataField="status" HeaderText="Status"></asp:BoundColumn>
<asp:TemplateColumn><ItemTemplate>
<asp:LinkButton id="lnk_edit" runat="server" CommandArgument='<%# DataBinder.Eval(Container.DataItem,"user_id") %>' Text="Edit" CommandName="lnk_edit" CssClass="gridtext"></asp:LinkButton> 
</ItemTemplate>
</asp:TemplateColumn>
<asp:TemplateColumn><ItemTemplate>
<asp:LinkButton id="lnk_del" runat="server" CommandName="lnk_del" CommandArgument='<%# DataBinder.Eval(Container.DataItem,"user_id") %>' CssClass="gridtext">Delete</asp:LinkButton>
</ItemTemplate>
</asp:TemplateColumn>
</Columns>

<HeaderStyle CssClass="gridtitle"></HeaderStyle>
</asp:DataGrid></TD></TR><TR><TD style="WIDTH: 100px"></TD></TR></TBODY></TABLE>
</contenttemplate>
                </asp:UpdatePanel></td>
        </tr>
        <tr>
            <td>
            </td>
        </tr>
        <tr>
            <td align="center">
                <asp:UpdatePanel id="up_entry" runat="server">
                    <contenttemplate>
<TABLE cellSpacing=0 cellPadding=0 border=0><TBODY><TR><TD style="TEXT-ALIGN: center" class="gridmenu " align=right>Transaction Entry</TD></TR><TR><TD align=right><TABLE style="WIDTH: 550px" cellSpacing=0 cellPadding=0 border=0><TBODY><TR><TD style="WIDTH: 100px" align=left></TD><TD style="WIDTH: 100px"></TD><TD style="WIDTH: 68px"></TD><TD style="WIDTH: 93px" align=right><asp:LinkButton id="lnk_add_Trans" onclick="lnk_add_Trans_Click" runat="server" CssClass="gridmenu ">Add</asp:LinkButton></TD></TR></TBODY></TABLE></TD></TR><TR><TD style="WIDTH: 100px" align=left><asp:DataGrid id="dg_entry" runat="server" Width="100%" AutoGenerateColumns="False" OnItemCommand="dg_entry_ItemCommand">
<ItemStyle CssClass="gridtext"></ItemStyle>
<Columns>
<asp:BoundColumn DataField="transaction_id" HeaderText="TransactionId" Visible="False"></asp:BoundColumn>
<asp:BoundColumn DataField="card_type_id" HeaderText="CardTyoeId" Visible="False"></asp:BoundColumn>
<asp:BoundColumn DataField="card_number" HeaderText="Card Number"></asp:BoundColumn>
<asp:BoundColumn DataField="expire_date" HeaderText="Expiere Date"></asp:BoundColumn>
<asp:BoundColumn DataField="trans_amount" HeaderText="Transaction Amt"></asp:BoundColumn>
<asp:BoundColumn DataField="first_name" HeaderText="First Name"></asp:BoundColumn>
<asp:BoundColumn DataField="last_name" HeaderText="LastName"></asp:BoundColumn>
<asp:BoundColumn DataField="city" HeaderText="City"></asp:BoundColumn>
<asp:BoundColumn DataField="state" HeaderText="State"></asp:BoundColumn>
<asp:BoundColumn DataField="phone_number" HeaderText="PhoneNumber"></asp:BoundColumn>
<asp:TemplateColumn><ItemTemplate>
                                <asp:LinkButton ID="lnk_edit" runat="server" CommandArgument='<%# DataBinder.Eval(Container.DataItem,"transaction_id") %>'
                                    CommandName="lnk_edit" CssClass="gridtext">Edit</asp:LinkButton>
                            
</ItemTemplate>
</asp:TemplateColumn>
<asp:TemplateColumn><ItemTemplate>
                                <asp:LinkButton ID="lnk_del" runat="server" CommandArgument='<%# DataBinder.Eval(Container.DataItem,"transaction_id") %>'
                                    CommandName="lnk_del" CssClass="gridtext">Delete</asp:LinkButton>
                            
</ItemTemplate>
</asp:TemplateColumn>
</Columns>

<HeaderStyle CssClass="gridtitle"></HeaderStyle>
</asp:DataGrid></TD></TR><TR><TD></TD></TR></TBODY></TABLE>
</contenttemplate>
                </asp:UpdatePanel></td>
        </tr>
        <tr>
            <td>
            </td>
        </tr>
    </table>
   
    <script language=javascript type="text/javascript">    
    function showSearchdiv(controlName)
    {
	    if(document.getElementById(controlName).style.display == 'inline')
	    {
		    document.getElementById(controlName).style.display = 'none';
    	}
    	else
    	{
	    document.getElementById(controlName).style.display = 'inline';
	    }
    }  
    </script>
</asp:Content>

