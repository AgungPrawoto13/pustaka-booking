<?php
class tb_mandiri extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('tbmandiri/tb_mandiri_model');
	}
	public function index()
	{
		$data = array('judul'=>'TB MANDIRI',
					  'isi'=>'tb_mandiri/landing_page');

		$this->load->view('tb_mandiri/asset/wrapper',$data);
	}

	public function semua_produk()
	{
		$produk=$this->tb_mandiri_model->semua_produk();

		$data = array('judul'=>'Produk',
				  'isi'=>'tb_mandiri/semua_produk',
				  'produk'=>$produk);

		$this->load->view('tb_mandiri/asset/wrapper',$data);
	}

	public function deskripsi_produk()
	{
		$data = array('judul'=>'Deskripsi Produk',
					  'isi'=>'tb_mandiri/deskripsi_produk');

		$this->load->view('tb_mandiri/asset/wrapper',$data);
	}

	public function tentang_kami()
	{
		$data = array('judul'=>'Tentang kami',
					  'isi'=>'tb_mandiri/tentang_kami');

		$this->load->view('tb_mandiri/asset/wrapper',$data);
	}

	public function kontak()
	{
		$data = array('judul'=>'Kontak kami',
					  'isi'=>'tb_mandiri/kontak_kami');

		$this->load->view('tb_mandiri/asset/wrapper',$data);
	}
}