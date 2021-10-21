<?php
//1. Incluir el modelo de la base de datos
// Incluir modelo producto
include("../models/BaseDatos.php");
include("../models/Producto.php");
//2. Recoger los modelos y las vistas
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

    //3. Se crea un objeto de la clase Empleado
    $producto = new Producto($nombreProducto, $marca, $precio, $descripcionProducto);
    echo ($producto->registrar());

    //4.ejecutar el metodo insertar registro
    $baseDatos = new BaseDatos();
    $resultado = $baseDatos->insertarRegistro($producto->registrar());

    //5. valido el resultado
    if ($resultado) {
        echo ("exito en el registro");
        header("Location:../views/registroProducto.php");
    } else {
        echo ("upps...tenemos un problema");
    }
} else {
    echo ("Error no hay productos");
}
