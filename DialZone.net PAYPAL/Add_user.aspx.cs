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

public partial class Add_user : System.Web.UI.Page
{
    public dbClass general_function = new dbClass();
    public SqlConnection cnn;

    SqlDataAdapter adp;
    DataTable dt = new DataTable();
    DataRow dr;
    SqlCommandBuilder cmd;

    string action;
    string sql_qry;
    Int16 userTypeId;
    Int64 maxEntId;
    Int64 userId;

    protected void Page_Load(object sender, EventArgs e)
    {
        userId = Convert.ToInt64(Session["usrId"]);
        if (cnn == null)
        {
            cnn = general_function.getConnection();
        }
        img_close.ImageUrl = "~/image/close.jpg";
        action = Convert.ToString(Session["action"]);
        if (IsPostBack == false)
        {
            fill_userTypecombo();
        }
        if (action == "Edit")
        {
            img_general.ImageUrl = "~/image/save.jpg";
            if (IsPostBack == false)
            {
                display_rec();
            }
        }
        else if (action == "Add")
        {
            img_general.ImageUrl = "~/image/save.jpg";
        }
        else if (action == "Delete")
        {
            img_general.ImageUrl = "~/image/delete.jpg";
            if (IsPostBack == false)
            {
                display_rec();
            }
        }

    }
    protected void img_close_Click(object sender, ImageClickEventArgs e)
    {
        general_function.CloseForm(img_close, typeof(ImageButton), "Click", "Add_user.aspx");
    }
    private void fill_userTypecombo()
    {
        SqlDataAdapter adp_usrType;
        DataTable dt_usrType = new DataTable();
        DataRow dr_usrType;

        if (cnn == null)
            cnn = general_function.getConnection();
        sql_qry = "SELECT user_type_id, user_type FROM user_type_master";
        adp_usrType = new SqlDataAdapter(sql_qry, cnn);
        if (dt_usrType != null)
            dt_usrType.Clear();
        adp_usrType.Fill(dt_usrType);
        if (dt_usrType.Rows.Count > 0)
        {
            for (int i = 0; i < dt_usrType.Rows.Count; i++)
            {
                dr_usrType = dt_usrType.Rows[i];
                cbo_user_type.Items.Add(Convert.ToString(dr_usrType["user_type"]));
            }
        }
    }
    private void get_userTypeId()
    {
        userTypeId = Convert.ToInt16(cbo_user_type.SelectedIndex + 1);
    }
    protected void img_general_Click(object sender, ImageClickEventArgs e)
    {
        if (txt_firstname.Text != "" && txt_middelname.Text != "" && txt_lastname.Text != "" && txt_dateofBirth.Text != "" && txt_occupation.Text != "" && txt_address.Text != "" && txt_city.Text != "" && txt_userName.Text != "" && txt_password.Text != "")
        {
            add_rec();
        }
        else
        {
            Response.Write("<script>alert('Fill proper Data in all Fileds!')</script>");
        }

    }
    private void add_rec()
    {
        if (action == "Add")
        {           
                if (cnn == null)
                    cnn = general_function.getConnection();
                sql_qry = "SELECT user_id, user_name, pass_word, user_type_id, first_nm, middle_nm, last_nm, data_of_birth, phone_no, mobile_no, e_mail, status, gender, occupation," +
                          "address, city, zip_code FROM dbo.create_user where user_id=" + 0;
                adp = new SqlDataAdapter(sql_qry, cnn);
                if (dt != null)
                    dt.Clear();
                adp.Fill(dt);
                dr = dt.NewRow();
                maxEntId = general_function.MaxValue("create_user", "user_id", "");
                dr["user_id"] = maxEntId;
        }
        else if (action == "Edit")
        {
                if (cnn == null)
                    cnn = general_function.getConnection();
                sql_qry = "SELECT user_id, user_name, pass_word, user_type_id, first_nm, middle_nm, last_nm, data_of_birth, phone_no, mobile_no, e_mail, status, gender, occupation," +
                          "address, city, zip_code FROM dbo.create_user where user_id=" + userId;
                adp = new SqlDataAdapter(sql_qry, cnn);
                if (dt != null)
                    dt.Clear();
                adp.Fill(dt);
                dr = dt.Rows[0];
        }
        if (action != "Delete")
        {
            dr["user_name"] = txt_userName.Text;
            dr["pass_word"] = txt_password.Text;
            get_userTypeId();
            dr["user_type_id"] = userTypeId;
            dr["first_nm"] = txt_firstname.Text;
            dr["middle_nm"] = txt_middelname.Text;
            dr["last_nm"] = txt_lastname.Text;
            try
            {
                dr["data_of_birth"] = txt_dateofBirth.Text;
            }
            catch
            { }
            dr["phone_no"] = txt_phone.Text;
            dr["mobile_no"] = txt_mobile.Text;
            dr["e_mail"] = txt_email.Text;
            if (chk_status.Checked == true)
            {
                dr["status"] = 1;
            }
            else
            {
                dr["status"] = 0;
            }
            dr["gender"] = cbo_gender.Text;
            dr["occupation"] = txt_occupation.Text;
            dr["address"] = txt_address.Text;
            dr["city"] = txt_city.Text;
            dr["zip_code"] = txt_zip.Text;
            if (action == "Add")
            {
                dt.Rows.Add(dr);
            }
            cmd = new SqlCommandBuilder(adp);
            adp.Update(dt);
            general_function.CloseForm(img_general, typeof(ImageButton), "Click", "Add_user.aspx");
        }
        
        if (action == "Delete")
        {
            SqlCommand scmd = new SqlCommand();  
            if (cnn == null)
                cnn = general_function.getConnection();
            sql_qry = "SELECT user_id, user_name, pass_word, user_type_id, first_nm, middle_nm, last_nm, data_of_birth, phone_no, mobile_no, e_mail, status, gender, occupation," +
                      "address, city, zip_code FROM dbo.create_user where user_id=" + 0;
            adp = new SqlDataAdapter(sql_qry, cnn);
            if (dt != null)
                dt.Clear();
            adp.Fill(dt);

            scmd.CommandText = "Delete FROM create_user Where user_id=" + userId;
            scmd.Connection = general_function.getConnection();
            adp.DeleteCommand = scmd;
            adp.DeleteCommand.ExecuteNonQuery();
            general_function.CloseForm(img_general, typeof(ImageButton), "Click", "Add_user.aspx");
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
        if (Convert.ToInt64(dr["user_type_id"]) == 1)
        {
            cbo_user_type.SelectedIndex = 0;
        }
        else
        {
            cbo_user_type.SelectedIndex = 1;
        }
        txt_firstname.Text=Convert.ToString(dr["first_nm"]);
        txt_middelname.Text=Convert.ToString(dr["middle_nm"]);
        txt_lastname.Text=Convert.ToString(dr["last_nm"]);
        txt_dateofBirth.Text=Convert.ToString(dr["data_of_birth"]);
        txt_phone.Text=Convert.ToString(dr["phone_no"]);
        txt_mobile.Text=Convert.ToString(dr["mobile_no"]);
        txt_email.Text=Convert.ToString(dr["e_mail"]);
        if(Convert.ToInt64(dr["status"]) == 1)
        {
            chk_status.Checked = true;
        }
        else
        {
            chk_status.Checked = false;
        }

        if (Convert.ToInt64(dr["gender"]) == 1)
        {
            cbo_gender.SelectedIndex = 0;
        }
        else
        {
            cbo_gender.SelectedIndex = 1;
        }    
        txt_occupation.Text=Convert.ToString(dr["occupation"]);
        txt_address.Text=Convert.ToString(dr["address"]);
        txt_city.Text=Convert.ToString(dr["city"]);
        txt_zip.Text = Convert.ToString(dr["zip_code"]);
    }
}
