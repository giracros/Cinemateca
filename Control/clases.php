<?php

/*
 * Clase Actor
 */
class actor {
	var $codigoActor;
	var $nombre;
	var $estado;
	function actor($_codigoActor, $_nombre, $_estado) {
		$this->codigoActor = $_codigoActor;
		$this->nombre = $_nombre;
		$this->estado = $_estado;
	}
	
	/*
	 * Metodo Insertar
	 */
	public static function insertar($_codigoActor, $_nombre) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "select codigoActor from actor where codigoActor = '$_codigoActor'" );
		$registro = mysqli_num_rows ( $resultado );
		try {
			if ($registro == 0) {
				include ("../Conexion/conexion.php");
				$resultado = mysqli_query ( $cnn, "insert into actor(codigoActor,nombre,estado) values ('$_codigoActor','$_nombre','a')" );
				echo "<script type='text/jscript'> alert('Registro almacenado'); history.back();history.go(-1);</script>";
			} else
				echo "<script type='text/javascript'> alert ('El registro ya existe'); history.back();</script>";
		} catch ( Exception $e ) {
			echo "<script type='text/javascript'> alert ('Error'); history.back();</script>";
		}
	}
	
	/*
	 * Metodo Listar
	 */
	public static function listar($opc, $campo, $valor) {
		include ("../Conexion/conexion.php");
		$mat = array ();
		if ($opc == 3)
			$consulta = "select codigoActor,nombre,estado from actor where estado = 'a'";
		if ($opc == 4) {
			if ($campo == 'codigoActor')
				$consulta = "select codigoActor,nombre,estado from actor where $campo = '$valor' and estado = 'a'";
			else
				$consulta = "select codigoActor,nombre,estado from actor where $campo like '%$valor%' and estado = 'a'";
		} else if ($opc == 5)
			$consulta = "select codigoActor, nombre, estado from actor where codigoActor= '$valor'";
		$resultado = mysqli_query ( $cnn, $consulta );
		$registros = mysqli_num_rows ( $resultado );
		if ($registros == 0)
			echo "<script type 'text/javascript'>alert('No existen actores');history.back();</script>";
		else {
			for($i = 0; $i < $registros; $i ++) {
				$datos = mysqli_fetch_array ( $resultado );
				array_push ( $mat, actor::mostrar ( $datos ) );
			}
			return $mat;
		}
	}
	
	/*
	 * Metodo Mostrar
	 */
	public static function mostrar($datos) {
		$_codigoActor = $datos ["codigoActor"];
		$_nombre = $datos ["nombre"];
		$_estado = $datos ["estado"];
		$actor = new actor ( $_codigoActor, $_nombre, $_estado );
		return $actor;
	}
	
	/*
	 * Metodo Eliminar
	 */
	public static function eliminar($valor) {
		include ("../Conexion/conexion.php");
		
		$resultado = mysqli_query ( $cnn, "update actor set estado='i' where codigoActor='$valor'" );
		$registros = mysqli_affected_rows ( $cnn );
		if ($registros == 0)
			echo "<script type='text/javascript'> alert ('No se eliminó el registro'); history.go(-2);</script>";
		else
			echo "<script type = 'text/javascript'> alert ('Registro eliminado'); history.go(-2);</script>";
	}
	
	/*
	 * Metodo Modificar
	 */
	public static function modificar($_codigoActor, $_nombre) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "update actor set nombre='$_nombre' where codigoActor = '$_codigoActor'" );
		$registros = mysqli_affected_rows ( $cnn );
		if ($registros == 0)
			echo "<script type= 'text/javascript'> alert ('No se modificó el registro'); history.back();history.go(-2);</script>";
		else
			echo "<script type='text/javascript'> alert ('Registro modificado'); history.back();history.go(-2);</script>";
	}
}

/*
 * Clase genero
 */
class genero {
	var $codigoGenero;
	var $nombre;
	var $estado;
	function genero($_codigoGenero, $_nombre, $_estado) {
		$this->codigoGenero = $_codigoGenero;
		$this->nombre = $_nombre;
		$this->estado = $_estado;
	}
	
