<?php

$servername = "mysql";
$username = "root";
$password = "rootpw";

$conn = new mysqli($servername, $username, $password);
$connect_error = $conn->connect_error;

?>