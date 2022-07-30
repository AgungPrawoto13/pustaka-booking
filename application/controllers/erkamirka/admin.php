<?php
class admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->cek->cek_login();
		$this->load->model('erkamirka/transaksi');
	}

	public function index()
	{
		$data=array('judul'=>'Dashboard Admin',
					'isi_konten'=>'erkamirka/admin/dashboard');

		$this->load->view('erkamirka/admin/asset/wrapper',$data);
	}

	public function tambah_admin()
	{
		$this->form_validation->set_rules('username','Username','required|trim', array('required'=>'Username harus diisi'));
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[admin.email]', array('required'=>'Email harus diisi',
			'valid_email'=>'Email tidak benar',
			'is_unique'=>'Email telah terdaftar'));
		$this->form_validation->set_rules('password1','Password1','required|trim|min_length[3]|matches[password2]', array('required'=>'Password harus diisi',
			'min_length'=>'Password terlalu pendek',
			'matches'=>'Password tidak sama'));
		$this->form_validation->set_rules('password2','Password2','required|trim|matches[password1]', array('required'=>'Ulangi password',
			'matches'=>'Password tidak sama'));

		if($this->form_validation->run()==false){
			$sesi=$this->input->get('sesi');
			$this->cek->cek_sesi($sesi);

			$data=array('judul'=>'Tambah Admin',
						'isi_konten'=>'erkamirka/admin/tambah_admin');

			$this->load->view('erkamirka/admin/asset/wrapper',$data);
		}else{
			$this->simpan_data();
		}
	}

	private function simpan_data()
	{
		echo "simpan";
	}

	// public function transaksi()
	// {
	// 	$a=$this->erkamirka->sales_order();
	// 	$b=$this->erkamirka->purchase_order();

	// 	$this->transaksi->simpan2($b);
	// 	redirect('erkamirka/admin');
	// }

	// public function spk1()
	// {
	// 	$data=array('judul'=>'Surat Perintah Kerja',
	// 				'isi_konten'=>'erkamirka/admin/spk1');

	// 	$this->load->view('erkamirka/admin/asset/wrapper',$data);
	// }

	// public function spk2()
	// {
	// 	$data=array('judul'=>'Surat Perintah Kerja',
	// 				'isi_konten'=>'erkamirka/admin/spk2');

	// 	$this->load->view('erkamirka/admin/asset/wrapper',$data);
	// }

	// public function surat_jalan()
	// {
	// 	$data=array('judul'=>'Surat Jalan',
	// 				'isi_konten'=>'erkamirka/admin/surat_jalan');

	// 	$this->load->view('erkamirka/admin/asset/wrapper',$data);
	// }

	// public function pengajuan1()
	// {
	// 	$data=array('judul'=>'Form Pengajuan',
	// 				'isi_konten'=>'erkamirka/admin/pengajuan1');

	// 	$this->load->view('erkamirka/admin/asset/wrapper',$data);
	// }

	// public function pengajuan2()
	// {
	// 	$data=array('judul'=>'Form Pengajuan',
	// 				'isi_konten'=>'erkamirka/admin/pengajuan2');

	// 	$this->load->view('erkamirka/admin/asset/wrapper',$data);
	// }

	// public function cetak_pengajuan()
	// {
	// 	$data=array('judul'=>'Cetak Pengajuan',
	// 				'isi_konten'=>'erkamirka/admin/cetak_pengajuan');

	// 	$this->load->view('erkamirka/admin/asset/wrapper',$data);
	// }

	// public function tampil_po()
	// {
	// 	$data=array('judul'=>'Tampil PO',
	// 				'isi_konten'=>'erkamirka/admin/tampil_po');

	// 	$this->load->view('erkamirka/admin/asset/wrapper',$data);
	// }

	// public function tampil_so()
	// {
	// 	$data=array('judul'=>'Tampil SO',
	// 				'isi_konten'=>'erkamirka/admin/tampil_so');

	// 	$this->load->view('erkamirka/admin/asset/wrapper',$data);
	// }

	// public function tampil_spk1()
	// {
	// 	$data=array('judul'=>'Tampil Surat Perintah Kerja',
	// 				'isi_konten'=>'erkamirka/admin/tampil_spk1');

	// 	$this->load->view('erkamirka/admin/asset/wrapper',$data);
	// }

	// public function tampil_spk2()
	// {
	// 	$data=array('judul'=>'Tampil Surat Perintah Kerja',
	// 				'isi_konten'=>'erkamirka/admin/tampil_spk2');

	// 	$this->load->view('erkamirka/admin/asset/wrapper',$data);
	// }

	// public function tampil_surat_jalan()
	// {
	// 	$data=array('judul'=>'Tampil Surat Jalan',
	// 				'isi_konten'=>'erkamirka/admin/tampil_surat_jalan');

	// 	$this->load->view('erkamirka/admin/asset/wrapper',$data);
	// }

	// public function tampil_invoice()
	// {
	// 	$data=array('judul'=>'Tampil Invoice',
	// 				'isi_konten'=>'erkamirka/admin/tampil_invoice');

	// 	$this->load->view('erkamirka/admin/asset/wrapper',$data);
	// }

	public function keluar()
	{
		$this->session->unset_userdata('email');
		redirect('erkamirka/autentifikasi');
	}
}