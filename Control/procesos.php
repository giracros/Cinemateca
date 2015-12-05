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
	
	// ubicacion
	case 8 :
		$opc = $_REQUEST ["opc"];
		$codigoUbicacion = $_POST ["codigoUbicacion"];
		$nombre = $_POST ["nombre"];
		ubicacion::insertar ( $codigoUbicacion, $nombre );
		exit ();
		break;
	
	case 9 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoubicacion = ubicacion::listar ( $opc, $campo, $valor );
		include ("../vista/listadoubicacion.php");
		exit ();
		break;
	
	case 10 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoubicacion = ubicacion::listar ( $opc, $campo, $valor );
		include ("../vista/listadoubicacion.php");
		exit ();
		break;
	case 11 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesoubicacion = ubicacion::listar ( $opc, $campo, $valor );
		include ("../Vista/modificarubicacion.php");
		exit ();
		break;
	case 12 :
		$opc = $_REQUEST ["opc"];
		$codigoUbicacion = $_POST ["codigoUbicacion"];
		$nombre = $_POST ["nombre"];
		ubicacion::modificar ( $codigoUbicacion, $nombre );
		exit ();
		break;
	case 13 :
		$opc = $_REQUEST ["opc"];
		$valor = $_REQUEST ["valor"];
		ubicacion::eliminar ( $valor );
		exit ();
		break;
	
	// genero
	case 14 :
		$opc = $_REQUEST ["opc"];
		$codigoGenero = $_POST ["codigoGenero"];
		$nombre = $_POST ["nombre"];
		genero::insertar ( $codigoGenero, $nombre );
		exit ();
		break;
	
	case 15 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesogenero = genero::listar ( $opc, $campo, $valor );
		include ("../vista/listadogenero.php");
		exit ();
		break;
	
	case 16 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesogenero = genero::listar ( $opc, $campo, $valor );
		include ("../vista/listadogenero.php");
		exit ();
		break;
	case 17 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesogenero = genero::listar ( $opc, $campo, $valor );
		include ("../Vista/modificargenero.php");
		exit ();
		break;
	case 18 :
		$opc = $_REQUEST ["opc"];
		$codigoGenero = $_POST ["codigoGenero"];
		$nombre = $_POST ["nombre"];
		genero::modificar ( $codigoGenero, $nombre );
		exit ();
		break;
	case 19 :
		$opc = $_REQUEST ["opc"];
		$valor = $_REQUEST ["valor"];
		genero::eliminar ( $valor );
		exit ();
		break;
	
	// clasificacion
	case 20 :
		$opc = $_REQUEST ["opc"];
		$codigoClasificacion = $_POST ["codigoClasificacion"];
		$nombre = $_POST ["nombre"];
		clasificacion::insertar ( $codigoClasificacion, $nombre );
		exit ();
		break;
	
	case 21 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoclasificacion = clasificacion::listar ( $opc, $campo, $valor );
		include ("../vista/listadoclasificacion.php");
		exit ();
		break;
	
	case 22 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoclasificacion = clasificacion::listar ( $opc, $campo, $valor );
		include ("../vista/listadoclasificacion.php");
		exit ();
		break;
	case 23 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesoclasificacion = clasificacion::listar ( $opc, $campo, $valor );
		include ("../Vista/modificarclasificacion.php");
		exit ();
		break;
	case 24 :
		$opc = $_REQUEST ["opc"];
		$codigoClasificacion = $_POST ["codigoClasificacion"];
		$nombre = $_POST ["nombre"];
		clasificacion::modificar ( $codigoClasificacion, $nombre );
		exit ();
		break;
	case 25 :
		$opc = $_REQUEST ["opc"];
		$valor = $_REQUEST ["valor"];
		clasificacion::eliminar ( $valor );
		exit ();
		break;
	
	// PeliculaActor
	case 26 :
		
		$opcP = 64;
		$campoP = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorP = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesopelicula = pelicula::listar ( $opcP, $campoP, $valorP );
		
		$opcA = 3;
		$campoA = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valorA = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoactor = actor::listar ( $opcA, $campoA, $valorA );
		
		include ("../vista/ingresopeliculaactor.php");
		exit ();
		break;
	
	case 27 :
		$codigoPelicula = $_POST ["codigoPelicula"];
		$codigoActor = $_POST ["codigoActor"];
		peliculaActor::insertar ( $codigoPelicula, $codigoActor );
		exit ();
		break;
	
	case 62 :
		$opc = 9; // Caso: listar ubicacion
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoubicacion = ubicacion::listar ( $opc, $campo, $valor );
		include ("../vista/ingresoubicacion.php");
		break;
	case 63 :
		$codigoPelicula = $_POST ["codigoPelicula"];
		$nombre = $_POST ["nombre"];
		$duracion = $_POST ["duracion"];
		$fechaPublicacion = $_POST ["fechaPublicacion"];
		$codigoUbicacion = $_POST ["codigoUbicacion"];
		pelicula::insertar ( $codigoPelicula, $nombre, $duracion, $fechaPublicacion, $codigoUbicacion );
		exit ();
		break;
	case 64 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		$procesopelicula = pelicula::listar ( $opc, $campo, $valor );
		include ("../Vista/listadopelicula.php");
		exit ();
		
		break;
	case 65 :
		$opc = $_REQUEST ["opc"];
		$codigoPelicula = $_POST ["codigoPelicula"];
		$nombre = $_POST ["nombre"];
		$duracion = $_POST ["duracion"];
		$fechaPublicacion = $_POST ["fechaPublicacion"];
		$codigoUbicacion = $_POST ["codigoUbicacion"];
		pelicula::modificar ( $codigoPelicula, $nombre, $duracion, $fechaPublicacion, $codigoUbicacion );
		exit ();
		break;
	case 66 :
		$opc = 13;
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["valor"] ) ? 0 : $_POST ["valor"];
		$procesoubicacion = ubicacion::listar ( $opc, $campo, $valor );
		
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = $_REQUEST ["valor"];
		$procesopelicula = pelicula::listar ( $opc, $campo, $valor );
		include ("../vista/modificarpelicula.php");
		exit ();
		
		break;
	case 67 :
		$opc = $_REQUEST ["opc"];
		$campo = empty ( $_POST ["campo"] ) ? 0 : $_POST ["campo"];
		$valor = empty ( $_POST ["campo"] ) ? 0 : $_POST ["valor"];
		
		$procesopelicula = pelicula::listar ( $opc, $campo, $valor );
		include ("../vista/listadopelicula.php");
		exit ();
		
		break;
	case 68 :
		$valor = $_REQUEST ["valor"];
		pelicula::eliminar ( $valor );
		exit ();
		break;
}
?>
