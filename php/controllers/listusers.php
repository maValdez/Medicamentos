<?php
	include '../models/connection.php';

	class listUsersController{
		var $users = array();
		//Funcion para consultar usuarios en BD
		public function listUsers(){
			$conn = new Connection();
			$conn->open_connection();
			$dates_users = $conn->execute_query('select nombre from USUARIO');
			while($row = mysql_fetch_array($dates_users)){
				$users[] = $row;
			}
			$conn->close_connection();
			return $users;
		}
	}
?>