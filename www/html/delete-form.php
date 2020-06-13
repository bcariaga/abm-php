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
            <div class='center-div'>
                <h2>¿Seguro que desea eliminar el producto # <?php echo $_GET["id"] ?>?<h2>
                        <br/>
                        <br/>
                <a class='btn' href='index.php'> No</a>
                <?php 
                echo "<a class='btn btn-danger' href='delete.php?id=". $_GET["id"] ."'> Si</a> ";
                ?>
            </div>

        </div>

    </div>
</body>

</html>