<?php
class member extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('tokobray/m_toko');
	}
	public function index()
	{
		if($this->session->userdata('email')){

			$pesanan=$this->m_toko->tampilPesanan();
			$total=count($pesanan);

			$data=array('judul'=>'Prodak Baju',
						'total'=>$total);
			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/v_home');
			$this->load->view('tokobray/template/footer');
		}else{
			redirect('tokobray/pengunjung');
		}
	}

	public function katalog(){

		$kd_prodak=$this->input->get('kd_prodak');

		$prodak=$this->input->get('prodak');
		$ukuran=$this->input->post('ukuran');
		$cek=$this->m_toko->tampilKatalog($prodak);
		$data=array('judul'=>'Katalog Pengunjung',
					'cek'=>$cek,
					'ukuran'=>$ukuran);
		$simpan=[$ukuran];
		
		$this->session->set_userdata($simpan);
		$this->load->view('tokobray/template/header',$data);
		$this->load->view('tokobray/katalog',$data);
		$this->load->view('tokobray/template/footer');


	}

	public function profile(){

		$cek=$this->session->userdata('nama_user');
		$tampil=$this->m_toko->tampil_prodak_baru();
		$email=$this->session->userdata('email');
		$user=$this->m_toko->cek_email($email);
		$data=array('judul'=>'Profile Member',
					'user'=>$user,
					'baru'=>$tampil);

		$this->load->view('tokobray/template/header',$data);
		$this->load->view('tokobray/member/profile',$data);
		$this->load->view('tokobray/template/footer');
	}

	public function ubah_profile()
	{
		$email=$this->session->userdata('email');
		$user=$this->m_toko->cek_email($email);
		$data=array('judul'=>'Ubah Profile',
					'user'=>$user);

		$this->load->view('tokobray/template/header',$data);
		$this->load->view('tokobray/member/ubah_profile',$data);
		$this->load->view('tokobray/template/footer');
	}

	public function simpan_ubah_profile()
	{
		$nama_depan=$this->input->post('nama_depan');
		$nama_belakang=$this->input->post('nama_belakang');
		$email=$this->input->post('email_user');
		$alamat=$this->input->post('alamat');
		$sandi_member=$this->input->post('password1');
		$konfirmasi_sandi=$this->input->post('password2');
		$kelamin=$this->input->post('kelamin');
		$gambar=$this->input->post('gambar');
		
		$data=array('nama_user'=>$nama_depan);
		$this->session->set_userdata($data);
		$tes=$this->m_toko->simpan_perubahan_user($email,$nama_depan,$nama_belakang,$alamat,$sandi_member,$konfirmasi_sandi,$kelamin,$gambar,'user');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Data berhasil diperbarui</div>');
		redirect('tokobray/member/profile');
	}

	public function beli(){

		$this->form_validation->set_rules('member','Member','required|trim',array('required'=>'Nama harus diisi'));
		$this->form_validation->set_rules('alamat','Alamat','required|trim',array('required'=>'Alamat harus diisi'));
		$this->form_validation->set_rules('jumbel','Jumbel','required|trim',array('required'=>'Jumlah beli masi kosong'));
		
		if($this->form_validation->run()==false){

			$prodak=$this->input->get('kd_prodak');
			if($prodak){

				$kd_prodak=$this->input->get('kd_prodak');
				$cek=$this->m_toko->tampilProdak($kd_prodak);
				
				$data=array('judul'=>'From Pembelian',
							'gambar'=>$cek[0]->gambar,
							'kd_prodak'=>$cek[0]->kd_prodak,
							'nama_prodak'=>$cek[0]->nama_prodak,
							'harga_prodak'=>$cek[0]->harga_prodak,
							'ukuran_prodak'=>$cek[0]->ukuran_prodak,
							'cek'=>$cek);
				$this->session->set_userdata($data);
		
				$this->load->view('tokobray/template/header',$data);
				$this->load->view('tokobray/member/beli',$data);
				$this->load->view('tokobray/template/footer');
			}else{

				$cek=$this->m_toko->semua_Keranjang();
				$data=array('judul'=>'From Pembelian',
								'gambar'=>$cek[0]->gambar,
								'kd_prodak'=>$cek[0]->kd_prodak,
								'nama_prodak'=>$cek[0]->nama_prodak,
								'harga_prodak'=>$cek[0]->harga_prodak,
								'ukuran_prodak'=>$cek[0]->ukuran_prodak,
								'cek'=>$cek);

				$this->session->set_userdata($data);

				$this->load->view('tokobray/template/header',$data);
				$this->load->view('tokobray/member/beli',$data);
				$this->load->view('tokobray/template/footer');
			}

		}else{
			$this->proses_beli();
		}
	}

	public function proses_beli(){

		$harga=$this->session->userdata('harga_prodak');
		$jumbel=$this->input->post('jumbel');
		$total_bayar=$harga*$jumbel;

		$data=array('kd_prodak'=>$this->session->userdata('kd_prodak'),
					'nama_prodak'=>$this->session->userdata('nama_prodak'),
					'harga'=>$harga,
					'kurir'=>$this->input->post('pengantaran'),
					'ukuran'=>$this->session->userdata('ukuran_prodak'),
					'member'=>$this->input->post('member'),
					'alamat'=>$this->input->post('alamat'),
					'jumbel'=>$jumbel,
					'gambar'=>$this->session->userdata('gambar'),
					'total_bayar'=>$total_bayar);

		$this->session->set_userdata($data);
		redirect('tokobray/member/pembayaran');
	}

	public function keranjang(){
		$no=$this->input->get('kd_prodak');
		if($no){

			$this->simpan_keranjang();

		}else{

			$cek=$this->m_toko->semua_Keranjang();
			$data=array('judul'=>'From Pembelian',
						'prodak'=>$cek);

			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/member/keranjang_belanja',$data);
			$this->load->view('tokobray/template/footer');

		}

	}

	private function simpan_keranjang()
	{
		$no=$this->input->get('kd_prodak');
		$cek=$this->m_toko->tampilProdak($no);
		$data=array('id_prodak'=>$no,
					'kd_prodak'=>$cek[0]->kd_prodak,
					'nama_prodak'=>$cek[0]->nama_prodak,
					'jenis_prodak'=>$cek[0]->jenis_prodak,
					'ukuran_prodak'=>$cek[0]->ukuran_prodak,
					'harga_prodak'=>$cek[0]->harga_prodak,
					'gambar'=>$cek[0]->gambar,
					'total_bayar'=>$cek[0]->harga_prodak);

		$this->m_toko->simpan_Keranjang($data);
		$s=$this->m_toko->semua_Keranjang();
		$total=array('total'=>count($s));
		
		$this->session->set_userdata($total);
		redirect('tokobray/member/keranjang');
	}

	public function hapus_keranjang()
	{
		$kd_prodak=$this->input->get('kd_prodak');
		$cek=$this->m_toko->hapus_keranjang($kd_prodak,'keranjang_belanja');

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message pindah" role="alert">Pesanan kamu berhasil di hapus"</div>');
		redirect('tokobray/member/keranjang');
	}

	public function perbarui_keranjang()
	{

		$kd_prodak=$this->input->get('kd_prodak');
		$tampil=$this->m_toko->tampilProdak($kd_prodak);
		$jumbel=$this->input->post('jumbel');
		$total_bayar=$jumbel * $tampil[0]->harga_prodak;
		$update=$this->m_toko->perbarui_Keranjang($kd_prodak,$jumbel,$total_bayar,'keranjang_belanja');

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message pindah" role="alert">Data berhasil diperbarui</div>');
		redirect('tokobray/member/keranjang');
	}

	public function cek_pengiriman()
	{
		$kd_prodak=$this->input->get('kd_prodak');
		$tampil=$this->m_toko->detailPesanan($kd_prodak);

		if($kd_prodak){
			
			$data=array('judul'=>'From Pembelian',
						'cek'=>$tampil);
	
			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/member/detail_pengiriman',$data);
			$this->load->view('tokobray/template/footer');

		}else{
			$cek=$this->m_toko->tampilPesanan();
			$data=array('judul'=>'Katalog Pengunjung',
						'keranjang'=>$cek);

			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/member/cek_pengiriman',$data);
			$this->load->view('tokobray/template/footer');
		}
	}

	public function penerimaan()
	{
		$tampil=$this->m_toko->tampilPesanan();
		$data=array('judul'=>'From Pembelian',
					'cek'=>$tampil);
	
			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/member/detail_pengiriman',$data);
			$this->load->view('tokobray/template/footer');
	}

	public function pembayaran(){
		$cek=$this->session->userdata('total_bayar');
		$data=array('judul'=>'Katalog Pengunjung',
					'total_bayar'=>$cek);

		$this->load->view('tokobray/template/header',$data);
		$this->load->view('tokobray/member/form_pembayaran',$data);
		$this->load->view('tokobray/template/footer');
	}

	public function carabayar(){
		
		$pembayaran=$this->input->post('pembayaran');

		if($pembayaran == "BCA"){

			$total=$this->session->userdata('total_bayar');
			$teks="Total Bayar : ".$total;

			$data=array('judul'=>'Cara bayar',
						'rekening'=>'No : Rekening',
						'nomer'=>'Mandiri : 070-00-0011-1234',
						'an'=>'A / N : Rainhard Hiskia',
						'total'=>$teks,
						'atm'=>'Cara pembayaran via atm BCA',
						'n3'=>'3. pilih transver antar bang online',
						'bayar_via'=>'Cara pembayaran via atm BCA',
						'role'=>1);

			$simpan_pesanan=array('kd_prodak'=>$this->session->userdata('kd_prodak'),
								  'nama_prodak'=>$this->session->userdata('nama_prodak'),
								  'harga'=>$this->session->userdata('harga'),
								  'kurir'=>$this->session->userdata('kurir'),
								  'ukuran'=>$this->session->userdata('ukuran'),
								  'member'=>$this->session->userdata('member'),
								  'alamat'=>$this->session->userdata('alamat'),
								  'jumbel'=>$this->session->userdata('jumbel'),
								  'gambar'=>$this->session->userdata('gambar'),
								  'total_bayar'=>$this->session->userdata('total_bayar'),
								  'pembayaran'=>$pembayaran);

			$this->m_toko->simpan_pesanan($simpan_pesanan);
			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/member/cara_bayar',$data);
			$this->load->view('tokobray/template/footer');

		} else if($pembayaran == "Mandiri"){

			$total=$this->session->userdata('total_bayar');
			$teks="Total Bayar : ".$total;

			$data=array('judul'=>'Cara bayar',
					'rekening'=>'No : Rekening',
					'nomer'=>'Mandiri : 070-00-0011-1234',
					'an'=>'A / N : Rainhard Hiskia',
					'total'=>$teks,
					'atm'=>'Cara pembayaran via atm Mandiri',
					'n3'=>'3. pilih transver antar Mandiri',
					'bayar_via'=>'Cara pembayaran via atm Mandiri',
					'role'=>1);

			$simpan_pesanan=array('kd_prodak'=>$this->session->userdata('kd_prodak'),
								  'nama_prodak'=>$this->session->userdata('nama_prodak'),
								  'harga'=>$this->session->userdata('harga'),
								  'kurir'=>$this->session->userdata('kurir'),
								  'ukuran'=>$this->session->userdata('ukuran'),
								  'member'=>$this->session->userdata('member'),
								  'alamat'=>$this->session->userdata('alamat'),
								  'jumbel'=>$this->session->userdata('jumbel'),
								  'gambar'=>$this->session->userdata('gambar'),
								  'total_bayar'=>$this->session->userdata('total_bayar'),
								  'pembayaran'=>$pembayaran);

			$this->m_toko->simpan_pesanan($simpan_pesanan);
			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/member/cara_bayar',$data);
			$this->load->view('tokobray/template/footer');

		} else if($pembayaran == "Indomaret"){

			$total=$this->session->userdata('total_bayar');
			$teks="Total Bayar : ".$total;

			$data=array('judul'=>'Cara bayar',
					'rekening'=>'No Pembayaran',
					'nomer'=>'SHP678EP97FQK',
					'total'=>$teks,
					'atm'=>'Cara pembayaran via Indomaret',
					'bayar_via'=>'Cara pembayaran via Indomaret',
					'role'=>2);

			$simpan_pesanan=array('kd_prodak'=>$this->session->userdata('kd_prodak'),
								  'nama_prodak'=>$this->session->userdata('nama_prodak'),
								  'harga'=>$this->session->userdata('harga'),
								  'kurir'=>$this->session->userdata('kurir'),
								  'ukuran'=>$this->session->userdata('ukuran'),
								  'member'=>$this->session->userdata('member'),
								  'alamat'=>$this->session->userdata('alamat'),
								  'jumbel'=>$this->session->userdata('jumbel'),
								  'gambar'=>$this->session->userdata('gambar'),
								  'total_bayar'=>$this->session->userdata('total_bayar'),
								  'pembayaran'=>$pembayaran);

			$this->m_toko->simpan_pesanan($simpan_pesanan);
			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/member/cara_bayar',$data);
			$this->load->view('tokobray/template/footer');

		} else if($pembayaran == "Bayar di counter"){

			$total=$this->session->userdata('total_bayar');
			$teks="Total Bayar : ".$total;

			$data=array('judul'=>'Cara bayar',
					'rekening'=>'No Pembayaran',
					'nomer'=>'SHP678EP97FQK',
					'total'=>$teks,
					'atm'=>'Cara pembayaran via Counter',
					'bayar_via'=>'Cara pembayaran via Counter',
					'role'=>3);

			$simpan_pesanan=array('kd_prodak'=>$this->session->userdata('kd_prodak'),
								  'nama_prodak'=>$this->session->userdata('nama_prodak'),
								  'harga'=>$this->session->userdata('harga'),
								  'kurir'=>$this->session->userdata('kurir'),
								  'ukuran'=>$this->session->userdata('ukuran'),
								  'member'=>$this->session->userdata('member'),
								  'alamat'=>$this->session->userdata('alamat'),
								  'jumbel'=>$this->session->userdata('jumbel'),
								  'gambar'=>$this->session->userdata('gambar'),
								  'total_bayar'=>$this->session->userdata('total_bayar'),
								  'pembayaran'=>$pembayaran);

			$this->m_toko->simpan_pesanan($simpan_pesanan);
			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/member/cara_bayar',$data);
			$this->load->view('tokobray/template/footer');

		} else if($pembayaran == "Bayar di tempat"){

			$total=$this->session->userdata('total_bayar');
			$teks="Total Bayar : ".$total;

			$data=array('judul'=>'Cara bayar',
					'rekening'=>'No Pembayaran',
					'nomer'=>'SHP678EP97FQK',
					'total'=>$teks,
					'atm'=>'Cara pembayaran via Indomaret',
					'bayar_via'=>'Cara pembayaran via Indomaret',
					'role'=>3);

			$simpan_pesanan=array('kd_prodak'=>$this->session->userdata('kd_prodak'),
								  'nama_prodak'=>$this->session->userdata('nama_prodak'),
								  'harga'=>$this->session->userdata('harga'),
								  'kurir'=>$this->session->userdata('kurir'),
								  'ukuran'=>$this->session->userdata('ukuran'),
								  'member'=>$this->session->userdata('member'),
								  'alamat'=>$this->session->userdata('alamat'),
								  'jumbel'=>$this->session->userdata('jumbel'),
								  'gambar'=>$this->session->userdata('gambar'),
								  'total_bayar'=>$this->session->userdata('total_bayar'),
								  'pembayaran'=>$pembayaran);

			$this->m_toko->simpan_pesanan($simpan_pesanan);
			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/member/pesan',$data);
			$this->load->view('tokobray/template/footer');

		} else if($pembayaran == "Alfamart"){

			$total=$this->session->userdata('total_bayar');
			$teks="Total Bayar : ".$total;

			$data=array('judul'=>'Cara bayar',
					'rekening'=>'No Pembayaran',
					'nomer'=>'SHP678EP97FQK',
					'total'=>$teks,
					'atm'=>'Cara pembayaran via Alfamart',
					'bayar_via'=>'Cara pembayaran via Alfamart',
					'role'=>2);

			$simpan_pesanan=array('kd_prodak'=>$this->session->userdata('kd_prodak'),
								  'nama_prodak'=>$this->session->userdata('nama_prodak'),
								  'harga'=>$this->session->userdata('harga'),
								  'kurir'=>$this->session->userdata('kurir'),
								  'ukuran'=>$this->session->userdata('ukuran'),
								  'member'=>$this->session->userdata('member'),
								  'alamat'=>$this->session->userdata('alamat'),
								  'jumbel'=>$this->session->userdata('jumbel'),
								  'gambar'=>$this->session->userdata('gambar'),
								  'total_bayar'=>$this->session->userdata('total_bayar'),
								  'pembayaran'=>$pembayaran);

			$this->m_toko->simpan_pesanan($simpan_pesanan);
			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/member/cara_bayar',$data);
			$this->load->view('tokobray/template/footer');

		} else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Kamu belum memilih metode pembayaranya</div>');
			redirect('tokobray/member/pembayaran');
		}
	}

	public function bukti_pembayaran(){
		$data=array('judul'=>'Katalog Pengunjung');

		$this->load->view('tokobray/template/header',$data);
		$this->load->view('tokobray/member/bukti_pembayaran');
		$this->load->view('tokobray/template/footer');
	}

	public function selesai(){
		$data=array('judul'=>'Akhir');

		$this->load->view('tokobray/template/header',$data);
		$this->load->view('tokobray/member/pesan');
		$this->load->view('tokobray/template/footer');
	}

	public function keluar(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('sandi');
		$this->session->unset_userdata('gambar');
		$this->session->unset_userdata('nama_prodak');
		$this->session->unset_userdata('harga_prodak');
		$this->session->unset_userdata('ukuran_prodak');

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message pindah" role="alert">Kamu berhasil keluar</div>');
		redirect('tokobray/pengunjung');
	}
}