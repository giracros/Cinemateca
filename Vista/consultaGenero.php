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
		action="../Control/procesos.php?opc=16">
		<table class="table table-striped">
			<tr>
				<td colspan="2" align="center">Consulta</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a
					href="../../Cinemateca/Vista/menu.php">Retornar</a></td>
			</tr>
			<tr>
				<td align="right"><label for="campo"></label> <select name="campo"
					id="campo">
						<option value="codigoGenero">Codigo</option>
						<option value="nombre">Nombre</option>
				</select></td>
				<td><label for="valor"></label> <input type="text" name="valor"
					id="valor" /></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input class="btn btn-primary"
					type="submit" name="consultar" id="consultar" value="Consultar" /></td>
			</tr>
		</table>
	</form>
</body>
</html>