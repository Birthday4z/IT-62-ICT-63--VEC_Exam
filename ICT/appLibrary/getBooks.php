<?php
$servername = "localhost"; //ใช้ localhost กรณี server อยู่บน online 
$username = "root"; //username ของ DirectAdmin/phpMyAdmin
$password = ""; //password ของ DirectAdmin/phpMyAdmin 
$dbname = "db_library"; //ชื่อ database

// Create connection
$dbCon = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbCon->connect_error) {
    die("Connection failed: " . $dbCon->connect_error);
} 

ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 

$type = $_GET['type'];
// type = 1 ; ทั้งหมด
// type = 2 ; รหัสหนังสือ
// type = 3 ; ชื่อหนังสือ
// type = 4 ; ผู้เขียน

if (isset($_GET['key'])) {
    if(isset($_GET['type'])) { // ถ้าหากใช้คำสั่ง filterBooks จะเข้าเงื่อนไขนี้
        if($_GET['type'] == '1') {  // ทั้งหมด
            $key = $_GET['key'];
            $sql = "SELECT b_id, b_name, b_writer, b_category, b_price FROM tb_book WHERE b_id LIKE '%$key%' OR b_name LIKE '%$key%' OR b_writer LIKE '%$key%'"; // ยังไม่เสร็จ
            $result = $dbCon->query($sql);
        
            $myArray = array();
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    array_push($myArray, $row); //Add object to array
                }
            }
    
            $json_array = json_encode($myArray, JSON_UNESCAPED_UNICODE); //Convert array to JSON
            echo $json_array;
            }
        else if ($_GET['type'] == '2') { // รหัสหนังสือ
            $key = $_GET['key'];
            $sql = "SELECT b_id, b_name, b_writer, b_category, b_price FROM tb_book WHERE b_id LIKE '%$key%'";
            $result = $dbCon->query($sql);
        
            $myArray = array();
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    array_push($myArray, $row); //Add object to array
                }
            }
    
            $json_array = json_encode($myArray, JSON_UNESCAPED_UNICODE); //Convert array to JSON
            echo $json_array;
        }
        else if ($_GET['type'] == '3') { // ชื่อหนังสือ
            $key = $_GET['key'];
            $sql = "SELECT b_id, b_name, b_writer, b_category, b_price FROM tb_book WHERE b_name LIKE '%$key%'";
            $result = $dbCon->query($sql);
        
            $myArray = array();
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    array_push($myArray, $row); //Add object to array
                }
            }
    
            $json_array = json_encode($myArray, JSON_UNESCAPED_UNICODE); //Convert array to JSON
            echo $json_array;
        }
        else if ($_GET['type'] == '4') { // ผู้เขียน
            $key = $_GET['key'];
            $sql = "SELECT b_id, b_name, b_writer, b_category, b_price FROM tb_book WHERE b_writer LIKE '%$key%'";
            $result = $dbCon->query($sql);
        
            $myArray = array();
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    array_push($myArray, $row); //Add object to array
                }
            }
    
            $json_array = json_encode($myArray, JSON_UNESCAPED_UNICODE); //Convert array to JSON
            echo $json_array;
        }
    }
    else {
        $key = $_GET['key'];
        $sql = "SELECT b_id, b_name, b_writer, b_category, b_price FROM tb_book WHERE b_name LIKE '%$key%'";

        $result = $dbCon->query($sql);
    
        $myArray = array();
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($myArray, $row); //Add object to array
            }
        } 
    
        $json_array = json_encode($myArray, JSON_UNESCAPED_UNICODE); //Convert array to JSON
        echo $json_array;
    }
    
}
else { // เข้าแบบไม่ได้ผ่านแอป (ไม่กำหนด key และ type)
    $sql = "SELECT b_id, b_name, b_writer, b_category, b_price FROM tb_book"; //"SELECT ชื่อคอลัมป์ 1, ชื่อคอลัมป์ 2, ชื่อคอลัมป์ 3 FROM ชื่อตาราง"
    $result = $dbCon->query($sql);

    $myArray = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($myArray, $row); //Add object to array
        }
    } 

    $json_array = json_encode($myArray, JSON_UNESCAPED_UNICODE); //Convert array to JSON
    echo $json_array;
}

$dbCon->close(); //ปิดการเชื่อมต่อ
?>