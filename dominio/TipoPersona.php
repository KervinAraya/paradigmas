<?php

class TipoPersona{
    
    private $tipoPersonaCedula;
    private $tipoPersonaEstado;
    private $tipoPersonaNombre;
    private $tipoPersonaDescripcion;
    
    function TipoPersona($tipoPersonaCedula,$tipoPersonaEstado,$tipoPersonaNombre,$tipoPersonaDescripcion){
        
        $this->tipoPersonaEstado=$tipoPersonaEstado;
        $this->tipoPersonaCedula=$tipoPersonaCedula;
        $this->tipoPersonaDescripcion=$tipoPersonaDescripcion;
        $this->tipoPersonaNombre=$tipoPersonaNombre;
        
        
    }
    public function setTipoPersonaCedula($tipoPersonaCedula) {
        $this->tipoPersonaCedula = $tipoPersonaCedula;
    }
    public function setTipoPersonaDescripcion($tipoPersonaDescripcion) {
        $this->tipoPersonaDescripcion = $tipoPersonaDescripcion;
    }
    public function setTipoPersonaNombre($tipoEmpleadoNombre) {
        $this->tipoPersonaNombre = $tipoEmpleadoNombre;
    }
    public function setTipoPersonaEstado($tipoPersonaEstado) {
        $this->tipoPersonaEstado = $tipoPersonaEstado;
    }
    
    public function getTipoPersonaCedula() {
        return $this->tipoPersonaCedula;
    }
    public function getTipoPersonaDescripcion() {
        return $this->tipoPersonaDescripcion;
    }
    public function getTipoPersonaNombre() {
        return $this->tipoPersonaNombre;
    }
    public function getTipoPersonaoEstado() {
        return $this->tipoPersonaEstado;
    }
}
?>

