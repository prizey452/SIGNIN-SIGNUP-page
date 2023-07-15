<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "faith_gardens";

$connection = mysqli_connect("$host", $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "CONNECTION ERROR" . mysqli_connect_error();
}
?>