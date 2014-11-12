<?php 
    class Connection{
    	private static $host="localhost";
    	private static $user="root";
    	private static $pwd="";
    	private static $db="ventas-2014-10-08-4";
    	private $conn;
        public $link;
        //funcion que creala conexion a la base de datos
        public function open_connection(){
        	
        	$conn =  mysql_connect(self::$host,self::$user,self::$pwd);

        	if(!$conn){
        		die('ERROR DE CONEXION');
        	}
        	else{
        		mysql_select_db(self::$db);
        		
        	}
        }
        //funcion para obtener la conexion
        public function get_conn(){
            return $this->conn;
        }
        //funcion para cerrar la coneccion
        public function close_connection(){
            mysql_close();
        }
        //funcion para crear consultas
        public function execute_query($sql){
            $this->link = mysql_query($sql);
            return $this->link;
        }
    }
 ?>