<?php
    
    class agregarPersonaData{
        
        private $conexion;
        
        function agregarPersonaData(){
            require_once 'Conexion.php';
            $this->conexion =  new Conexion();            
        }
        
        function insertarPersona($persona){
            $insertar = $this->conexion->crearConexion()->query("INSERT INTO tbpersona VALUES("
                    . "'".$persona->getPersonaId()."'"
                    . "'".$persona->getPersonaNombre()."'"
                    . "'".$persona->getPersonaApellido1()."'"
                    . "'".$persona->getPersonaApellido2()."'"
                    . "'".$persona->getPersonaTelefono()."'"
                    . "'".$persona->getPersonaDireccion()."'"
                    . "'".$persona->getPersonaCorreo()."')");
            if($insertar == 1 && $tipoEmpleado == true){
                 $insertarTipoEmpleado = $this->conexion->crearConexion()->query("INSERT INTO tbtipopersona VALUES('".$persona->getPersonaId()."','".$persona->getTipoPersonaNombre()."','".$persona->getTipoPersonaDescripcion()."','".$persona->getTipoPersonaEstado()."')");
            }else{ 
                throw new Exception("Error al insertar la persona");
            }
        }
        
        function eliminarPersona($persona){
            $desactivar = $this->conexion->crearConexion()->query("UPDATE tbtipopersona estadotipopersona SET ='false' WHERE cedulapersona=".$persona->getPersonaId()."");
            if($desactivar != 1){
                throw new Exception("Error al desactivar la persona");
            }            
        }
        
        
    }

?>
