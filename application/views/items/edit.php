<!-- main-heading -->
<h3 class="main-title-w3layouts mb-2 text-center">Formulario de Edición de items</h3>
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
	<form action="<?php echo base_url(); ?>index.php/Items/update/<?php echo $item["itm_codigo"]; ?>" method="post">
	    <div class="form-group">
	        <label>Nombre items</label>
	        <input type="text" class="form-control" placeholder="Nombre items" readonly="" name="itm_nombre" value="<?php echo $item["itm_nombre"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>Cantidad items</label>
	        <input type="text" class="form-control" placeholder="Cantidad items" required="" name="itm_unidad" value="<?php echo $item["itm_unidad"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>Contraseña Anterior</label>
	        <input type="password" class="form-control" placeholder="Ingresa Contraseña" required="" name="viejaclave">
	    </div>
	    <div class="form-group">
	        <label>Nueva Contraseña</label>
	        <input type="password" class="form-control" placeholder="Ingresa Contraseña" required="" name="clave">
	    </div>
	    <hr>
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
	    <input type="hidden" name="idPersona" name="idPersona" value="<?php echo $item["idPersona"]; ?>">
	    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Actualizar</button>
	</form>
</div>

		