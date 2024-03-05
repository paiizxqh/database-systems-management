<?php
$servername = "localhost";
$username = "db23_017";
$password = "db23_017";
$dbname = "db23_017";
$conn = new mysqli($servername,$username,$password);
//function เช็คว่าเชื่อมต่อแล้วหรือไม่
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
if(!$conn->select_db($dbname)){
    die("Connection failed: ".$conn->connect_error);
}
?>