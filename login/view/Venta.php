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

      "ajax": "datos_venta.php",
      "columns":[
      {"data":"action"},
      {"data":"id"},
      {"data":"id_producto"},
      {"data":"nombre"},
      {"data":"precio"},
      {"data":"cantidad"},
      {"data":"fecha_venta"},
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
        <a class="col-md-offset-2" href="#">Reporte</a>
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
                <th><a href="#" title="Agregar Empleado" onclick="altaVenta()">Agregar</a></th>
                <th>Id</th>
                <th>Id de producto</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Fecha de venta</th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>
<div id="mContra6" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<form action="save_venta.php" method="POST" name="fActualizar" onsubmit="guardarVenta()">
<button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Alta de Venta</h4>
  <div class="form-group">
    <label for="id_producto">Id de producto: </label>
    <input type="hiddem" class="form-control" name="id" id="id" placeholder="Id de producto">
    <input type="id_producto" class="form-control" name="id_producto" id="id_producto" placeholder="Id de producto">
  </div>
  <div class="form-group">
    <label for="nombre">Nombre: </label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la venta">
  </div>
  <div class="form-group">
    <label for="precio">Precio: </label>
    <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio">
  </div>
  <div class="form-group">
    <label for="cantidad">Cantidad: </label>
    <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
  </div>
  <div class="form-group">
    <label for="fecha_venta">Fecha de venta: </label>
    <input type="date" class="form-control" id="fecha_venta" name="fecha_venta" placeholder="Fecha de venta">
  </div>
  <button class='btn btn-success' onclick="" id="btnguardar" >Guardar</button>
</div>
</div>
</div>
</div>
</form>

</div>
<div id="ModVenta" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<form action="Update_venta.php" method="POST" name="fActualizar">
<button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Actualizar Venta</h4>
  <div class="form-group">
    <label for="Aid_producto">Id del producto: </label>
    <input type="hidden" class="form-control" id="clave" name="clave">
    <input type="text" class="form-control" id="Aid_producto" name="Aid_producto" placeholder="Id del producto" required>
  </div>
  <div class="form-group">
    <label for="Anombre">Nombre de venta: </label>
    <input type="text" class="form-control" id="Anombre" name="Anombre" placeholder="Nombre de venta" required>
  </div>
  <div class="form-group">
    <label for="Aprecio">Precio: </label>
    <input type="password" class="form-control" id="Aprecio" name="Aprecio" placeholder="Precio" required>
  </div>
  <div class="form-group">
    <label for="Acantidad">Cantidad: </label>
    <input type="text" class="form-control" id="Acantidad" name="Acantidad" placeholder="Acantidad" required>
  </div>
  <div class="form-group">
    <label for="Afecha_venta">Fecha de venta: </label>
    <input type="date" class="form-control" id="Afecha_venta" name="Afecha_venta" placeholder="FEcha de venta" required>
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
          <div id="myModax" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">¿Desea Continuar?</h4>
                </div>
                <div class="modal-body">
             <p>Esta apunto de Eliminar esta venta</p>
                  <form action="del_Venta.php" method="POST" class="form-horizontal"> 
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