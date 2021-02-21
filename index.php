<?php
	//llamado a Clase conexion
	require 'database/Database.php'; 

	$controller = 'User'.'Controller';

	if(!isset($_REQUEST['c'])) {
		//cuando nunca se ha hecho una petición nos abre 
		//el controlador por defecto
		require "controller/$controller".".php";
		$controller = ucwords($controller);
		$controller = new $controller;
		$controller->index();
	} else {
		//Obtención de Controlador que queremos cargar
		$controller = ucwords($_REQUEST['c']).'Controller';
		//condicional paternario
		$method = isset($_REQUEST['m']) ? $_REQUEST['m'] : 'index';

		//instanciar el controlador a llamar
		require "controller/$controller".".php";
		$controller = new $controller;

		//"metodo magico" para ejecutar metodos
		call_user_func(array($controller, $method));

	}
?>
