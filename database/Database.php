<?php
/** Por medio de esta archivo realizo la conexión la BD por medio de la extensión PDO
 *	con su respectivo usuario y contraseña
 *	Usuario: root
 *	Contraseña: ninguna
 **/
	class Database
	{
		public static function connect()
		{
			// usuario: root - clave: ninguna
			$pdo = new PDO('mysql:host=localhost;dbname=database;charset=utf8','root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	}
?>