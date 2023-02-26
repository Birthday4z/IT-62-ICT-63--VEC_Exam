<?php
require_once "dbCon.php";
$ID = $_GET['ID'];
$bookID = $_GET['bookID'];
$date = date('Y-m-d');

$sql = "INSERT INTO tb_borrow_book(b_id, m_user, br_fine, br_date_br, br_date_rt) VALUES ('{$bookID}','{$ID}',0,'{$date}','0000-00-00')";
$query = mysqli_query($conDB, $sql);

if ($query > 0) {
    echo "ทำรายการสำเร็จ";
}
else echo "เกิดข้อผิดพลาด";
?>