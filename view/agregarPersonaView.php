<!DOCTYPE html>
<html>
<head>

  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="../js/agregarPersonaJs.js"></script>

</head>
<body>


   
    <div class="col-sm-9 col-md-9">
      <div class="well">
        <div class="buscarCliente">
          <center><h1 style="font-family:georgia;color:#00a0b0">REGISTRAR PERSONA </h1></center>
          <br>
          
            <div id="errorBuscarCliente">
              
            </div>
        
          <br>
          <br>

    <fieldset>

    <!-- Form Name -->
    
    <div class="datosClientes">
          
          <fieldset>

            <!-- Form Name -->
            
            <!-- Form Name -->
            <legend>Datos Personales</legend>
            <div class="datosPersonales">
            <br>
            <br>
              <!-- Text input-->
              <div class="form-group">
                 <div class="col-sm-3">
                  <label  for="factura">Cédula:</label>  
                </div>
                <div class="col-sm-3">
                  <input id="cedula" name="cedula" type="text" placeholder="" >
                  
                </div>
               
                <div class="col-sm-2">
                  <label  for="nombre" style="padding-left: 10%" >Nombre :</label>  
                </div>
                 <div class="col-sm-3">
                  <input id="nombre" name="nombre" style="padding-right: 10%" type="text" placeholder="" >
                  
                </div>
               
              </div>
            
            <!-- Text input-->
          
              <div class="form-group">
                 <div class="col-sm-3">
                  <label  for="apellido1">Primer Apellido:</label>  
                </div>
                <div class="col-sm-3">
                  <input id="apellido1" name="apellido1" type="text" placeholder="" >
                  
                </div>
               
                <div class="col-sm-2">
                  <label  for="apellido2" style="padding-left: 10%" >Segundo Apellido:</label>  
                </div>
                 <div class="col-sm-3">
                  <input id="apellido2" name="apellido2" style="padding-right: 10%" type="text" placeholder="" >
                  
                </div>
               
              </div>
            </div>
            <br>
            <legend>Información del contacto</legend>
            <div class="datosPersonales">
            <br>
            <br>
              <!-- Text input-->
              <div class="form-group">
                 <div class="col-sm-3">
                  <label  for="telefono">Teléfono:</label>  
                </div>
                <div class="col-sm-3">
                  <input id="telefono" name="telefono" type="text" placeholder="">
                  
                </div>
               
                <div class="col-sm-2">
                  <label  for="direccion" style="padding-left: 10%" >Dirección :</label>  
                </div>
                 <div class="col-sm-3">
                  <input id="direccion" name="direccion" style="padding-right: 10%" type="text" placeholder="" >
                  
                </div>
               
              </div>
            
            <!-- Text input-->
          
              <div class="form-group">
                 <div class="col-sm-3">
                  <label  for="correo">Correo:</label>  
                </div>
                <div class="col-sm-3">
                  <input id="correo" name="correo" type="text" placeholder="" >
                  
                </div>
                 <div class="col-sm-3">
                  <label  for="descripcion">Descripcion:</label>  
                </div>
            <div class="col-sm-3" style="margin-left:-1%">
                <input id="descripcion" name="descripcion" type="text" placeholder="" >
            </div>
                
               
              </div>
              <br>
            </div>
            <div class="col-sm-3">
                  <label  for="tipoPersona">Tipo de Persona:</label>  
                </div>
            <div class="col-sm-3" style="margin-left:-1%">
                
                  <select  class="btn btn-warning btn-sm" id="tipoPersona">
                    <option>Cliente</option>
                    <option>Cajero</option>
                    <option>Administrador</option>
                    <option>Mecanico</option>
                  </select>
                  <br>
                   <br>
                </div>
          

      <div class="form-group">
          
        <div  style=margin-left:55% >
            <button  onclick="insertarPersona();"  class="btn btn-warning btn-sm" >Registrar  <i class="glyphicon glyphicon-ok"></i></button>
      
          <button type="submit" class="btn btn-warning btn-sm" >Modificar  <i class="glyphicon glyphicon-ok"></i></button>
       
          <button type="submit" class="btn btn-warning btn-sm" >Eliminar  <i class="glyphicon glyphicon-ok"></i></button>
       
          <button type="submit" class="btn btn-warning btn-sm" >Mostrar  <i class="glyphicon glyphicon-ok"></i></button>
        </div>
      </div>
      </div>
    </form>
    </fieldset>
    </form>
    </div>
    </div>
    </div>
</body>
</html>
