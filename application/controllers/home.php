<?php

class Home extends CI_Controller
{ 
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('ModelBuku', 'ModelUser','ModelBooking'));
	}

	// public function index()
	// {
	// 	//jika sudah login dan jika belum login
	// 	if ($this->session->userdata('email')) {
	// 		$user = $this->ModelUser->cekData(array('email' => $this->session->userdata('email')))->row_array();

	// 		$data=array('user'=> $user['nama'],
	// 					'buku'=>$this->ModelBuku->getBuku()->result(),
	// 					'judul'=>'Katalog Buku');

	// 		$this->load->view('templates/templates-user/header', $data);
	// 		$this->load->view('buku/daftarbuku', $data);
	// 		$this->load->view('templates/templates-user/modal');
	// 		$this->load->view('templates/templates-user/footer');
	// 	} else {
	// 		$data=array('user' => 'Pengunjung',
	// 					'buku'=>$this->ModelBuku->getBuku()->result(),
	// 					'judul'=>'Katalog Buku');
	// 		$this->load->view('templates/templates-user/header', $data);
	// 		$this->load->view('buku/daftar-buku', $data);
	// 		$this->load->view('templates/templates-user/modal');
	// 		$this->load->view('templates/templates-user/footer');
	// 	}
	// }
	
	public function detailBuku()
	{
		$id = $this->uri->segment(3);
		$buku = $this->ModelBuku->joinKategoriBuku(array('buku.id' => $id))->result();
		foreach($buku as $tampilkan){
			$data=array('judul'=>$tampilkan->judul_buku,
						'penerbit'=>$tampilkan->penerbit,
						'tahun'=>$tampilkan->tahun_terbit,
						'isbn'=>$tampilkan->isbn,
						'kategori'=>$tampilkan->kategori,
						'dipinjam'=>$tampilkan->dipinjam,
						'dibooking'=>$tampilkan->dibooking,
						'stok'=>$tampilkan->stok,
						'penerbit'=>$tampilkan->penerbit,
						'pengarang'=>$tampilkan->pengarang,
						'gambar'=>$tampilkan->image,
						'id'=>$id,
						'user'=>"pengunjung",
						'title'=>"Detail Buku");
		}

		$this->load->view('templates/templates-user/header', $data);
		$this->load->view('buku/detailBuku', $data);
		$this->load->view('templates/templates-user/modal');
	}
}