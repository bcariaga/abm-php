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

$sql = "SELECT *  FROM ifts_21.`Product`";
$result = $conn->query($sql);

$products = array();
$index = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $products[$index] = $row;
        $index++;
    }
} else {
    echo "no hay resultados...";
}
$conn->close();

