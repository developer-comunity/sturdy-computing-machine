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

      "ajax": "datos_Empleado.php",
      "columns":[
      {"data":"action"},
      {"data":"id"},
      {"data":"nombre"},
      {"data":"email"},
      {"data":"password"},
      {"data":"fecha_nac"},
      {"data":"puesto"},
      {"data":"sueldo"},
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
        <a class="col-md-offset-2" href="cliente.php">Clientes</a>
      </li>
      <li class="dropdown">
        <a class="col-md-offset-2" href="#">Empleados</a>
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
                <th><a href="#" title="Agregar Empleado" onclick="altaEmpleado()">Agregar</a></th>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Password</th>
                <th>Fecha de nacimiento</th>
                <th>Puesto</th>
                <th>Sueldo</th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>
<div id="mContra4" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<form action="save_empleado.php" method="POST" name="fActualizar" onsubmit="guardarEmpleado()" enctype="multipart/form-data">
<button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Alta de Empleado</h4>
  <div class="form-group">
    <label for="nombre">Nombre: </label>
    <input type="hidden" class="form-control" id="clav" name="clav">
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del empleado" required>
  </div>
  <div class="form-group">
    <label for="email">Correo: </label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
  </div>
  <div class="form-group">
    <label for="password">Password: </label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="fecha_nac">Fecha de nacimiento: </label>
    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="fecha_nac" required>
  </div>
  <div class="form-group">
    <label for="puesto">Puesto: </label>
    <input type="puesto" class="form-control" id="puesto" name="puesto" placeholder="puesto" required>
  </div>
  <div class="form-group">
    <label for="sueldo">Sueldo: </label>
    <input type="sueldo" class="form-control" id="sueldo" name="sueldo" placeholder="sueldo" required>
  </div>
   <div class="form-group">
    <label for="tImagen">Imagen:</label>
    <input  type="file" class="form-control" id="tImagen" name="tImagen" required>
  </div>
  <div class="form-group">
  <select class="form-control" name="tipo" required>
   <option value="1">Administrador</option>
   <option value="2">Usuario</option>
</select>
 </div>
  <button class='btn btn-success' onclick="" id="btnguardar" >Guardar</button>
</div>
</div>
</div>
</div>
</form>

</div>
<div id="ModEmpleado" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<form action="Update_empleado.php" method="POST" name="fActualizar">
<button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Actualizar Empleado</h4>
  <div class="form-group">
    <label for="Mnombre">Nombre: </label>
    <input type="hidden" class="form-control" id="clave" name="clave">
    <input type="text" class="form-control" id="Mnombre" name="Mnombre" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label for="Memail">Correo: </label>
    <input type="email" class="form-control" id="Memail" name="Memail" placeholder="Correo" required>
  </div>
  <div class="form-group">
    <label for="Mpassword">Password: </label>
    <input type="password" class="form-control" id="Mpassword" name="Mpassword" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="Mfecha_nac">Fecha de nacimiento: </label>
    <input type="date" class="form-control" id="Mfecha_nac" name="Mfecha_nac" placeholder="Fecha de nacimiento" required>
  </div>
  <div class="form-group">
    <label for="Mpuesto">Presentacion: </label>
    <input type="text" class="form-control" id="Mpuesto" name="Mpuesto" placeholder="Puesto" required>
  </div>
  <div class="form-group">
    <label for="Msueldo">Sueldo: </label>
    <input type="text" class="form-control" id="Msueldo" name="Msueldo" placeholder="Sueldo" required>
  </div>
  <div class="form-group">
  <select class="form-control" id="Atipo" name="Atipo" required>
   <option value="1">Administrador</option>
   <option value="2">Usuario</option>
</select>
</div>
  <button class='btn btn-success' onclick="" id="btnguardar" >Actualizar</button>
</div>
</div>
</div>
</div>
</form>

           <div id="mImagenE" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
       <form>
                  <div class="row">
                    <div class="col-xs-6 col-md-3">
                   
                        <img id="imgImagenE" width="600" height="500">
                   
                    </div>
                  </div>
      </form>
    </div>
  </div>
</div>

<!--Modal eliminar-->
          <div id="myModan" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">¿Desea Continuar?</h4>
                </div>
                <div class="modal-body">
             <p>Esta apunto de Eliminar este usuario</p>
                  <form action="del_empleado.php" method="POST" class="form-horizontal"> 
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

</body>
</html>

