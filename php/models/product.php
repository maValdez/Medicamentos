<?php 

	class Product{
		public $id;
		public $description;
		public $amountVolume;
		public $amountDose;
		public $valueVolume;
		public $valueDose;
		public $productType;

        public function __construct($i, $d, $av, $ad, $vv, $vd, $pt){
        	$this->id = $i;
        	$this->description = $d;
        	$this->amountVolume = $av;
        	$this->amountDose = $ad;
        	$this->valueVolume = $vv;
        	$this->valueDose = $vd;
        	$this->productType = $pt;
        }
	}

 ?>