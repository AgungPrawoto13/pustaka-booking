<?php
class proses{
	
	var $CI = null;
	function __construct(){
		$this->CI =& get_instance();
	}

	public function login($email,$pass){
		var_dump($email);
	}

	public function daftar()
	{
		echo "asd";
	}
}