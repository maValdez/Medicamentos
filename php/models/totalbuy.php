<?php 

	class Total_buy{
		public $idUser;
		public $dateTime;
		public $value;

		public function __construct($idu, $idp, $dh){
			$this->idUser = $idu;
			$this->idProduct = $idp;
			$this->dateHour = $dh;
		}
	}

 ?>