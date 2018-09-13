<!-- main-heading -->
<h3 class="main-title-w3layouts mb-2 text-center">Formulario de Edición de Cliente</h3>
<!--// main-heading -->
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
<div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
	<form action="<?php echo base_url(); ?>index.php/Cliente/update/<?php echo $item["cli_id"]; ?>" method="post">
	    
	    
	    
	    <div class="form-group">
	        <label>Nombre</label>
	        <input type="text" class="form-control" placeholder="Ingresa Nombre" required="" name="nombre" value="<?php echo $item["nombre"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>Apellido Paterno</label>
	        <input type="text" class="form-control" placeholder="Ingresa Apellido Paterno" required="" name="appaterno" value="<?php echo $item["appaterno"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>Apellido Materno</label>
	        <input type="text" class="form-control" placeholder="Ingresa Apellido Materno" required="" name="apmaterno" value="<?php echo $item["apmaterno"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>Documento nacional de identidad</label>
	        <input type="text" class="form-control" placeholder="Ingresa Documento Nacional de Identidad" required="" name="dni" value="<?php echo $item["dni"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>Dirección</label>
	        <input type="text" class="form-control" placeholder="Ingresa Dirección" required="" name="direccion" value="<?php echo $item["direccion"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>Correo Electrónico</label>
	        <input type="email" class="form-control" placeholder="Ingresa Correo Electrónico" required="" name="email" value="<?php echo $item["email"]; ?>">
	    </div>
	    <input type="hidden" name="idPersona" value="<?php echo $item["idPersona"]; ?>">
	    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Actualizar Cliente</button>
	</form>
</div>

		