<?php 
$serverhost = "localhost";
$username = "root";
$password = "";
$dbname = "oop_booking_app";

// Create connection
$connect = new mysqli($serverhost, $username, $password, $dbname);

// Checks Connection 
if ($connect -> connect_error){
    die("Connection failed: " .mysqli_connect_error());

}else {
    //echo "Connection is successful to Database named $dbname" ."<br>";
    return $connect; 
}





?>