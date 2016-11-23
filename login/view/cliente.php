<?php
include "sesion.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Gym</title>


<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../bootstrap/DT/media/css/jquery.dataTables.css"/>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/estilo.css">

  

  <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
  <script type="text/javascript" src="../bootstrap/DT/media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/bootbox.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/script.js"></script>

<script>
$(document).ready(function() {
    $('#example').dataTable({
      "scrollX":        "200px",
      "ajax": "datos_Cliente.php",
      "columns":[
      {"data":"action"},
      {"data":"id"},
      {"data":"nombre"},
      {"data":"ap_pat"},
      {"data":"ap_mat"},
      {"data":"telefono"},
      {"data":"direccion"},
      {"data":"correo"},
      {"data":"fechanac"},
      {"data":"fechaing"},
      {"data":"id_sus"},
      {"data":"idempleado"},
      ],
    });
} );

</script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="col-md-offset-2" href="Producto.php">Productos</a>
      </li>
      <li class="dropdown">
        <a class="col-md-offset-2" href="#">Clientes</a>
      </li>
      <li class="dropdown">
        <a class="col-md-offset-2" href="empleado.php">Empleados</a>
      </li>
      <li class="dropdown">
        <a class="col-md-offset-2" href="membresia.php">Membresia</a>
      </li>
      <li class="dropdown">
        <a class="col-md-offset-2" href="Venta.php">Reporte</a>
      </li>
      <li class="dropdown">
        <a class="col-md-offset-2" href="detalle.php">Detalle Membresia</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a class="col-md-offset-2" href="cerrar.php" >Cerrar Sesion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
    </ul>

  </div>
</nav>


<br><br><br><br>
<div class="container">
  <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><a href="#" title="Agregar Clientes" onclick="altaCliente()">Agregar</a></th>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Correo</th>
                <th>Fecha de nacimiento</th>
                <th>Fecha de ingreso</th>
                <th>Membresia</th>
                <th>Numero de empleado</th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>
<div id="mContra2" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<form action="save_cliente.php" method="POST" name="fActualizar" onsubmit="guardarCliente()" enctype="multipart/form-data">
<button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Alta de Cliente</h4>
  <div class="form-group">
    <label for="nombre_cliente">Nombre: </label>
    <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre del cliente" required>
  </div>
  <div class="form-group">
    <label for="ap_pat">Apellido paterno: </label>
    <input type="text" class="form-control" id="ap_pat" name="ap_pat" placeholder="Apellido paterno" required>
  </div>
  <div class="form-group">
    <label for="ap_mat">Apellido materno: </label>
    <input type="text" class="form-control" id="ap_mat" name="ap_mat" placeholder="Apellido materno" required>
  </div>
  <div class="form-group">
    <label for="telefono">Telefono: </label>
    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
  </div>
  <div class="form-group">
    <label for="direccion">Direccion: </label>
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
  </div>
  <div class="form-group">
    <label for="correo">Correo: </label>
    <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" required>
  </div>
  <div class="form-group">
    <label for="fechanac">Fecha de nacimiento: </label>
    <input type="date" class="form-control" id="fechanac" name="fechanac" placeholder="Fecha de nacimiento" required>
  </div>
  <div class="form-group">
    <label for="fechaing">Fecha de ingreso: </label>
    <input type="date" class="form-control" id="fechaing" name="fechaing" placeholder="Fecha de ingreso" required>
  </div>
  <div class="form-group">
    <label for="id_sus">Membresia: </label>
    <input type="text" class="form-control" id="id_sus" name="id_sus" placeholder="Membresia" required>
  </div>
  <div class="form-group">
    <label for="idempleado">Id empleado: </label>
    <input type="text" class="form-control" id="idempleado" name="idempleado" placeholder="Id empleado" required>
  </div>
  <div class="form-group">
    <label for="tImagen">Imagen:</label>
    <input  type="file" class="form-control" id="tImagen" name="tImagen" required>
  </div>
  <button class='btn btn-success' onclick="" id="btnguardar" >Guardar</button>
</div>
</div>
</div>
</div>
</form>

</div>
<div id="Modcliente" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<form action="Update_cliente.php" method="POST" name="fActualizar">
<button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Actualizar Cliente</h4>
  <div class="form-group">
    <label for="Mnombre">Nombre: </label>
    <input type="hidden" class="form-control" id="clave" name="clave">
    <input type="text" class="form-control" id="Mnombre" name="Mnombre" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label for="Map_pat">Apellido paterno: </label>
    <input type="text" class="form-control" id="Map_pat" name="Map_pat" placeholder="Apellido paterno" required>
  </div>
  <div class="form-group">
    <label for="Map_mat">Apellido materno: </label>
    <input type="text" class="form-control" id="Map_mat" name="Map_mat" placeholder="Apellido materno" required>
  </div>
  <div class="form-group">
    <label for="Mtelefono">Telefono: </label>
    <input type="text" class="form-control" id="Mtelefono" name="Mtelefono" placeholder="Telefono" required>
  </div>
  <div class="form-group">
    <label for="Mdireccion">Direccion: </label>
    <input type="text" class="form-control" id="Mdireccion" name="Mdireccion" placeholder="Direccion" required>
  </div>
  <div class="form-group">
    <label for="Mcorreo">Correo: </label>
    <input type="text" class="form-control" id="Mcorreo" name="Mcorreo" placeholder="Correo" required>
  </div>
  <div class="form-group">
    <label for="Mfechanac">Fecha de nacimiento: </label>
    <input type="date" class="form-control" id="Mfechanac" name="Mfechanac" placeholder="Fecha de nacimiento" required>
  </div>
  <div class="form-group">
    <label for="Mfechaing">Fecha de ingreso: </label>
    <input type="date" class="form-control" id="Mfechaing" name="Mfechaing" placeholder="Fecha de ingreso" required>
  </div>
  <div class="form-group">
    <label for="Mid_sus">Membresia: </label>
    <input type="text" class="form-control" id="Mid_sus" name="Mid_sus" placeholder="Membresia" required>
  </div>
  <div class="form-group">
    <label for="Midempleado">Id empleado: </label>
    <input type="text" class="form-control" id="Midempleado" name="Midempleado" placeholder="Id empleado" required>
  </div>
  <button class='btn btn-success' onclick="" id="btnguardar" >Actualizar</button>
</div>
</div>
</div>
</div>
</form>

<!--Modal imagen-->



           <div id="mImagen" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
       <form>
                  <div class="row">
                    <div class="col-xs-6 col-md-3">
                   
                        <img id="imgImagen" width="600" height="500">
                   
                    </div>
                  </div>
      </form>
    </div>
  </div>
</div>

<!--Modal imagen-->
</body>
</html>

<!--Modal eliminar-->
          <div id="myModa" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">¿Desea Continuar?</h4>
                </div>
                <div class="modal-body">
             <p>Esta apunto de Eliminar este usuario</p>
                  <form action="del_Cliente.php" method="POST" class="form-horizontal"> 
                             <div class="form-group">
                             <input id="tid" name="tid" type="hidden">
                             </div> 
              <div class="modal-footer">
              <input type="submit" value="Continuar" name="eliminar" class="btn btn-success">
              <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
              </div>
                     </form>
              </div>
            </div>
          </div>
      </div>
      <!--Modal eliminar-->