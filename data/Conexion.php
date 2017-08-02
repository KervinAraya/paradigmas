<?php
class Conexion {
    
    private $server;
    private $user;
    private $password;
    private $dbname;
    private $conexion;
    
    
    function Conexion(){
        $this->server = "192.168.1.16";
        $this->user = "progra";
        $this->password = "";
        $this->dbname = "DBtallermecanico";
    }
    
    function crearConexion(){
        $this->conexion  = mysqli_connect($this->server,$this->user,$this->password,$this->dbname);	
        return $this->conexion;
    }
    function cerrarConexion(){
	mysqli_close ($this->conexion);                        
    }
}

?>
