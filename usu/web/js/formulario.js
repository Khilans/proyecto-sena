const formulario = document.getElementById('formulario');  // acceder al id del formulario
const inputs = document.querySelectorAll('#formulario input');  // acceder a todos los inputs del formulario

const expresiones = {   // <--  objeto
	nombre: /^[a-zA-ZÁ-ÿ]{1,20}$/, // /^[a-zA-Z0-9\_\-]{4,16}$/,     Letras, numeros, guion y guion_bajo
	nombre2: /^[a-zA-ZÁ-ÿ]{1,20}$/, // Letras y espacios, pueden llevar acentos.
	apellidos:/^[a-zA-ZÁ-ÿ\s]{1,20}$/,
	numerodoc:/^\d{1,14}/, 
	password: /^.{6,30}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}

const campos = {
	nombre: false,
 	nombre2: false, 
	apellidos: false,
	numerodoc: false,
	password: false,
	correo: false,
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "usu_nombre":       //nombre del input
		    validarCampo(expresiones.nombre, e.target, 'nombre');
		break;

		case "usu_nombre2":
			validarCampo(expresiones.nombre2, e.target, 'nombre2');		
		break;
		case "usu_apellido":
			validarCampo(expresiones.apellidos, e.target, 'apellidos');		
			
		break;
		case "usu_ndocumento":
			validarCampo(expresiones.numerodoc, e.target, 'numerodoc');		
		
		break;
		case "usu_correo":
			validarCampo(expresiones.correo, e.target, 'correo');		
	
		break; 
		case "usu_password":
			validarCampo(expresiones.password, e.target, 'password');		
			validarPassword2 ();
		break;
		case "usu_password2":
			validarPassword2 ();
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

 const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
} 

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario); // valida el campo al soltar la tecla
	input.addEventListener('blur', validarFormulario);  // ejecuta la comprobacion cuando se dé click fuera del input
});

formulario.addEventListener('submit', (e) => {
   /*     e.preventDefault();   */  
	const terminos = document.getElementById('terminos'); 
	if(campos.nombre && campos.apellidos && campos.numerodoc && campos.password && campos.correo && terminos.checked ){
		/* formulario.reset(); */

	 	document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo'); 
		  setTimeout(() => {
			 document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo'); 
		}, 4000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		}); 
		
	}   else {
		e.preventDefault();
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo'); 
		 setTimeout(() => {
		document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo'); 

	   }, 5000); 
	}   
}); 



 