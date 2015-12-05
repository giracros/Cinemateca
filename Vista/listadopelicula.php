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
	<h1 align="center">Listado Peliculas</h1>
	<h2 align="center">
		<a href="../vista/menu.php">
	
	</h2>
	<table width="598" height="111" border="0" align="center">
<?php foreach($procesopelicula as $listarpelicula)  {?>

<tr>
			<td><div align="center"><?php echo $listarpelicula->codigoPelicula;?></div></td>
			<td><div align="center"><?php echo $listarpelicula->nombre;?></div></td>
			<td><div align="center"><?php echo $listarpelicula->duracion;?></div></td>
			<td><div align="center"><?php echo $listarpelicula->fechaPublicacion;?></div></td>
			<td><div align="center"><?php echo $listarpelicula->nombreGenero;?></div></td>
			<td><a
				href="../ontrol/procesos.php?opc=66&amp;valor=<?php echo $listarpelicula -> codigoPelicula; ?>">Modificar</a></td>
			<td>&nbsp;<a
				href="../Control/procesos.php?opc=68&valor=<?php echo $listarpelicula -> codigoPelicula; ?>">Eliminar</a></td>
		</tr>
<?php }?>

</table>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</body>
</html>