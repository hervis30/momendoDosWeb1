<?php
include("../models/BaseDatos.php");

if (isset($_POST["botonProducto"])) {
    $nombreProducto = $_POST["nombreProducto"];
    echo ($nombreProducto);
    echo ("<br>");
    $marca = $_POST["marca"];
    echo ($marca);
    echo ("<br>");
    $precio = $_POST["precio"];
    echo ($precio);
    echo ("<br>");
    $descripcionProducto = $_POST["descripcionProducto"];
    echo ($descripcionProducto);
    echo ("<br>");

    $producto = new Producto($nombreProducto, $marca, $precio, $descripcionProducto);

    echo ($producto->registrarProducto()());
} else {
    echo ("Error no hay productos");
}
