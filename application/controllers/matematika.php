<?php
class matematika extends CI_Controller{
	
	public function penjumlahan ($nilai1,$nilai2){
		$this->load->model('proses');
		$hasil=$this->proses->jumlah($nilai1,$nilai2);
		echo "hasil dari".$nilai1."+".$nilai2."=".$hasil;
	}
}