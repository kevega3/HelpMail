
const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll("#formulario input");
const expresiones = {
	Asunto: /^[a-z,A-Z, 0-9 o _ * % $ # / () & = !]{5,25}$/, //
	// nombre: /^[a-zA-ZÀ-ÿ\s],[0-9]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	Header: /^[a-z,A-Z, 0-9 o _ * % $ # / () & = !]{5,25}$/, // 7 a 14 numeros.
}

const campos = {
	Asunto: false,
	// selector: false,
	Header: false,
};

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "Asunto":
			validarCampo(expresiones.Asunto, e.target, "Asunto");
			break;
		case "Header":
			validarCampo(expresiones.Header, e.target, "Header");
			break;
	}
};

const validarCampo = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		document
			.getElementById(`grupo__${campo}`)
			.classList.remove("formulario__grupo-incorrecto");
		document
			.getElementById(`grupo__${campo}`)
			.classList.add("formulario__grupo-correcto");
		document
			.querySelector(`#grupo__${campo} i`)
			.classList.add("fa-check-circle");
		document
			.querySelector(`#grupo__${campo} i`)
			.classList.remove("fa-times-circle");
		document
			.querySelector(`#grupo__${campo} .formulario__input-error`)
			.classList.remove("formulario__input-error-activo");
		campos[campo] = true;
	} else {
		document
			.getElementById(`grupo__${campo}`)
			.classList.add("formulario__grupo-incorrecto");
		document
			.getElementById(`grupo__${campo}`)
			.classList.remove("formulario__grupo-correcto");
		document
			.querySelector(`#grupo__${campo} i`)
			.classList.add("fa-times-circle");
		document
			.querySelector(`#grupo__${campo} i`)
			.classList.remove("fa-check-circle");
		document
			.querySelector(`#grupo__${campo} .formulario__input-error`)
			.classList.add("formulario__input-error-activo");
		campos[campo] = false;
	}
};

inputs.forEach((input) => {
	input.addEventListener("keyup", validarFormulario);
	input.addEventListener("blur", validarFormulario);
});

formulario.addEventListener("submit", (e) => {
	e.preventDefault();
	console.clear();
  var Test = quill.root.innerHTML;
  document.getElementById("test").value = Test;
	if (campos.Asunto && campos.Header && Test != "<p><br></p>") {
		e.currentTarget.submit();
		document
			.querySelectorAll(".formulario__grupo-correcto")
			.forEach((icono) => {
				icono.classList.remove("formulario__grupo-correcto");
			});
	} else {
		document
			.getElementById("formulario__mensaje")
			.classList.add("formulario__mensaje-activo");
	}
});
