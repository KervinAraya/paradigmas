<!DOCTYPE html>
<html>
<head>
  <script src="../js/jquery-3.2.1.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/menu.css" >
   <link rel="stylesheet" href="../css/registroCliente.css" >
  <!-- JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body ">


   
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
          <form class="form-horizontal">
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
                  <input id="factura" name="factura" type="text" placeholder="" >
                  
                </div>
               
                <div class="col-sm-2">
                  <label  for="cedula" style="padding-left: 10%" >Nombre :</label>  
                </div>
                 <div class="col-sm-3">
                  <input id="cedula" name="cedula" style="padding-right: 10%" type="text" placeholder="" >
                  
                </div>
               
              </div>
            
            <!-- Text input-->
          
              <div class="form-group">
                 <div class="col-sm-3">
                  <label  for="factura">Primer Apellido:</label>  
                </div>
                <div class="col-sm-3">
                  <input id="factura" name="factura" type="text" placeholder="" >
                  
                </div>
               
                <div class="col-sm-2">
                  <label  for="cedula" style="padding-left: 10%" >Segundo Apellido:</label>  
                </div>
                 <div class="col-sm-3">
                  <input id="cedula" name="cedula" style="padding-right: 10%" type="text" placeholder="" >
                  
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
                  <label  for="factura">Teléfono:</label>  
                </div>
                <div class="col-sm-3">
                  <input id="factura" name="factura" type="text" placeholder="">
                  
                </div>
               
                <div class="col-sm-2">
                  <label  for="cedula" style="padding-left: 10%" >Dirección :</label>  
                </div>
                 <div class="col-sm-3">
                  <input id="cedula" name="cedula" style="padding-right: 10%" type="text" placeholder="" >
                  
                </div>
               
              </div>
            
            <!-- Text input-->
          
              <div class="form-group">
                 <div class="col-sm-3">
                  <label  for="factura">Correo:</label>  
                </div>
                <div class="col-sm-3">
                  <input id="factura" name="factura" type="text" placeholder="" >
                  
                </div>
               
                
               
              </div>
              <br>
            </div>
            <div class="col-sm-3">
                  <label  for="factura">Tipo de Persona:</label>  
                </div>
            <div class="col-sm-3" style="margin-left:-1%">
                
                  <select  class="btn btn-warning" id="tipoVenta">
                    <option>Cliente</option>
                    <option>Cajero</option>
                    <option>Administrador</option>
                    <option>Mecanico</option>
                  </select>
                  <br>
                   <br>
                </div>

      <div class="form-group">
          
        <div  style=margin-left:65% >
          <button type="submit"  class="btn btn-warning" >Registrar  <i class="glyphicon glyphicon-ok"></i></button>
      
          <button type="submit" class="btn btn-warning" >Modificar  <i class="glyphicon glyphicon-ok"></i></button>
       
          <button type="submit" class="btn btn-warning" >Eliminar  <i class="glyphicon glyphicon-ok"></i></button>
       
          <button type="submit" class="btn btn-warning" >Mostrar  <i class="glyphicon glyphicon-ok"></i></button>
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
