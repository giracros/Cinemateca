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
<?php foreach($procesogenero as $listargenero){?>

		<form id="form1" name="form1" method="post"
		action="../Control/procesos.php?opc=18">
		<table width="454" border="0">
			<tr>
				<td colspan="2" align="center"><h3>MODIFICAR</h3></td>
			</tr>
			<tr>
				<td width="110">&nbsp;</td>
				<td width="345">&nbsp;</td>
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
				<td><input name="codigoGenero" type="text" id="codigoGenero"
					readonly="readonly"
					value="<?php echo $listargenero ->codigoGenero;?>" maxlength="4"
					placeholder="Codigo" required /></td>
			</tr>
			<tr>
				<td>Nombre:</td>
				<td><input name="nombre" type="text" id="nombre"
					value="<?php echo $listargenero ->nombre;?>" maxlength="50"
					placeholder="Nombre" required /></td>
			</tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2"><div align="center">
						<button class="btn btn-primary" name="boton" type="submit">Guardar</button>
						<button class="btn btn-danger" name="boton2" type="reset">Limpiar</button>
					</div></td>
			</tr>
		</table>
	</form>
<?php } ?>
</body>
</html>