<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFTS 21</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./css/table.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>

<body>
    <nav class="menu">
        <ul>
            <li><a href="#">Estado:
                </a></li>
        </ul>
    </nav>
    <div class="container">
        <h1 class="title">Editar Persona</h1>
        <?php
            $person_id = isset($_GET["id"]) ? $_GET["id"] : "";
            $person_name = isset($_GET["person_name"]) ? $_GET["person_name"]: "";
            $person_surname = isset($_GET["person_surname"]) ? $_GET["person_surname"] : "";
            include("./php/database/connection.php");
            include("./php/person/select.php");
            $person = array_values($people)[0];
        ?>
        <div class="formContainer">
            <form action="./php/person/update.php" method="POST">
                <input readonly hidden name="id" value="<?php echo $person["id"]?>">
                <label for="name">Apellido:</label>
                <input type="text" id="name" name="name" placeholder="Jose" value="<?php echo $person["name"]?>"/><br><br>
                <label for="surname">Apellido:</label>
                <input type="text" id="surname" name="surname" placeholder="Perez" value="<?php echo $person["surname"]?>"/><br><br>
                <label for="address_line1">Dirección:</label>
                <input type="text" id="address_line1" name="address_line1" placeholder="Rivadavia 449" value="<?php echo $person["address_line1"]?>"(><br><br>
                <label for="address_line2">Piso/Departamento:</label>
                <input type="text" id="address_line2" name="address_line2" placeholder="11 B" value="<?php echo $person["address_line2"]?>"/><br><br>
                <input type="submit" value="Guardar 💾">
            </form>

        </div>


    </div>
</body>

</html>