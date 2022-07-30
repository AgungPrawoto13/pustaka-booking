<?php
class M_Sepatu extends CI_Model{
	public $harga,$merk;


	public function cabang()
	{
		$merk=$this->input->post('merk');

		if($merk=="Nike"){
			$this->harga=375000;	
		} 
		elseif($merk=="Adidas"){
			$this->harga=300000;
		}
		elseif($merk=="Kickers"){
			$this->harga=250000;
		}
		elseif($merk=="Eiger"){
			$this->harga=275000;
		}
		elseif($merk=="Bucherri"){
			$this->harga=400000;
		}else{
			echo "Merk tidak di ketahui";
		}
		return $this->harga;
	}
}
?>