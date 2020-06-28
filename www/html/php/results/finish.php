<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFTS 21 - Editar</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
    <link rel="stylesheet" type="text/css" href="../../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../../css/table.css">
    <link rel="stylesheet" type="text/css" href="../../css/form.css">
</head>

<body>
    <nav class="menu">
        <ul>
            <li><a href="#">Estado:
                    <?php
                    echo "Conectado";
                    ?>
                </a></li>
        </ul>
    </nav>
    <div class="container">
        <h1 class="title"><?php echo isset($title) ? $title : "Resultado" ?></h1>
        <div class="formContainer">
            <?php
            if ($success) {
                echo "<div class='center-div'>
                            <h2>Listo 😎<h2>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <a class='btn' href='../../index.php'> Volver al inicio 🏠</a>
                        </div>";
            } else {
                echo "<h2>Error 😢<h2>";
                echo $error;
            }
            ?>

        </div>

    </div>
</body>

</html>