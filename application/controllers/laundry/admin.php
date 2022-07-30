<?php
class admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('laundry/m_laundry');
	}

	public function index(){

		if($this->session->userdata('username')){
			$data=array('judul'=>'Beranda Admin',
						'user'=>$this->session->userdata('user'));
			$this->load->view('laundry/admin/template/header_admin',$data);
			$this->load->view('laundry/admin/beranda_admin',$data);
			$this->load->view('laundry/admin/template/footer_admin');
		}else{
			redirect('laundry/login_admin');
		}
	}

	public function form_transaksi(){

		$this->form_validation->set_rules('nama','Nama','required|trim',array('required'=>'Nama harus diisi'));
		$this->form_validation->set_rules('alamat','Alamat','required|trim',array('required'=>'Alamat harus diisi'));
		$this->form_validation->set_rules('no_hp','No_hp','required|trim',array('required'=>'No hp harus diisi'));
		$this->form_validation->set_rules('pakaian','Pakaian','required|trim',array('required'=>'Jenis pakaian harus diisi'));
		$this->form_validation->set_rules('berat','Berat','required|trim',array('required'=>'Berat pakaian harus diisi'));
		$this->form_validation->set_rules('tgl_diambil','Tgl_Diambil','required|trim',array('required'=>'Tanggal diambil kosong'));
		$this->form_validation->set_rules('tgl_masuk','Tgl_Masuk','required|trim',array('required'=>'Tanggal Masuk Kosong'));

		if($this->form_validation->run()==false){
			$data=array('judul'=>'Transaksi Laundry',
						'user'=>$this->session->userdata('user'));
			$this->load->view('laundry/admin/template/header_admin',$data);
			$this->load->view('laundry/admin/form_transaksi');
			$this->load->view('laundry/admin/template/footer_admin');
		}else{
			$this->proses_transaksi();
		}
	}

	private function proses_transaksi(){

		$data=array('nama_pelanggan'=>$this->input->post('nama'),
					'alamat'=>$this->input->post('alamat'),
					'no_hp'=>$this->input->post('no_hp'),
					'jenis_pakaian'=>$this->input->post('pakaian'),
					'berat_pakaian'=>$this->input->post('berat'),
					'jenis_paket'=>$this->input->post('paket'),
					'jenis_laundry'=>$this->input->post('jenis'),
					'tgl_masuk'=>$this->input->post('tgl_masuk'),
					'tgl_diambil'=>$this->input->post('tgl_diambil'));

		var_dump($data);
		// $this->m_laundry->simpan_transaksi($data);

		// $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Berhasil Disimpan ka :)</div>');
		// redirect('laundry/admin/form_transaksi');
	}

	public function transaksi(){
		echo "transaksi";
	}

	public function belum_bayar(){

		$data=array('judul'=>'Data Transaksi',
					'user'=>$this->session->userdata('user'),
					'cek'=>$cek=$this->m_laundry->cek_transaksi());
		$this->load->view('laundry/admin/template/header_admin',$data);
		$this->load->view('laundry/admin/belum_bayar',$data);
		$this->load->view('laundry/admin/template/footer_admin');
	}

	public function edit_transaksi(){
		$nama=$this->input->get('no');
		if($this->form_validation->run() == false){
			$key=$this->input->get('key');
			$cek=$this->m_laundry->cek_barang($key)->row_array();
			$data=array('judul'=>'Data Transaksi',
						'user'=>$this->session->userdata('user'),
						'cek'=>$cek);
			$this->load->view('laundry/admin/template/header_admin',$data);
			$this->load->view('laundry/admin/edit_transaksi',$data);
			$this->load->view('laundry/admin/template/footer_admin');
			
		}else{
			$this->proses_edit();
		}
	}

	private function proses_edit(){
		echo "edit";
	}

	public function keluar()
	{
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Kamu berhasil keluar</div>');
		redirect('laundry/login_admin');
	}
}