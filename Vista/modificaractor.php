<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Actor</title>
<style type="text/css">

#form1 table {
	font-family: Arial, Helvetica, sans-serif;
	float: center;
}
table {
	font-size: 12px;
	 float: center;
}
#form1 table {
	font-size: 16px;
	
}
#form1 table tr td {
	color: #363;
	font-size: 16px;
	font-style: normal;
	line-height: normal;
	font-weight: bolder;
	font-variant: normal;
	text-transform: capitalize;
	 float: center;
}
.boton
        {
          color: #FFFFFF;
          background-color: #5B5B5B;
          border: 1px solid;
          cursor: pointer;
		  
        }

        form
        {
          background-color: #F1F8F8;
          width: 60%;
          margin: 50px 0 0 50px;
         padding: 0 0 30px 40px;
    width: 500px;
    border: 2px solid;
    border-radius: 10px;
    box-shadow: 7px 7px 7px #619561;
    color: #15C8FF;
    float: center;
        }
    

</style>
</head>

<body>
<?php foreach($procesoactor as $listaractor){?>
<center>
<form id="form1" name="form1" method="post" action="../Control/procesos.php?opc=6">
  <table width="454" border="0">
    <tr>
      <td colspan="2" align="center"><h3>MODIFICAR ACTOR</h3></td>
    </tr>
    <tr>
      <td width="110">&nbsp;</td>
      <td width="345">&nbsp;</td>
    </tr>
    <tr>
       <td colspan="2" align="center"><a href="../../Odontologia/Vista/menu.php">Retornar</a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Cedula:</td>
      <td><input name="codigoActor" type="text" id="codigoActor" readonly="readonly" value="<?php echo $listaractor ->codigoActor;?>" size="30" maxlength="15" placeholder="Dig&iacute;te el codigo" required /></td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <td><input name="nombre" type="text" id="nombre" value="<?php echo $listaractor ->nombre;?>" size="30" maxlength="40" placeholder="Dig&iacute;te el Nombre del cargo" required /></td>
    </tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
         <button name="boton" type="submit" title="Guardar ACTOR"><img src="../../Odontologia/imagenes/Guardar.png" width="26"></button>   
        <button name="boton2" type="reset" title="Limpiar ACTOR"><img src="../../Odontologia/imagenes/Limpiar.png" width="26"></button> 
      </div></td>
    </tr>
  </table>
</form>
<?php } ?>
</center>
</body>
</html>