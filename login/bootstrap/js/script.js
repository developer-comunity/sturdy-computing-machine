function soloUsuario()
{
	if ((event.keyCode != 13) && (event.keyCode != 239) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
	{
		if ((event.keyCode < 48) || (event.keyCode > 57)) 
		{
			bootbox.alert("No se permiten caracteres especiales en este campo.");
	 		event.returnValue = false;
		}
	}
}

function altaProducto()
{
	$('mContra').modal('toggle');
	$('#mContra').modal('show');
}
function altaCliente()
{
	$('mContra2').modal('toggle');
	$('#mContra2').modal('show');
}
function altaUsuario()
{
	$('mContra3').modal('toggle');
	$('#mContra3').modal('show');
}
function altaEmpleado()
{
  $('mContra4').modal('toggle');
  $('#mContra4').modal('show');
}
function altaMembresia()
{
  $('mContra5').modal('toggle');
  $('#mContra5').modal('show');
}
function altaVenta()
{
  $('mContra6').modal('toggle');
  $('#mContra6').modal('show');
}
function altaDetalle()
{
  $('mContra7').modal('toggle');
  $('#mContra7').modal('show');
}

  function guardarProducto(){
 bootbox.alert("Producto registrado con exito.");
  } 


    function guardarCliente(){
   bootbox.alert("Cliente registrado con exito.");
  }

  function guardarEmpleado(){
 bootbox.alert("Empleado registrado con exito.");
  } 

  function guardarMembresia(){
 bootbox.alert("Membresia registrado con exito.");
  }

  function guardarVenta(){
 bootbox.alert("Venta registrado con exito.");
  }  

  function guardarDetalle(){
 bootbox.alert("Detalle de Membresia registrado con exito.");
  }  

    function guardarUsuario(){
    var clave= $('#clave').val();
    var nombre= $('#nombre2').val();
    var apellido= $('#apellido2').val();
    var contrasenia = $('#contrasenia').val();
    var privilegio= $('#privilegio').val();
    $.post("save_usuario.php",
    {clave:clave, nombre2:nombre, apellido2:apellido, contrasenia:contrasenia, privilegio:privilegio},
    function(data){
      $("#reporte").html(data);
      $('#clave').val("");
      $('#nombre2').val("");
      $('#apellido2').val("");
      $('#contrasenia').val("");
      $('#privilegio').val("");
      $('#mContra3').modal('toggle');
    });
     bootbox.alert("Usuario registrado con exito.");
  } 

function eliminarProducto(id){ 
  $(tid).val(id)
	$('#myModal').modal('toggle');
	$('#myModal').modal('show');
}

function eliminarCliente(id){ 
  $(tid).val(id)
  $('#myModa').modal('toggle');
  $('#myModa').modal('show');
}

function eliminarEmpleado(id){ 
  $(tid).val(id)
  $('#myModan').modal('toggle');
  $('#myModan').modal('show');
}

function eliminarMembresia(id){ 
  $(tid).val(id)
  $('#myModam').modal('toggle');
  $('#myModam').modal('show');
}

function eliminarVenta(id){ 
  $(tid).val(id)
  $('#myModax').modal('toggle');
  $('#myModax').modal('show');
}

function eliminarDetalle(id){ 
  $(tid).val(id)
  $('#myModaz').modal('toggle');
  $('#myModaz').modal('show');
}

function eliminarUsuario(clave){
  $(tclave).val(clave)
  $('#myMod').modal('toggle');
  $('#myMod').modal('show');
}

function eliminarTipo(id){
  $(tid).val(id)
  $('#myTipo').modal('toggle');
  $('#myTipo').modal('show');
}

function eliminarRelacion(id_familiar){
  $(tid_familiar).val(id_familiar)
  $('#myModF').modal('toggle');
  $('#myModF').modal('show');
}
function modificarProducto(id, nombre, precio, presentacion){
$(clave).val(id)
$(Anombre).val(nombre)
$(Aprecio).val(precio)
$(Apresentacion).val(presentacion)
$('#ModProducto').modal('toggle');
$('#ModProducto').modal('show');
}

function modificarTipo(id, nombre){
$(clave).val(id)
$(Mnombre).val(nombre)
$('#ModTipo').modal('toggle');
$('#ModTipo').modal('show');
}

function modificarCliente(id, nombre, ap_pat, ap_mat, telefono, direccion, correo, fechanac, fechaing, id_sus, idempleado){
$(clave).val(id)
$(Mnombre).val(nombre)
$(Map_pat).val(ap_pat);
$(Map_mat).val(ap_mat);
$(Mtelefono).val(telefono);
$(Mdireccion).val(direccion);
$(Mcorreo).val(correo);
$(Mfechanac).val(fechanac);
$(Mfechaing).val(fechaing);
$(Mid_sus).val(id_sus);
$(Midempleado).val(idempleado);
$('#Modcliente').modal('toggle');
$('#Modcliente').modal('show');
}

function modificarEmpleado(id, nombre,email, contrasena, fecha_nac, puesto, sueldo, tipo){
$(clave).val(id)
$(Mnombre).val(nombre)
$(Memail).val(email)
$(Mpassword).val(password)
$(Mfecha_nac).val(fecha_nac)
$(Mpuesto).val(puesto)
$(Msueldo).val(sueldo)
$(Atipo).val(tipo)
$('#ModEmpleado').modal('toggle');
$('#ModEmpleado').modal('show');
}

function modificarMembresia(id, nombre, precio, cantidad){
$(clave).val(id)
$(Anombre).val(nombre)
$(Aprecio).val(precio)
$(Acantidad).val(cantidad)
$('#ModMembresia').modal('toggle');
$('#ModMembresia').modal('show');
}

function modificarVenta(id, id_producto, nombre, precio, cantidad, fecha_venta){
$(clave).val(id)
$(Aid_producto).val(id_producto)
$(Anombre).val(nombre)
$(Aprecio).val(precio)
$(Acantidad).val(cantidad)
$(Afecha_venta).val(fecha_venta)
$('#ModVenta').modal('toggle');
$('#ModVenta').modal('show');
}

function modificarDetalle(id, id_sus, id_cliente, nombre, importe, dia){
$(clave).val(id)
$(Aid_sus).val(id_sus)
$(Aid_cliente).val(id_cliente)
$(Anombre).val(nombre)
$(Aimporte).val(importe)
$(Adia).val(dia)
$('#Moddetalle').modal('toggle');
$('#Moddetalle').modal('show');
}

function modificarUsuario(clave, nombre, apellido, contrasenia, privilegio){
$(Mclave).val(clave)
$(Mnombre).val(nombre)
$(Mapellido).val(apellido)
$(Mcontrasenia).val(contrasenia)
$(Mprivilegio).val(privilegio)
$('#ModUsuario').modal('toggle');
$('#ModUsuario').modal('show');
}

function modificarRelacion(id_familiar, matricula){
$(Mid_familiar).val(id_familiar)
$(MmatriculaA).val(matricula)
$('#ModRelacion').modal('toggle');
$('#ModRelacion').modal('show');
}

function Asignar(matricula){
$(Mmatricula).val(matricula)
$('#ModAsignacion').modal('toggle');
$('#modAsignacion').modal('show');
}

function mostrarImagen(imagen)
{
    $('#imgImagen').attr('src',imagen);

  $('#mImagen').modal('toggle');
  $('#mImagen').modal('show');
}

function mostrarImagenE(imagen)
{
  $('#imgImagenE').attr('src',imagen);
  $('#mImagenE').modal('toggle');
  $('#mImagenE').modal('show');
}
