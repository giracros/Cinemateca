<?php
include $_SERVER ['DOCUMENT_ROOT'] . '/Cinemateca/Control/clases.php';

switch ($_REQUEST ["opc"]) {
	
	// auxiliar
	case 2 :
		$opc = $_REQUEST ["opc"];
		$cedula_auxiliar = $_POST ["cedula_auxiliar"];
		$nombre = $_POST ["nombre"];
		$telefono = $_POST ["telefono"];
		auxiliar::insertar ( $cedula_auxiliar, $nombre, $telefono );
		exit ();
		break;
	
	case 3 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoauxiliar = auxiliar::listar ( $opc, $campo, $valor );
		include ("../vista/listadoauxiliar.php");
		exit ();
		break;
	
	case 4 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		
		$procesoauxiliar = auxiliar::listar ( $opc, $campo, $valor );
		include ("../vista/listadoauxiliar.php");
		exit ();
		break;
	case 5 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesoauxiliar = auxiliar::listar ( $opc, $campo, $valor );
		include ("../Vista/modificarauxiliar.php");
		exit ();
		break;
	case 6 :
		$opc = $_REQUEST ["opc"];
		$cedula_auxiliar = $_POST ["cedula_auxiliar"];
		$nombre = $_POST ["nombre"];
		$telefono = $_POST ["telefono"];
		auxiliar::modificar ( $cedula_auxiliar, $nombre, $telefono );
		exit ();
		break;
	case 7 :
		$opc = $_REQUEST ["opc"];
		$valor = $_REQUEST ["valor"];
		auxiliar::eliminar ( $valor );
		exit ();
		break;
	
	// especialidad
	case 12 :
		$opc = $_REQUEST ["opc"];
		$cod_especialidad = $_POST ["cod_especialidad"];
		$nombre = $_POST ["nombre"];
		especialidad::insertar ( $cod_especialidad, $nombre );
		exit ();
		break;
	case 13 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoespecialidad = especialidad::listar ( $opc, $campo, $valor );
		include ("../vista/listarespecialidad.php");
		exit ();
		break;
	case 14 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		
		$procesoespecialidad = especialidad::listar ( $opc, $campo, $valor );
		include ("../vista/listarespecialidad.php");
		exit ();
		
		break;
	case 15 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesoespecialidad = especialidad::listar ( $opc, $campo, $valor );
		include ("../vista/modificarespecialidad.php");
		exit ();
		break;
	case 16 :
		$opc = $_REQUEST ["opc"];
		$cod_especialidad = $_POST ["cod_especialidad"];
		$nombre = $_POST ["nombre"];
		especialidad::modificar ( $cod_especialidad, $nombre );
		exit ();
		break;
		
		break;
	case 17 :
		$valor = $_REQUEST ["valor"];
		especialidad::eliminar ( $valor );
		exit ();
		
		break;
	
	// laboratorio
	case 22 :
		$opc = $_REQUEST ["opc"];
		$cod_laboratorio = $_POST ["cod_laboratorio"];
		$nombre = $_POST ["nombre"];
		laboratorio::insertar ( $cod_laboratorio, $nombre );
		exit ();
		
		break;
	case 23 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesolaboratorio = laboratorio::listar ( $opc, $campo, $valor );
		include ("../vista/listarlaboratorio.php");
		exit ();
		break;
	case 24 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesolaboratorio = laboratorio::listar ( $opc, $campo, $valor );
		include ("../vista/listarlaboratorio.php");
		exit ();
		break;
	case 25 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesolaboratorio = laboratorio::listar ( $opc, $campo, $valor );
		include ("../vista/modificarlaboratorio.php");
		exit ();
		break;
	case 26 :
		$opc = $_REQUEST ["opc"];
		$cod_laboratorio = $_POST ["cod_laboratorio"];
		$nombre = $_POST ["nombre"];
		laboratorio::modificar ( $cod_laboratorio, $nombre );
		exit ();
		break;
	case 27 :
		$valor = $_REQUEST ["valor"];
		laboratorio::eliminar ( $valor );
		exit ();
		break;
	
	// tratamiento
	case 32 :
		$cod_tratamiento = $_POST ["cod_tratamiento"];
		$nombre = $_POST ["nombre"];
		
		tratamiento::insertar ( $cod_tratamiento, $nombre );
		exit ();
		break;
	case 33 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesotratamiento = tratamiento::listar ( $opc, $campo, $valor );
		include ("../vista/listartratamiento.php");
		exit ();
		
		break;
	case 34 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		
		$procesotratamiento = tratamiento::listar ( $opc, $campo, $valor );
		include ("../vista/listartratamiento.php");
		exit ();
		
		break;
	case 35 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesotratamiento = tratamiento::listar ( $opc, $campo, $valor );
		include ("../Vista/modificartratamiento.php");
		exit ();
		
		break;
	case 36 :
		$opc = $_REQUEST ["opc"];
		$cod_tratamiento = $_POST ["cod_tratamiento"];
		$nombre = $_POST ["nombre"];
		tratamiento::modificar ( $cod_tratamiento, $nombre );
		exit ();
		
		break;
	case 37 :
		$valor = $_REQUEST ["valor"];
		tratamiento::eliminar ( $valor );
		exit ();
		break;
	
	// implemento
	case 42 :
		$opc = $_REQUEST ["opc"];
		$cod_implemento = $_POST ["cod_implemento"];
		$nombre = $_POST ["nombre"];
		implemento::insertar ( $cod_implemento, $nombre );
		exit ();
		break;
	case 43 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoImplemento = implemento::listar ( $opc, $campo, $valor );
		include ("../vista/listadoImplemento.php");
		exit ();
		break;
	case 44 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		
		$procesoImplemento = implemento::listar ( $opc, $campo, $valor );
		include ("../vista/listadoImplemento.php");
		exit ();
		break;
	case 45 :
		$cod_implemento = $_POST ["cod_implemento"];
		$nombre = $_POST ["nombre"];
		implemento::modificar ( $cod_implemento, $nombre );
		
		exit ();
		break;
	case 46 :
		
		break;
	case 47 :
		$opc = $_REQUEST ["opc"];
		$valor = $_REQUEST ["valor"];
		implemento::eliminar ( $valor );
		exit ();
		
		break;
	
	// eps
	case 52 :
		$opc = $_REQUEST ["opc"];
		$cod_eps = $_POST ["cod_eps"];
		$nombre = $_POST ["nombre"];
		eps::insertar ( $cod_eps, $nombre );
		exit ();
		break;
	case 53 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoeps = eps::listar ( $opc, $campo, $valor );
		include ("../vista/listareps.php");
		exit ();
		break;
	case 54 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoeps = eps::listar ( $opc, $campo, $valor );
		include ("../vista/listareps.php");
		exit ();
		break;
	case 55 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesoeps = eps::listar ( $opc, $campo, $valor );
		include ("../vista/modificareps.php");
		exit ();
		
		break;
	case 56 :
		$opc = $_REQUEST ["opc"];
		$cod_eps = $_POST ["cod_eps"];
		$nombre = $_POST ["nombre"];
		eps::modificar ( $cod_eps, $nombre );
		exit ();
		
		break;
	case 57 :
		$opc = $_REQUEST ["opc"];
		$valor = $_REQUEST ["valor"];
		eps::eliminar ( $valor );
		exit ();
		
		break;
	
	// odontologia
	case 62 :
		$opc = 13; // Caso: listar rol
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoespecialidad = especialidad::listar ( $opc, $campo, $valor );
		include ("../vista/ingresoodontologo.php");
		break;
	case 63 :
		$cedula_odontologo = $_POST ["cedula_odontologo"];
		$nombre = $_POST ["nombre"];
		$telefono = $_POST ["telefono"];
		$email = $_POST ["email"];
		$cod_especialidad = $_POST ["cod_especialidad"];
		odontologia::insertar ( $cedula_odontologo, $nombre, $telefono, $email, $cod_especialidad );
		exit ();
		break;
	case 64 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		$procesoodontologo = odontologia::listar ( $opc, $campo, $valor );
		include ("../Vista/listadoodontologo.php");
		exit ();
		
		break;
	case 65 :
		$opc = $_REQUEST ["opc"];
		$cedula_odontologo = $_POST ["cedula_odontologo"];
		$nombre = $_POST ["nombre"];
		$telefono = $_POST ["telefono"];
		$email = $_POST ["email"];
		$cod_especialidad = $_POST ["cod_especialidad"];
		odontologia::modificar ( $cedula_odontologo, $nombre, $telefono, $email, $cod_especialidad );
		exit ();
		break;
	case 66 :
		$opc = 13;
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoespecialidad = especialidad::listar ( $opc, $campo, $valor );
		
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesoodontologo = odontologia::listar ( $opc, $campo, $valor );
		include ("../vista/modificarodontologo.php");
		exit ();
		
		break;
	case 67 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		
		$procesoodontologo = odontologia::listar ( $opc, $campo, $valor );
		include ("../vista/listadoodontologo.php");
		exit ();
		
		break;
	case 68 :
		$valor = $_REQUEST ["valor"];
		odontologia::eliminar ( $valor );
		exit ();
		break;
	
	// agendacita
	
	case 72 :
		$opc = 64; // Caso: listar rol
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		$procesoodontologo = odontologia::listar ( $opc, $campo, $valor );
		include ("../vista/ingresoagendacita.php");
		exit ();
		break;
	case 73 :
		$fecha = $_POST ["fecha"];
		$hora = $_POST ["hora"];
		$cedula_odontologo = $_POST ["cedula_odontologo"];
		agendacita::insertar ( $fecha, $hora, $cedula_odontologo );
		exit ();
		break;
	case 74 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoagendacita = agendacita::listar ( $opc, $campo, $valor );
		include ("../vista/listadoagendacita.php");
		exit ();
		
		break;
	case 75 :
		$opc = 64;
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoodontologo = odontologia::listar ( $opc, $campo, $valor );
		
		$opcA = $_REQUEST ["opc"];
		$campoA = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorA = $_REQUEST ["valor"];
		$procesoagendacita = agendacita::listar ( $opcA, $campoA, $valorA );
		include ("../vista/modificaragendacita.php");
		exit ();
		break;
	case 76 :
		$opc = $_REQUEST ["opc"];
		$cod_agendacita = $_POST ["cod_agendacita"];
		$fecha = $_POST ["fecha"];
		$hora = $_POST ["hora"];
		$cedula_odontologo = $_POST ["cedula_odontologo"];
		agendacita::modificar ( $cod_agendacita, $fecha, $hora, $cedula_odontologo );
		exit ();
		break;
	case 77 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		
		$procesoagendacita = agendacita::listar ( $opc, $campo, $valor );
		include ("../vista/listadoagendacita.php");
		exit ();
		
		break;
	case 78 :
		$valor = $_REQUEST ["valor"];
		agendacita::eliminar ( $valor );
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
	
	// factura
	case 92 :
		$opc = 104;
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesopresupuesto = presupuesto::listar ( $opc, $campo, $valor );
		include ("../vista/ingresofactura.php");
		exit ();
		
		break;
	case 93 :
		$nro_factura = $_POST ["nro_factura"];
		$valor = $_POST ["valor"];
		$saldo = $_POST ["saldo"];
		$cod_presupuesto = $_POST ["cod_presupuesto"];
		factura::insertar ( $nro_factura, $valor, $saldo, $cod_presupuesto );
		exit ();
		
		break;
	case 94 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesofactura = factura::listar ( $opc, $campo, $valor );
		include ("../vista/listadofactura.php");
		
		break;
	case 95 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		
		$procesofactura = factura::listar ( $opc, $campo, $valor );
		include ("../vista/listadofactura.php");
		exit ();
	case 96 :
		
		break;
	case 97 :
		$opc = $_REQUEST ["opc"];
		$valor = $_REQUEST ["valor"];
		factura::eliminar ( $valor );
		exit ();
		
		break;
	
	// presupuesto
	case 102 :
		$opc = 113;
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesopaciente = paciente::listar ( $opc, $campo, $valor );
		
		include ("../vista/ingresopresupuesto.php");
		exit ();
		
		break;
	case 103 :
		$cod_presupuesto = $_POST ["cod_presupuesto"];
		$fecha = $_POST ["fecha"];
		$valor_tratamiento = $_POST ["valor_tratamiento"];
		$identificacion = $_POST ["identificacion"];
		presupuesto::insertar ( $cod_presupuesto, $fecha, $valor_tratamiento, $identificacion );
		exit ();
		
		break;
	case 104 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		
		$procesopresupuesto = presupuesto::listar ( $opc, $campo, $valor );
		include ("../vista/listadopresupuesto.php");
		exit ();
	case 105 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		$procesopresupuesto = presupuesto::listar ( $opc, $campo, $valor );
		include ("../vista/listadopresupuesto.php");
		exit ();
		break;
	case 106 :
		$opcP = 113;
		$campoP = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorP = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesopaciente = paciente::listar ( $opcP, $campoP, $valorP );
		
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesopresupuesto = presupuesto::listar ( $opc, $campo, $valor );
		include ("../vista/modificarpresupuesto.php");
		exit ();
		break;
	
	case 107 :
		$opc = $_REQUEST ["opc"];
		$valor = $_REQUEST ["valor"];
		presupuesto::eliminar ( $valor );
		exit ();
		
		break;
	case 108 :
		$cod_presupuesto = $_POST ["cod_presupuesto"];
		$fecha = $_POST ["fecha"];
		$valor_tratamiento = $_POST ["valor_tratamiento"];
		$identificacion = $_POST ["identificacion"];
		presupuesto::modificar ( $cod_presupuesto, $fecha, $valor_tratamiento, $identificacion );
		exit ();
		break;
	
	// paciente
	case 111 :
		$opc = 53;
		
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoeps = eps::listar ( $opc, $campo, $valor );
		
		include ("../vista/ingresopaciente.php");
		exit ();
		
		break;
	case 112 :
		$identificacion = $_POST ["identificacion"];
		$nombre = $_POST ["nombre"];
		$telefono = $_POST ["telefono"];
		$direccion = $_POST ["direccion"];
		$sexo = $_POST ["sexo"];
		$fecha_nacimiento = $_POST ["fecha_nacimiento"];
		$cod_eps = $_POST ["cod_eps"];
		paciente::insertar ( $identificacion, $nombre, $telefono, $direccion, $sexo, $fecha_nacimiento, $cod_eps );
		exit ();
		break;
	
	case 113 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesopaciente = paciente::listar ( $opc, $campo, $valor );
		include ("../vista/listarpaciente.php");
		exit ();
		break;
	case 114 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		
		$procesopaciente = paciente::listar ( $opc, $campo, $valor );
		include ("../vista/listarpaciente.php");
		exit ();
		
		break;
	case 115 :
		$opcD = 53;
		$campoD = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorD = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoeps = eps::listar ( $opcD, $campoD, $valorD );
		
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesopaciente = paciente::listar ( $opc, $campo, $valor );
		include ("../vista/modificarpaciente.php");
		exit ();
		break;
	case 116 :
		$identificacion = $_POST ["identificacion"];
		$nombre = $_POST ["nombre"];
		$telefono = $_POST ["telefono"];
		$direccion = $_POST ["direccion"];
		$sexo = $_POST ["sexo"];
		$fecha_nacimiento = $_POST ["fecha_nacimiento"];
		$cod_eps = $_POST ["cod_eps"];
		paciente::modificar ( $identificacion, $nombre, $telefono, $direccion, $sexo, $fecha_nacimiento, $cod_eps );
		exit ();
		break;
	case 117 :
		$opc = $_REQUEST ["opc"];
		$valor = $_REQUEST ["valor"];
		paciente::eliminar ( $valor );
		exit ();
		break;
	
	// examenes
	case 122 :
		$opc = 23;
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesolaboratorio = laboratorio::listar ( $opc, $campo, $valor );
		include ("../vista/ingresoexamen.php");
		break;
	case 123 :
		$cod_examen = $_POST ["cod_examen"];
		$nombre = $_POST ["nombre"];
		$cod_laboratorio = $_POST ["cod_laboratorio"];
		examenes::insertar ( $cod_examen, $nombre, $cod_laboratorio );
		exit ();
		break;
	case 124 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		$procesoexamen = examenes::listar ( $opc, $campo, $valor );
		include ("../Vista/listadoexamen.php");
		exit ();
		break;
	case 125 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		
		$procesoexamen = examenes::listar ( $opc, $campo, $valor );
		include ("../vista/listadoexamen.php");
		exit ();
		
		break;
		
		break;
	case 126 :
		$opc = 23;
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesolaboratorio = laboratorio::listar ( $opc, $campo, $valor );
		
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesoexamen = examenes::listar ( $opc, $campo, $valor );
		include ("../vista/modificarexamen.php");
		exit ();
	case 127 :
		$opc = $_REQUEST ["opc"];
		$valor = $_REQUEST ["valor"];
		examenes::eliminar ( $valor );
		exit ();
		break;
	case 128 :
		$cod_examen = $_POST ["cod_examen"];
		$nombre = $_POST ["nombre"];
		$cod_laboratorio = $_POST ["cod_laboratorio"];
		
		examenes::modificar ( $cod_examen, $nombre, $cod_laboratorio );
		exit ();
		break;
	
	// odontologo_auxiliar
	case 132 :
		$opcA = 3;
		
		$campoA = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorA = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoauxiliar = auxiliar::listar ( $opcA, $campoA, $valorA );
		
		$opcO = 64;
		$campoO = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorO = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoodontologo = odontologia::listar ( $opcO, $campoO, $valorO );
		
		include ("../vista/ingresoauxiliarodontologo.php");
		exit ();
		break;
	
	case 133 :
		$cedula_auxiliar = $_POST ["cedula_auxiliar"];
		$cedula_odontologo = $_POST ["cedula_odontologo"];
		
		odontologoAuxiliar::insertar ( $cedula_auxiliar, $cedula_odontologo );
		exit ();
		
		break;
	case 134 :
		
		break;
	case 135 :
		
		break;
	case 136 :
		
		break;
	case 137 :
		
		break;
	
	// odontologo_paciente
	case 142 :
		$opcO = 64;
		$campoO = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorO = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoodontologo = odontologia::listar ( $opcO, $campoO, $valorO );
		
		$opcL = 113;
		
		$campoL = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorL = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesopaciente = paciente::listar ( $opcL, $campoL, $valorL );
		include ("../vista/ingresoodontologopaciente.php");
		exit ();
		
		break;
	case 143 :
		$cedula_odontologo = $_POST ["cedula_odontologo"];
		$identificacion = $_POST ["identificacion"];
		odontologo_paciente::insertar ( $cedula_odontologo, $identificacion );
		exit ();
		
		break;
	case 144 :
		
		break;
	case 145 :
		
		break;
	case 146 :
		
		break;
	case 147 :
		
		break;
	
	// odontologo_laboratorio
	case 152 :
		$opcO = 64;
		$campoO = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorO = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoodontologo = odontologia::listar ( $opcO, $campoO, $valorO );
		
		$opcL = 23;
		
		$campoL = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorL = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesolaboratorio = laboratorio::listar ( $opcL, $campoL, $valorL );
		include ("../vista/ingresoodontologolaboratorio.php");
		exit ();
		break;
	
	case 153 :
		$cedula_odontologo = $_POST ["cedula_odontologo"];
		$cod_laboratorio = $_POST ["cod_laboratorio"];
		
		odontologo_laboratorio::insertar ( $cedula_odontologo, $cod_laboratorio );
		exit ();
		
		break;
	case 154 :
		
		break;
	case 155 :
		
		break;
	case 156 :
		
		break;
	case 157 :
		
		break;
	
	// presupuesto_tratamiento
	case 162 :
		
		$opcP = 104;
		$campoP = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorP = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesopresupuesto = presupuesto::listar ( $opcP, $campoP, $valorP );
		
		$opct = 34;
		$campot = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valort = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesotratamiento = tratamiento::listar ( $opct, $campot, $valort );
		
		include ("../vista/ingresopresupuestotratamiento.php");
		exit ();
		break;
	
	case 163 :
		
		$cod_presupuesto = $_POST ["cod_presupuesto"];
		$cod_tratamiento = $_POST ["cod_tratamiento"];
		
		presupuestoTratamiento::insertar ( $cod_presupuesto, $cod_tratamiento );
		exit ();
		break;
	case 164 :
		
		break;
	case 165 :
		
		break;
	case 166 :
		
		break;
	case 167 :
		
		break;
	
	// tratamiento_implementos
	
	case 171 :
		$opct = 33;
		$campot = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valort = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesotratamiento = tratamiento::listar ( $opct, $campot, $valort );
		
		$opci = 43;
		$campoi = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valori = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoImplemento = implemento::listar ( $opci, $campoi, $valori );
		include ("../vista/ingresoTratamientoImplemento.php");
		exit ();
		break;
	
	case 172 :
		$cod_tratamiento = $_POST ["cod_tratamiento"];
		$cod_implemento = $_POST ["cod_implemento"];
		
		tratamientoImplemento::insertar ( $cod_tratamiento, $cod_implemento );
		exit ();
		break;
	case 173 :
		
		break;
	case 174 :
		
		break;
	case 175 :
		
		break;
	case 176 :
		
		break;
	case 177 :
		
		break;
}
?>
