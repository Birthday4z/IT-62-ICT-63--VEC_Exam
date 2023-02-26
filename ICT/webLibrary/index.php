<?php
require_once "php/dbCon.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก - ระบบห้องสมุด</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <style>
        table,th,td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center" style="padding-top: 3%;">
                <h1>การจัดการข้อมูลการยืม - คืนหนังสือ</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center" style="margin: 2%;">
                <form method="POST">
                    <input type="text" name="searchKeyword">&nbsp;&nbsp;&nbsp;
                    <input type="submit" name="submitSearch" value="ค้นหา">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                <a href="borrow-returnBook.php" class="btn btn-primary">ยืม - คืนหนังสือ</a>
                <a href="statLibrary.php" class="btn btn-primary">ข้อมูลสถิติ</a>
            </div>
        </div>
        <div class="row" style="padding-top: 2%;">
            <div class="col text-center">
                <table style="width:100%">
                    <tr>
                        <th>รหัสหนังสือ</th>
                        <th>ชื่อหนังสือ</th>
                        <th>ผู้ยืม-คืน</th>
                        <th>วันที่ยืม</th>
                        <th>วันที่คืน</th>
                        <th>ค่าปรับ</th>
                    </tr>
                    <?php
                    if (isset($_POST['submitSearch'])) {
                        $search = $_POST['searchKeyword'];
                        if ($search == "") { // กรณีไม่ใส่ keyword จะค้นหาทั้งหมด เหมือนเข้ามาตอนแรก
                            $sql = "SELECT tb_book.b_id as b_id, tb_book.b_name as b_name, tb_member.m_name as m_name, tb_borrow_book.br_date_br as br_date_br, tb_borrow_book.br_date_rt as br_date_rt, tb_borrow_book.br_fine as br_fine FROM tb_borrow_book
                            LEFT JOIN tb_member ON tb_borrow_book.m_user = tb_member.m_user
                            LEFT JOIN tb_book ON tb_borrow_book.b_id = tb_book.b_id
                            ORDER BY tb_borrow_book.br_date_br DESC, tb_book.b_id DESC";
                        }
                        else {
                            $sql = "SELECT tb_book.b_id as b_id, tb_book.b_name as b_name, tb_member.m_name as m_name, tb_borrow_book.br_date_br as br_date_br, tb_borrow_book.br_date_rt as br_date_rt, tb_borrow_book.br_fine as br_fine FROM tb_borrow_book
                            LEFT JOIN tb_member ON tb_borrow_book.m_user = tb_member.m_user
                            LEFT JOIN tb_book ON tb_borrow_book.b_id = tb_book.b_id
                            WHERE b_name LIKE '%$search%' OR m_name LIKE '%$search%'
                            ORDER BY tb_borrow_book.br_date_br DESC, tb_book.b_id DESC";
                        }
                        
                        $query = mysqli_query($conDB, $sql);
                        $queryrow = mysqli_num_rows($query);

                        if ($queryrow > 0) {
                            foreach ($query as $row) {
                                echo "
                                <tr>
                                <td>{$row['b_id']}</td>
                                <td>{$row['b_name']}</td>
                                <td>{$row['m_name']}</td>
                                <td>{$row['br_date_br']}</td>
                                <td>{$row['br_date_rt']}</td>
                                <td>{$row['br_fine']}</td>
                                </tr>";
                            }
                        }
                    } else {
                        $sql = "SELECT tb_book.b_id as b_id, tb_book.b_name as b_name, tb_member.m_name as m_name, tb_borrow_book.br_date_br as br_date_br, tb_borrow_book.br_date_rt as br_date_rt, tb_borrow_book.br_fine as br_fine FROM tb_borrow_book
                            LEFT JOIN tb_member ON tb_borrow_book.m_user = tb_member.m_user
                            LEFT JOIN tb_book ON tb_borrow_book.b_id = tb_book.b_id
                            ORDER BY tb_borrow_book.br_date_br DESC, tb_book.b_id DESC";
                        $query = mysqli_query($conDB, $sql);
                        $queryrow = mysqli_num_rows($query);

                        if ($queryrow > 0) {
                            foreach ($query as $row) {
                                echo "
                                    <tr>
                                    <td>{$row['b_id']}</td>
                                    <td>{$row['b_name']}</td>
                                    <td>{$row['m_name']}</td>
                                    <td>{$row['br_date_br']}</td>
                                    <td>{$row['br_date_rt']}</td>
                                    <td>{$row['br_fine']}</td>
                                    </tr>";
                            }
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>