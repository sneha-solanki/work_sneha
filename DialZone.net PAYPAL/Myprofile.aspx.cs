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

public partial class Myprofile : System.Web.UI.Page
{
    public dbClass general_function = new dbClass();
    public SqlConnection cnn;
    string sql_qry;
    Int64 userId;
    protected void Page_Load(object sender, EventArgs e)
    {
        userId = Convert.ToInt64(Session["profile"]);
        if (cnn == null)
        {
            cnn = general_function.getConnection();
        }              
        if (IsPostBack == false)
        {
            display_rec();
        }  
    }
    private void display_rec()
    {
        SqlDataAdapter adp_dis;
        DataTable dt_dis = new DataTable();
        DataRow dr;

        if (cnn == null)
            cnn = general_function.getConnection();
        sql_qry = "SELECT user_id, user_name, pass_word, user_type_id, first_nm, middle_nm, last_nm, CONVERT(VARCHAR(10),data_of_birth,103)AS data_of_birth, phone_no, mobile_no, e_mail, status, gender, occupation," +
                  "address, city, zip_code FROM dbo.create_user where user_id=" + userId;
        adp_dis = new SqlDataAdapter(sql_qry, cnn);
        if (dt_dis != null)
            dt_dis.Clear();
        adp_dis.Fill(dt_dis);
        dr = dt_dis.Rows[0];
        txt_userName.Text = Convert.ToString(dr["user_name"]);
        txt_password.Text = Convert.ToString(dr["pass_word"]);
        cbo_user_type.Items.Clear();
        if (Convert.ToInt64(dr["user_type_id"]) == 1)
        {
            cbo_user_type.Items.Add("Administrator");
        }
        else
        {
            cbo_user_type.Items.Add("User");            
        }
        txt_firstname.Text = Convert.ToString(dr["first_nm"]);
        txt_middelname.Text = Convert.ToString(dr["middle_nm"]);
        txt_lastname.Text = Convert.ToString(dr["last_nm"]);
        txt_dateofBirth.Text = Convert.ToString(dr["data_of_birth"]);
        txt_phone.Text = Convert.ToString(dr["phone_no"]);
        txt_mobile.Text = Convert.ToString(dr["mobile_no"]);
        txt_email.Text = Convert.ToString(dr["e_mail"]);
        if (Convert.ToInt64(dr["status"]) == 1)
        {
            chk_status.Checked = true;
        }
        else
        {
            chk_status.Checked = false;
        }

        if (Convert.ToInt64(dr["gender"]) == 1)
        {
            cbo_gender.Text = "Male";
        }
        else
        {
            cbo_gender.Text = "Female";
        }
        txt_occupation.Text = Convert.ToString(dr["occupation"]);
        txt_address.Text = Convert.ToString(dr["address"]);
        txt_city.Text = Convert.ToString(dr["city"]);
        txt_zip.Text = Convert.ToString(dr["zip_code"]);
    }    
}
