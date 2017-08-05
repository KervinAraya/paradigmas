<?php

include '../data/agregarPersonaData.php';

class personaBusiness {

    private $personaData;

    public function personaBusiness() {
        $this->personaData = new agregarPersonaData();
    }

    public function insertTBPersona($persona) {
        return $this->personaData->insertarPersona($persona);
    }

    public function updateTBPersona($persona) {
        return $this->personaData->actualizarPersona($persona);
    }

    public function deleteTBPersona($personaId) {
        return $this->personaData->eliminarPersona($personaId);
    }

    public function getAllTBPersona() {
        return $this->personaData->getTodasLasPersonas();
    }
    
    
    public function getByIdTBPersona($personaId) {
        return $this->personaData->getCedulaPersonas();
    }
    
}