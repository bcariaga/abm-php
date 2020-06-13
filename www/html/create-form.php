<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFTS 21 - Editar</title>
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
                    <?php
                    // include './php/select-product.php';
                    // crea la variable $product con el producto
                    echo 'todo bien 👌';
                    ?>
                </a></li>
        </ul>
    </nav>
    <div class="container">
        <h1 class="title">Editar producto</h1>
        <div class="formContainer">
            <form action="/create.php" method="POST">
                <label for="product_id">Id:</label>
                <input type="number" readonly id="product_id" name="id" placeholder="auto-generado"><br><br>
                <label for="description">Descripción:</label>
                <input type="text" id="description" name="name" placeholder="Mother MSI Z490 Gaming Edge WI-FI (10ma Gen) LGA1200"><br><br>
                <label for="stock">Stock:</label>
                <input type="number" id="stock" name="stock" placeholder="10"><br><br>
                <input type="submit" value="Guardar 💾">
            </form>

        </div>

    </div>
</body>

</html>