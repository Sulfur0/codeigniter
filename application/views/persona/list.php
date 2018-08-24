
<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/bootstrap.min.css">	
	<title>Persona</title>
</head>
<body>	
	<div class="row">
		<div class="offset-md-8 col-md-4 col-sm-12">
			<a class="btn btn-warning" href="<?php echo base_url(); ?>index.php/Auth/logout">Cerrar Sesión</a>
		</div>
	</div>
	

	<div class="content">
		<?php if(isset($_SESSION['user'])){ ?>
		<div class="row">
			<div class="col-md-8 offset-md-3">
				<h1>Datos del usuario <?php echo $nomUsuario; ?></h1>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-8 offset-md-3">
				<table>
					<tr>
						<td>Nombre</td><td><?php echo $nombre; ?></td>
					</tr>
					<tr>
						<td>Apellido paterno</td><td><?php echo $appaterno; ?></td>
					</tr>
					<tr>
						<td>Apellido materno</td><td><?php echo $apmaterno; ?></td>
					</tr>
					<tr>
						<td>Correo electrónico</td><td><?php echo $email; ?></td>
					</tr>
					<tr>
						<td>Documento nacional de identidad</td><td><?php echo $dni; ?></td>
					</tr>
					<tr>
						<td>Dirección</td><td><?php echo $direccion; ?></td>
					</tr>
					<tr>
						<td>Nivel de privilegio</td><td><?php echo $privilegio; ?></td>
					</tr>
				</table>
			</div>
		</div>
		<?php } else { ?>
		<div class="row">
			<div class="col-md-8 offset-md-3">
				<h1>Usted no tiene los suficientes permisos para acceder a esta area</h1>
			</div>	
		</div>	
		<?php } ?>
	</div>	
</body>
   <script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>js/jquery331.min.js"></script>
	<script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>js/bootstrap.min.js"></script>
</html>