<?php

// auxiliar
class auxiliar {
	var $cedula_auxiliar;
	var $nombre;
	var $telefono;
	var $estado;
	function auxiliar($_cedula_auxiliar, $_nombre, $_telefono, $_estado) {
		$this->cedula_auxiliar = $_cedula_auxiliar;
		$this->nombre = $_nombre;
		$this->telefono = $_telefono;
		$this->estado = $_estado;
	}
	public static function insertar($_cedula_auxiliar, $_nombre, $_telefono) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "select cedula_auxiliar from auxiliar where cedula_auxiliar = '$_cedula_auxiliar'" );
		$registro = mysqli_num_rows ( $resultado );
		if ($registro == 0) {
			include ("../Conexion/conexion.php");
			$resultado = mysqli_query ( $cnn, "insert into auxiliar(cedula_auxiliar,nombre,telefono,estado) values ('$_cedula_auxiliar','$_nombre','$_telefono','activo')" );
			echo "<script type='text/jscript'> alert('Registro almacenado'); history.back();history.go(-1);</script>";
		} else
			echo "<script type='text/javascript'> alert ('El registro ya existe'); history.back();</script>";
	}
	public static function listar($opc, $campo, $valor) {
		include ("../conexion/conexion.php");
		$mat = array ();
		if ($opc == 3)
			$consulta = "select cedula_auxiliar,nombre,telefono,estado from auxiliar where estado = 'activo'";
		if ($opc == 4) {
			if ($campo == 'cedula_auxiliar')
				$consulta = "select cedula_auxiliar,nombre,telefono,estado from auxiliar where $campo = '$valor' and estado = 'activo'";
			else
				$consulta = "select cedula_auxiliar,nombre,telefono,estado from auxiliar where $campo like '%$valor%' and estado = 'activo'";
		} else if ($opc == 5)
			$consulta = "select cedula_auxiliar, nombre,telefono, estado from auxiliar where cedula_auxiliar= '$valor'";
		$resultado = mysqli_query ( $cnn, $consulta );
		$registros = mysqli_num_rows ( $resultado );
		if ($registros == 0)
			echo "<script type 'text/javascript'>alert('No existen auxiliares');history.back();</script>";
		else {
			for($i = 0; $i < $registros; $i ++) {
				$datos = mysqli_fetch_array ( $resultado );
				array_push ( $mat, auxiliar::mostrar ( $datos ) );
			}
			return $mat;
		}
	}
	public static function mostrar($datos) {
		$_cedula_auxiliar = $datos ["cedula_auxiliar"];
		$_nombre = $datos ["nombre"];
		$_telefono = $datos ["telefono"];
		$_estado = $datos ["estado"];
		$auxiliar = new auxiliar ( $_cedula_auxiliar, $_nombre, $_telefono, $_estado );
		return $auxiliar;
	}
	public static function eliminar($valor) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "update auxiliar set estado='inactivo' where cedula_auxiliar='$valor'" );
		$registros = mysqli_affected_rows ( $cnn );
		if ($registros == 0)
			echo "<script type='text/javascript'> alert ('No se eliminó el registro'); history.go(-2);</script>";
		else
			echo "<script type = 'text/javascript'> alert ('Registro eliminado'); history.go(-2);</script>";
	}
	public static function modificar($_cedula_auxiliar, $_nombre, $_telefono) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "update auxiliar set nombre='$_nombre',telefono='$_telefono' where cedula_auxiliar = '$_cedula_auxiliar'" );
		$registros = mysqli_affected_rows ( $cnn );
		if ($registros == 0)
			echo "<script type= 'text/javascript'> alert ('No se modificó el registro'); history.back();history.go(-2);</script>";
		else
			echo "<script type='text/javascript'> alert ('Registro modificado'); history.back();history.go(-2);</script>";
	}
}

