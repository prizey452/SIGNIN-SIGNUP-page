<?php
$host = "localhost";
$username = "root";
$password = "";
$database = ""; //enter here the name of your database

$connection = mysqli_connect("$host", $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "CONNECTION ERROR" . mysqli_connect_error();
    echo "<script>alert('Check if you have entered an existing database name in connection.php file')</script>";
}
?>
