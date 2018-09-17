<!-- main-heading -->
<h3 class="main-title-w3layouts mb-2 text-center">Formulario de Registro de Cliente</h3>
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
	<form action="<?php echo base_url(); ?>index.php/Cliente/store" method="post">
	    <div class="form-group">
	        <label>Nombre</label> 
			<input class='form-control' id='nombre' name='nombre' placeholder='Ingresa Nombre' type='text'>
	    </div>
	    <div class="form-group">
	        <label>Apellido Paterno</label> 
			<input class='form-control' id='appaterno' name='appaterno' placeholder='Ingresa Apellido Paterno' type='text'>
	    </div>
	    <div class="form-group">
	        <label>Apellido Materno</label> 
			<input class='form-control' id='apmaterno' name='apmaterno' placeholder='Ingresa Apellido Materno' type='text'>
	    </div>
	    <div class="form-group">
	        <label>Documento nacional de identidad</label>
	        <input type="text" class="form-control" placeholder="Ingresa Documento Nacional de Identidad" required="" name="dni" value="">
	    </div>
	    <div class="form-group">
	        <label>Dirección</label> 
			<input class='form-control' id='direccion' name='direccion' placeholder='Ingresa Dirección' type='text'>
	    </div>	
	    <div class="form-group">
	    	<label>Correo Electrónico</label> 
			<input class='form-control' id='email' name='email' placeholder='Ingrese Correo Electrónico' type='text'><span class='glyphicon glyphicon-ok form-control-feedback'></span>
	    </div>  	    
	    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Registrar Cliente</button>
	</form>
</div>

		