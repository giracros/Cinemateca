<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Actor</title>

</head>

<body>
	<div align="center">
		<table width="500" border="1">
			<tr>
				<td colspan="6" align="center">Listado de Actores</td>
			</tr>
			<tr>
				<td colspan="6">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="6" align="center">Retornar</td>
			</tr>
			<tr>
				<td colspan="6">&nbsp;</td>
			</tr>
			<tr>
				<td width="81">Codigo Actor</td>
				<td width="102">Nombre</td>
				<td width="94">Estado</td>
				<td colspan="2">Acción</td>
			</tr>
    <?php foreach($procesoactor as $listaractor){?>
    <tr>
				<td>&nbsp;<?php echo $listaractor->codigoActor;?></td>
				<td>&nbsp;<?php echo $listaractor->nombre;?></td>
				<td>&nbsp;<?php echo $listaractor->estado;?></td>
				<td width="63" align="center">&nbsp;<a
					href="../Control/procesos.php?opc=5&valor=<?php echo $listaractor->codigoActor;?>">
					<img src="../Imagenes/Modificar.png" title="Modificar" width="26"></a></td>
				<td width="52" align="center">&nbsp; <a
					href="../control/procesos.php?opc=7;&valor=<?php echo $listaractor-> codigoActor;?>">
						Eliminar </a></td>
			</tr>
    <?php }?>
  </table>
	</div>
</body>
</html>