<?php

include("../database/connection.php");

if ($conn->connect_error) {
    die("Fallo la conexión: " . $conn->connect_error);
}
$id = $_GET["id"];
$sql = "DELETE FROM  ifts_21.`Person` WHERE id = $id";
$success = false;
$error = "";
if ($conn->query($sql) === TRUE) {
    $success = true;
    $title = "Persona eliminada";
} else {
    $error = $conn->error;
}
include("../results/finish.php");

$conn->close();
?>