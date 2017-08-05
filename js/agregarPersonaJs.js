
function insertarPersona(){
    $(document).ready(function(){
        $.post('../business/agregarPersonaAction.php',{
            accionPersona : 'insertar',
            personaId : document.getElementById("cedula").value,
            personaNombre : document.getElementById("apellido1").value,
            personaApellido1 : document.getElementById("apellido2").value,
            personaApellido2 : document.getElementById("apellido2").value,
            personaTelefono : document.getElementById("telefono").value,
            personaDireccion : document.getElementById("direccion").value,
            personaCorreo : document.getElementById("correo").value,
            personaDescripcion : document.getElementById("descripcion").value,
            tipoPersonaNombre : document.getElementById("tipoPersona").value,
        }, function(responseText){
            alert(responseText);
        });
    });
}
