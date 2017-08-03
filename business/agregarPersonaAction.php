<?php
    
    include_once '../dominio/Persona.php';
    $personaId = $_POST['personaId'];
    $persona = new Persona($personaId, $personaNombre, $personaApellido1, $personaApellido2, $personaTelefono, $personaDireccion, $personaCorreo)

            
    
?>