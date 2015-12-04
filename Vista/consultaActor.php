<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="../control/procesos.php?opc=4">
  <table width="500" border="1" align="center">
    <tr>
      <td colspan="2" align="center">Consulta de Actores</td>
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
      <td width="247" align="right">Campo</td>
      <td width="237" align="left">Valor</td>
    </tr>
    <tr>
      <td align="right"><label for="campo"></label>
        <select name="campo" id="campo">
          <option value="codigoActor">Cedula</option>
          <option value="nombre">Nombre</option>
      </select></td>
      <td><label for="valor"></label>
      <input type="text" name="valor" id="valor" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="consultar" id="consultar" value="Consultar" /></td>
    </tr>
  </table>
</form>
</body>
</html>