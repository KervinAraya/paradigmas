<?php

class Persona {
   
    private $personaId;
    private $personaNombre;
    private $personaApellido1;
    private $personaApellido2;
    private $personaTelefono;
    private $personaDireccion;
    private $personaCorreo;
    
    
    
    function persona($personaId,$personaNombre,$personaApellido1,$personaApellido2,$personaTelefono,
            $personaDireccion,$personaCorreo){
        $this->personaId= $personaId;
        $this->personaNombre = $personaNombre;
        $this->personaApellido1 = $personaApellido1;
        $this->personaApellido2 = $personaApellido2;
        $this->personaTelefono = $personaTelefono;
        $this->personaDireccion = $personaDireccion;
        $this->personaCorreo = $personaCorreo;
 }
 
 
 }
            
    
    


?>
