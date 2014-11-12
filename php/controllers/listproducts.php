<?php 

	include '../models/connection.php';

	class listProductsController{
		

		public function listProducts($type_product){
			$products = array();
			$conn = new Connection();
			$conn->open_connection();
			$dates_products = $conn->execute_query('select descripcion,cantidad_volumen from PRODUCTO where tipo_producto='.$type_product.'');

			while ($row=mysql_fetch_array($dates_products)) {
				$products[] = $row;
			}
			$conn->close_connection();
			return $products;
		}
	}

 ?>
