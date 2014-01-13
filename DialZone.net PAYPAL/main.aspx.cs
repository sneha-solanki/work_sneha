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

public partial class main : System.Web.UI.Page
{
    public dbClass general_function = new dbClass();
    public SqlConnection cnn;
    string sql_qry;
    SqlDataAdapter adp;
    DataTable dt = new DataTable("create_user");
    DataRow dr;  
    SqlCommandBuilder cmd;
    Int64 userId;
    Int64 userType;

    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["UserTypeId"] != null)
        {
            if (cnn == null)
            {
                cnn = general_function.getConnection();
            }
            if (!IsPostBack)
            {
                userId = Convert.ToInt64(Session["UserId"]);
                userType = Convert.ToInt64(Session["UserTypeId"]);
            }
            if (userType == 1)
            {
                //lnk_dataEnt.Visible = false;
                up_entry.Visible = false;
            }
            else if (userType == 2)
            {
                //lnk_user.Visible = false;
                //lnk_report.Visible = false;
                up_user.Visible = false;
            }
            if (!IsPostBack)
            {
                fill_grid();
                fill_entygrid();
            }
        }
        else
        {
            Response.Write("<script>alert('Please Login!')</script>");
        }

    }
    private void fill_grid()
    {
        if (cnn == null)
            cnn = general_function.getConnection();

        sql_qry = "SELECT create_user.user_id,create_user.first_nm,create_user.middle_nm,create_user.last_nm,create_user.mobile_no,CASE create_user.status WHEN 1 THEN 'Active' WHEN 0 THEN 'DeActive' END As status,create_user.city," +
                  "user_type_master.user_type FROM create_user INNER JOIN " +
                  "user_type_master ON create_user.user_type_id = user_type_master.user_type_id";
        adp = new SqlDataAdapter(sql_qry, cnn);
        if (dt != null)
            dt.Clear();
        adp.Fill(dt);
        dg_user.DataSource = dt;
        dg_user.DataBind();

    }
    private void fill_entygrid()
    {
        SqlDataAdapter adp_enty;
        DataTable dt_enty = new DataTable();
        if (cnn == null)
            cnn = general_function.getConnection();
        sql_qry = "SELECT transaction_id, card_type_id, card_number,CONVERT(VARCHAR(10),expire_date,103)As expire_date,trans_amount, first_name, last_name, city, state, phone_number,user_id FROM transaction_enty where user_id=" + Session["profile"];   
        adp_enty = new SqlDataAdapter(sql_qry, cnn);
        if (dt_enty != null)
            dt_enty.Clear();       
        adp_enty.Fill(dt_enty);
        dg_entry.DataSource = dt_enty;
        dg_entry.DataBind();

    }

    protected void lnk_add_user_Click(object sender, EventArgs e)
    {
        Session["action"] = "Add";
        general_function.popup_form(lnk_add_user, typeof(LinkButton), "Click", "Add_user.aspx",600,430,230,160);
    }

    protected void dg_user_ItemCommand(object source, DataGridCommandEventArgs e)
    {
        Session["usrId"] = e.CommandArgument;
        if (e.CommandName == "lnk_edit")
        {
            Session["action"] = "Edit";
            general_function.popup_form(dg_user, typeof(DataGrid), "ItemCommand", "Add_user.aspx", 600, 430, 230, 160);
        }
        else if (e.CommandName == "lnk_del")
        {
            Session["action"] = "Delete";
            general_function.popup_form(dg_user, typeof(DataGrid), "ItemCommand", "Add_user.aspx",600,430,230,160);
        }
    }   

    protected void lnk_add_Trans_Click(object sender, EventArgs e)
    {
        Session["action"] = "Add";
        general_function.popup_form(lnk_add_Trans, typeof(LinkButton), "Click", "AddTransaction.aspx",900,650,50,50);
    }


    protected void dg_entry_ItemCommand(object source, DataGridCommandEventArgs e)
    {
       Session["trnsactionId"] = e.CommandArgument;
       if (e.CommandName == "lnk_edit")
       {
           Session["action"] = "Edit";
           general_function.popup_form(dg_entry, typeof(DataGrid), "ItemCommand", "AddTransaction.aspx", 600, 350, 230, 200);
       }
       else if (e.CommandName == "lnk_del")
       {
           Session["action"] = "Delete";
           general_function.popup_form(dg_entry, typeof(DataGrid), "ItemCommand", "AddTransaction.aspx", 600, 350, 230, 200);
       }

    }

    
}
