<?php
include $_SERVER ['DOCUMENT_ROOT'] . '/Cinemateca/Control/clases.php';

switch ($_REQUEST ["opc"]) {
	
	// Actor
	case 2 :
		$opc = $_REQUEST ["opc"];
		$codigoActor = $_POST ["codigoActor"];
		$nombre = $_POST ["nombre"];
		actor::insertar ( $codigoActor, $nombre );
		exit ();
		break;
	
	case 3 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoactor = actor::listar ( $opc, $campo, $valor );
		include ("../vista/listadoactor.php");
		exit ();
		break;
	
	case 4 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoactor = actor::listar ( $opc, $campo, $valor );
		include ("../vista/listadoactor.php");
		exit ();
		break;
	case 5 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesoactor = actor::listar ( $opc, $campo, $valor );
		include ("../Vista/modificaractor.php");
		exit ();
		break;
	case 6 :
		$opc = $_REQUEST ["opc"];
		$codigoActor = $_POST ["codigoActor"];
		$nombre = $_POST ["nombre"];
		actor::modificar ( $codigoActor, $nombre );
		exit ();
		break;
	case 7 :
		$opc = $_REQUEST ["opc"];
		$valor = $_REQUEST ["valor"];
		actor::eliminar ( $valor );
		exit ();
		break;
	
	// cita
	case 82 :
		$opcO = 74;
		$campoO = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorO = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoagendacita = agendacita::listar ( $opcO, $campoO, $valorO );
		
		$opcL = 113;
		
		$campoL = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorL = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesopaciente = paciente::listar ( $opcL, $campoL, $valorL );
		include ("../vista/ingresocita.php");
		exit ();
		
		break;
	case 83 :
		$cod_cita = $_POST ["cod_cita"];
		$cod_agendacita = $_POST ["cod_agendacita"];
		$identificacion = $_POST ["identificacion"];
		cita::insertar ( $cod_cita, $cod_agendacita, $identificacion );
		exit ();
		
		break;
	case 84 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesocita = cita::listar ( $opc, $campo, $valor );
		include ("../vista/listadocita.php");
		exit ();
		break;
	case 85 :
		
		break;
	case 86 :
		
		break;
	case 87 :
		$opc = $_REQUEST ["opc"];
		$valor = $_REQUEST ["valor"];
		cita::eliminar ( $valor );
		exit ();
		
		break;
	case 88 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesocita = cita::listar ( $opc, $campo, $valor );
		include ("../vista/listadocita.php");
		exit ();
		break;
}
?>
