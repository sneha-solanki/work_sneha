
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

public partial class AddTransaction : System.Web.UI.Page
{
    public dbClass general_function = new dbClass();
    public SqlConnection cnn;

    SqlDataAdapter adp;
    DataTable dt = new DataTable();
    DataRow dr;
    SqlCommandBuilder cmd;
    string action;
    string sql_qry;
    Int64 trnsactionId;
    Int64 maxTrancId;
    Int64 userId;
    string curr_date;
    string expire_date; 

    protected void Page_Load(object sender, EventArgs e)
    {
        userId = Convert.ToInt64(Session["UserId"]);
        trnsactionId = Convert.ToInt64(Session["trnsactionId"]);
        curr_date = DateTime.Now.ToString();
        if (cnn == null)
        {
            cnn = general_function.getConnection();            
        }
        if (!IsPostBack)
        {            
            fill_card_type();
        }
        img_close.ImageUrl = "~/image/close.jpg";
        action = Convert.ToString(Session["action"]);


        if (action == "Edit")
        {
            img_general.ImageUrl = "~/image/save.jpg";

            if (IsPostBack == false)
            {
                display_rec();
            }
        }
        else if(action == "Add")
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
    
   
    private void add_rec()
    {
        if (txt_cardnumber.Text != "" && txt_expiredate.Text != "" && txt_tranAmount.Text != "" && txt_CVV.Text != "" && txt_firstname.Text != "" && txt_lastname.Text != "" && txt_billingaddress.Text != "" && txt_city.Text != "" && txt_state.Text != "")
        {
            curr_date = DateTime.Now.ToShortDateString();
            expire_date = DateTime.Now.ToShortTimeString();

            if (action == "Add")
            {
                if (cnn == null)
                    cnn = general_function.getConnection();

                sql_qry = "SELECT transaction_id,card_type_id,card_number, expire_date, trans_amount,cvv, first_name, last_name, billing_address, city, state, zipcode," +
                          "phone_number, user_id,entry_date FROM transaction_enty where transaction_id=" + 0;

                adp = new SqlDataAdapter(sql_qry, cnn);
                if (dt != null)
                    dt.Clear();
                adp.Fill(dt);
                dr = dt.NewRow();
                maxTrancId = general_function.MaxValue("transaction_enty", "transaction_id", "");

                dr["transaction_id"] = maxTrancId;
                dr["card_type_id"] = cbo_cardtype.Text;
                dr["card_number"] = txt_cardnumber.Text;
                //dr["expire_date"] = txt_expiredate.Text;
                dr["expire_date"] = "01/01/2010"; 
                dr["trans_amount"] = txt_tranAmount.Text;
                dr["cvv"] = txt_CVV.Text;
                dr["first_name"] = txt_firstname.Text;
                dr["last_name"] = txt_lastname.Text;
                dr["billing_address"] = txt_billingaddress.Text;
                dr["city"] = txt_city.Text;
                dr["state"] = txt_state.Text;
                dr["zipcode"] = txt_zipcode.Text;
                dr["phone_number"] = txt_phoneno.Text;
                dr["user_id"] = userId;
                dr["entry_date"] = curr_date;


                if (action == "add")
                {
                    dr["entry_date"] = curr_date;
                }

                dt.Rows.Add(dr);
                cmd = new SqlCommandBuilder(adp);
                adp.Update(dt);
                this.Context.Items["business"] = "jigarparmar.5959@gmail.com";
                // this.Context.Items["business"] = "mann.goswami@gmail.com";
                this.Context.Items["item_name"] = txt_firstname.Text + " " + txt_lastname.Text;
                this.Context.Items["amount"] = txt_tranAmount.Text;
                
                Server.Transfer("PaypalPage.aspx", true);
                //general_function.CloseForm(img_general, typeof(ImageButton), "Click", "AddTransaction.aspx");

            }
            else if (action == "Edit")
            {
                if (cnn == null)
                    cnn = general_function.getConnection();

                sql_qry = "SELECT transaction_id,card_type_id,card_number, expire_date, trans_amount,cvv, first_name, last_name, billing_address, city, state, zipcode," +
                          "phone_number, user_id,entry_date FROM transaction_enty where transaction_id=" + trnsactionId;

                adp = new SqlDataAdapter(sql_qry, cnn);

                if (dt != null)
                    dt.Clear();
                adp.Fill(dt);
                dr = dt.Rows[0];               
                dr["card_type_id"] = cbo_cardtype.Text;
                dr["card_number"] = txt_cardnumber.Text;
                try
                {
                    dr["expire_date"] = txt_expiredate.Text;
                }
                catch
                {
                }
                dr["trans_amount"] = txt_tranAmount.Text;                
                dr["cvv"] = txt_CVV.Text;
                dr["first_name"] = txt_firstname.Text;
                dr["last_name"] = txt_lastname.Text;
                dr["billing_address"] = txt_billingaddress.Text;
                dr["city"] = txt_city.Text;
                dr["state"] = txt_state.Text;
                dr["zipcode"] = txt_zipcode.Text;
                dr["phone_number"] = txt_phoneno.Text;

                cmd = new SqlCommandBuilder(adp);
                adp.Update(dt);
                general_function.CloseForm(img_general, typeof(ImageButton), "Click", "AddTransaction.aspx");

            }
            else if (action == "Delete")
            {
                SqlCommand cmdt_del = new SqlCommand();
                SqlDataAdapter adp_del = new SqlDataAdapter();

                if (cnn == null)
                    cnn = general_function.getConnection();
                cmdt_del.CommandText = "Delete FROM transaction_enty where transaction_id=" + trnsactionId;
                cmdt_del.Connection = general_function.getConnection();
                adp_del.DeleteCommand = cmdt_del;
                adp_del.DeleteCommand.ExecuteNonQuery();
                general_function.CloseForm(img_general, typeof(ImageButton), "Click", "AddTransaction.aspxs");

            }
        }
        else
        {
            Response.Write("<script>alert('Fill Proper Data!')</script>");
        }
     }

    private void display_rec()
    {
        SqlDataAdapter adp_T_dis;
        DataTable dtT_dis = new DataTable();
        DataRow drT_dis;
        int i = 1;
        if (cnn == null)
            cnn = general_function.getConnection();

        //sql_qry = "SELECT transaction_id,(SELECT card_name FROM card_master where card_master.card_type_id=transaction_enty.card_type_id)As card_name,card_number, CONVERT(VARCHAR(10),expire_date,103)As expire_date, trans_amount, cvv, first_name, last_name, billing_address, city, state, zipcode," +
        //          "phone_number,user_id, entry_date FROM transaction_enty where transaction_id=" + trnsactionId;

        sql_qry = "SELECT transaction_id,card_type_id,card_number, CONVERT(VARCHAR(10),expire_date,103)As expire_date, trans_amount, cvv, first_name, last_name, billing_address, city, state, zipcode," +
                  "phone_number,user_id, entry_date FROM transaction_enty where transaction_id=" + trnsactionId;
        
        adp_T_dis = new SqlDataAdapter(sql_qry,cnn);

        if (dtT_dis != null)
            dtT_dis.Clear();

        adp_T_dis.Fill(dtT_dis);
        if (dtT_dis.Rows.Count > 0)
        {
            drT_dis = dtT_dis.Rows[0];

            while(i != Convert.ToInt64(drT_dis["card_type_id"]))
            {
                i++;
            }
            cbo_cardtype.SelectedIndex = i-1;           
            txt_cardnumber.Text = Convert.ToString(drT_dis["card_number"]);
            txt_expiredate.Text = Convert.ToString(drT_dis["expire_date"]);
            txt_tranAmount.Text = Convert.ToString(drT_dis["trans_amount"]);
            txt_CVV.Text = Convert.ToString(drT_dis["cvv"]);
            txt_firstname.Text = Convert.ToString(drT_dis["first_name"]);
            txt_lastname.Text = Convert.ToString(drT_dis["last_name"]);
            txt_billingaddress.Text = Convert.ToString(drT_dis["billing_address"]);
            txt_city.Text = Convert.ToString(drT_dis["city"]);
            txt_state.Text = Convert.ToString(drT_dis["state"]);
            txt_zipcode.Text = Convert.ToString(drT_dis["zipcode"]);
            txt_phoneno.Text = Convert.ToString(drT_dis["phone_number"]);
        }
    }

    protected void img_close_Click(object sender, ImageClickEventArgs e)
    {
        general_function.CloseForm(img_close, typeof(ImageButton), "Click", "AddTransaction.aspx");
    }
    protected void img_general_Click(object sender, ImageClickEventArgs e)
    {
        add_rec();
    }
   
    private void fill_card_type()
    {
        SqlDataAdapter adp_type;
        DataTable dt_type = new DataTable();
        DataRow dr_type;

        if (cnn == null)
            cnn = general_function.getConnection();
        sql_qry = "SELECT card_type_id,card_name FROM card_master";

        adp_type = new SqlDataAdapter(sql_qry, cnn);

        if (dt_type != null)
            dt_type.Clear();
        adp_type.Fill(dt_type);

        if (dt_type.Rows.Count > 0)
        {
            for (int i = 0; i < dt_type.Rows.Count; i++)
            {
                dr_type = dt_type.Rows[i];
                cbo_cardtype.Items.Add(Convert.ToString(dr_type["card_name"]));
                cbo_cardtype.Items[i].Value = Convert.ToString(dr_type["card_type_id"]);
            }
        }
    }

}
