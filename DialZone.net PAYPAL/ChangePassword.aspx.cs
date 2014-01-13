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
using System.Data.SqlClient;
using GeneralFunction;

public partial class ChangePassword : System.Web.UI.Page
{
    SqlConnection cnn;
    dbClass general_class = new dbClass();
    SqlDataAdapter adp;
    DataTable dt = new DataTable();
    DataRow dr;
    SqlCommandBuilder cmd;
    string sqlQry;
    Int64 userId;
    protected void Page_Load(object sender, EventArgs e)
    {

        if (cnn == null)
        {
            cnn = general_class.getConnection();
        }
        userId = Convert.ToInt64(Session["UserId"]);
        img_btn_gen.ImageUrl = "~/image/save.jpg";
        img_btn_cancel.ImageUrl = "~/image/close.jpg";
    }
    protected void img_btn_gen_Click(object sender, ImageClickEventArgs e)
    {
        check_currentPassword();
    }
    private void check_currentPassword()
    {
        if (txt_new_pass.Text != "")
        {
            sqlQry = "SELECT user_id,pass_word FROM create_user where user_id=" + userId + " And pass_word='" + txt_curr_pass.Text + "'";
            adp = new SqlDataAdapter(sqlQry, cnn);
            if (dt != null)
                dt.Clear();
            adp.Fill(dt);
            if (dt.Rows.Count > 0)
            {
                if (txt_new_pass.Text == txt_confirm_pass.Text)
                {
                    dr = dt.Rows[0];
                    dr["pass_word"] = txt_new_pass.Text;
                    cmd = new SqlCommandBuilder(adp);
                    adp.Update(dt);
                    general_class.CloseForm(img_btn_gen, typeof(ImageButton), "Click", "ChangePassword.aspx");
                }
                else
                {
                    Response.Write("<script>alert('Confirm Password Not Match!')</script>");
                }
            }
            else
            {
                Response.Write("<script>alert('Enter Currect Current Password!')</script>");
            }
        }
        else
        {
            Response.Write("<script>alert('Enter New Password!')</script>");
        }
    }
    protected void img_btn_cancel_Click(object sender, ImageClickEventArgs e)
    {
        general_class.CloseForm(img_btn_cancel, typeof(ImageButton), "Click", "ChangePassword.aspx");
    }
}
