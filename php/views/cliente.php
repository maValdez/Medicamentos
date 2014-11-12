<?php 
	include '../controllers/listusers.php';
	$list_users = new listUsersController();
	$users = $list_users->listUsers();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Aplicacion Cliente</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href='http:////fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic' rel='stylesheet' type='text/css'>
	<!-- Theme Lumen -->
	<link rel="stylesheet" href="../../public/css/vendor/css/bootstrap.min.css" />
</head>
<body>
	<div class="page-header">
		<h1>Bienvenido</h1>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Por favor, elija su nombre de usuario:</h3>
		</div>
		<div class="panel-body">
			<div class="list-group">
				<?php
				if($users){
					foreach ($users as $i => $tab){
						echo '<a href="#" class="list-group-item">'.$tab[0].'<span class="glyphicon glyphicon-chevron-right badge"> </span></a>';
					}
				}
				?>
			</div>
		</div>
	</div>
	<form action="cliente2.php" method="POST">
		<input type="text" name="username" style="display:none;" id="username" />
		<input type="submit" class="col-xs-4 col-xs-offset-4 btn btn-primary" value="Entrar" />
	</form>
	<script src="../../public/js/vendor/jquery-2.1.0.min.js"></script>
	<script src="../../public/js/main.js"></script>
</body>
</html>