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
</head>

<body>
    <nav class="menu">
        <ul>
            <li><a href="#">Estado:
                    <?php
                    echo "conectado";
                    ?>
                </a></li>
        </ul>
    </nav>
    <div class="container">
        <h1 class="title">Personas <small><a class='btn input' href='create.php'> Agregar ➕</a></small> </h1>
        
    
        <div>
        <br />

            <h3>Buscar por:</h3>
            <br />
            <br />
            <?php
            $person_id = isset($_GET["person_id"]) ? $_GET["person_id"] : "";
            $person_name = isset($_GET["person_name"]) ? $_GET["person_name"] : "";
            $person_surname = isset($_GET["person_surname"]) ? $_GET["person_surname"] : "";
            ?>
            <form method="GET" class="formContainer">
                <div class="flex-container">
                    <div class="flex-item">
                        <label class="input-label" for="person_id">Id:</label>
                        <input class="input" type="number" id="person_id" name="person_id" value="<?php echo $person_id; ?>"><br><br>
                    </div>
                    <div class="flex-item">
                        <label class="input-label" for="person_name">Nombre:</label>
                        <input class="input" type="text" id="person_name" name="person_name" value="<?php echo $person_name; ?>"><br><br>
                    </div>
                    <div class="flex-item">
                        <label class="input-label" for="person_surname">Apellido:</label>
                        <input class="input" type="text" id="person_surname" name="person_surname" value="<?php echo $person_surname; ?>"><br><br>
                    </div>
                    <div class="flex-item">
                        <input type="submit" class="btn input" value="Buscar 🔎">
                        <input type="reset" class="btn input" value="Limpiar 🗑">
                    </div>
                </div>

                <hr />
                <br />
            </form>
        </div>
        <table class="table">
            <tr>
                <th class="tid center-div">Id</th>
                <th class="center-div">Nombre</th>
                <th class="center-div">Apellido</th>
                <th class="center-div">Dirección</th>
                <th class="center-div">Acciones</th>
            </tr>
            <?php
            include("./php/database/connection.php");
            include("./php/person/select.php");

            foreach ($people as $person) {
                echo '<tr>
                        <td class="center-div">' . $person["id"] . '</td>
                        <td class="center-div">' . $person["name"] . '</td>
                        <td class="center-div">' . $person["surname"] . '</td>
                        <td class="center-div">' . $person["address_line1"] . ' ' . '<small>' . $person["address_line2"] . '</small></td>
                        <td class="center-div">|<a href="update.php?id=' . $person["id"] . '">Editar ✍</a> | <a href="/php/person/delete.php?id=' . $person["id"] . '">Borrar ❌</a>|</td>
                    </tr>';
            }

            ?>
        </table>

    </div>
</body>

</html>