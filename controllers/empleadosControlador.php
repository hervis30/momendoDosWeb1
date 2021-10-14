<?php

//1. Incluir el modelo de la base de datos
// Incluir el modelo empleados
include("../models/BaseDatos.php");
include("../models/Empleado.php");
//2. Recoger los modelos y las vistas
if (isset($_POST["boton"])) {
    $nombre = $_POST["nombre"];
    echo ($nombre);
    echo ("<br>");
    $apellido = $_POST["apellido"];
    echo ($apellido);
    echo ("<br>");
    $email = $_POST["email"];
    echo ($email);
    echo ("<br>");
    $edad = $_POST["edad"];
    echo ($edad);
    echo ("<br>");
    $descripcion = $_POST["descripcion"];
    echo ($descripcion);
    echo ("<br>");
    $foto = $_POST["foto"];
    echo ($foto);

    //3. utilizar la clase BD
    //Para utilizar una clase hay que sacarle una copia
    //Para utilizar una clase hay que crear un objeto
    //Para utilizar una clase hay que crear una instancia
    //UN OBJETO ES UNA VARIABLE


    //4. Se crea un objeto de la clase Empleado
    $empleado = new Empleado($nombre, $apellido, $email, $edad, $descripcion, $foto);
    //Acceder al metodo empleado
    echo ($empleado->registrar());

    //$baseDatos = new BaseDatos();
    //$baseDatos->conectarConBD();
} else {
    echo ("No deberias estar aqui");
}
