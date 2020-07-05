<?php

include("../database/connection.php");

if ($conn->connect_error) {
    die("Fallo la conexión: " . $conn->connect_error);
}

$name = $_POST["name"];
$surname = $_POST["surname"];
$address_line1 = $_POST["address_line1"];
$address_line2 = $_POST["address_line2"];

$sql = "INSERT INTO ifts_21.Person(`name`, `surname`,`address_line1`, address_line2 ) VALUES ('$name', '$surname', '$address_line1', '$address_line2');";
$success = false;
$error = "";
if ($conn->query($sql) === TRUE) {
    $success = true;
    $title = "Persona creada!";
} else {
    $error = $conn->error;
}
$conn->close();

include("../results/finish.php");

?>