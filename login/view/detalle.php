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

      "ajax": "datos_detalle.php",
      "columns":[
      {"data":"action"},
      {"data":"id_sus"},
      {"data":"id_cliente"},
      {"data":"nombre"},
      {"data":"importe"},
      {"data":"dia"},
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
        <a class="col-md-offset-2" href="empleado.php">Empleados</a>
      </li>
      <li class="dropdown">
        <a class="col-md-offset-2" href="membresia.php">Membresia</a>
      </li>
      <li class="dropdown">
        <a class="col-md-offset-2" href="Venta.php">Reporte</a>
      </li>
      <li class="dropdown">
        <a class="col-md-offset-2" href="#">Detalle Membresia</a>
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
                <th><a href="#" title="Agregar Detalle" onclick="altaDetalle()">Agregar</a></th>
                <th>Id de membresia</th>
                <th>Id de producto</th>
                <th>Nombre</th>
                <th>Importe</th>
                <th>Dia</th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>
<div id="mContra7" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<form action="save_detalle.php" method="POST" name="fActualizar" onsubmit="guardarDetalle()">
<button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Alta de Detalle</h4>
  <div class="form-group">
    <label for="id_sus">Id de membresia: </label>
    <input type="number" class="form-control" id="id_sus" name="id_sus" placeholder="Id de membresia">
  </div>
  <div class="form-group">
    <label for="id_cliente">Id del cliente: </label>
    <input type="number" class="form-control" id="id_cliente" name="id_cliente" placeholder="Id del cliente">
  </div>
  <div class="form-group">
    <label for="nombre">Nombre: </label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="importe">Importe: </label>
    <input type="number" class="form-control" id="importe" name="importe" placeholder="Importe">
  </div>
  <div class="form-group">
    <label for="dia">Dia: </label>
    <input type="date" class="form-control" id="dia" name="dia" placeholder="Dia">
  </div>
  <button class='btn btn-success' onclick="" id="btnguardar" >Guardar</button>
</div>
</div>
</div>
</div>
</form>

</body>
</html>

<!--Modal eliminar-->
          <div id="myModaz" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">¿Desea Continuar?</h4>
                </div>
                <div class="modal-body">
             <p>Esta apunto de Eliminar este detalle de membresia</p>
                  <form action="del_detalle.php" method="POST" class="form-horizontal"> 
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

      <div id="Moddetalle" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<form action="Update_detalle.php" method="POST" name="fActualizar">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Actualizar de Detalle</h4>
  <div class="form-group">
    <label for="Aid_sus">Id de membresia: </label>
    <input type="hidden" class="form-control" id="clave" name="clave">
    <input type="number" class="form-control" id="Aid_sus" name="Aid_sus" placeholder="Id de membresia">
  </div>
  <div class="form-group">
    <label for="Aid_cliente">Id del cliente: </label>
    <input type="number" class="form-control" id="Aid_cliente" name="Aid_cliente" placeholder="Id del cliente">
  </div>
  <div class="form-group">
    <label for="Anombre">Nombre: </label>
    <input type="text" class="form-control" id="Anombre" name="Anombre" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="Aimporte">Importe: </label>
    <input type="number" class="form-control" id="Aimporte" name="Aimporte" placeholder="Importe">
  </div>
  <div class="form-group">
    <label for="Adia">Dia: </label>
    <input type="date" class="form-control" id="Adia" name="Adia" placeholder="Dia">
  </div>
  <button class='btn btn-success' onclick="guardarDetalle()" id="btnguardar" >Guardar</button>
</div>
</div>
</div>
</div>
</form>