	/*
	 * Metodo Insertar
	 */
	public static function insertar($_codigoGenero, $_nombre) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "select codigoGenero from genero where codigoGenero = '$_codigoGenero'" );
		$registro = mysqli_num_rows ( $resultado );
		try {
			if ($registro == 0) {
				include ("../Conexion/conexion.php");
				$resultado = mysqli_query ( $cnn, "insert into genero(codigoGenero,nombre,estado) values ('$_codigoGenero','$_nombre','a')" );
				echo "<script type='text/jscript'> alert('Registro almacenado'); history.back();history.go(-1);</script>";
			} else
				echo "<script type='text/javascript'> alert ('El registro ya existe'); history.back();</script>";
		} catch ( Exception $e ) {
			echo "<script type='text/javascript'> alert ('Error'); history.back();</script>";
		}
	}
	
	/*
	 * Metodo Listar
	 */
	public static function listar($opc, $campo, $valor) {
		include ("../Conexion/conexion.php");
		$mat = array ();
		if ($opc == 3)
			$consulta = "select codigoGenero,nombre,estado from genero where estado = 'a'";
		if ($opc == 4) {
			if ($campo == 'codigoGenero')
				$consulta = "select codigoGenero,nombre,estado from genero where $campo = '$valor' and estado = 'a'";
			else
				$consulta = "select codigoGenero,nombre,estado from genero where $campo like '%$valor%' and estado = 'a'";
		} else if ($opc == 5)
			$consulta = "select codigoGenero, nombre, estado from genero where codigoGenero= '$valor'";
		$resultado = mysqli_query ( $cnn, $consulta );
		$registros = mysqli_num_rows ( $resultado );
		if ($registros == 0)
			echo "<script type 'text/javascript'>alert('No existen generoes');history.back();</script>";
		else {
			for($i = 0; $i < $registros; $i ++) {
				$datos = mysqli_fetch_array ( $resultado );
				array_push ( $mat, genero::mostrar ( $datos ) );
			}
			return $mat;
		}
	}
	
	/*
	 * Metodo Mostrar
	 */
	public static function mostrar($datos) {
		$_codigoGenero = $datos ["codigoGenero"];
		$_nombre = $datos ["nombre"];
		$_estado = $datos ["estado"];
		$genero = new genero ( $_codigoGenero, $_nombre, $_estado );
		return $genero;
	}
	
	/*
	 * Metodo Eliminar
	 */
	public static function eliminar($valor) {
		include ("../Conexion/conexion.php");
		
		$resultado = mysqli_query ( $cnn, "update genero set estado='i' where codigoGenero='$valor'" );
		$registros = mysqli_affected_rows ( $cnn );
		if ($registros == 0)
			echo "<script type='text/javascript'> alert ('No se eliminó el registro'); history.go(-2);</script>";
		else
			echo "<script type = 'text/javascript'> alert ('Registro eliminado'); history.go(-2);</script>";
	}
	
	/*
	 * Metodo Modificar
	 */
	public static function modificar($_codigoGenero, $_nombre) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "update genero set nombre='$_nombre' where codigoGenero = '$_codigoGenero'" );
		$registros = mysqli_affected_rows ( $cnn );
		if ($registros == 0)
			echo "<script type= 'text/javascript'> alert ('No se modificó el registro'); history.back();history.go(-2);</script>";
		else
			echo "<script type='text/javascript'> alert ('Registro modificado'); history.back();history.go(-2);</script>";
	}
}

/*
 * Clase clasificacion
 */
class clasificacion {
	var $codigoClasificacion;
	var $nombre;
	var $estado;
	function clasificacion($_codigoClasificacion, $_nombre, $_estado) {
		$this->codigoClasificacion = $_codigoClasificacion;
		$this->nombre = $_nombre;
		$this->estado = $_estado;
	}
	
	/*
	 * Metodo Insertar
	 */
	public static function insertar($_codigoClasificacion, $_nombre) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "select codigoClasificacion from clasificacion where codigoClasificacion = '$_codigoClasificacion'" );
		$registro = mysqli_num_rows ( $resultado );
		try {
			if ($registro == 0) {
				include ("../Conexion/conexion.php");
				$resultado = mysqli_query ( $cnn, "insert into clasificacion(codigoClasificacion,nombre,estado) values ('$_codigoClasificacion','$_nombre','a')" );
				echo "<script type='text/jscript'> alert('Registro almacenado'); history.back();history.go(-1);</script>";
			} else
				echo "<script type='text/javascript'> alert ('El registro ya existe'); history.back();</script>";
		} catch ( Exception $e ) {
			echo "<script type='text/javascript'> alert ('Error'); history.back();</script>";
		}
	}
	
	/*
	 * Metodo Listar
	 */
	public static function listar($opc, $campo, $valor) {
		include ("../Conexion/conexion.php");
		$mat = array ();
		if ($opc == 3)
			$consulta = "select codigoClasificacion,nombre,estado from clasificacion where estado = 'a'";
		if ($opc == 4) {
			if ($campo == 'codigoClasificacion')
				$consulta = "select codigoClasificacion,nombre,estado from clasificacion where $campo = '$valor' and estado = 'a'";
			else
				$consulta = "select codigoClasificacion,nombre,estado from clasificacion where $campo like '%$valor%' and estado = 'a'";
		} else if ($opc == 5)
			$consulta = "select codigoClasificacion, nombre, estado from clasificacion where codigoClasificacion= '$valor'";
		$resultado = mysqli_query ( $cnn, $consulta );
		$registros = mysqli_num_rows ( $resultado );
		if ($registros == 0)
			echo "<script type 'text/javascript'>alert('No existen clasificaciones');history.back();</script>";
		else {
			for($i = 0; $i < $registros; $i ++) {
				$datos = mysqli_fetch_array ( $resultado );
				array_push ( $mat, clasificacion::mostrar ( $datos ) );
			}
			return $mat;
		}
	}
	
	/*
	 * Metodo Mostrar
	 */
	public static function mostrar($datos) {
		$_codigoClasificacion = $datos ["codigoClasificacion"];
		$_nombre = $datos ["nombre"];
		$_estado = $datos ["estado"];
		$clasificacion = new clasificacion ( $_codigoClasificacion, $_nombre, $_estado );
		return $clasificacion;
	}
	
	/*
	 * Metodo Eliminar
	 */
	public static function eliminar($valor) {
		include ("../Conexion/conexion.php");
		
		$resultado = mysqli_query ( $cnn, "update clasificacion set estado='i' where codigoClasificacion='$valor'" );
		$registros = mysqli_affected_rows ( $cnn );
		if ($registros == 0)
			echo "<script type='text/javascript'> alert ('No se eliminó el registro'); history.go(-2);</script>";
		else
			echo "<script type = 'text/javascript'> alert ('Registro eliminado'); history.go(-2);</script>";
	}
	
	/*
	 * Metodo Modificar
	 */
	public static function modificar($_codigoClasificacion, $_nombre) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "update clasificacion set nombre='$_nombre' where codigoClasificacion = '$_codigoClasificacion'" );
		$registros = mysqli_affected_rows ( $cnn );
		if ($registros == 0)
			echo "<script type= 'text/javascript'> alert ('No se modificó el registro'); history.back();history.go(-2);</script>";
		else
			echo "<script type='text/javascript'> alert ('Registro modificado'); history.back();history.go(-2);</script>";
	}
}

