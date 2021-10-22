<?php
include("../models/BaseDatos.php");
include("../models/Producto.php");

$empleado = new Empleado(null, null, null, null, null, null);

$baseDatos = new BaseDatos();
$empleados = $baseDatos->buscarRegistros($empleado->registrar());

print_r($empleados);
