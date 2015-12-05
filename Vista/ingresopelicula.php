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
		action="../Control/procesos.php?opc=63">

		<table class="table table-striped">
			<tr>
				<td colspan="2" align="center">Pelicula</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center">Retornar</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="291">Codigo:</td>
				<td width="293"><label for="codigoPelicula"></label> <input
					name="codigoPelicula" type="text" id="codigoPelicula" maxlength="4" /></td>
			</tr>
			<tr>
				<td>Nombre:</td>
				<td><label for="nombre"></label> <input name="nombre" type="text"
					id="nombre" size="50" maxlength="50" /></td>
			</tr>
			<tr>


			</tr>
			<tr>
				<td>Duracion:</td>
				<td><label for="duracion"></label> <input name="duracion"
					type="text" id="duracion" size="15" maxlength="10" /></td>
			</tr>
			<tr>
				<td>Fecha</td>
				<td><label for="fechaPublicacion"></label> <input
					name="fechaPublicacion" type="date" id="fechaPublicacion" /></td>
			</tr>
			<tr>

			</tr>
			<tr>
				<td>Ubicacion:</td>
				<td><label for="codigoUbicacion"> <select name="codigoUbicacion"
						id="codigoUbicacion">
      	<?php foreach($procesoubicacion as $listarubicacion){?>
        <option value="<?php echo $listarubicacion->codigoUbicacion;?>"
								selected="selected"><?php echo $listarubicacion->nombre;?></option>
        <?php }?>	      
      </select>
				</label></td>
			</tr>
			<tr>

			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="Guardar"
					id="Guardar" value="Guardar" /> <input type="reset" name="limpiar"
					id="limpiar" value="Limpiar" /></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
		</table>
	</form>

</body>
</html>