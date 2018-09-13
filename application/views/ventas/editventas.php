<!-- main-heading -->
<h3 class="main-title-w3layouts mb-2 text-center">Formulario de Edicion de ventas</h3>
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
	<form action="<?php echo base_url(); ?>index.php/Ventas/updateVentas/<?php echo $ventas["vent_codigo"]; ?>" method="post">
	    

	    <div class="form-group">
	        <label>id cliente</label>
	        
	        <select class='form-control' id="cli_id" name="cli_id" required="required">
	            <?php foreach($clientes as $cliente){ ?>
	               	<?php if($cliente["cli_id"] == $ventas["cli_id"]){?>               	
		            	<option selected="selected" value="<?php echo $cliente["cli_id"]; ?>"><?php echo $cliente["cli_id"]; ?></option>
		            <?php } else { ?>
						<option value="<?php echo $cliente["cli_id"]; ?>"><?php echo $cliente["cli_id"]; ?></option>
					<?php } ?>
	            <?php } ?>	   
            </select>
	    </div>
	    <div class="form-group">
	        <label>comentario de operacion</label>
	        <input type="text" class="form-control" placeholder="Ingresa el comentario" required="" name="op_comentario" value="<?php echo $ventas["op_comentario"]; ?>">
	    </div>
	    <input type="hidden" name="vent_codigo" name="vent_codigo" value="<?php echo $ventas["vent_codigo"]; ?>">
	    <input type="hidden" name="op_id" name="op_id" value="<?php echo $ventas["op_id"]; ?>">
	    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Actualizar Venta</button>
	</form>
</div>