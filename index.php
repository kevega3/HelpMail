
<?php   include 'Modelo/Keys.php';
	 error_reporting(0); 
    session_start();
    session_destroy();
	$error=$_GET['error'];
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vista/Styles/Login.css">
    <link rel="stylesheet" href="Vista/Styles/Reload.css">
    <!-- ajax -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="Images/simbolo_cac_color.png">
    <!--Css propios -->
    <!-- Recatch -->

    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>
    <title>Login</title>
</head>

<body style="
font-family: 'Montserrat', sans-serif;
font-weight: bold;">
    </style>
<div class="" id="contenedor_carga">
        <div id="carga"></div>
</div>


<div class="ContenedorGe">
	
<div class="contenedorLogin">
<!-- Error Alert -->
<?php if(empty($error)){
	
}else{
?>
<div class="alert alert-danger alert-dismissible fade show">
    <strong> Datos incorrectos, verifique su usuario y contraseña
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php
}
	?>

	<div class="row">
		<div class="col-1"></div>
		<div class="col-3 colorAzul"></div>
		<div class="col-4 colorMorado"></div>
		<div class="col-3 colorVerde"></div>
		<div class="col-1"></div>
	</div>

	
	<div class="row contenedorFormulario">
		<!-- <div class="col-sm-12 col-md-10 col-lg-10  contenedorResumen"></div> -->
		<!-- d-none d-md-block  -->
		<div class="col-sm-1 d-md-block col-md-1 vacio"></div>


		<div class="d-none d-md-block  col-md-6 col-lg-6 p-0">
			<img src="Images/FondoForm.png" alt="" >
		</div>

		<div class="col-sm-10 col-md-4 col-lg-4 formularioCAC">
			<div>
				<img src="Images/H_cac_color_fondo.png" style="width: 80%;" alt="">
			</div>
            <br>
			<div class="verificacionCodigo">
				<h4>Verificación en dos pasos</h4>
				<p>digite su Cedula y su Contraseña para acceder</p>
			</div>
			<form action="Modelo/Validar.php" method="post" class="formulario" id="formulario"> 
				
				<!-- Grupo: Usuario -->
				<div class="formulario__grupo" id="grupo__usuario">
					<label for="usuario" class="formulario__label">Usuario</label>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="usuario" id="usuario"
							placeholder="Digite su Usuario o Correo" />
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error">
						El Usuario debe tener 5 a 16 dígitos y solo puede contener numeros.
					</p>
				</div>

				<div class="formulario__grupo campo" id="grupo__contraseña">
					<label for="contraseña" class="formulario__label">Contraseña</label>
					<div class="formulario__grupo-input">
						<input type="password" class="formulario__input" name="contraseña" id="contrasena"
							placeholder="Digite su contraseña" />
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error">
						La Contraseña debe tener 4 a 16 dígitos
					</p>
				</div>


				
				
                <br>
				<div style="margin-top:5px;">
					<input  type="checkbox" id="mostrar_contrasena" title="click para mostrar contraseña" />
					&nbsp;&nbsp;Mostrar Contraseña
				</div>
                <br>
				
				
				
				<div class="formulario__mensaje" id="formulario__mensaje">
					<p>
						<i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor
						rellena el formulario correctamente.
					</p>
				</div>
				<div class="formulario__grupo formulario__grupo-btn-enviar">
				<input type="hidden" name="entrar" id="entrar">
					<button type="submit" class="formulario__btn">Iniciar Sesion</button>
				</div>
				
				

			</form>
			<div class="Derechos">
			<p>© 2022 Todos los derechos reservados a Cuenta de Alto Costo
				Términos y condiciones . Políticas de privacidad y condiciones de uso.</p>
			</div>
		</div>

		<div class="col-sm-1 d-md-block col-md-1 vacio"></div>
		

	</div>
	
	<!-- CONTENEDOR LOG-->
	</div>
</div>
<!-- CONTENEDOR -->
</body>


<!--  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--  -->

<!--Fonazome-->
<script src="https://kit.fontawesome.com/c4cc899971.js" crossorigin="anonymous"></script>

<!--Formulario-->

<script src="Vista/Scripts/Login.js">
</script>
<script>
    window.onload = function() {
        var contenedor = document.getElementById('contenedor_carga');
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    }
</script>

<script>
$(document).ready(function() {
    $('#mostrar_contrasena').click(function() {
        if ($('#mostrar_contrasena').is(':checked')) {
            $('#contrasena').attr('type', 'text');
        } else {
            $('#contrasena').attr('type', 'password');
        }
    });
});
</script>

<script type="text/Javascript">
        grecaptcha.ready(function(){

				grecaptcha.execute('<?php echo SITE_KEY;?>', {action: 'homepage'}).then(function(token) {
					document.getElementById("entrar").value = token;
				});
			});
</script>

</html>