<?php
    include "lib/Producto.php";

    $aProductos = array();

    $cProducto1 = new Producto();
    $cProducto1->nombre = "Nuevo Producto";
    $cProducto1->codigo = "001";
    $cProducto2 = new Producto("Nuevo Producto 002", 0, "002");
    $cProducto3 = new Producto("Nuevo Producto 003", 0, "003");

    $aProductos[0] = $cProducto1;
    $aProductos[1] = $cProducto2;
    $aProductos[2] = $cProducto3;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            foreach($aProductos as $prod) {
                echo "Nombre: $cProducto1->nombre <br>" . "Codigo: $cProducto1->codigo<br>"; 
            }
        ?>
    </body>
</html>