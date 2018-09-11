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
	<form action="<?php echo base_url(); ?>index.php/Ventas/updateVentas/<?php echo $item["vent_codigo"]; ?>" method="post">
	    <div class="form-group">
	        <label>id de Operacion</label>
	        <input type="text" class="form-control" placeholder="Ingresa el id la operacion" readonly="" name="op_id" value="<?php echo $item["op_id"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>id del cliente</label>
	        <select type="cli_id" class="form-control" placeholder="elige el id del cliente" required="" name="cli_id" value="<?php echo $item["vent_cliente"]; ?>">
	        </select>

	    </div>
	    <div class="form-group">
	        <label>id ciente prueba 2</label>
	        <select class='form-control' id="cli_id" name="cli_id" required="required">
	                <?php foreach($cliente as $client){?> 	
		            <option value="<?php echo $item["vent_cliente"]; ?>"></option>
	                <?php } ?>	   
                    </select>
	    </div>
	    <div class="form-group">
	        <label>comentario de operacion</label>
	        <input type="text" class="form-control" placeholder="Ingresa el comentario" required="" name="op_comentario" value="<?php echo $item["op_comentario"]; ?>">
	    </div>
	    <input type="hidden" name="vent_codigo" name="vent_codigo" value="<?php echo $item["vent_codigo"]; ?>">
	    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Actualizar Venta</button>
	</form>
</div>