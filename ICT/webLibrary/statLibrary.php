<?php
require_once "php/dbCon.php";

$sql = "SELECT (SELECT COUNT(b_id) FROM tb_book) AS countBook, 
    (SELECT COUNT(m_user) FROM tb_member) AS countMember, 
    (SELECT COUNT(br_date_br) FROM tb_borrow_book) AS countBorrow, 
    (SELECT COUNT(br_date_rt) FROM tb_borrow_book WHERE br_date_rt = '0000-00-00') AS countReturnDebt FROM DUAL;";
$query = mysqli_query($conDB, $sql);
$queryrow = mysqli_num_rows($query);
if ($queryrow > 0) {
    foreach ($query as $row) {
        $countBook = $row['countBook'];
        $countMember = $row['countMember'];
        $countBorrow = $row['countBorrow'];
        $countReturnDebt = $row['countReturnDebt'];
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลสถิติ - ระบบห้องสมุด</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body class="vh-100 d-flex align-items-center justify-content-center bg-info">
    <div class="containter-fluid" style="width:80%">
        <div class="card bg-warning">
            <div class="card-header fw-bold text-center">
                ข้อมูลสถิติของห้องสมุด
            </div>
            <div class="card-body" style="padding:2%">
                <div class="container">
                    <div class="row" style="height:30vh;">
                        <div class="col-6">
                            หนังสือทั้งหมด (เล่ม)
                            <div style="background-color: yellowgreen; padding-right: 50px; text-align: center; max-height: 27vh;">
                                <span style="font-size: 10vw;"><?php echo $countBook ?></span>
                            </div>
                        </div>
                        <div class="col-6">
                            การใช้บริการยืม-คืนหนังสือ (ครั้ง)
                            <div style="background-color: aquamarine; padding-right: 50px; text-align: center; max-height: 27vh;">
                                <span style="font-size: 10vw;"><?php echo $countBorrow ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height:30vh;">
                        <div class="col-6">
                            สมาชิกทั้งหมด (คน)
                            <div style="background-color:darkorange; padding-right: 50px; text-align: center; max-height: 27vh;">
                                <span style="font-size: 10vw;"><?php echo $countMember ?></span>
                            </div>
                        </div>
                        <div class="col-6">
                            หนังสือค้างส่ง (เล่ม)
                            <div style="background-color:darksalmon; padding-right: 50px; text-align: center; max-height: 27vh;">
                                <span style="font-size: 10vw;"><?php echo $countReturnDebt ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                


            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.6.3.js"></script>

    <script>

    </script>
</body>

</html>