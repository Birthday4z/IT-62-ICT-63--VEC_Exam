<?php
require_once "php/dbCon.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยืม - คืนหนังสือ - ระบบห้องสมุด</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center" style="padding-top: 3%;">
                <form method="POST">
                    <input type="submit" name="borrowForm" value="ยืมหนังสือ">
                    <input type="submit" name="returnForm" value="คืนหนังสือ">
                </form>
            </div>
        </div>
        <div class="row text-center">
            <div class="col" style="margin: 2%;">
            <?php
            if(isset($_POST['borrowForm'])) {
            ?>
               <h1>ยืมหนังสือ</h1>
               <table style="width:auto; margin:auto;">
                    <tr>
                        <td style="text-align:end;">ผู้ที่ต้องการยืม:</td>
                        <td><input type="text" id="borrowName"></td>
                        <td><button type="button" onclick="fetchBorrowName()">ค้นหา</button></td>
                    </tr>
                    <tr>
                        <td style="text-align:end;">รหัสหนังสือ:</td>
                        <td><input type="text" id="borrowID"></td>
                        <td><button type="button" onclick="fetchBorrowBookName()">ค้นหา</button></td>
                    </tr>
                </table>

            <table style="width:auto; margin:auto; border: 1px solid black;border-collapse: collapse;">
                <tr>
                    <td style="text-align:end; width:20%; border: 1px solid black;border-collapse: collapse;">ชื่อ-สกุลผู้ยืม :</td>
                    <td id="fetchBorrowName" style="width: 40%; border: 1px solid black;border-collapse: collapse;"></td>
                </tr>
                <tr>
                    <td style="text-align:end; width:20%; border: 1px solid black;border-collapse: collapse;">รหัสหนังสือ :</td>
                    <td id="fetchBorrowID" style="width: 40%; border: 1px solid black;border-collapse: collapse;"></td>
                </tr>
                <tr>
                    <td style="text-align:end; width:20%; border: 1px solid black;border-collapse: collapse;">ชื่อหนังสือ :</td>
                    <td id="fetchBorrowBookName" style="width: 40%; border: 1px solid black;border-collapse: collapse;"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="button" onclick="submitBorrow()">ยืมหนังสือ</button>
                    <button type="button" onclick="cancel()">ยกเลิก</button></td>
                </tr>
            </table>
                
            <?php
            }
            else if(isset($_POST['returnForm'])) {
            ?>
               <h1>คืนหนังสือ</h1>
               <div class="container">
                    <span>รหัสหนังสือที่ต้องการคืน :  <input type="text" id="returnID"> <button type="button" id="ReturnID" onclick="fetchReturnBook()">ค้นหา</button></span>
               </div>

            <table style="width:auto; margin:auto; border: 1px solid black;border-collapse: collapse;">
                <tr>
                    <td style="text-align:end; width:20%; border: 1px solid black;border-collapse: collapse;">รหัสหนังสือ :</td>
                    <td id="fetchReturnID" style="width: 40%; border: 1px solid black;border-collapse: collapse;"></td>
                </tr>
                <tr>
                    <td style="text-align:end; width:20%; border: 1px solid black;border-collapse: collapse;">ชื่อหนังสือ :</td>
                    <td id="fetchReturnBookName" style="width: 40%; border: 1px solid black;border-collapse: collapse;"></td>
                </tr>
                <tr>
                    <td style="text-align:end; width:20%; border: 1px solid black;border-collapse: collapse;">ผู้ยืม-คืนหนังสือ :</td>
                    <td id="fetchReturnName" style="width: 40%; border: 1px solid black;border-collapse: collapse;"></td>
                </tr>
                <tr>
                    <td style="text-align:end; width:20%; border: 1px solid black;border-collapse: collapse;">วันที่ยืมหนังสือ :</td>
                    <td id="fetchBorrowDate" style="width: 40%; border: 1px solid black;border-collapse: collapse;"></td>
                </tr>
                <tr>
                    <td style="text-align:end; width:20%; border: 1px solid black;border-collapse: collapse;">ค่าปรับ :</td>
                    <td style="text-align:start; border: 1px solid black;border-collapse: collapse;"><input type="text" style="width:100%;" id="returnFine"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="button" onclick="submitReturn()">คืนหนังสือ</button>
                    <button type="button" onclick="cancel()">ยกเลิก</button></td>
                </tr>
            </table>


            <?php
            }


            ?>
                
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.6.3.js"></script>

    <script>
        function fetchBorrowName() { // ยืม - ดึงชื่อผู้ใช้
            let queryName = document.getElementById("borrowName").value;
            let URL = "php/fetchName.php?q=" + queryName;
            $.ajax({
                url: URL,
                type: "POST",
                success:function(result){
                    if(result == "ไม่พบข้อมูลที่ค้นหา") {
                        alert("ไม่พบข้อมูลสมาชิก");
                    }
                    else {
                        document.getElementById("fetchBorrowName").innerHTML = result;
                    }
                }
            })
        }

        function fetchBorrowBookName() { // ยืม = ดึงชื่อหนังสือ
            let queryName = document.getElementById("borrowID").value;
            let URL = "php/fetchBookName.php?q=" + queryName;
            $.ajax({
                url: URL,
                type: "POST",
                success:function(result){
                    if(result == "ไม่พบข้อมูลที่ค้นหา") {
                        alert("ไม่พบข้อมูลหนังสือ");
                    }
                    else {
                        document.getElementById("fetchBorrowID").innerHTML = queryName; // ใส่รหัสหนังสือ
                        document.getElementById("fetchBorrowBookName").innerHTML = result; // ใส่ชื่อหนังสือ
                    }
                }
            })
        }

        function submitBorrow() { // ยืมหนังสือ
            let queryID = document.getElementById("borrowName").value;
            let queryBookID = document.getElementById("borrowID").value;
            let URL = "php/submitBorrow.php?ID=" + queryID + "&bookID=" + queryBookID;
            if(queryID == "" || queryBookID == "") {
                alert ("ข้อมูลที่ต้องการไม่ครบถ้วน");
            }
            else {
                $.ajax({
                    url: URL,
                    type: "POST",
                    success:function(result){
                        if(result == "เกิดข้อผิดพลาด") {
                            alert("เกิดข้อผิดพลาด เพิ่มข้อมูลไม่สำเร็จ");
                        }
                        else {
                            alert(result);
                        }
                    }
                })
            }
        }

        function fetchReturnBook() { // คืน - ดึงข้อมูลหนังสือ
            let queryName = document.getElementById("returnID").value;
            let URL = "php/fetchReturnBook.php?q=" + queryName;
            $.ajax({
                url: URL,
                type: "POST",
                success:function(result){
                    if(result == "ไม่พบข้อมูลที่ค้นหา") {
                        alert("ไม่พบรหัสหนังสือที่มีการยืม");
                    }
                    else {
                        let obj = JSON.parse(result); // result ที่ได้มาจาก AJAX มันคือ JSON ที่อยู่ในรูปแบบ String(ข้อความ) ต้องแปลงเป็นรูปแบบ JSON เพื่อนำไปใช้

                        document.getElementById("fetchReturnID").innerHTML = obj[0].b_id;
                        document.getElementById("fetchReturnBookName").innerHTML = obj[0].b_name;
                        document.getElementById("fetchReturnName").innerHTML = obj[0].m_name;
                        document.getElementById("fetchBorrowDate").innerHTML = obj[0].br_date_br;
                    }
                }
            })
        }

        function submitReturn() { // คืนหนังสือ
            let queryBookID = document.getElementById("returnID").value;
            let queryFine = document.getElementById("returnFine").value;
            if (queryFine == "") { // กรีณีไม่ได้กรอกค่าปรับ โจทย์ให้ตั้งค่าปรับ 0
                queryFine = 0;
            }
            let URL = "php/submitReturn.php?bookID=" + queryBookID + "&Fine=" + queryFine;
            if(queryBookID == "" || queryFine == "") {
                alert ("ข้อมูลที่ต้องการไม่ครบถ้วน");
            }
            else {
                $.ajax({
                    url: URL,
                    type: "POST",
                    success:function(result){
                        if(result == "เกิดข้อผิดพลาด") {
                            alert("เกิดข้อผิดพลาด เพิ่มข้อมูลไม่สำเร็จ");
                        }
                        else {
                            alert(result);
                        }
                    }
                })
            }
        }
        

        function cancel() { // ยกเลิก
            // รีเซ็ทฟอร์มยืนหนังสือ
            document.getElementById("borrowName").value = "";
            document.getElementById("borrowID").value = "";
            document.getElementById("fetchBorrowName").innerHTML = "";
            document.getElementById("fetchBorrowID").innerHTML = "";
            document.getElementById("fetchBorrowBookName").innerHTML = "";
            //รีเซ็ทฟอร์มคืนหนังสือ
            document.getElementById("returnID").value = "";
            document.getElementById("fetchReturnID").innerHTML = "";
            document.getElementById("fetchReturnBookName").innerHTML = "";
            document.getElementById("fetchBorrowDate").innerHTML = "";
            document.getElementById("returnFine").value = "";
        }


    </script>
</body>

</html>