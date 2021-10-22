<?php
class BaseDatos
{
    //Atributos=Variables=Datos
    public $usuario = "root";
    public $paswordBD = "";
    public $servidorBD = "mysql:host=localhost;";
    public $nombreBD = "dbname=tiendita";

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
            return $conexion;
        } catch (PDOException $error) {
            die("tenemos un problema" . $error->getMessage());
        }
    }
    public function insertarRegistro($consultaSQL)
    {

        try {
            //1.construir un puente con la bd
            $conexion = $this->conectarConBD();

            //2.preparar la bd para que reciba mi consulta
            $operacion = $conexion->prepare($consultaSQL);

            //3.ejecutar la operacion
            $resultado = $operacion->execute();
            return $resultado;
        } catch (PDOException $error) {
            die("tenemos un problema" . $error->getMessage());
        }
    }
    public function buscarRegistros($consultaSQL)
    {
        try {
            //1.construir un puente con la bd
            $conexion = $this->conectarConBD();

            //2.preparar la bd para que reciba mi consulta
            $operacion = $conexion->prepare($consultaSQL);
            //3.Establecer el formato de los datos consultados
            $operacion->setFetchMode(PDO::FETCH_ASSOC);
            //3.ejecutar la operacion
            $operacion->execute();
            return $operacion->fetchAll();
        } catch (PDOException $error) {
            die("tenemos un problema" . $error->getMessage());
        }
    }
}
