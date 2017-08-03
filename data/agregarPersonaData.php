<?php
    
    class agregarPersonaData{
        
        private $conexion;
        
        function agregarPersonaData(){
            require_once 'Conexion.php';
            $this->conexion =  new Conexion();            
        }
        
        function insertarPersona($persona){
            $insertar = $this->conexion->crearConexion()->query("INSERT INTO tbpersona VALUES("
                    . "'".$this->persona->getPersonaId()."'"
                    . "'".$this->persona->getPersonaNombre()."'"
                    . "'".$this->persona->getPersonaApellido1()."'"
                    . "'".$this->persona->getPersonaApellido2()."'"
                    . "'".$this->persona->getPersonaTelefono()."'"
                    . "'".$this->persona->getPersonaDireccion()."'"
                    . "'".$this->persona->getPersonaCorreo()."')");
            if($insertar == 1 && $tipoEmpleado == true){
                 $insertarTipoEmpleado = $this->conexion->crearConexion()->query("");
            }else{ 
                throw new Exception("Error al insertar la persona");
            }
        }
        
        
        
    }

?>
