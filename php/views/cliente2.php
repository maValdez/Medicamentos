<?php
	include '../controllers/login.php';
	include '../controllers/listproducts.php';
	$client = $_POST['username'];
	$logger = new loginController();
	$logger->loginUser($client);
	$objProducts = new  listProductsController();
	$dates_tabpanel=$objProducts->listProducts(1);
	$dates_tabpanel2=$objProducts->listProducts(2);
	$dates_tabpanel3=$objProducts->listProducts(3);
	$dates_tabpanel4=$objProducts->listProducts(4);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Aplicacion Cliente</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href='http:////fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../../public/css/vendor/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../../public/css/vendor/animate.css" />
	<link rel="stylesheet" href="../../public/css/main.css" />
</head>
<body>
	<div class="page-header">
		<?php 
			#include '../controllers/login.php';
			$c2 = $logger->get_var_sessions();
			echo '<h1>Bienvenido <strong>'.$c2.'</strong></h1>';
		 ?>
		
	</div>
	<div class="alert alert-danger close-alert">
		<strong>Ups!</strong> Por favor, selecciona algun medicamento que quieras comprar.
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Lista de Medicamentos</h3>
		</div>
		<div class="panel-body">
			<ul class="nav nav-tabs" role="tablist" id="myTab">
				<li role="presentation" class="active"><a href="#t1" role="tab" data-toggle="tab">Tipo 1</a></li>
				<li role="presentation"><a href="#t2" role="tab" data-toggle="tab">Tipo 2</a></li>
				<li role="presentation"><a href="#t3" role="tab" data-toggle="tab">Tipo 3</a></li>
				<li role="presentation"><a href="#t4" role="tab" data-toggle="tab">Tipo 4</a></li>
			</ul>
			<form action="" method="POST" class="tab-content">
				
				<div role="tabpanel" class="tab-pane fade in active" id="t1">
					<?php 
						if($dates_tabpanel)
						{
							foreach ($dates_tabpanel as $i => $values) {
								echo '<div class="checkbox">
						<label><input name="medicamentos" class="radio" type="radio" value="Medicamento #1">'.$values[0].'</label> 
					</div>';
							}
						}
						else{
							echo '<div class="checkbox">
						<label><strong>no hay medicamentos disponibles...!</strong></label>
					</div>';
						}
					 ?>
				</div>
				
				<div role="tabpanel" class="tab-pane fade" id="t2">
					<?php 
						if($dates_tabpanel2)
						{
							foreach ($dates_tabpanel2 as $i => $values) {
								echo '<div class="checkbox">
						<label><input name="medicamentos" class="radio" type="radio" value="Medicamento #1">'.$values[0].'</label> 
					</div>';
							}
						}
						else{
							echo '<div class="checkbox">
						<label><strong>no hay medicamentos disponibles...!</strong></label>
					</div>';
						}
					 ?>
				</div>

				<div role="tabpanel" class="tab-pane fade" id="t3">
					<?php 
						if($dates_tabpanel3)
						{
							foreach ($dates_tabpanel3 as $i => $values) {
								echo '<div class="checkbox">
						<label><input name="medicamentos" class="check" type="checkbox" value="Medicamento #1">'.$values[0].'</label> 
					</div>';
							}
						}
						else{
							echo '<div class="checkbox">
						<label><strong>no hay medicamentos disponibles...!</strong></label>
					</div>';
						}
					 ?>
				</div>
				
				<div role="tabpanel" class="tab-pane fade" id="t4">
					<?php 
						if($dates_tabpanel4)
						{
							foreach ($dates_tabpanel4 as $i => $values) {
								echo '<div class="checkbox">
						<label><input name="medicamentos" class="check" type="checkbox" value="Medicamento #1">'.$values[0].'</label> 
					</div>';
							}
						}
						else{
							echo '<div class="checkbox">
						<label><strong>no hay medicamentos disponibles...!</strong></label>
					</div>';
						}
					 ?>
				</div>
				<input type="submit" value="Comprar" class="col-xs-4 col-xs-offset-4 btn btn-primary" />
			</form>

		</div>
	</div>
	<script src="../../public/js/vendor/jquery-2.1.0.min.js"></script>
	<script src="../../public/css/vendor/js/bootstrap.min.js"></script>
	<script src="../../public/js/main.js"></script>
</body>
</html>