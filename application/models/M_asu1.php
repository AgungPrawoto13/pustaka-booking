<?php
class M_asu1 extends CI_model
{
	public $harga,$merk;

	public function cabang()
	{
		$merk=$this->input->post('merk');

		if($merk='Nike'){
			$this->harga=375000;
		}
		elseif($merk='Adidas'){
			$this->harga=300000;
		}
		elseif($merk='Kickers'){
			$this->harga=250000;
		}
		elseif($merk='Eiger'){
			$this->harga=275000;
		}
		elseif($merk='bucherri'){
			$this->harga=400000;
		}
		else{
			echo "Merk tidak diketahui";
		}
		return $this->harga;
	}
}
?>