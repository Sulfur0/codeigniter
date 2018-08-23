<!DOCTYPE html>
<html>
<head>
	<title>Persona</title>
	<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/bootstrap.min.css">	
   <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/custom.css">
</head>
<body>	
	<form action="<?php echo base_url(); ?>index.php/PersonaController/guardar" method="POST">
		<div class="content">
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
			<div class="space-bot-md col-md-8 offset-md-2">
				<h1>Registro de usuario.</h1>
				<h2>Para registrarte como un nuevo usuario, ingresa tus datos en el formulario inferior.</h2>
			</div>
			<div class="col-md-10 offset-md-1 col-xs-12">
				<div class="row space-bot-sm">
					<div class="col-md-3"><label>Nombre</label></div>
					<div class="col-md-3"><input type="text" name="nombre" class="form-control" required=""></div>	
					<div class="col-md-3"><label>Apellido Paterno</label></div>
					<div class="col-md-3"><input type="text" name="appaterno" class="form-control" required=""></div>		
				</div>			
				<div class="row space-bot-sm">
					<div class="col-md-3"><label>Apellido Materno</label></div>
					<div class="col-md-3"><input type="text" name="apmaterno" class="form-control" required=""></div>	
					<div class="col-md-3"><label>Email</label></div>
					<div class="col-md-3"><input type="email" name="email" class="form-control" required=""></div>	
				</div>	
				<div class="row space-bot-md">
					<div class="col-md-3"><label>DNI</label></div>
					<div class="col-md-3"><input type="text" name="dni" class="form-control" required=""></div>	
					<div class="col-md-3"><label>Direccion</label></div>
					<div class="col-md-3"><input type="text" name="direccion" class="form-control" required=""></div>	
				</div>		
				<div class="row space-bot-md">
					<div class="col-md-3"><label>Usuario</label></div>
					<div class="col-md-3"><input type="text" name="nomUsuario" class="form-control" required=""></div>	
					<div class="col-md-3"><label>Contraseña</label></div>
					<div class="col-md-3"><input type="password" name="clave" class="form-control" required=""></div>	
				</div>		
				<div class="row">
					<div class="col-md-8 offset-md-4"><input type="submit" class="btn btn-primary" value="Registrar Usuario"></div>
				</div>
				<p>Ya estas registrado? Entra al sistema <a href="<?php echo base_url(); ?>index.php/authController">aquí</a></p>
			</div>
		</div>			
	</form>
	
</body>
<script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>js/jquery331.min.js"></script>
<script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>js/bootstrap.min.js"></script>
	
</html>