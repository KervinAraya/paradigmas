<?php
    
    include_once '../dominio/Persona.php';
    include 'personaBussiness.php';
             
    $personaId = $_POST['personaId'];
    $personaNombre = $_POST['personaNombre'];
    $personaApellido1 = $_POST['personaApellido1'];
    $personaApellido2 = $_POST['personaApellido2'];
    $personaTelefono = $_POST['personaTelefono'];
    $personaDireccion = $_POST['personaDireccion'];
    $personaCorreo = $_POST['personaCorreo'];
    $personaDescripcion= $_POST['personaDescripcion'];
    $tipoPersonaNombre= $_POST['tipoPersonaNombre'];
    
    //Validacciones para ver si creo el objeto persona o no..(si no es vacio el espacio)
    $persona = null;
    if(isset($personaId) && isset($personaNombre) && isset($personaApellido1) && isset($personaApellido2) && isset($personaTelefono) && isset($personaDireccion) && isset($personaCorreo) && isset($personaDescripcion) && isset($tipoPersonaNombre)){
       $persona = new Persona($personaId, $personaNombre, $personaApellido1, $personaApellido2, $personaTelefono, $personaDireccion, $personaCorreo,$personaDescripcion,"true",$tipoPersonaNombre); 
    }else{
        header("Location:../view/agregarPersonaView.php?Error=Archivos en blanco"); 
    }
    
    $actionPersona=$_POST['accionPersona'];
    $personaData= new personaBussiness();
    
    if($actionPersona=='insertar'){
        echo $personaData->insertTBPersona($persona);
    }
    elseif($actionPersona=='consultar'){
         echo $personaData->getAllTBPersona();
    }
    elseif($actionPersona=='consultarPorCedula'){
        echo $personaData->getByIdTBPersona($personaId);
    }
     elseif($actionPersona=='actualizar'){
        echo $personaData->updateTBPersona($persona);
    }
     elseif($actionPersona=='eliminar'){
        echo $personaData->deleteTBPersona($personaId);
    }
    else{
        header("Location:../view/agregarPersonaView.php?Error=No ha seleccionado una opcion viable"); 
    }

            
?>
