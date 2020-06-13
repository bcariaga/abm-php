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
                        <?php
                        include './php/select-products.php';
                        // crea la variable $products co los productos de la db
                        ?>
                    </a></li>
            </ul>
        </nav>
        <div class="container">
            <h1 class="title">Productos</h1>
            <a class='btn small pull-right' href='create-form.php'> Crear nuevo ➕</a>
            <table class="table">
                <tr>
                    <th class="tid center-div">Id</th>
                    <th class="center-div">Descripción</th>
                    <th class="center-div">Stock</th>
                    <th class="center-div">Acciones</th>
                </tr>
                <?php
                if (count($products) < 0) {
                    echo "No hay productos";
                }
                foreach ($products as $product) {
                    echo '<tr>
                        <td class="center-div">' . $product["id"] . '</td>
                        <td class="center-div">' . $product["name"] . '</td>
                        <td class="center-div">' . $product["stock"] . '</td>
                        <td class="center-div"><a href="edit-form.php?id='.$product["id"].'">Editar ✍</a> <a href="delete-form.php?id='.$product["id"].'">Borrar ❌</a></td>
                    </tr>';
                }
                ?>
            </table>

        </div>
</body>

</html>