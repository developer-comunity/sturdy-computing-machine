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

      "ajax": "datos_membresia.php",
      "columns":[
      {"data":"action"},
      {"data":"id"},
      {"data":"nombre"},
      {"data":"precio"},
      {"data":"cantidad"}
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
        <a class="col-md-offset-2" href="#">Membresia</a>
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
                <th><a href="#" title="Agregar Membresia" onclick="altaMembresia()">Agregar</a></th>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>
<div id="mContra5" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<form action="save_membresia.php" method="POST" name="fActualizar" onsubmit="guardarMembresia()">
<button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Alta de Membresia</h4>
  <div class="form-group">
    <label for="nombre">Nombre: </label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la membresia" required>
  </div>
  <div class="form-group">
    <label for="precio">Precio: </label>
    <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio de la membresia" required>
  </div>
  <div class="form-group">
    <label for="cantidad">Cantidad: </label>
    <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" required>
  </div>
  <button class='btn btn-success' onclick="" id="btnguardar" >Guardar</button>
</div>
</div>
</div>
</div>
</form>

</div>
<div id="ModMembresia" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<form action="Update_membresia.php" method="POST" name="fActualizar">
<button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Actualizar Membresia</h4>
  <div class="form-group">
    <label for="Anombre">Nombre: </label>
    <input type="hidden" class="form-control" id="clave" name="clave">
    <input type="text" class="form-control" id="Anombre" name="Anombre" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label for="Aprecio">Precio: </label>
    <input type="number" class="form-control" id="Aprecio" name="Aprecio" placeholder="Precio" required>
  </div>
  <div class="form-group">
    <label for="Acantidad">Cantidad: </label>
    <input type="text" class="form-control" id="Acantidad" name="Acantidad" placeholder="Cantidad" required>
  </div>
  <button class='btn btn-success' onclick="" id="btnguardar" >Actualizar</button>
</div>
</div>
</div>
</div>
</form>


</body>
</html>

<!--Modal eliminar-->
          <div id="myModam" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">¿Desea Continuar?</h4>
                </div>
                <div class="modal-body">
             <p>Esta apunto de Eliminar esta membresia</p>
                  <form action="del_membresia.php" method="POST" class="form-horizontal"> 
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
