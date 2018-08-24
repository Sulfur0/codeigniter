<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Animated Login Form template Responsive" />
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
		<h1>Login de Sistema Administrativo</h1>
		<?php if (isset($response)) { ?>
			<div class="col-md-6 offset-md-3 space-bot-md">
				<div class="alert alert-success">
					<p><b><?php echo $response;?></b></p>
				</div>
			</div>			
		<?php } else if (isset($errors)) { ?>
			<div class="col-md-6 offset-md-3 space-bot-md">
				<div class="alert alert-danger">
					<p><b><?php echo $errors;?></b></p>
				</div>
			</div>			
		<?php } ?>
		<div class="w3-agileits-info">			
			<form class='form animate-form' id='form1' action="<?php echo base_url(); ?>index.php/Auth/ingresar" method="POST">
				<p class="w3agileits">Login</p>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='username'>Nombre de Usuario</label> 
					<input class='form-control' id='username' name='usuario' placeholder='Usuario' type='text'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<!--
				<div class='form-group has-feedback wthree'>
					<label class='control-label sr-only' for='email'>Email address</label> 
					<input class='form-control' id='email' name='email' placeholder='Email address' type='text'><span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				-->
				<div class='form-group has-feedback agile'>
					<label class='control-label sr-only' for='password'>Contraseña</label> 
					<input class='form-control w3l' id='password' name='clave' placeholder='Contraseña' type='password'><span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='submit w3-agile'>
					<input class='btn btn-lg' type='submit' value='Entrar'>
				</div>
				<div class="form-group has-feedback w3ls">
					<p>No estas registrado? Registrate <a href="<?php echo base_url(); ?>index.php/Persona">aquí</a></p>
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