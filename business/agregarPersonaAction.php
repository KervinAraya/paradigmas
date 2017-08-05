<?php
    
    include_once '../dominio/Persona.php';
    include 'personaBussiness.php';
             
    $personaId = $_POST['personaId'];
    $personaNombre = $_POST['personaNombre'];
    $personaApellido1 = $_POST['personaApellido1'];
    $personaApellido2 = $_POST['personaApellido2'];
    $personaTelefono = $_POST['personaTelefono'];
    $personaDirecccion = $_POST['personaDireccion'];
    $personaCorreo = $_POST['personaCorreo'];
    $personaDescripcion= $_POST['personaDescripcion'];
    $personaEstado= $_POST['personaEstado'];
    $personaNombre= $_POST['personaNombre'];
    
    //Validacciones para ver si creo el objeto persona o no..(si no es vacio el espacio)
    
    if(isset($personaId) && isset($personaNombre) && isset($personaApellido1) && isset($personaApellido2onaId) && isset($personaTelefono) && isset($personaDirecccion) && isset($personaCorreo) && isset($personaDescripcion) &&isset($personaEstado)&&isset($personaNombre)){
       $persona = new Persona($personaId, $personaNombre, $personaApellido1, $personaApellido2, $personaTelefono, $personaDireccion, $personaCorreo,$personaDescripcion,$personaEstado,$personaNombre); 
    }else{
        header("Location:../view/agregarPersonaView.php?Error=Archivos en blanco"); 
    }
    
    
            
?>
