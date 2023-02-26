<?php
require_once "dbCon.php";
$ID = $_GET['q'];

$sql = "SELECT b_name FROM tb_booK WHERE b_id = '$ID'";
$query = mysqli_query($conDB, $sql);
$queryrow = mysqli_num_rows($query);

if ($queryrow > 0) {
    foreach ($query as $row) {
        echo "{$row['b_name']}";
    }
}
else echo "ไม่พบข้อมูลที่ค้นหา"
?>