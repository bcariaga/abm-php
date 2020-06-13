<?php
$servername = "mysql";
// $dbname= "ifts_21";
$username = "root";
$password = "rootpw";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Fallo la conexión: " . $conn->connect_error);
}
echo "Conectado \n";
$id = $_POST["id"];
$name = $_POST["name"];
$stock = $_POST["stock"];
$sql = "UPDATE ifts_21.`Product` SET NAME = '$name', stock = $stock WHERE id = $id";
$success = false;
if ($conn->query($sql) === TRUE) {
    $success = true;
} else {
    echo "Error al actualizar: " . $conn->error;
}
$conn->close();
