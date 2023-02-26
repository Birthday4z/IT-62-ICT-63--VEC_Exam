<?php
require_once "dbCon.php";
$bookID = $_GET['bookID'];
$Fine = $_GET['Fine'];
$date = date('Y-m-d');

$sql = "UPDATE tb_borrow_book SET br_date_rt = '{$date}', br_fine = {$Fine} WHERE b_id = '{$bookID}';";
$query = mysqli_query($conDB, $sql);

if ($query > 0) {
    echo "ทำรายการสำเร็จ";
}
else echo "เกิดข้อผิดพลาด";
?>