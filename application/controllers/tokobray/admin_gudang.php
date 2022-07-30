<?php
class admin_gudang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('tokobray/m_toko');
	}
	public function index()
	{
		$data=array('judul'=>'Dashboard Admin');

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/dashboard_gudang');
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function stok_barang()
	{
		$data=array('judul'=>'Stok Barang',
					'prodak'=>$this->m_toko->semuaprodak()->result());

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/edit_stok_barang',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function ubah_barang()
	{
		$id=$this->input->get('id');
		$cek=$this->m_toko->tampilProdak($id);
		$data=array('judul'=>'Ubah Barang',
					'cek'=>$cek);

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/simpan_perubahan',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function simpan_perubahan()
	{
		$kd_prodak=$this->input->post('kd_prodak');
		$nama_prodak=$this->input->post('nama_prodak');
		$stok_prodak=$this->input->post('stok');
		$harga_prodak=$this->input->post('harga');
		$ukuran_prodak=$this->input->post('ukuran');
		$gambar=$this->input->post('gambar');

		$this->m_toko->simpan_perubahan_prodak($id,$kd_prodak,$nama_prodak,$stok_prodak,$harga_prodak,$ukuran_prodak,$gambar,'prodak');

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="aler">Prodak berhasil di perbarui</div>');
		redirect('tokobray/admin_gudang/stok_barang');
	}
	public function riwayat_jual()
	{
		$data=array('judul'=>'Riwayat Penjualan',
					'prodak'=>$this->m_toko->semuaprodak());

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/riwayat_jual',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function batal_pesan()
	{
		$data=array('judul'=>'Pembatalan Pesanan');

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/batal_pesan',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function cek_penjualan()
	{
		$data=array('judul'=>'Cek Penjualan',
					'cek'=>$this->m_toko->tampilPesanan());

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/cek_penjualan',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function rincian_pesanan()
	{
		$kode=$this->input->get('kd_prodak');
		$cek=$this->m_toko->detailPesanan($kode);
		$data=array('judul'=>'Rincian Pesanan',
					'cek'=>$cek);

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/rincian_pesanan',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function chat()
	{
		$data=array('judul'=>'Layanan Pesan');

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/chat',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function balas_chat()
	{
		$data=array('judul'=>'Balas Pesan');

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/balas_chat',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function pengaturan()
	{
		$this->form_validation->set_rules('nama','Nama','required|trim',array('required'=>'Nama harus diisi'));
		$this->form_validation->set_rules('profesi','Profesi','required|trim',array('required'=>'Profesi harus diisi'));
		$this->form_validation->set_rules('usia','Usia','required|trim',array('required'=>'Usia harus diisi'));
		$this->form_validation->set_rules('email','Email','required|trim',array('required'=>'Email harus diisi'));
		$this->form_validation->set_rules('sandi1','Sandi1','required|trim',array('required'=>'Sandi harus diisi'));
		$this->form_validation->set_rules('sandi2','Sandi2','required|trim',array('required'=>'Sandi2 harus diisi'));
		$this->form_validation->set_rules('kelamin','Kelamin','required|trim',array('required'=>'Kelamin harus diisi'));
		if($this->form_validation->run()==false){
			$data=array('judul'=>'Pengaturan Akun');

			$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
			$this->load->view('tokobray/admin/pengaturan',$data);
			$this->load->view('tokobray/admin/template/footer_admin');
		}else{
			$this->proses();
		}
	}

	private function proses(){
		echo "asd";
	}

	public function akun_member()
	{
		$data=array('judul'=>'Akun Member');

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/akun_member',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function akun_admin()
	{
		$data=array('judul'=>'Akun Admin');

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/akun_admin',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function omset_bulanan()
	{
		$data=array('judul'=>'Omset Per Bulan');

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/omset_bulanan',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function tanggal()
	{
		$data=array('judul'=>'Per Tanggal');

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/tanggal',$data);
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function omset()
	{
		$data=array('judul'=>'Omset Penjualan',
					'cek'=>$this->m_toko->tampilPesanan());

		$c=$this->m_toko->tampilPesanan();
		var_dump(sum($c[0]->total_bayar));
		// $this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		// $this->load->view('tokobray/admin/omset',$data);
		// $this->load->view('tokobray/admin/template/footer_admin');
	}

	public function barang_baru()
	{
		$this->form_validation->set_rules('kd_prodak','Kd_Prodak','required|trim',array('required'=>'Kode Prodak harus diisi'));
		$this->form_validation->set_rules('harga','Harga','required|trim',array('required'=>'Harga harus diisi'));
		$this->form_validation->set_rules('nama_prodak','Nama_Prodak','required|trim',array('required'=>'Nama Barang harus diisi'));
		$this->form_validation->set_rules('stok','Stok','required|trim',array('required'=>'Stok harus diisi'));
		$this->form_validation->set_rules('ukuran','Ukuran','required|trim',array('required'=>'Ukuran harus diisi'));
		$this->form_validation->set_rules('deskripsi','Deskripsi','required|trim',array('required'=>'Deskripsi masi kosong'));

		if($this->form_validation->run()==false){
			$data=array('judul'=>'Barang Baru');

			$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
			$this->load->view('tokobray/admin/barang_baru',$data);
			$this->load->view('tokobray/admin/template/footer_admin');
		}else{
			$this->tambahkan();
		}
	}

	private function tambahkan()
	{
		$data=array('kd_prodak'=>$this->input->post('kd_prodak'),
					'nama_prodak'=>$this->input->post('nama_prodak'),
					'stok_prodak'=>$this->input->post('stok'),
					'harga_prodak'=>$this->input->post('harga'),
					'ukuran_prodak'=>$this->input->post('ukuran'),
					'jenis_prodak'=>$this->input->post('deskripsi'),
					'gambar'=>$this->input->post('gambar'));

		$this->m_toko->tambah_prodak($data);

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message pindah" role="aler">Prodak berhasil di perbarui</div>');
		redirect('tokobray/admin_gudang/barang_baru');
	}

	public function kirim_barang()
	{
		$this->form_validation->set_rules('kota','Kota','required|trim',array('required'=>'Kota masi kosong'));
		$this->form_validation->set_rules('kd_pos','Kd_Pos','required|trim',array('required'=>'Kode pos harus diisi'));

		if($this->form_validation->run()==false){
			$kode=$this->input->get('kd_prodak');
			$cek=$this->m_toko->detailPesanan($kode);
			$data=array('judul'=>'Kirim Barang',
						'cek'=>$cek);

			$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
			$this->load->view('tokobray/admin/kirim_pesanan',$data);
			$this->load->view('tokobray/admin/template/footer_admin');
		}else{
			$this->proses_kirim();
		}
	}

	private function proses_kirim()
	{
		$kode=$this->input->get('kd_prodak');
		$cek=$this->m_toko->detailPesanan($kode);
		$data=array('kd_prodak'=>$this->input->get('kd_prodak'),
					'kota'=>$this->input->post('kota'),
					'kd_pos'=>$this->input->post('kd_pos'),
					'nama_prodak'=>$cek[0]->nama_prodak,
					'kurir'=>$cek[0]->kurir,
					'ukuran'=>$cek[0]->ukuran,
					'member'=>$cek[0]->member,
					'alamat'=>$cek[0]->alamat,
					'jumbel'=>$cek[0]->jumbel,
					'total_bayar'=>$cek[0]->total_bayar,
					'pembayaran'=>$cek[0]->pembayaran);

		$this->m_toko->barang_terkrim($data);

		redirect('tokobray/admin_gudang/selesai');
	}

	public function selesai()
	{
		$data=array('judul'=>'Selesai');

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/pesan');
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function konfirmasi_pengiriman()
	{
		$data=array('judul'=>'Konfirmasi Pengiriman');

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/konfirmasi_pengiriman');
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function penerimaan_barang()
	{
		$data=array('judul'=>'Penerimaan Barang');

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/penerimaan_barang');
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function laporan_pengiriman()
	{
		$data=array('judul'=>'Laporan Pengiriman',
					'cek'=>$this->m_toko->barang_terkirim());

		$this->load->view('tokobray/admin/template/header_admin_gudang',$data);
		$this->load->view('tokobray/admin/laporan_pengiriman');
		$this->load->view('tokobray/admin/template/footer_admin');
	}

	public function keluar()
	{
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Anda berhasil keluar</div>');
		redirect('tokobray/pengunjung/masuk');
	}
}
