<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/bootstrap.min.css">	
   <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/custom.css">	
</head>
<body>
	<form action="<?php echo base_url(); ?>index.php/authController/ingresar" method="POST">
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
			<div class="col-md-4 offset-md-4 space-bot-md">
				<h1>Bienvenido al Login del sistema.</h1>
			</div>
			<div class="col-md-4 offset-md-4 col-xs-12">
				<div class="row space-bot-sm">
					<div class="col-md-5"><label>Usuario</label></div>
					<div class="col-md-7"><input type="text" name="usuario" class="form-control" required=""></div>			
				</div>			
				<div class="row space-bot-sm">
					<div class="col-md-5"><label>Contraseña</label></div>
					<div class="col-md-7"><input type="password" name="clave" class="form-control" required=""></div>
				</div>			
				<div class="row space-bot-sm">
					<div class="col-md-8 offset-md-4"><input type="submit" class="btn btn-success" value="Ingresar"></div>
				</div>
				<p>No estas registrado? Registrate <a href="<?php echo base_url(); ?>index.php/personaController">aquí</a></p>
			</div>
		</div>	
	</form>
	
</body>
<script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>js/jquery331.min.js"></script>
<script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>js/bootstrap.min.js"></script>
</html>