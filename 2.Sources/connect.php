<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lms_project";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Lỗi nè : " . mysqli_connect_error());
}
?>