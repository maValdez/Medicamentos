<?php 

	class Buy{
		public $idUser;
		public $idProduct;
		public $dateHour;
		
		public function __construct($idu, $idp, $dh){
			$this->idUser = $idu;
			$this->idProduct = $idp;
			$this->dateHour = $dh;
		}
	}

 ?>