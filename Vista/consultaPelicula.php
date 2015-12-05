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
		action="../../Cinemateca/Control/procesos.php?opc=67">
		<table class="table table-striped">
			<tr align="center" valign="middle">
				<td colspan="2" align="center">Consulta Pelicula</td>
			</tr>
			<tr align="center" valign="middle">
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td colspan="2" align="center"><a
					href="../../Cinemateca/Vista/menu.php">Retornar</a></td>
			</tr>
			<tr align="center" valign="middle">
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>
				<td width="99" align="center" valign="middle">Campo</td>
				<td width="224" align="center">Valor</td>
			</tr>
			<tr>
				<td align="center" valign="middle"><select name="campo" id="campo">
						<option value="codigoPelicula" selected="selected">Codigo</option>
						<option value="nombre">Nombre</option>
						<option value="duracion">Duracion</option>
						<option value="fechaPublicacion">FechaPublicacion</option>
				</select></td>
				<td align="center"><input name="valor" type="text" id="valor"
					size="20" /></td>
			</tr>
			<tr align="center" valign="middle">
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td colspan="2" align="center"><input type="submit" name="button"
					id="button" value="Consultar" /></td>
			</tr>
		</table>
	</form>

</body>
</html>