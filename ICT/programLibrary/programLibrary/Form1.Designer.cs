namespace programLibrary
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            label1 = new Label();
            textBox1 = new TextBox();
            btnSearch = new Button();
            btnAdd = new Button();
            dataGridView1 = new DataGridView();
            textBoxUsername = new TextBox();
            textBoxPassword = new TextBox();
            textBoxName = new TextBox();
            textBoxPhone = new TextBox();
            label2 = new Label();
            label3 = new Label();
            label4 = new Label();
            label5 = new Label();
            btnDelete = new Button();
            btnEdit = new Button();
            ((System.ComponentModel.ISupportInitialize)dataGridView1).BeginInit();
            SuspendLayout();
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Font = new Font("Segoe UI", 18F, FontStyle.Regular, GraphicsUnit.Point);
            label1.Location = new Point(272, 9);
            label1.Name = "label1";
            label1.Size = new Size(228, 32);
            label1.TabIndex = 0;
            label1.Text = "การจัดการข้อมูลสมาชิก";
            // 
            // textBox1
            // 
            textBox1.Location = new Point(296, 58);
            textBox1.Name = "textBox1";
            textBox1.Size = new Size(124, 23);
            textBox1.TabIndex = 1;
            // 
            // btnSearch
            // 
            btnSearch.Location = new Point(438, 58);
            btnSearch.Name = "btnSearch";
            btnSearch.Size = new Size(75, 23);
            btnSearch.TabIndex = 2;
            btnSearch.Text = "ค้นหา";
            btnSearch.UseVisualStyleBackColor = true;
            // 
            // btnAdd
            // 
            btnAdd.Location = new Point(542, 57);
            btnAdd.Name = "btnAdd";
            btnAdd.Size = new Size(113, 23);
            btnAdd.TabIndex = 3;
            btnAdd.Text = "เพิ่มข้อมูลสมาชิกใหม่";
            btnAdd.UseVisualStyleBackColor = true;
            btnAdd.Click += btnAdd_Click;
            // 
            // dataGridView1
            // 
            dataGridView1.AllowUserToAddRows = false;
            dataGridView1.AllowUserToOrderColumns = true;
            dataGridView1.AutoSizeColumnsMode = DataGridViewAutoSizeColumnsMode.AllCells;
            dataGridView1.AutoSizeRowsMode = DataGridViewAutoSizeRowsMode.AllCells;
            dataGridView1.ColumnHeadersHeightSizeMode = DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            dataGridView1.Location = new Point(79, 108);
            dataGridView1.Name = "dataGridView1";
            dataGridView1.RowTemplate.Height = 25;
            dataGridView1.Size = new Size(393, 205);
            dataGridView1.TabIndex = 4;
            dataGridView1.MouseClick += dataGridView1_MouseClick;
            // 
            // textBoxUsername
            // 
            textBoxUsername.Location = new Point(630, 108);
            textBoxUsername.Name = "textBoxUsername";
            textBoxUsername.Size = new Size(124, 23);
            textBoxUsername.TabIndex = 5;
            // 
            // textBoxPassword
            // 
            textBoxPassword.Location = new Point(630, 154);
            textBoxPassword.Name = "textBoxPassword";
            textBoxPassword.Size = new Size(124, 23);
            textBoxPassword.TabIndex = 6;
            // 
            // textBoxName
            // 
            textBoxName.Location = new Point(630, 201);
            textBoxName.Name = "textBoxName";
            textBoxName.Size = new Size(124, 23);
            textBoxName.TabIndex = 7;
            // 
            // textBoxPhone
            // 
            textBoxPhone.Location = new Point(630, 248);
            textBoxPhone.Name = "textBoxPhone";
            textBoxPhone.Size = new Size(124, 23);
            textBoxPhone.TabIndex = 8;
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Font = new Font("Segoe UI", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            label2.Location = new Point(541, 103);
            label2.Name = "label2";
            label2.Size = new Size(62, 25);
            label2.TabIndex = 9;
            label2.Text = "ชื่อผู้ใช้";
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Font = new Font("Segoe UI", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            label3.Location = new Point(531, 149);
            label3.Name = "label3";
            label3.Size = new Size(72, 25);
            label3.TabIndex = 10;
            label3.Text = "รหัสผ่าน";
            // 
            // label4
            // 
            label4.AutoSize = true;
            label4.Font = new Font("Segoe UI", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            label4.Location = new Point(531, 196);
            label4.Name = "label4";
            label4.Size = new Size(72, 25);
            label4.TabIndex = 11;
            label4.Text = "ชื่อ-สกุล";
            // 
            // label5
            // 
            label5.AutoSize = true;
            label5.Font = new Font("Segoe UI", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            label5.Location = new Point(495, 243);
            label5.Name = "label5";
            label5.Size = new Size(108, 25);
            label5.TabIndex = 12;
            label5.Text = "เบอร์โทรศัพท์";
            // 
            // btnDelete
            // 
            btnDelete.Location = new Point(542, 310);
            btnDelete.Name = "btnDelete";
            btnDelete.Size = new Size(75, 23);
            btnDelete.TabIndex = 13;
            btnDelete.Text = "ลบข้อมูล";
            btnDelete.UseVisualStyleBackColor = true;
            btnDelete.Click += btnDelete_Click;
            // 
            // btnEdit
            // 
            btnEdit.Location = new Point(658, 310);
            btnEdit.Name = "btnEdit";
            btnEdit.Size = new Size(75, 23);
            btnEdit.TabIndex = 14;
            btnEdit.Text = "แก้ไขข้อมูล";
            btnEdit.UseVisualStyleBackColor = true;
            btnEdit.Click += button2_Click;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(btnEdit);
            Controls.Add(btnDelete);
            Controls.Add(label5);
            Controls.Add(label4);
            Controls.Add(label3);
            Controls.Add(label2);
            Controls.Add(textBoxPhone);
            Controls.Add(textBoxName);
            Controls.Add(textBoxPassword);
            Controls.Add(textBoxUsername);
            Controls.Add(dataGridView1);
            Controls.Add(btnAdd);
            Controls.Add(btnSearch);
            Controls.Add(textBox1);
            Controls.Add(label1);
            Name = "Form1";
            Text = "Form1";
            ((System.ComponentModel.ISupportInitialize)dataGridView1).EndInit();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label label1;
        private TextBox textBox1;
        private Button btnSearch;
        private Button btnAdd;
        private DataGridView dataGridView1;
        private TextBox textBoxUsername;
        private TextBox textBoxPassword;
        private TextBox textBoxName;
        private TextBox textBoxPhone;
        private Label label2;
        private Label label3;
        private Label label4;
        private Label label5;
        private Button btnDelete;
        private Button btnEdit;
    }
}