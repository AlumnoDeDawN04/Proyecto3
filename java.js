const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
function comprobar(){
	var user=document.getElementById('user').value;
	var pwd=document.getElementById('pwd').value;
	var pasar=0;
	if (user=="" || pwd=="") {
		var pasar=1;
		alert("Faltan campos por rellenar");
		return false;
	}
}

function validation(){
	var nombre=document.getElementById('nombre').value;
	var pass=document.getElementById('pass').value;
	var confpass=document.getElementById('confpass').value;
	var pasar=0;
	if (nombre=="" || pass=="" || confpass=="") {
		alert("Hay campos sin rellenar");
		return false;
	}
	if (pass!=confpass) {
		alert("Las contrasenas no coinciden");
		return false;
	}
}

function editusu(){
	var nombre=document.getElementById('nombre').value;
	var pass=document.getElementById('pass').value;
	var confpass=document.getElementById('confpass').value;
	if (nombre=="" || pass=="" || confpass=="") {
		alert("Tienes campos sin rellenar");
		return false;
	}else if (pass!=confpass) {
		alert("Las contraseñas no coinciden");
		document.getElementById('pass').value="";
		document.getElementById('confpass').value="";
		return false;
	}
	return true;
}