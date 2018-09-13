<!-- main-heading -->
<h2 class="main-title-w3layouts mb-2 text-center">Items</h2>
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
	                <th scope="col">Codigo</th>
	                <th scope="col">Nombre</th>
	                <th scope="col">Unidad</th>
	                <th scope="col">Precio compra</th>
					<th scope="col">Creado por</th>
	                <th scope="col">Fec. Creación</th>
	                <th scope="col">Fec. Actualización</th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php foreach ($items as $items): ?>
	                <tr>
	                    <th scope="row"><?php echo $items['itm_creado_por'] ?></th>
	                    <td><?php echo $items['nomUsuario'] ?></td>
	                    <td><?php echo $items['itm_unidad'] ?></td>
						<td><?php echo $items['itm_precio_compra'] ?></td>
	                    <td><?php echo $items['itm_fecha_creacion'] ?></td>
	                    <td><?php echo $items['itm_fecha_actualizacion'] ?></td>
	                    <td>
	                    	<div class="btn-group">
	                    		<a href="<?php echo base_url(); ?>index.php/Items/edit/<?php echo $items['idUsuario'];?>" class="btn btn-sm btn-warning">Editar</a>
	                    		<a href="<?php echo base_url(); ?>index.php/Items/delete/<?php echo $items['idUsuario'];?>" class="btn btn-sm btn-danger">Eliminar</a>
	                    	</div>
	                    </td>
	                </tr>
	            <?php endforeach ?>
	        </tbody>
	    </table>
	</div>
</section>

		