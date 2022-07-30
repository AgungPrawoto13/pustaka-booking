<?php
class produksi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('erkamirka/transaksi');
		$sesi=$this->input->get('sesi');
		$this->cek->cek_sesi($sesi);
	}

	public function index()
	{
		$data=array('judul'=>'Dashboard Admin',
					'isi_konten'=>'erkamirka/admin/produksi');

		$this->load->view('erkamirka/admin/asset/wrapper',$data);
	}
}