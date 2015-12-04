<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ACTOR</title>
</head>
<body>
	<center>
		<form id="form1" name="form1" method="post" action="../../Cinemateca/Control/procesos.php?opc=2">
			<table width="454" border="0">
				<tr>
					<td colspan="2" align="center"><h3>ACTOR</h3></td>
				</tr>
				<tr>
					<td width="110">&nbsp;</td>
					<td width="345">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><a
						href="../../Cinematica/Vista/menu.php">Retornar</a></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Cedula:</td>
					<td><input name="codigoActor" type="text" id="codigoActor"
						size="30" maxlength="4" placeholder="codigoActor" required /></td>
				</tr>
				<tr>
					<td>Nombre:</td>
					<td><input name="nombre" type="text" id="nombre" size="30"
						maxlength="40" placeholder="Digite el Nombre del Actor" required /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2"><div align="center">
							<button name="boton" type="submit" title="Guardar">Guardar</button>
							<button name="boton2" type="reset" title="Limpiar">Limpiar</button>
						</div></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>