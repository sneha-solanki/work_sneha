using System;
using System.Data;
using System.Configuration;
using System.Collections;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;

public partial class paypal_PaypalPage : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {        
        business.Value = this.Context.Items["business"].ToString();
        item_name.Value = this.Context.Items["item_name"].ToString();
        amount.Value = this.Context.Items["amount"].ToString();        
    }
}
