<?php
	include '../models/user.php';

	class loginController{
		private $UserName;
		//Funcion para iniciar sesion del usuario
		public function loginUser($client_parameter){
			 session_start();
			$_SESSION['username']=$client_parameter;
			$this->UserName=$_SESSION['username'];

			return $this->UserName;
			#session_start();
			#$_SESSION['username'] = 
		}

		public function get_var_sessions(){
			return $this->UserName;
		}
	}
?>