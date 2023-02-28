using System.Reflection.Metadata;
using System.Diagnostics;
using MySql.Data.MySqlClient;
using System.Data;
using System.Xml.Linq;
using System;

namespace programLibrary
{
    public partial class Form1 : Form
    {
        String TempUsername = "";
        public Form1()
        {
            InitializeComponent();



            String dbServer = "localhost";
            String dbName = "db_library";
            String dbUsername = "root";
            String dbPassword = "";
            String conString = "SERVER=" + dbServer + ";" + "DATABASE=" + dbName + ";" + "UID=" + dbUsername + ";" + "PASSWORD=" + dbPassword + ";";

            MySqlConnection dbCon = new MySqlConnection(conString);
            dbCon.Open();
            String SQL = "SELECT ROW_NUMBER() OVER () AS ลำดับ, m_user AS ชื่อผู้ใช้, m_pass AS รหัสผ่าน, m_name AS 'ชื่อ - สกุล', m_phone AS เบอร์โทรศัพท์ FROM tb_member";
            MySqlCommand cmd = new MySqlCommand(SQL, dbCon);
            MySqlDataReader reader = cmd.ExecuteReader();

            DataTable dt = new DataTable();
            dt.Load(reader);
            dataGridView1.DataSource = dt;
            dbCon.Close();

        }

        private void btnAdd_Click(object sender, EventArgs e)
        {
            var formRegister = new FormRegister();
            this.Hide();
            formRegister.Show();
        }

        private void dataGridView1_MouseClick(object sender, MouseEventArgs e)
        {
            textBoxUsername.Text = dataGridView1.SelectedRows[0].Cells[1].Value.ToString();
            textBoxPassword.Text = dataGridView1.SelectedRows[0].Cells[2].Value.ToString();
            textBoxName.Text = dataGridView1.SelectedRows[0].Cells[3].Value.ToString();
            textBoxPhone.Text = dataGridView1.SelectedRows[0].Cells[4].Value.ToString();

            TempUsername = textBoxUsername.Text;
        }

        private void button2_Click(object sender, EventArgs e) // Update
        {
            String dbServer = "localhost";
            String dbName = "db_library";
            String dbUsername = "root";
            String dbPassword = "";
            String conString = "SERVER=" + dbServer + ";" + "DATABASE=" + dbName + ";" + "UID=" + dbUsername + ";" + "PASSWORD=" + dbPassword + ";";

            MySqlConnection dbCon = new MySqlConnection(conString);
            dbCon.Open();
            String SQL = "UPDATE tb_member SET m_user = '" + textBoxUsername.Text + "',m_pass='" + textBoxPassword.Text + "', m_name='" + textBoxName.Text + "',m_phone='" + textBoxPhone.Text + "' WHERE m_user = '" + TempUsername + "';";
            MySqlCommand cmd = new MySqlCommand(SQL, dbCon);

            try
            {
                if (cmd.ExecuteNonQuery() > 0)
                {
                    MessageBox.Show("แก้ไขข้อมูลสำเร็จ", "สำเร็จ", MessageBoxButtons.OK, MessageBoxIcon.Information);
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

            dbCon.Close();
        }

        private void btnDelete_Click(object sender, EventArgs e)
        {
            String dbServer = "localhost";
            String dbName = "db_library";
            String dbUsername = "root";
            String dbPassword = "";
            String conString = "SERVER=" + dbServer + ";" + "DATABASE=" + dbName + ";" + "UID=" + dbUsername + ";" + "PASSWORD=" + dbPassword + ";";

            MySqlConnection dbCon = new MySqlConnection(conString);
            dbCon.Open();
            String SQL = "DELETE FROM tb_member WHERE m_user = '"+ TempUsername + "';";
            MessageBox.Show(SQL);
            MySqlCommand cmd = new MySqlCommand(SQL, dbCon);

            try
            {
                if (cmd.ExecuteNonQuery() > 0)
                {
                    MessageBox.Show("ลบข้อมูลสำเร็จ", "สำเร็จ", MessageBoxButtons.OK, MessageBoxIcon.Information);
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

            dbCon.Close();
        }
    }
}