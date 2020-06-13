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
$sql = "SELECT *  FROM ifts_21.`Product` WHERE id = $id";
$result = $conn->query($sql);

$product = null;

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $product = $row;
    }
} else {
    echo "no hay resultados...";
}
$conn->close();

