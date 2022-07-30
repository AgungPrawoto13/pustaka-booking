<?php
class admin_kepala extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('tokobray/m_toko');
	}
	public function index()
	{
		$data=array('judul'=>'Dashboard Admin');

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/dashboard');
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function stok_barang()
	{
		$prodak=$this->m_toko->semuaprodak()->result();
		$data=array('judul'=>'Stok Barang',
					'prodak'=>$prodak);

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/stok_barang',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	
	}

	public function riwayat_jual()
	{
		$data=array('judul'=>'Riwayat Penjualan',
					'prodak'=>$this->m_toko->semuaprodak());

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/riwayat_jual',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function batal_pesan()
	{
		$data=array('judul'=>'Pembatalan Pesanan');

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/batal_pesan',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function cek_penjualan()
	{
		$data=array('judul'=>'Cek Penjualan',
					'cek'=>$this->m_toko->tampilPesanan());

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/cek_penjualan',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function rincian_pesanan()
	{
		$data=array('judul'=>'Rincian Pesanan');

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/rincian_pesanan',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function chat()
	{
		$data=array('judul'=>'Layanan Pesan');

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/chat',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function balas_chat()
	{
		$data=array('judul'=>'Balas Pesan');

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/balas_chat',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function pengaturan()
	{
		$data=array('judul'=>'Pengaturan Akun');

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/pengaturan',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function akun_member()
	{
		$data=array('judul'=>'Akun Member');

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/akun_member',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function akun_admin()
	{
		$data=array('judul'=>'Akun Admin');

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/akun_admin',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function omset_bulanan()
	{
		$data=array('judul'=>'Omset Per Bulan');

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/omset_bulanan',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function tanggal()
	{
		$data=array('judul'=>'Per Tanggal');

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/tanggal',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function omset()
	{
		$data=array('judul'=>'Omset Penjualan');

		$this->load->view('tokobray/admin/template/header_admin',$data);
		$this->load->view('tokobray/admin/omset',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}
}
