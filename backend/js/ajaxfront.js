function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {

	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}

if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
function Registrar(idP, accion){
	nombres = document.frmClientes.nombres.value;
	apellidos = document.frmClientes.apellidos.value;
	email = document.frmClientes.email.value;
	marca_vehiculo = document.frmClientes.marca_vehiculo.value;
	modelo = document.frmClientes.modelo.value;
	year = document.frmClientes.year.value;
	kilometraje = document.frmClientes.kilometraje.value;
	telefonos = document.frmClientes.telefonos.value;

	ajax = objetoAjax();

	if(accion=='N'){
		ajax.open("POST","backend/clases/registrar.php",true);
	}
	else if(accion=='E'){
		ajax.open("POST","clases/actualizar.php",true);
	}

		ajax.onreadystatechange=function(){
			if (ajax.readyState==4){
				alert('Los datos fueron guardados con exito');
				window.location.reload(true);
			}
		}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("&nombres="+nombres+"&apellidos="+apellidos+"&email="+email+"&marca_vehiculo="+marca_vehiculo+"&modelo="+modelo+"&year="+year+"&kilometraje="+kilometraje+"&telefonos="+telefonos+"&idP="+idP);

}

function eliminar(idP){
	if (confirm("En realidad quieres eliminar este registro")) {
		ajax = objetoAjax();
		ajax.open("POST","clases/eliminar.php",true);
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4){
				alert('El registro se elimino con exito');
				window.location.reload(true);
			}
		}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("&idP="+idP);
}else {
	// sin acciones
}
}
