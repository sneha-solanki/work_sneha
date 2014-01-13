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
using GeneralFunction;
using System.Data.SqlClient;

public partial class dialzone : System.Web.UI.MasterPage
{
    dbClass general_function = new dbClass();    

    protected void Page_Load(object sender, EventArgs e)
    {
        if(Convert.ToString(Session["UserName"] )!= "")
        {
            lbl_welcome.Visible = true;
            lbl_welcome.Text = "Welcome" + ": " + Convert.ToString(Session["UserName"]);
            if (Convert.ToInt64(Session["UserTypeId"]) == 1)
            {
                lnk_user.Visible = true;
                lnk_report.Visible = true;
                img_user.Visible = true;
                img_rpt.Visible = true;
            }
            else if (Convert.ToInt64(Session["UserTypeId"]) == 2)
            {
                lnk_dataEnt.Visible = true;
                img_trans.Visible = true;                
            }            
            img_logout.Visible = true;
            lnk_changepass.Visible = true;
            img_pass.Visible = true;
            lnk_myprofile.Visible = true;
            img_profile.Visible = true;
        }
        else
        {
            lbl_welcome.Visible = false;
        }
    }
    protected void ImageButton1_Click(object sender, ImageClickEventArgs e)
    {
        
    }

    protected void lnk_user_Click(object sender, EventArgs e)
    {
        Response.Redirect("main.aspx");
    }
    protected void lnk_dataEnt_Click(object sender, EventArgs e)
    {
        Response.Redirect("main.aspx");
    }
    
    protected void lnk_changepass_Click(object sender, EventArgs e)
    {
        general_function.popup_form(lnk_changepass, typeof(LinkButton), "Click", "ChangePassword.aspx",350,210,320,300);

    }
    protected void lnk_myprofile_Click(object sender, EventArgs e)
    {
        Response.Redirect("Myprofile.aspx");
    }
    protected void img_logout_Click(object sender, ImageClickEventArgs e)
    {
        Session["UserName"] = "";
        Session["UserTypeId"] = "";
        Session["UserId"] = "";
        Response.Redirect("Default.aspx");
    }
}
