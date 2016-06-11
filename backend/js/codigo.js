// funcion para mostar la ventana emergente de nuevos usuarios
var accion;
var idP;
function Nuevo(){
	accion = 'N';
	document.frmClientes.nombres.value = "";
	document.frmClientes.apellidos.value = "";
	document.frmClientes.email.value = "";
	document.frmClientes.marca_vehiculo.value = "";
	document.frmClientes.modelo.value = "";
	document.frmClientes.year.value = "";
	document.frmClientes.kilometraje.value = "";
	document.frmClientes.telefonos.value = "";
	document.frmClientes.comentarios.value = "";
	$('#modal').modal('show');
}
function Editar(id,nombres,apellidos,email,marca_vehiculo,modelo,year,kilometraje,telefonos,comentarios){
	accion = 'E';
	idP = id;
	document.frmClientes.nombres.value = nombres;
	document.frmClientes.apellidos.value = apellidos;
	document.frmClientes.email.value = email;
	document.frmClientes.marca_vehiculo.value = marca_vehiculo;
	document.frmClientes.modelo.value = modelo;
	document.frmClientes.year.value = year;
	document.frmClientes.kilometraje.value = kilometraje;
	document.frmClientes.telefonos.value = telefonos;
	document.frmClientes.comentarios.value = comentarios;

	$('#modal').modal('show')
}
function NuevoFront(){
	accion = 'N';
	document.frmClientes.nombres.value = "";
	document.frmClientes.apellidos.value = "";
	document.frmClientes.email.value = "";
	document.frmClientes.marca_vehiculo.value = "";
	document.frmClientes.modelo.value = "";
	document.frmClientes.year.value = "";
	document.frmClientes.kilometraje.value = "";
	document.frmClientes.telefonos.value = "";
	$('#modal').modal('show');
	$('#modal').show()
}
function CloseWindows() {
	$('#modal').hide()
}
