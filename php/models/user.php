<?php 

	class User{
		public $id;
		public $name;
		public $passwd;
		public $role;

		public function __construct($i, $n, $p, $r){
			$this->id = $i;
			$this->name = $n;
			$this->passwd = $p;
			$this->role = $r;
		}
	}

 ?>