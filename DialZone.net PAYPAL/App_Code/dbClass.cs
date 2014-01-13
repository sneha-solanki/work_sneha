using System;
using System.Data;
using System.Configuration;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Data.SqlClient;

/// <summary>
/// Summary description for dbClass
/// </summary>
namespace GeneralFunction
{
    public class dbClass
    {
        string connectionString;
        public SqlConnection cnn;
        public SqlConnection getConnection()
        {
            SqlConnectionStringBuilder cb = new SqlConnectionStringBuilder();

            // connect to local

            //cb.DataSource = "MAHAVIR";
            //cb.InitialCatalog = "banktrasaction";
            //cb.UserID = "sa";
            //cb.Password = "sa@1234";
            //cb.ConnectTimeout = 100;
            //cb.IntegratedSecurity = true;

            cb.DataSource = "rangmaholgroup.com\\helm";
            cb.InitialCatalog = "db_dialzone";
            cb.UserID = "dialzone";
            cb.Password = "Shiva159";
            cb.ConnectTimeout = 500;

            //cb.DataSource = ".";
            //cb.InitialCatalog = "banktrasaction";
            //cb.UserID = "sa";
            //cb.Password = "sa";
            //cb.ConnectTimeout = 100;
            //cb.IntegratedSecurity = true;

            cnn = new SqlConnection(cb.ConnectionString);
            if (cnn.State != ConnectionState.Open)
                cnn.Open();
            return (cnn);
        }
        public Int64 MaxValue(string TableName, string Field, string Condition) //Optional string Condition  = ""
        {
            string qry;
            DataTable dt = new DataTable();
            SqlDataAdapter adr;

            if (Condition != "")
            {
                qry = " SELECT isnull(MIN(" + Field + "),0) + 1 AS HEAD_ID " +
                      " FROM " + TableName + " OUTER_TABLE WHERE " +
                      " (NOT EXISTS (SELECT " + Field + " FROM " + TableName +
                      " INNER_TABLE WHERE OUTER_TABLE." + Field + " + 1 = INNER_TABLE." + Field +
                      " AND " + Condition + ")) " +
                      " AND " + Condition;
            }
            else
            {
                qry = " SELECT isnull(MIN(" + Field + "),0) + 1 AS HEAD_ID " +
                      " FROM " + TableName + " OUTER_TABLE WHERE " +
                      " (NOT EXISTS (SELECT " + Field + " FROM " + TableName +
                      " INNER_TABLE WHERE OUTER_TABLE." + Field + " + 1 = INNER_TABLE." + Field + ")) ";
            }

            cnn = getConnection();
            adr = new SqlDataAdapter(qry, cnn);
            dt.Clear();

            adr.Fill(dt);
            return Convert.ToInt64(dt.Rows[0]["head_id"]);
        }
        public void CloseForm(Control ctrlName, Type mType, string mEvent, string formName)
        {
            string str_jscript = "window.close('" + formName + "')";
            ScriptManager.RegisterClientScriptBlock(ctrlName, mType, mEvent, str_jscript, true);
        }

        public void popup_form(Control ctrlName, Type mType, string mEvent, string formName, Int64 width, Int64 height, Int64 left, Int64 top)
        {
            string str_jscript = "window.open('" + formName + "','target','width=" + width + ",height=" + height + ",left=" + left + ",top=" + top + ",scrollbars=yes')";
            ScriptManager.RegisterClientScriptBlock(ctrlName, mType, mEvent, str_jscript, true);
        }       

    }
}