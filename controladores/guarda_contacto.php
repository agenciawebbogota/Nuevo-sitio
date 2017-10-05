<?php
	if (isset($_POST["nombre"]) AND isset($_POST["correo"])) {
		require_once("../conexion/conn.php");
		///////Captura de información recibida por ajax////////
		// var_dump($_POST);
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$telefono = $_POST["telefono"];
		$correo = $_POST["correo"];
		$mensaje = $_POST["mensaje"];
		///////Insertar datos en la base de datos con nombre agenciaw_landing/////
		// Activar esta parte cuando se suba la página al servidor
		// $db = new conexion();
		// $q = "INSERT INTO `registrospaginaprincipalawb` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `mensaje`,`cargado` ) VALUES (NULL, '$nombre', '$apellido', '$telefono', '$correo','$mensaje', CURRENT_TIMESTAMP)";
		$q = "INSERT INTO `registrospaginaprincipalawb` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `mensaje`, `cargado`) VALUES (NULL, '$nombre', '$apellido', '$telefono', '$correo', '$mensaje', CURRENT_TIMESTAMP)";
		// Activar esta parte cuando se suba la página al servidor
		// $db->abc($q);
		///////// Enviar email ///////
		require_once('correo.php');
		// Activar esta parte cuando se suba la página al servidor
		// print(enviaEmail($nombre, $apellido, $telefono, $correo,$mensaje));
		print(json_encode(array('resp' => true )));
	}else{
		header("location: ../");
	}
 ?>