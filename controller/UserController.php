<?php
 	/**
	 * Controlador User
	 * En este archivo realizo toda la parte logica del CRUD
	 */
	// Utilizo los require con para implementar codigo que voy a utilizar.
	require 'model/User.php';
	require 'view/header.php';
	require 'view/user/modal.php';

	class UserController
	{
		private $model;

		function __construct()
		{
			$this->model = new User();
		}
		/**
		 * index - Utilizo esta función para dirigirme la vista princial
		 */
		public function index()
		{
			require 'view/user/list.php';
		}

		/**
		 * save - En esta funcion realizo el guardado del usuario en la BD.
		 */
		public function save()
		{
			$model = new User();

			// Primero verifico si ya existe una cédula en la base de datos.
			if (isset($_POST['cedula'])) {

				$cedula = $_POST['cedula'];

					if($model->validarCedula($cedula)){

						echo '<script>alert("Ya se encuentra un usuario con esta cédula")</script>';
						require 'view/user/list.php';

					// Luego en el caso de no exite ningún usuario valido que no exista un correo igual en la BD.
					}elseif (isset($_POST['correo'])){

						$correo = $_POST['correo'];

						if($model->validarCorreo($correo)){

							echo '<script>alert("Ya se encuentra un usuario con este correo.")</script>';
							require 'view/user/list.php';

						}else{
							// Si no existe ningún dato repetido, realiza el registro en la BD.
							echo '<script>alert("¡Registro exitoso.!")</script>';
							$user = new User();
							$user->newUser($_REQUEST);
							require 'view/user/list.php';
						}
				}
			}
		}
		/**
		 * update - Por medio de esta funcion hago el llamado al modelo
		 * donde se encuentra respectivo el query.
		 */
		public function update()
		{
			$user = $this->model->editUser($_REQUEST);
			echo "<script>alert('Cambios guardados.')</script>";
			require 'view/user/list.php';
		}

		/**
		 * deleteU - Por medio de esta funcion hago el llamado al modelo
		 * donde se encuentra el respectivo query.
		 */
		public function deleteU()
		{
			$user = $this->model->removeById($_REQUEST['id']);
			echo "<script>alert('Usuario eliminado correctamente.')</script>";
			require 'view/user/list.php';
		}
	}
?>
