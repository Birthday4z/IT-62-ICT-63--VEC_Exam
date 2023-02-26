<?php
require_once "dbCon.php";
$bookID = $_GET['q'];

$sql = "SELECT tb_book.b_id as b_id, tb_book.b_name as b_name, tb_member.m_name as m_name, tb_borrow_book.br_date_br as br_date_br FROM tb_borrow_book
    LEFT JOIN tb_book ON tb_book.b_id = tb_borrow_book.b_id
    LEFT JOIN tb_member ON tb_member.m_user = tb_borrow_book.m_user
    WHERE tb_borrow_book.b_id = '{$bookID}';";
$query = mysqli_query($conDB, $sql);
$queryrow = mysqli_num_rows($query);


$myArray = array();
if ($queryrow > 0) {
    foreach ($query as $row) {
        array_push($myArray, $row);
    }
    $json_array = json_encode($myArray, JSON_UNESCAPED_UNICODE); //Convert array to JSON
    echo $json_array;
}
else {
    echo "ไม่พบข้อมูลที่ค้นหา";
}
?>