<?php
include("../database/connection.php");

if ($conn->connect_error) {
    die("Fallo la conexión: " . $conn->connect_error);
}
$id = $_POST["id"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$address_line1 = $_POST["address_line1"];
$address_line2 = $_POST["address_line2"];
$sql = "UPDATE ifts_21.`Person` SET `name` = '$name', `surname` = '$surname', `address_line1` = '$address_line1', `address_line2` = '$address_line2' WHERE `Person`.`id` =  $id";
$success = false;
$error = "";
if ($conn->query($sql) === TRUE) {
    $success = true;
    $title = "Persona Actualizada!";
} else {
    $error = $conn->error;
}
$conn->close();

include("../results/finish.php");

?>