/*
 * Clase ubicacion
 */
class ubicacion {
	var $codigoUbicacion;
	var $nombre;
	var $estado;
	function ubicacion($_codigoUbicacion, $_nombre, $_estado) {
		$this->codigoUbicacion = $_codigoUbicacion;
		$this->nombre = $_nombre;
		$this->estado = $_estado;
	}
	
	/*
	 * Metodo Insertar
	 */
	public static function insertar($_codigoUbicacion, $_nombre) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "select codigoUbicacion from ubicacion where codigoUbicacion = '$_codigoUbicacion'" );
		$registro = mysqli_num_rows ( $resultado );
		try {
			if ($registro == 0) {
				include ("../Conexion/conexion.php");
				$resultado = mysqli_query ( $cnn, "insert into ubicacion(codigoUbicacion,nombre,estado) values ('$_codigoUbicacion','$_nombre','a')" );
				echo "<script type='text/jscript'> alert('Registro almacenado'); history.back();history.go(-1);</script>";
			} else
				echo "<script type='text/javascript'> alert ('El registro ya existe'); history.back();</script>";
		} catch ( Exception $e ) {
			echo "<script type='text/javascript'> alert ('Error'); history.back();</script>";
		}
	}

	/*
	 * Metodo Listar
	 */
	public static function listar($opc, $campo, $valor) {
		include ("../Conexion/conexion.php");
		$mat = array ();
		if ($opc == 3)
			$consulta = "select codigoUbicacion,nombre,estado from ubicacion where estado = 'a'";
			if ($opc == 4) {
				if ($campo == 'codigoUbicacion')
					$consulta = "select codigoUbicacion,nombre,estado from ubicacion where $campo = '$valor' and estado = 'a'";
					else
						$consulta = "select codigoUbicacion,nombre,estado from ubicacion where $campo like '%$valor%' and estado = 'a'";
			} else if ($opc == 5)
				$consulta = "select codigoUbicacion, nombre, estado from ubicacion where codigoUbicacion= '$valor'";
				$resultado = mysqli_query ( $cnn, $consulta );
				$registros = mysqli_num_rows ( $resultado );
				if ($registros == 0)
					echo "<script type 'text/javascript'>alert('No existen ubicaciones');history.back();</script>";
					else {
						for($i = 0; $i < $registros; $i ++) {
							$datos = mysqli_fetch_array ( $resultado );
							array_push ( $mat, ubicacion::mostrar ( $datos ) );
						}
						return $mat;
					}
	}

	/*
	 * Metodo Mostrar
	 */
	public static function mostrar($datos) {
		$_codigoUbicacion = $datos ["codigoUbicacion"];
		$_nombre = $datos ["nombre"];
		$_estado = $datos ["estado"];
		$ubicacion = new ubicacion ( $_codigoUbicacion, $_nombre, $_estado );
		return $ubicacion;
	}

	/*
	 * Metodo Eliminar
	 */
	public static function eliminar($valor) {
		include ("../Conexion/conexion.php");

		$resultado = mysqli_query ( $cnn, "update ubicacion set estado='i' where codigoUbicacion='$valor'" );
		$registros = mysqli_affected_rows ( $cnn );
		if ($registros == 0)
			echo "<script type='text/javascript'> alert ('No se eliminó el registro'); history.go(-2);</script>";
			else
				echo "<script type = 'text/javascript'> alert ('Registro eliminado'); history.go(-2);</script>";
	}

	/*
	 * Metodo Modificar
	 */
	public static function modificar($_codigoUbicacion, $_nombre) {
		include ("../Conexion/conexion.php");
		$resultado = mysqli_query ( $cnn, "update ubicacion set nombre='$_nombre' where codigoUbicacion = '$_codigoUbicacion'" );
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
