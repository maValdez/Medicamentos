<!DOCTYPE html>
<html lang="es">
<head>
	<style>
		.panel{
			margin: 0 1em;
		}
	</style>
	<meta charset="UTF-8">
	<title>Aplicacion Vendedor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href='http:////fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../../public/css/vendor/css/bootstrap.min.css" />
</head>
<body>
	<div class="page-header">
		<h1>Bienvenido Vendedor</h1>
	</div>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Iniciar Sesión</h3>
		</div>
		<div class="panel-body">
			<form class="form-horizontal">
				<fieldset>
					<div class="form-group">
						<div class="col-xs-10 col-xs-offset-1 has-error">
							<input type="text" class="form-control" placeholder="Nombre de Usuario">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-10 col-xs-offset-1">
							<input type="password" class="form-control" placeholder="Contraseña">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 col-xs-offset-4">
							<input type="submit" value="entrar" class="btn btn-success" />
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	<script src="/js/vendor/jquery-2.1.0.min.js"></script>
</body>
</html>