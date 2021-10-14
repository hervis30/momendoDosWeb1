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

    public function registrarProducto()
    {
        $consultaProductoSQL = "INSERT INTO productos( nombre, marca, precio, descripcion) VALUES ('   $this->nombreProducto','$this->marca',' $this->precio','$this->descripcionProducto')";

        return $consultaProductoSQL;
    }
    //CRUD
    public function buscarProducto()
    {
        $consultaProductoSQL = "SELECT*FROM productos";
        return $consultaProductoSQL;
    }
    public function eliminarProducto($id_producto)
    {
        $consultaProductoSQL = "DELETE FROM productos WHERE id='$id_producto'";
        return $consultaProductoSQL;
    }
    public function editarProducto($id_producto)
    {
        $consultaProductoSQL = "UPDATE productos SET marca='$this->marca',precio='$this->precio'
        WHERE id='$id_producto'";
        return $consultaProductoSQL;
    }
}
