<?php

if ($connect_error) {
    die("Error en la conexión a la db: ". $connect_error);
}

$sql = "SELECT * FROM ifts_21.`Person` WHERE 1=1";
            
if ($person_id !== "") {
    $sql = $sql . " AND id = $person_id";
}
if ($person_name !== "") {
    $sql = $sql . " AND LOWER(name) LIKE  LOWER('$person_name%')";
}
if ($person_surname !== "") {
    $sql = $sql . " AND LOWER(surname) LIKE LOWER('$person_surname%')";
}

$result = $conn->query($sql);

$people = array();
$index = 0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $people[$index] = $row;
        $index++;
    }
} else {
    echo "No hay personas...";
}
$conn->close();
?>