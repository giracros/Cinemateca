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


<?php foreach($procesopelicula as $listarpelicula){ ?>
<form id="form1" name="form1" method="post"
		action="../Control/procesos.php?opc=65">
		<table width="500" border="0" align="center">
			<tr>
				<td colspan="2"><div align="center">MODIFICAR PELICULA</div></td>
			</tr>
			<tr>
				<td colspan="2"><div align="center"></div></td>
			</tr>
			<tr>
				<td colspan="2"><div align="center">
						<a href="../vista/menu.php">Retornar</a>
					</div></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td>CÓDIGO</td>
				<td><input name="codigoPelicula" type="text" id="codigoPelicula"
					value="<?php echo $listarpelicula->codigoPelicula; ?>" size="20"
					maxlength="15" /></td>
			</tr>
			<tr>
				<td>NOMBRE</td>
				<td><input name="nombre" type="text" id="nombre"
					value="<?php echo $listarpelicula -> nombre; ?>" size="50."
					maxlength="50" /></td>
			</tr>
			<tr>
				<td>DURACION</td>
				<td><input name="duracion" type="text" id="duracion"
					value="<?php echo $listarpelicula -> duracion; ?>" size="50."
					maxlength="50" /></td>
			</tr>
			<tr>
				<td>FECHAPUBLICACION</td>
				<td><input name="fechaPublicacion" type="text" id="fechaPublicacion"
					value="<?php echo $listarpelicula -> fechaPublicacion; ?>" size="50."
					maxlength="50" /></td>
			</tr>
			<tr>
				<td>UBICACION</td>
				<td><select name="codigoUbicacion" id="codigoUbicacion">
      
      <?php
	$aux = $listarpelicula->codigoUbicacion;
	foreach ( $procesoubicacion as $listarubicacion ) {
		if ($aux == $listarespecialidad->codigoUbicacion) {
			?>
				  <option value="<?php echo $listarubicacion -> codigoUbicacion;?>"
							selected><?php echo $listarubicacion -> nombre;?>
			  <?php
		} else {
			?>
						<option
							value="<?php echo $listarubicacion -> codigoUbicacion;?>"><?php echo $listarubicacion -> nombre;?>
			  <?php
		}
	}
	?>
				</select></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2"><div align="center">
						<input type="submit" name="button" id="button" value="GUARDAR" />
						<input type="reset" name="button2" id="button2" value="LIMPIAR" />
					</div></td>
			</tr>
		</table>
	</form>
<?php } ?>
</body>
</html>