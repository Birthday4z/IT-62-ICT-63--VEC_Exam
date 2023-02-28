using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using static System.Windows.Forms.VisualStyles.VisualStyleElement;

namespace programLibrary
{
    public partial class FormRegister : Form
    {
        public FormRegister()
        {
            InitializeComponent();
        }

        private void btnAdd_Click(object sender, EventArgs e)
        {
            String dbServer = "localhost";
            String dbName = "db_library";
            String dbUsername = "root";
            String dbPassword = "";
            String conString = "SERVER=" + dbServer + ";" + "DATABASE=" + dbName + ";" + "UID=" + dbUsername + ";" + "PASSWORD=" + dbPassword + ";";

            MySqlConnection dbCon = new MySqlConnection(conString);
            dbCon.Open();
            String SQL = "INSERT INTO tb_member(m_user, m_pass, m_name, m_phone) VALUES ('" + textBoxUsername.Text + "', '" + textBoxPassword.Text + "','" + textBoxName.Text + "','" + textBoxPhone.Text + "')";
            MySqlCommand cmd = new MySqlCommand(SQL, dbCon);

            try
            {
                if (cmd.ExecuteNonQuery() > 0)
                {
                    MessageBox.Show("ทำรายการสำเร็จ", "สำเร็จ", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    var form1 = new Form1();
                    this.Hide();
                    form1.Show();

                }
            }
            catch (Exception ex)
            {
                if (ex.Message.ToLower().Contains("duplicate entry"))
                {
                    MessageBox.Show("ไม่สามารถเพิ่มข้อมูลได้ เนื่องจากมีชื่อผู้ใช้นี้แล้ว", "ข้อมูลซ้ำ", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                }
                else
                {
                    MessageBox.Show(ex.Message);
                }
            }


        }

        private void btnCancel_Click(object sender, EventArgs e)
        {
            var form1 = new Form1();
            this.Hide();
            form1.Show();
        }
    }
}
