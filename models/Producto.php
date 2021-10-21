<?php
class Producto
{
    //Variables = Datos = Atributos
    public $nombreProducto;
    public $marca;
    public $precio;
    public $descripcionProducto;

    //Acciones = funciones // metodos

    public function __construct($nombreProducto, $marca, $precio, $descripcionProducto)
    {

        $this->nombreProducto = $nombreProducto;
        $this->marca = $marca;
        $this->precio = $precio;
        $this->descripcionProducto = $descripcionProducto;
    }

    public function registrar()
    {
        $consultaSQL = "INSERT INTO productos( nombreProducto, marca, precio, descripcionProducto) VALUES ('   $this->nombreProducto','$this->marca',' $this->precio','$this->descripcionProducto')";

        return $consultaSQL;
    }
    //CRUD
    public function buscar()
    {
        $consultaSQL = "SELECT*FROM productos";
        return $consultaSQL;
    }
    public function eliminar($id_producto)
    {
        $consultaSQL = "DELETE FROM productos WHERE id='$id_producto'";
        return $consultaSQL;
    }
    public function editar($id_producto)
    {
        $consultaSQL = "UPDATE productos SET marca='$this->marca',precio='$this->precio'
        WHERE id='$id_producto'";
        return $consultaSQL;
    }
}
