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

public partial class _Default : System.Web.UI.Page
{
    dbClass general_function = new dbClass();
    SqlConnection cnn;
    string sqlQry;
    SqlDataAdapter adp;
    DataTable dt = new DataTable("create_user");
    DataRow dr;
    protected void Page_Load(object sender, EventArgs e)
    {

    }
protected void  ImageButton1_Click(object sender, ImageClickEventArgs e)
{
    string userName;
    if (Convert.ToString(Session["UserName"]) == "")
        {
            if (txt_username.Text == "")
            {
                error_msg.Text = "Enter UserName";
                error_msg.Visible = true;
            }
            else if (txt_password.Text == "")
            {
                error_msg.Text = "Enter Password";
                error_msg.Visible = true;
            }
            else if (txt_username.Text == "" && txt_username.Text == "")
            {
                error_msg.Text = "Enter User Name";
                error_msg.Visible = true;
            }
            else
            {
                if (cnn == null)
                    cnn = general_function.getConnection();
                error_msg.Visible = false;
                sqlQry = "Select user_id,user_name,pass_word,user_type_id,first_nm,middle_nm,last_nm,status from create_user WHERE user_name='" + txt_username.Text + "' and pass_word='" + txt_password.Text + "' And status="+ 1;
                adp = new SqlDataAdapter(sqlQry, cnn);
                if (dt != null)
                    dt.Clear();
                adp.Fill(dt);
                if (dt.Rows.Count > 0)
                {
                    dr = dt.Rows[0];
                    {
                        if (Convert.ToString(dr["user_name"]) == txt_username.Text && Convert.ToString(dr["pass_word"]) == txt_password.Text)
                        {
                            userName = Convert.ToString(dr["first_nm"] + " " + dr["middle_nm"] + " " + dr["last_nm"]);
                            Session["UserName"] = userName;
                            Session["UserId"] = dr["user_id"];
                            Session["profile"] = dr["user_id"];
                            Session["UserTypeId"] = dr["user_type_id"];
                            Response.Redirect("main.aspx");
                        }
                    }
                }
                else
                {
                    error_msg.Text = "UserName or Password is Wrong or u r not active";
                    error_msg.Visible = true;
                }
            }
        }
}
}
