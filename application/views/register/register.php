<!DOCTYPE html>
<html>
<head>
<title>Formulario de Registro de Usuarios</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Animated Register Form template Responsive" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href='<?php echo base_url(); ?>css/bootstrap.min.css' media='all' rel='stylesheet'>
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.min.css"> 
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font --> 
</head>
<body>
	<!-- main-agileits -->
	<div class="agileits">
		<h1>Formulario de Registro de Usuarios</h1>
		<?php if (isset($response)) { ?>
			<div class="col-md-4 offset-md-4 space-bot-md">
				<div class="alert alert-success">
					<p><b><?php echo $response;?></b></p>
				</div>
			</div>			
		<?php } else if (isset($errors)) { ?>
			<div class="col-md-4 offset-md-4 space-bot-md">
				<div class="alert alert-danger">
					<p><b><?php echo $errors;?></b></p>
				</div>
			</div>			
		<?php } ?>
		<div class="register-form">			
			<form action="<?php echo base_url(); ?>index.php/Persona/guardar" class='form animate-form' id='form1'  method="POST">			<p class="w3agileits">Registro de Usuario</p>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='nombre'>Nombre</label> 
					<input class='form-control' id='nombre' name='nombre' placeholder='Nombre' type='text'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='appaterno'>Apellido Paterno</label> 
					<input class='form-control' id='appaterno' name='appaterno' placeholder='Apellido Paterno' type='text'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='apmaterno'>Apellido Materno</label> 
					<input class='form-control' id='apmaterno' name='apmaterno' placeholder='Apellido Materno' type='text'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback wthree'>
					<label class='control-label sr-only' for='email'>Email address</label> 
					<input class='form-control' id='email' name='email' placeholder='Email address' type='text'><span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='dni'>DNI</label> 
					<input class='form-control' id='dni' name='dni' placeholder='DNI' type='text' maxlength="8">
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='direccion'>Dirección</label> 
					<input class='form-control' id='direccion' name='direccion' placeholder='Dirección' type='text'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<hr>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='usuario'>Usuario</label> 
					<input class='form-control' id='usuario' name='nomUsuario' placeholder='Usuario' type='text'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback agile'>
					<label class='control-label sr-only' for='password'>Contraseña</label> 
					<input class='form-control w3l' id='password' name='clave' placeholder='Contraseña' type='password'><span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='submit w3-agile'>
					<input class='btn btn-lg' type='submit' value='Registrar'>
				</div>
				<div class="form-group has-feedback w3ls">
					<p>Ya estas registrado? Entra <a href="<?php echo base_url(); ?>index.php/Auth">aquí</a></p>
				</div>
			</form>
		</div>	
	</div>	
	<!-- //agileits -->
	<!-- copyright -->
	<div class="w3-agile-copyright">
		<p class="agileinfo"> © 2018 Curso de Codeigniter | Mas información <a href="mailto:aevega1991@gmail.com" target="_blank">aevega1991@gmail.com</a></p>
	</div>
	<!-- //copyright -->  
	<!-- js -->
	<script src="<?php echo base_url(); ?>js/jquery-2.2.3.min.js"></script>
	<script src='<?php echo base_url(); ?>js/jquery.validate.min.js'></script>
	<script src='<?php echo base_url(); ?>js/formAnimation.js'></script>
	<script src='<?php echo base_url(); ?>js/shake.js'></script> 
	<!-- //js -->
</body>
</html>