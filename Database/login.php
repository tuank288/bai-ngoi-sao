<?php
$svname = "localhost";
$username = "root";
$password = "";
$database = "ngoisao";

$conn = new mysqli($svname,$username,$password,$database);

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "CREATE DATABASE Shop";

// if(mysqli_query($conn, $sql)){
//     echo "Thực thi thành công.";
// }else{
//     echo "ERROR: Không thể thực thi $sql. " . mysqli_error($conn);
// }
?>