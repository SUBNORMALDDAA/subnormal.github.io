function validar(){
	var nombre,apellido,direccion,telefono,correo,pass;
	nombre=document.getElementsById('nombre').value;
	apellido=document.getElementsById('apellido').value;
	direccion=document.getElementsById('direccion').value;
	telefono=document.getElementsById('telefono').value;
	correo=document.getElementsById('correo').value;
	pass=document.getElementsById('pass').value;

	exprecion=/^\w+([\.\+\-/]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	if(nombre==""){
		alert("el campo  Nombre esta vacio");
			return false;
	} else if(apellido==""){
		alert("El campo apellido esta vacio")
	}
	else if(direccion==""){
		alert("El campo direccion esta vacio")
	}
	else if(telefono==""){
		alert("El campo telefono esta vacio")
	}
	else if(correo==""){
		alert("El campo correo esta vacio")
	}
	else if(pass==""){
		alert("El campo pass esta vacio")
	}