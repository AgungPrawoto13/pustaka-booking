<?php
class Contoh1 extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Tes');
	}

	public function index()
	{
		$a = 10;
		$b = 50;

		$tambah = $this->Tes->Tambah($a,$b);
		$kurang = $this->Tes->Kurang($a,$b);
		$kali = $this->Tes->Kali($a,$b);

		do{
			if($tambah > 30)
				$b = $kurang;
			else 
				echo $kali;
			$b = $this->Tes->Kurang(5,$b);
		}
		while($b > 10);
	}
} 