<?php 

	class Query{
		private $query_string;
		protected $arr = array();

		//funcion que devuelve todos los elementos de una tabla
		public function show_table($tabla){
			include 'conection.php';
			$obj_conect=new Conection();
			$obj_conect->open_conection();
			$query_string="select * from ".$tabla."";
			$aux_query=mysql_query($query_string);
			while ($row=mysql_fetch_array($aux_query)) {
				$arr[]=$row;
			}
			$query_string="";
			$obj_conect->close_conection();		
			return $arr;
		}

	}

 ?>