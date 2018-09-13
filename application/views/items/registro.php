<!DOCTYPE html>
<html>
<head>
<title>Formulario de Registro de Items</title>
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
		<h1>Formulario de Registro de Items</h1>
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
			<form action="<?php echo base_url(); ?>index.php/Items/guardar" class='form animate-form' id='form1'  method="POST">			<p class="w3agileits">Registro de Items </p>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='itm_nombre'>Nombre</label> 
					<input class='form-control' id='itm_nombre' name='itm_nombre' placeholder='Nombre' type='text'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='itm_unidad'>Unidad</label> 
					<input class='form-control' id='itm_unidad' name='itm_unidad' placeholder='Unidad' type='text'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='itm_precio_compra'>Precio compra</label> 
					<input class='form-control' id='itm_precio_compra' name='itm_precio_compra' placeholder='Precio compra' type='text'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback wthree'>
					<label class='control-label sr-only' for='itm_creado_por'>creado por</label> 
					<input class='form-control' id='itm_creado_por' name='itm_creado_por' placeholder='creado por' type='text'><span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='itm_fecha_creacion'>Fecha de creación</label>Fecha de creación
					<input class='form-control' id='itm_fecha_creacion' name='itm_fecha_creacion' placeholder='Fecha de creación' type='date'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='itm_fecha_actualizacion'></label> Fecha de actualización 
					<input class='form-control' id='itm_fecha_actualizacion' name='itm_fecha_actualizacion' placeholder='Fecha de actualizacion' type='date'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='submit w3-agile'>
					<input class='btn btn-lg' type='submit' value='Registrar'>
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