// cita
class cita {
	var $cod_cita;
	var $cod_agendacita;
	var $identificacion;
	var $nombre;
	var $fecha;
	var $hora;
	var $odontologo;
	function cita($_cod_cita, $_cod_agendacita, $_identificacion, $_nombre, $_fecha, $_hora, $_odontologo) {
		$this->cod_cita = $_cod_cita;
		$this->cod_agendacita = $_cod_agendacita;
		$this->identificacion = $_identificacion;
		$this->nombre = $_nombre;
		$this->fecha = $_fecha;
		$this->hora = $_hora;
		$this->odontologo = $_odontologo;
	}
	public static function insertar($_cod_cita, $_cod_agendacita, $_identificacion) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "select cod_cita, cod_agendacita, identificacion from cita where cod_cita = '$_cod_cita' and cod_agendacita = '$_cod_agendacita' and identificacion = '$_identificacion'" );
		$registro = mysqli_num_rows ( $resultado );
		if ($registro == 0) {
			include ("../Conexion/conexion.php");
			$resultado = mysqli_query ( $cnn, "insert into cita(cod_cita,cod_agendacita,identificacion,estado) values ('$_cod_cita','$_cod_agendacita','$_identificacion','activo')" );
			echo "<script type='text/jscript'> alert('Registro almacenado'); history.back();history.go(-1);</script>";
		} else
			echo "<script type='text/javascript'> alert ('El registro ya existe'); history.back();</script>";
	}
	public static function listar($opc, $campo, $valor) {
		include ("../Conexion/conexion.php");
		$mat = array ();
		if ($opc == 84)
			$consulta = "SELECT cita.cod_cita,cita.cod_agendacita,cita.identificacion,paciente.nombre AS paciente,agenda_cita.fecha,agenda_cita.hora,odontologo.nombre AS odontologo FROM cita INNER JOIN agenda_cita ON (cita.cod_agendacita = agenda_cita.cod_agendacita)   INNER JOIN paciente ON (cita.identificacion = paciente.identificacion)   INNER JOIN odontologo ON (agenda_cita.cedula_odontologo = odontologo.cedula_odontologo) where cita.estado='activo'";
		else if ($opc == 88) {
			if ($campo == 'cod_cita')
				$consulta = "SELECT cita.cod_cita,cita.cod_agendacita,cita.identificacion,paciente.nombre AS paciente,agenda_cita.fecha,agenda_cita.hora,odontologo.nombre AS odontologo FROM cita INNER JOIN agenda_cita ON (cita.cod_agendacita = agenda_cita.cod_agendacita)   INNER JOIN paciente ON (cita.identificacion = paciente.identificacion)   INNER JOIN odontologo ON (agenda_cita.cedula_odontologo = odontologo.cedula_odontologo) where cita.estado='activo' and cod_cita= '$valor'";
			else
				$consulta = "SELECT cita.cod_cita,cita.cod_agendacita,cita.identificacion,paciente.nombre AS paciente,agenda_cita.fecha,agenda_cita.hora,odontologo.nombre AS odontologo FROM cita INNER JOIN agenda_cita ON (cita.cod_agendacita = agenda_cita.cod_agendacita)   INNER JOIN paciente ON (cita.identificacion = paciente.identificacion)   INNER JOIN odontologo ON (agenda_cita.cedula_odontologo = odontologo.cedula_odontologo) where cita.estado='activo' and cita.identificacion='$valor'";
		}
		$resultado = mysqli_query ( $cnn, $consulta );
		$registros = mysqli_num_rows ( $resultado );
		if ($registros == 0)
			echo "<script type ='text/javascript'> alert ('No existen citas');history.back();</script>";
		else {
			for($i = 0; $i < $registros; $i ++) {
				$datos = mysqli_fetch_array ( $resultado );
				array_push ( $mat, cita::mostrar ( $datos ) );
			}
			return $mat;
		}
	}
	public static function mostrar($datos) {
		$_cod_cita = $datos ["cod_cita"];
		$_cod_agendacita = $datos ["cod_agendacita"];
		$_identificacion = $datos ["identificacion"];
		$_nombre = $datos ["paciente"];
		$_fecha = $datos ["fecha"];
		$_hora = $datos ["hora"];
		$_odontologo = $datos ["odontologo"];
		
		$cita = new cita ( $_cod_cita, $_cod_agendacita, $_identificacion, $_nombre, $_fecha, $_hora, $_odontologo );
		return $cita;
	}
	public static function eliminar($valor) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "update cita set estado='inactivo' where cod_cita='$valor'" );
		$registros = mysqli_affected_rows ( $cnn );
		if ($registros == 0)
			echo "<script type='text/javascript'> alert ('No se eliminó el registro'); history.go(-2);</script>";
		else
			echo "<script type = 'text/javascript'> alert ('Registro eliminado'); history.go(-2);</script>";
	}
}

?>
