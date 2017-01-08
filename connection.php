<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$database = "associacao";

// Create connection
$conn = mysqli_connect($servername,$username,$password);
mysqli_select_db($conn, $database);
?>