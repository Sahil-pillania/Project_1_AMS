<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "management";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo 'Not connected to database';
}
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

?>