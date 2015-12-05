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
		action="../control/procesos.php?opc=27">
		<table class="table table-striped">
			<tr>
				<td colspan="2" align="center"><h3>Peli-Actor</h3></td>
			</tr>
			<tr>
				<td width="110">&nbsp;</td>
				<td width="345">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a href="../Vista/menu.php">Retornar</a></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Pelicula:</td>
				<td><select name="codigoPelicula" id="codigoPelicula">
      <?php foreach ($procesopelicula as $listarpelicula){?>
        <option value="<?php echo $listarpelicula-> codigoPelicula;?>"><?php echo $listarpelicula-> nombre;?>
          <?php }?>
          </option>
				</select></td>
			</tr>
			<tr>
				<td>Actor:</td>
				<td><select name="codigoActor" id="codigoActor">
        <?php foreach ($procesoactor as $listaractor){?>
        <option value="<?php echo $listaractor-> codigoActor;?>"><?php echo $listaractor-> nombre;?>
          <?php }?>
          </option>
				</select></td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
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