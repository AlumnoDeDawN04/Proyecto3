<!DOCTYPE html>
<html>
<head>
	<title>Proyecto 3</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="UTF-8">
	<script type="text/javascript" src="java.js"></script>
</head>
<body>
<h2>Agenda de contactos</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="comprobarusuarios.php" method="POST" name="formulariologin" enctype="multipart/form-data">
			<h1>Crear Cuenta</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>¡Debes utilizar el correo con el que te hayas resgristrado!</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			
			<button>Inicia</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="comprobarusuarios.php" method="POST" onsubmit="comprobar();">
			<h1>Inicia Sesion</h1><br>
			<input type="string" name="user" id="user" default=""><br>
			<input type="password" name="pwd" id="pwd"><br>
			<a href="#">He olvidado mi contraseña</a>
			<button>Entrar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenido!</h1>
				<p>hola</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hola Amigo!</h1>
				<p>¡¡Registrate gratis aqui!!</p>
				<form style="height: 0px;" action="registro.php">
					<button class="ghost" id="signUp"><a style="color: " href="registro.php">Registrar</a></button>
				</form>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Creado <i class="fa fa-heart"></i> por
		<a target="_blank" > Grupo 5- Ada Lovelace</a>
		- Agenda de contactos
		<a target="_blank" ></a>.
	</p>
			</footer>
		</body>
</html>