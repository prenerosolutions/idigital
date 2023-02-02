<?php
/*if ($_SERVER['SERVER_NAME'] == 'localhost') {

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "idigital";

} else { 
$localhost = "localhost";
$username = "idigital_prenero";
$password = "Prenero1102/*";
$dbname = "idigital_abubakr";
}*/

$localhost = "localhost";
$username = "idigital_prenero";
$password = "Prenero1102/*";
$dbname = "idigital_abubakr";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection

date_default_timezone_set('Asia/Karachi');


if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}
?>