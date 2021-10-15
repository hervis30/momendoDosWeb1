<?php

class Empleado
{

    //variables=datos=atributos
    public $nombres;
    public $apellidos;
    public $email;
    public $edad;
    public $descripcion;
    public $foto;
    //acciones=funciones=metodos

    public function __construct($nombresFormulario, $apellidosFormulario, $emailFormulario, $edadFormulario, $descripcionFormulario, $fotoFormulario)
    {

        //adentro de la funcion __contruct
        $this->nombres = $nombresFormulario;
        $this->apellidos = $apellidosFormulario;
        $this->email = $emailFormulario;
        $this->edad = $edadFormulario;
        $this->descripcion = $descripcionFormulario;
        $this->foto = $fotoFormulario;
    }

    //acciones=funciones=metodos

    public function registrar()
    {

        $consultaSQL = "INSERT INTO empleados(nombres, apellidos, email, edad, descripcion, foto) VALUES ('$this->nombres','$this->apellidos','$this->email','$this->edad','$this->descripcion','$this->foto')";

        return $consultaSQL;
    }

    //crud

    public function buscar()
    {
        $consultaSQL = "SELECT*FROM empleados";
        return $consultaSQL;
    }
    public function eliminar($id)
    {
        $consultaSQL = "DELETE FROM empleados WHERE id='$id'";
        return $consultaSQL;
    }
    public function editar($id)
    {
        $consultaSQL = "UPDATE empleados SET edad='$this->edad',foto='$this->foto',descripcion=' $this->descripcion' WHERE id='$id' ";
        return $consultaSQL;
    }
}
