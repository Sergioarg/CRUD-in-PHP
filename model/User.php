<?php
	/**
	* Clase Usuario
	* En este archivo realizo todos los querys a utilizar en la BD.
	*/

	class User
	{
		private $pdo;
			
		// Sobrecarga al constructor para conectar a BD.
		function __construct()
		{
			try {
				$this->pdo = Database::connect();
			} catch(Exception $e) {
				die($e->getMessage());
			}
		}

		// Lista todos los usuarios que se encuentran en la BD.
		public function all()
		{
			try {
				$query = $this->pdo->prepare("SELECT * FROM usuarios ORDER BY nombres ASC");
				$query->execute();
				return $query->fetchAll(PDO::FETCH_OBJ);
			} catch(Exception $e) {
				die($e->getMessage());
			}
		}
		
		// Realizo este query para verificar si se encuentra una cedula igual en la BD.
		// Que luego utilizo en el controlador
		public function validarCedula($cedula)
        {
            try {
                $query = $this->pdo->prepare("SELECT * FROM usuarios WHERE cedula = '$cedula' ");
                $query->execute();
                $query->fetchAll(PDO::FETCH_ASSOC);

                if ($query->rowCount()) {
                    return true; 
                   }
               else{ 
                   return false;
               }
           } catch (Exception $e) {}
		}
		
		// Realizo este query para verificar si se encuentra un correo igual en la BD.
		// Que luego utilizo en el controlador
		public function validarCorreo($correo)
        {
            try {
                $query = $this->pdo->prepare("SELECT * FROM usuarios WHERE  correo = '$correo'");
                $query->execute();
                $query->fetchAll(PDO::FETCH_ASSOC);

                if ($query->rowCount()) {
                    return true; 
                   }
               else{ 
                   return false;
               }
           } catch (Exception $e) {}
		}
	
		// Por medio realizo a inserción de nuevos usuarios en la BD.
		public function newUser($data)
		{
			try {
				$sql = "INSERT INTO usuarios (nombres,apellidos,cedula,correo, telefono,f_registro, f_modificacion)
						values (?,?,?,?,?,?,?)";

					$this->pdo->prepare($sql)
						->execute(
							array(
								$data = ucwords($_POST['nombres']),
								$data= ucwords($_POST['apellidos']),
								$data= $_POST['cedula'],
								$data = strtolower($_POST['correo']),
								$data= $_POST['telefono'],
								$data= $_POST['f_registro'],
								$data= $_POST['f_modificacion']

							)
						);
			} catch(Exception $e) {
				die($e->getMessage());
			}
		}

	
		// Por medio de este query realizo el update para los datos del usuario excepto en la cédula.
		public function editUser($data)
        {
			try {
                $sql = "UPDATE usuarios SET nombres=?, apellidos=?, correo=?, telefono=?, f_modificacion=? WHERE cedula=?";
                $this->pdo->prepare($sql)
                    ->execute(
                        array(
							$data = ucwords($_POST['nombres']),
							$data= ucwords($_POST['apellidos']),
							$data = strtolower($_POST['correo']),
							$data = $_POST['telefono'],
							$data = $_POST['f_modificacion'],
							$data = $_POST['cedula']
							)
                        );
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
	
		// Por medio de este query realizo el delete de un usario por su repectivo id
		public function removeByid($id)
		{ 
			try {
				$sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id=? ");				
				$sql->execute(array($id));
					
			} catch(Exception $e) {
				die($e->getMessage());
			}
		}
			

}
?>