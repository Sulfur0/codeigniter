<!-- main-heading -->
<h2 class="main-title-w3layouts mb-2 text-center">Usuarios</h2>
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
	                <th scope="col">Usuario</th>
	                <th scope="col">Nombre</th>
	                <th scope="col">Ap. Paterno</th>
	                <th scope="col">Email</th>
	                <th scope="col">Fec. Creación</th>
	                <th scope="col">Fec. Actualización</th>
	                <th scope="col">Acciones</th>
	            </tr>
	        </thead>
	        <tbody>
	        	
	        </tbody>
	    </table>
	</div>
</section>

		