const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	
	NombreUser: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras, numeros, guion y guion_bajo
	Apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	CC: /^[0-9]{4,12}$/, // 4 a 12 digitos.
	Clave: /^[a-zA-ZÀ-ÿ\s-Z0-9_.+-@]{5,40}$/,
	Correo: /^[a-zA-Z0-9_]+@[a-zA-Z0-9-.]{5,10}$/,
}

const campos = {
	NombreUser: false,
	Apellido: false,
	CC: false,
	Clave: false,
	Correo: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "NombreUser":
			validarCampo(expresiones.NombreUser, e.target, 'NombreUser');
		break;
		case "Apellido":
			validarCampo(expresiones.Apellido, e.target, 'Apellido');
		break;
		case "CC":
			validarCampo(expresiones.CC, e.target, 'CC');
		break;
		case "Clave":
			validarCampo(expresiones.Clave, e.target, 'Clave');
		break;
		case "Correo":
			validarCampo(expresiones.Correo, e.target, 'Correo');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}


inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	var Rolif = $("#Rol").val();	
	if(Rolif == null || Rolif == ''){
		var Rol = false;
		
	}else{
		var Rol = true;
		
	}
	e.preventDefault();
	if(campos.NombreUser && campos.Apellido  && campos.CC && campos.Clave && campos.Correo && Rol==true ){
		// e.currentTarget.submit();
		
		AgregarUser();
		
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});