<!-- main-heading -->
<h2 class="main-title-w3layouts mb-2 text-center">Ventas</h2>
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
<!-- Tables content -->
<section class="tables-section">
    <!-- table1 -->
    <div class="outer-w3-agile mt-3">

		<table class="table">
	        <thead class="thead-dark">
	            <tr>
	                <th scope="col">operacion</th>
	                <th scope="col">fecha</th>
	                <th scope="col">id del cliente</th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php foreach ($operaciones as $operacion): ?>
	                <tr>
	                    <th scope="row"><?php echo $operacion['op_comentario'] ?></th>
	                    <td><?php echo $operacion['vent_fecha'] ?></td>
	                    <td><?php echo $operacion['vent_cliente'] ?></td>

	                    <td>
	                    	<div class="btn-group">
	                    		<a href="<?php echo base_url(); ?>index.php/Ventas/editventas/<?php echo $operacion['vent_codigo'];?>" class="btn btn-sm btn-warning">Editar</a>
	                    		<a href="<?php echo base_url(); ?>index.php/Ventas/delete/<?php echo $operacion['vent_codigo'];?>" class="btn btn-sm btn-danger">Eliminar</a>
	                    	</div>
	                    </td>
	                </tr>
	            <?php endforeach ?>
	        </tbody>
	    </table>
	</div>
</section>