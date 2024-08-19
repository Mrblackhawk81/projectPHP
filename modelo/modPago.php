<?php
include_once "conexion/conexionBase.php";

class Pago {
    private $id_transaccion;
    private $forma_pago;
    private $fecha_pago;
    private $total;
    private $codigo_cliente;
    private $con;

    public function __construct()
    {
        $this->id_transaccion = null;
        $this->forma_pago = "";
        $this->fecha_pago = "";
        $this->total = 0.00;
        $this->codigo_cliente = "";
        $this->con = new ConexionBase();
    }

    // Getters y Setters
    public function getIdTransaccion()
    {
        return $this->id_transaccion;
    }

    public function setIdTransaccion($id_transaccion): self
    {
        $this->id_transaccion = $id_transaccion;
        return $this;
    }

    public function getFormaPago()
    {
        return $this->forma_pago;
    }

    public function setFormaPago($forma_pago): self
    {
        $this->forma_pago = $forma_pago;
        return $this;
    }

    public function getFechaPago()
    {
        return $this->fecha_pago;
    }

    public function setFechaPago($fecha_pago): self
    {
        $this->fecha_pago = $fecha_pago;
        return $this;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total): self
    {
        $this->total = $total;
        return $this;
    }

    public function getCodigoCliente()
    {
        return $this->codigo_cliente;
    }

    public function setCodigoCliente($codigo_cliente): self
    {
        $this->codigo_cliente = $codigo_cliente;
        return $this;
    }

    public function registrarPago(){
        $this->con->createConnection();
        $sql = "INSERT INTO pago (
            forma_pago, 
            fecha_pago, 
            total, 
            codigo_cliente
        ) VALUES (
            '$this->forma_pago', 
            '$this->fecha_pago', 
            $this->total, 
            '$this->codigo_cliente'
        )";
        echo $sql;
        echo "<br>";
        $this->con->executeQuery($sql);
    }
}
?>
