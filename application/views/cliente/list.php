<!-- main-heading -->
<h2 class="main-title-w3layouts mb-2 text-center">Clientes</h2>
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
	                <th scope="col">DNI</th>
	                <th scope="col">Nombre</th>
	                <th scope="col">Ap. Paterno</th>
	                <th scope="col">Email</th>
	                <th scope="col">Acciones</th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php foreach ($clientes as $cliente): ?>
	                <tr>
	                    <th scope="row"><?php echo $cliente['dni'] ?></th>
	                    <td><?php echo $cliente['nombre'] ?></td>
	                    <td><?php echo $cliente['appaterno'] ?></td>
						<td><?php echo $cliente['email'] ?></td>
	                    <td>
	                    	<div class="btn-group">
	                    		<a href="<?php echo base_url(); ?>index.php/Cliente/edit/<?php echo $cliente['cli_id'];?>" class="btn btn-sm btn-warning">Editar</a>
	                    		<a href="<?php echo base_url(); ?>index.php/Cliente/confirm_delete/<?php echo $cliente['cli_id'];?>" class="btn btn-sm btn-danger">Eliminar</a>
	                    	</div>
	                    </td>
	                </tr>
	            <?php endforeach ?>
	        </tbody>
	    </table>
	</div>
</section>

		