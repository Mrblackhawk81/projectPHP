<?php
include_once "conexion/conexionBase.php";
class Empleado {
    private $codigo_empleado;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $extension;
    private $email;
    private $codigo_oficina;
    private $codigo_jefe;
    private $puesto;
    private $con;

    public function __construct()
    {
        $this->codigo_empleado = null;
        $this->nombre = "";
        $this->apellido1 = "";
        $this->apellido2 = "";
        $this->extension = "";
        $this->email = "";
        $this->codigo_oficina = null;
        $this->codigo_jefe = 'null';
        $this->puesto = "";
        $this->con = new ConexionBase();
    }

    // Getters y Setters
    public function getCodigoEmpleado()
    {
        return $this->codigo_empleado;
    }

    public function setCodigoEmpleado($codigo_empleado): self
    {
        $this->codigo_empleado = $codigo_empleado;
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

    public function getApellido1()
    {
        return $this->apellido1;
    }

    public function setApellido1($apellido1): self
    {
        $this->apellido1 = $apellido1;
        return $this;
    }

    public function getApellido2()
    {
        return $this->apellido2;
    }

    public function setApellido2($apellido2): self
    {
        $this->apellido2 = $apellido2;
        return $this;
    }

    public function getExtension()
    {
        return $this->extension;
    }

    public function setExtension($extension): self
    {
        $this->extension = $extension;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getCodigoOficina()
    {
        return $this->codigo_oficina;
    }

    public function setCodigoOficina($codigo_oficina): self
    {
        $this->codigo_oficina = $codigo_oficina;
        return $this;
    }

    public function getCodigoJefe()
    {
        return $this->codigo_jefe;
    }

    public function setCodigoJefe($codigo_jefe): self
    {
        $this->codigo_jefe = $codigo_jefe;
        return $this;
    }

    public function getPuesto()
    {
        return $this->puesto;
    }

    public function setPuesto($puesto): self
    {
        $this->puesto = $puesto;
        return $this;
    }

    public function registrarEmpleado(){
        $this->con->createConnection();
        $sql = "INSERT INTO empleado (
            nombre, 
            apellido1, 
            apellido2, 
            extension, 
            email, 
            codigo_oficina, 
            codigo_jefe, 
            puesto
        ) VALUES (
            '$this->nombre', 
            '$this->apellido1', 
            '$this->apellido2', 
            '$this->extension', 
            '$this->email', 
            $this->codigo_oficina, 
            $this->codigo_jefe, 
            '$this->puesto'
        )";
        echo $sql;
        echo "<br>";
        $this->con->executeQuery($sql);
    }
}