<?php

class Persona {
   
    private $personaId;
    private $personaNombre;
    private $personaApellido1;
    private $personaApellido2;
    private $personaTelefono;
    private $personaDireccion;
    private $personaCorreo;
  
    
    
    
    function Persona($personaId,$personaNombre,$personaApellido1,$personaApellido2,$personaTelefono,
            $personaDireccion,$personaCorreo){
        $this->personaId= $personaId;
        $this->personaNombre = $personaNombre;
        $this->personaApellido1 = $personaApellido1;
        $this->personaApellido2 = $personaApellido2;
        $this->personaTelefono = $personaTelefono;
        $this->personaDireccion = $personaDireccion;
        $this->personaCorreo = $personaCorreo;
 }
    public function setPersonaId($personaId) {
        $this->personaId = $personaId;
    }
    public function setPersonaNombre($personaNombre){
        $this->personaNombre = $personaNombre;
    }
    
    public function setPersonaApellido1($personaApellido1){
        $this->personaApellido1 = $personaApellido1;
    }
    
    public function setPersonaApellido2($personaApellido2){
        $this->personaApellido2 = $personaApellido2;
    }
    
    public function setPersonaTelefono($personaTelefono){
        $this->personaTelefono = $personaTelefono;
    }
    
    public function setPersonaDireccion($personaDireccion){
        $this->personaDireccion = $personaDireccion;
    }
    
    public function setPersonaCorreo($personaCorreo){
        $this->personaCorreo = $personaCorreo;
    }
    
  public function getPersonaId() {
        return $this->personaId;
    }
    
   public function getPersonaNombre(){
        return $this->personaNombre;
    }
    
    public function getPersonaApellido1(){
        return $this->personaApellido1;
    }
    
    public function getPersonaApellido2(){
        return $this->personaApellido2;
    }
    
    public function getPersonaTelefono(){
        return $this->personaTelefono;
    }
    
    public function getPersonaDireccion(){
        return $this->personaDireccion;

    }
 
    public function getPersonaCorreo()
    {
        return $this->personaCorreo;
    }
 
 }

?>
