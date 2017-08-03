<?php

include '../data/agregarPersonaData.php';

class personaBusiness {

    private $personaData;

    public function personaBusiness() {
        $this->personaData = new agregarPersonaData();
    }

    public function insertTBPersona($persona) {
        return $this->personaData->insertTBBull($persona);
    }

    public function updateTBPersona($persona) {
        return $this->personaData->updateTBBull($persona);
    }

    public function deleteTBPersona($personaCedula) {
        return $this->personaData->deleteTBBull($personaCedula);
    }

    public function getAllTBPersona() {
        return $this->personaData->getAllTBPersona();
    }
    
}