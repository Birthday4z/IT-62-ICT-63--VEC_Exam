namespace programLibrary
{
    partial class FormRegister
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
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
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            components = new System.ComponentModel.Container();
            label1 = new Label();
            label2 = new Label();
            label3 = new Label();
            label4 = new Label();
            label5 = new Label();
            btnAdd = new Button();
            btnCancel = new Button();
            textBoxUsername = new TextBox();
            contextMenuStrip1 = new ContextMenuStrip(components);
            textBoxPassword = new TextBox();
            textBoxName = new TextBox();
            textBoxPhone = new TextBox();
            SuspendLayout();
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Font = new Font("Segoe UI", 18F, FontStyle.Regular, GraphicsUnit.Point);
            label1.Location = new Point(291, 9);
            label1.Name = "label1";
            label1.Size = new Size(167, 32);
            label1.TabIndex = 0;
            label1.Text = "เพิ่มข้อมูลสมาชิก";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Font = new Font("Segoe UI", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            label2.Location = new Point(162, 77);
            label2.Name = "label2";
            label2.Size = new Size(71, 25);
            label2.TabIndex = 1;
            label2.Text = "ชื่อผู้ใช้ :";
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Font = new Font("Segoe UI", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            label3.Location = new Point(152, 128);
            label3.Name = "label3";
            label3.Size = new Size(81, 25);
            label3.TabIndex = 2;
            label3.Text = "รหัสผ่าน :";
            // 
            // label4
            // 
            label4.AutoSize = true;
            label4.Font = new Font("Segoe UI", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            label4.Location = new Point(152, 181);
            label4.Name = "label4";
            label4.Size = new Size(81, 25);
            label4.TabIndex = 3;
            label4.Text = "ชื่อ-สกุล :";
            // 
            // label5
            // 
            label5.AutoSize = true;
            label5.Font = new Font("Segoe UI", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            label5.Location = new Point(116, 232);
            label5.Name = "label5";
            label5.Size = new Size(117, 25);
            label5.TabIndex = 4;
            label5.Text = "เบอร์โทรศัพท์ :";
            // 
            // btnAdd
            // 
            btnAdd.Location = new Point(224, 321);
            btnAdd.Name = "btnAdd";
            btnAdd.Size = new Size(75, 23);
            btnAdd.TabIndex = 5;
            btnAdd.Text = "เพิ่มสมาชิก";
            btnAdd.UseVisualStyleBackColor = true;
            btnAdd.Click += btnAdd_Click;
            // 
            // btnCancel
            // 
            btnCancel.Location = new Point(358, 321);
            btnCancel.Name = "btnCancel";
            btnCancel.Size = new Size(75, 23);
            btnCancel.TabIndex = 6;
            btnCancel.Text = "ยกเลิก";
            btnCancel.UseVisualStyleBackColor = true;
            btnCancel.Click += btnCancel_Click;
            // 
            // textBoxUsername
            // 
            textBoxUsername.Location = new Point(239, 77);
            textBoxUsername.Name = "textBoxUsername";
            textBoxUsername.Size = new Size(244, 23);
            textBoxUsername.TabIndex = 7;
            // 
            // contextMenuStrip1
            // 
            contextMenuStrip1.Name = "contextMenuStrip1";
            contextMenuStrip1.Size = new Size(61, 4);
            // 
            // textBoxPassword
            // 
            textBoxPassword.Location = new Point(239, 133);
            textBoxPassword.Name = "textBoxPassword";
            textBoxPassword.PasswordChar = '*';
            textBoxPassword.Size = new Size(244, 23);
            textBoxPassword.TabIndex = 9;
            // 
            // textBoxName
            // 
            textBoxName.Location = new Point(239, 186);
            textBoxName.Name = "textBoxName";
            textBoxName.Size = new Size(244, 23);
            textBoxName.TabIndex = 10;
            // 
            // textBoxPhone
            // 
            textBoxPhone.Location = new Point(239, 237);
            textBoxPhone.Name = "textBoxPhone";
            textBoxPhone.Size = new Size(244, 23);
            textBoxPhone.TabIndex = 11;
            // 
            // FormRegister
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(textBoxPhone);
            Controls.Add(textBoxName);
            Controls.Add(textBoxPassword);
            Controls.Add(textBoxUsername);
            Controls.Add(btnCancel);
            Controls.Add(btnAdd);
            Controls.Add(label5);
            Controls.Add(label4);
            Controls.Add(label3);
            Controls.Add(label2);
            Controls.Add(label1);
            Name = "FormRegister";
            Text = "FormRegister";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label label1;
        private Label label2;
        private Label label3;
        private Label label4;
        private Label label5;
        private Button btnAdd;
        private Button btnCancel;
        private TextBox textBoxUsername;
        private ContextMenuStrip contextMenuStrip1;
        private TextBox textBoxPassword;
        private TextBox textBoxName;
        private TextBox textBoxPhone;
    }
}