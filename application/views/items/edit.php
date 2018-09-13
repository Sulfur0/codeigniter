<!-- main-heading -->
<h3 class="main-title-w3layouts mb-2 text-center">Formulario de Edición de Items</h3>
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
	        <label>Items</label>
	        <input type="text" class="form-control" placeholder="Ingresa items" readonly="" name="itm_nombre" value="<?php echo $item["itm_nombre"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>Cantidad</label>
	        <input type="text" class="form-control" placeholder="Ingresa cantidad" required="" name="itm_unidad" value="<?php echo $item["itm_unidad"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>Precio</label>
	        <input type="text" class="form-control" placeholder="Ingresa precio" required="" name="itm_precio_compra" value="<?php echo $item["itm_precio_compra"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>Creador</label>
	        <input type="text" class="form-control" placeholder="Ingresa" required="" name="itm_creado_por" value="<?php echo $item["itm_creado_por"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>Fecha de creación</label>
	        <input type="date" class="form-control" placeholder="fecha de creación" required="" name="itm_fecha_creacion" value="<?php echo $item["itm_fecha_creacion"]; ?>">
	    </div>
	    <div class="form-group">
	        <label>Fecha de actualización</label>
	        <input type="date" class="form-control" placeholder="fecha de actualización" required="" name="itm_fecha_actualizacion" value="<?php echo $item["itm_fecha_actualizacion"]; ?>">
	    </div>
	    <input type="hidden" name="itm_codigo" name="itm_codigo" value="<?php echo $item["itm_codigo"]; ?>">
	    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Actualizar</button>
	</form>
</div>

		