<?php
include_once "conexion/conexionBase.php";

class Oficina {
    private $codigo_oficina;
    private $ciudad;
    private $pais;
    private $region;
    private $codigo_postal;
    private $telefono;
    private $linea_direccion1;
    private $linea_direccion2;
    private $con;

    public function __construct()
    {
        $this->codigo_oficina = null;
        $this->ciudad = "";
        $this->pais = "";
        $this->region = "";
        $this->codigo_postal = "";
        $this->telefono = "";
        $this->linea_direccion1 = "";
        $this->linea_direccion2 = "";
        $this->con = new ConexionBase();
    }

    // Getters y Setters
    public function getCodigoOficina()
    {
        return $this->codigo_oficina;
    }

    public function setCodigoOficina($codigo_oficina): self
    {
        $this->codigo_oficina = $codigo_oficina;
        return $this;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setCiudad($ciudad): self
    {
        $this->ciudad = $ciudad;
        return $this;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function setPais($pais): self
    {
        $this->pais = $pais;
        return $this;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region): self
    {
        $this->region = $region;
        return $this;
    }

    public function getCodigoPostal()
    {
        return $this->codigo_postal;
    }

    public function setCodigoPostal($codigo_postal): self
    {
        $this->codigo_postal = $codigo_postal;
        return $this;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono): self
    {
        $this->telefono = $telefono;
        return $this;
    }

    public function getLineaDireccion1()
    {
        return $this->linea_direccion1;
    }

    public function setLineaDireccion1($linea_direccion1): self
    {
        $this->linea_direccion1 = $linea_direccion1;
        return $this;
    }

    public function getLineaDireccion2()
    {
        return $this->linea_direccion2;
    }

    public function setLineaDireccion2($linea_direccion2): self
    {
        $this->linea_direccion2 = $linea_direccion2;
        return $this;
    }

    public function registrarOficina(){
        $this->con->createConnection();
        $sql = "INSERT INTO oficina (
            ciudad, 
            pais, 
            region, 
            codigo_postal, 
            telefono, 
            linea_direccion1, 
            linea_direccion2
        ) VALUES (
            '$this->ciudad', 
            '$this->pais', 
            '$this->region', 
            '$this->codigo_postal', 
            '$this->telefono', 
            '$this->linea_direccion1', 
            '$this->linea_direccion2'
        )";
        echo $sql;
        echo "<br>";
        $this->con->executeQuery($sql);
    }
}
