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
	<form action="<?php echo base_url(); ?>index.php/Cliente/delete/<?php echo $clientes["cli_id"]; ?>" method="post">
	    
	    
	    
	    <div class="form-group">
	        <p>¿Desea eliminar el cliente <?php echo $clientes["nombre"]; ?> <?php echo $clientes["appaterno"]; ?>?</p>
	    </div>
	    <button type="submit" class="btn btn-danger error-w3l-btn mt-sm-5 mt-3 px-4">Eliminar Cliente</button>
	</form>
</div>
