<!DOCTYPE html>
<html>
<head>
<title>Arquitectura</title>
<link data-require="bootstrap@*" data-semver="3.3.6" rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" />
<link data-require="bootstrap-css@*" data-semver="3.3.6"
	rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" />
<link data-require="bootstrap-glyphicons@*" data-semver="3.2.1"
	rel="stylesheet"
	href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/img/glyphicons-halflings.png" />
<script data-require="bootstrap@*" data-semver="3.3.6"
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>
<script data-require="jquery@>=1.9.1 <3" data-semver="2.1.4"
	src="https://code.jquery.com/jquery-2.1.4.js"></script>

</head>
<body>
	<form id="form1" name="form1" method="post"
		action="../../Cinemateca/Control/procesos.php?opc=20">
		<table class="table table-striped">
			<tr>
				<td colspan="2" align="center"><h3>CLASIFICACION</h3></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a
					href="../../Cinemateca/Vista/menu.php">Retornar</a></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Codigo:</td>
				<td><input name="codigoClasificacion" type="text"
					id="codigoClasificacion" maxlength="4" placeholder="Codigo"
					required /></td>
			</tr>
			<tr>
				<td>Nombre:</td>
				<td><input name="nombre" type="text" id="nombre" maxlength="50"
					placeholder="Nombre" required /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2"><div align="center">
						<button class="btn btn-primary" name="boton" type="submit"
							title="Guardar">Guardar</button>
						<button class="btn btn-danger" name="boton2" type="reset"
							title="Limpiar">Limpiar</button>
					</div></td>
			</tr>
		</table>
	</form>
</body>
</html>