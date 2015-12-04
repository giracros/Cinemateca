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

	<div class="form-group">
		<table class="table table-striped">
			<tr>
				<td colspan="6" align="center">Listado</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a
					href="../../Cinemateca/Vista/menu.php">Retornar</a></td>
			</tr>
			<tr>
				<td width="81">Codigo</td>
				<td width="102">Nombre</td>
				<td width="94">Estado</td>
				<td colspan="2">Accion</td>
			</tr>
    <?php foreach($procesoubicacion as $listarubicacion){?>
    <tr>
				<td>&nbsp;<?php echo $listarubicacion->codigoUbicacion;?></td>
				<td>&nbsp;<?php echo $listarubicacion->nombre;?></td>
				<td>&nbsp;<?php echo $listarubicacion->estado;?></td>

				<td width="63" align="center">&nbsp;<a
					href="../Control/procesos.php?opc=11&valor=<?php echo $listarubicacion->codigoUbicacion;?>">Modificar</a></td>
				<td width="52" align="center">&nbsp; <a
					href="../Control/procesos.php?opc=13&valor=<?php echo $listarubicacion->codigoUbicacion;?>">Eliminar</a></td>
			</tr>
    <?php }?>
  </table>
	</div>
</body>
</html>