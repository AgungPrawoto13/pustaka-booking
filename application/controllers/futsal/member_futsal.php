<?php
class member_futsal extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('futsal/data_futsal');
	}

	public function index()
	{
		if($this->session->userdata('email')){
			$data=array('judul'=>'Member Futsal');

			$this->load->view('futsal/asset/header',$data);
			$this->load->view('futsal/index');
			$this->load->view('futsal/sidebar');
			$this->load->view('futsal/modal');
			$this->load->view('futsal/asset/footer');
		}else{

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message">Anda belum login</div>');
			redirect('futsal/pengunjung');
		}	
	}

	public function lapangan()
	{
		$data=array('judul'=>'Lapangan',
					'lapangan'=>$this->data_futsal->cek_lapangan());

		$this->load->view('futsal/asset/header',$data);
		$this->load->view('futsal/lapangan',$data);
		$this->load->view('futsal/asset/footer');
	}

	public function pesanan()
	{
		$this->form_validation->set_rules('tgl','Tgl','required|trim',array('required'=>'Tanggal harus diisi'));
		$this->form_validation->set_rules('lm','Lm','required|trim',array('required'=>'Lama sewa harus diisi'));

		if($this->form_validation->run()==false){

			$idlap=$this->input->get('idlap');
			$lapangan=$this->data_futsal->cari_lapangan($idlap);

			$data=array('judul'=>'Lapangan',
						'idlap'=>$lapangan[0]->idlapangan,
						'lapangan'=>$lapangan[0]->nm,
						'siang'=>$lapangan[0]->harga1,
						'malam'=>$lapangan[0]->harga2);

			$this->session->set_userdata($data);

			$this->load->view('futsal/asset/header',$data);
			$this->load->view('futsal/member_futsal/pesanan',$data);
			$this->load->view('futsal/asset/footer');

		}else{
			$this->proses();
		}
	}

	private function proses()
	{
		$lama_sewa=$this->input->post('lm');
		$jam_mulai=$this->input->post('jm');
		$jhabis=$lama_sewa + $jam_mulai;

		if($jam_mulai <= "10:00"){

			$harga=$this->input->post('h1');
			$jenis="pagi";
			$total_bayar=$lama_sewa * $harga;

		}else if($jam_mulai <= "14:00"){

			$harga=$this->input->post('h1');
			$jenis="siang";
			$total_bayar=$lama_sewa * $harga;

		}else if($jam_mulai <= "17:00"){

			$harga=$this->input->post('h1');
			$jenis="sore";
			$total_bayar=$lama_sewa * $harga;

		}else{

			$harga=$this->input->post('h2');
			$jenis="malam";
			$total_bayar=$lama_sewa * $harga;
		}

		$data=array('iduser'=>$this->input->post('id_user'),
					'tgl_pesan'=>date('Y-m-d'),
					'jmulai'=>$jam_mulai,
					'lama'=>$lama_sewa,
					'jhabis'=>$jhabis,
					'jns'=>$jenis,
					'harga'=>$harga,
					'tot'=>$total_bayar,
					'idlap'=>$this->input->post('idlap'),
					'tgl_main'=>$this->input->post('tgl'));

		$this->data_futsal->simpan_pesanan($data);

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Pesanan berhasil dibuat</div>');
		redirect('futsal/member_futsal/lapangan');
				
	}

	public function hapus_pesanan()
	{
		$id_sewa=$this->input->get('id_sewa');
		$this->data_futsal->hapus_sewa($id_sewa);

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Pesanan berhasil dihapus</div>');
		redirect('futsal/member_futsal/pembayaran');
	}

	public function pembayaran()
	{
		$data=array('judul'=>'Pembayaran',
					'pembayaran'=>$this->data_futsal->pemesanan());

		$this->load->view('futsal/asset/header',$data);
		$this->load->view('futsal/member_futsal/bayar',$data);
		$this->load->view('futsal/modal');
		$this->load->view('futsal/asset/footer');
	}

	public function upload()
	{
		$keranjang=$this->data_futsal->pemesanan();
		// $data=array('nama_pemesan'=>$keranjang[0]->nama_lengkap,
		// 			'tanggal_pesan'=>$keranjang[0]->tgl_pesan,
		// 			'tanggal_main'=>$keranjang[0]->tgl_main,
		// 			'lama_main'=>$keranjang[0]->lama,
		// 			'jam_main'=>$keranjang[0]->jmulai,
		// 			'jam_selesai'=>$keranjang[0]->jhabis,
		// 			'bukti'=>$this->input->post('bukti'),
		// 			'total_harga'=>$keranjang[0]->tot);

		// $this->data_futsal->simpan_sewa($keranjang);

		// $this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Pesanan berhasil di selesaikan</div>');
		// redirect('futsal/member_futsal/lapangan');
		$convert=(object)$keranjang;
		$as=json_decode(json_encode($keranjang));
		var_dump($as);
	}

	public function edit_profile()
	{
		$this->form_validation->set_rules('namalengkap','Namalengkap','required|trim',array('required'=>'Nama harus diisi'));
		$this->form_validation->set_rules('jeniskelamin','Jeniskelamin','required|trim',array('required'=>'Jenis kelamin harus diisi'));
		$this->form_validation->set_rules('email','Email','required|trim|valid_email',array('required'=>'Email masi kosong',
																							'valid_email'=>'email tidak benar'));
		$this->form_validation->set_rules('password','Password','required|trim',array('required'=>'Password harus diisi'));
		$this->form_validation->set_rules('handphone','Handphone','required|trim',array('required'=>'Nomor telpon harus diisi'));
		$this->form_validation->set_rules('alamat','Alamat','required|trim',array('required'=>'Alamat harus diisi'));

		if($this->form_validation->run()==false){
			$email=$this->session->userdata('email');

			$data=array('judul'=>'Edit profile member',
						'member'=>$this->data_futsal->cek_email($email));

			$this->load->view('futsal/asset/header',$data);
			$this->load->view('futsal/member_futsal/edit_profile',$data);
			$this->load->view('futsal/asset/footer');
		}else{
			$this->simpan_edit();
		}
	}

	public function simpan_edit()
	{
		$data=array('nama_lengkap'=>$this->input->post('namalengkap'),
					'email'=>$this->input->post('email'),
					'password'=>$this->input->post('password'),
					'hp'=>$this->input->post('handphone'),
					'jenis_kelamin'=>$this->input->post('jeniskelamin'),
					'alamat'=>$this->input->post('alamat'));

		$this->session->set_userdata($data);

		$this->data_futsal->ubah_profile($data);
		redirect('futsal/pengunjung');
	}

	public function log_out()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('nama_lengkap');

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Anda berhasil keluar</div>');
		redirect('futsal/pengunjung');
	}
}