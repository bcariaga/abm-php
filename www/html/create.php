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
        <h1 class="title">Crear Persona</h1>
        <div class="formContainer">
            <form action="./php/person/insert.php" method="POST">
                <label for="name">Apellido:</label>
                <input type="text" id="name" name="name" placeholder="Jose"><br><br>
                <label for="surname">Apellido:</label>
                <input type="text" id="surname" name="surname" placeholder="Perez"><br><br>
                <label for="address_line1">Dirección:</label>
                <input type="text" id="address_line1" name="address_line1" placeholder="Rivadavia 449"><br><br>
                <label for="address_line2">Piso/Departamento:</label>
                <input type="text" id="address_line2" name="address_line2" placeholder="11 B"><br><br>
                <input type="submit" value="Guardar 💾">
            </form>

        </div>


    </div>
</body>

</html>