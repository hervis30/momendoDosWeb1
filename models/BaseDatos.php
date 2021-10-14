<?php
class BaseDatos
{
    //Atributos=Variables=Datos
    public $usuario = "roots";
    public $paswordBD = "";
    public $servidorBD = "mysql:host=localhost;";
    public $nombreBD = "dbname=tiendabello";

    //constructor

    public function __construct()
    {
    }

    //Metodos=Acciones=Funciones
    public function conectarConBD()
    {
        //Manejo de errores
        try {
            $datosGeneralesBD = $this->servidorBD . $this->nombreBD;
            $conexion = new PDO($datosGeneralesBD, $this->usuario, $this->paswordBD);
            echo ("exito conectandonos a la BD");
        } catch (PDOException $error) {
            die("tenemos un problema" . $error->getMessage());
        }
    }
}
