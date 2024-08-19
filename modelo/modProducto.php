<?php
include_once "conexion/conexionBase.php";

class Producto {
    private $codigo_producto;
    private $nombre;
    private $dimensiones;
    private $proveedor;
    private $descripcion;
    private $cantidad_en_stock;
    private $precio_venta;
    private $precio_proveedor;
    private $gama;
    private $con;

    public function __construct()
    {
        $this->codigo_producto = null;
        $this->nombre = "";
        $this->dimensiones = "";
        $this->proveedor = "";
        $this->descripcion = "";
        $this->cantidad_en_stock = 0;
        $this->precio_venta = 0.00;
        $this->precio_proveedor = 0.00;
        $this->gama = 0;
        $this->con = new ConexionBase();
    }

    // Getters y Setters
    public function getCodigoProducto()
    {
        return $this->codigo_producto;
    }

    public function setCodigoProducto($codigo_producto): self
    {
        $this->codigo_producto = $codigo_producto;
        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getDimensiones()
    {
        return $this->dimensiones;
    }

    public function setDimensiones($dimensiones): self
    {
        $this->dimensiones = $dimensiones;
        return $this;
    }

    public function getProveedor()
    {
        return $this->proveedor;
    }

    public function setProveedor($proveedor): self
    {
        $this->proveedor = $proveedor;
        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function getCantidadEnStock()
    {
        return $this->cantidad_en_stock;
    }

    public function setCantidadEnStock($cantidad_en_stock): self
    {
        $this->cantidad_en_stock = $cantidad_en_stock;
        return $this;
    }

    public function getPrecioVenta()
    {
        return $this->precio_venta;
    }

    public function setPrecioVenta($precio_venta): self
    {
        $this->precio_venta = $precio_venta;
        return $this;
    }

    public function getPrecioProveedor()
    {
        return $this->precio_proveedor;
    }

    public function setPrecioProveedor($precio_proveedor): self
    {
        $this->precio_proveedor = $precio_proveedor;
        return $this;
    }

    public function getGama()
    {
        return $this->gama;
    }

    public function setGama($gama): self
    {
        $this->gama = $gama;
        return $this;
    }

    // Método para registrar un producto en la base de datos
    public function registrarProducto()
    {
        $this->con->createConnection();
        $sql = "INSERT INTO producto (
            nombre, 
            dimensiones, 
            proveedor, 
            descripcion, 
            cantidad_en_stock, 
            precio_venta, 
            precio_proveedor, 
            gama
        ) VALUES (
            '$this->nombre', 
            '$this->dimensiones', 
            '$this->proveedor', 
            '$this->descripcion', 
            $this->cantidad_en_stock, 
            $this->precio_venta, 
            $this->precio_proveedor, 
            $this->gama
        )";
        echo $sql;
        echo "<br>";
        $this->con->executeQuery($sql);
    }
}
?>
