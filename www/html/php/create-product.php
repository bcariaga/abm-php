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

$name = $_POST["name"];
$stock = $_POST["stock"];
$sql = "INSERT INTO ifts_21.Product(`name`, `stock`) VALUES ('$name', $stock);";
$success = false;
if ($conn->query($sql) === TRUE) {
    $success = true;
} else {
    echo "Error al actualizar: " . $conn->error;
}
$conn->close();
