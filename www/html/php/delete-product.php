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
$id = $_GET["id"];
$sql = "DELETE FROM  ifts_21.`Product` WHERE id = $id";
$success = false;
if ($conn->query($sql) === TRUE) {
    $success = true;
} else {
    echo "Error al borrar: " . $conn->error;
}
$conn->close();
