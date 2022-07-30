<?php
class admin_futsal extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('futsal/data_futsal');
	}

	public function index()
	{
		if($this->session->userdata('admin')){
			$data=array('judul'=>'Dashboard admin',
						'admin'=>$this->data_futsal->tampil_admin());

			$this->load->view('futsal/adm/template/header',$data);
			$this->load->view('futsal/adm/index',$data);
			$this->load->view('futsal/adm/template/footer');
		}else{
			redirect('futsal/autentifikasi/login_admin');
		}
	}

	public function admin_update()
	{
		$this->form_validation->Set_rules('username','Username','required|trim',array('required'=>'Username masi kosong'));
		$this->form_validation->Set_rules('password','Password','required|trim',array('required'=>'Password masi kosong'));
		$this->form_validation->Set_rules('nama','Nama','required|trim',array('required'=>'Nama masi kosong'));
		$this->form_validation->Set_rules('phone','Phone','required|trim',array('required'=>'Phone masi kosong'));
		$this->form_validation->Set_rules('email','Email','required|trim|valid_email',array('required'=>'Email masi kosong',
																							'valid_email'=>'Itu bukan email'));
		if($this->form_validation->run()==false){

			$id=$this->input->get('id');
			$data=array('judul'=>'Tambah admin',
						'admin'=>$this->data_futsal->admin($id));

			$this->load->view('futsal/adm/template/header',$data);
			$this->load->view('futsal/adm/update_admin',$data);
			$this->load->view('futsal/adm/template/footer');
		}else{
			$this->simpan_update();
		}
	}

	private function simpan_update()
	{
		$id=$this->input->get('id');
		$data=array('username'=>$this->input->post('username'),
					'password'=>$this->input->post('password'),
					'nama'=>$this->input->post('nama'),
					'phone'=>$this->input->post('phone'),
					'email'=>$this->input->post('email'));

		$this->data_futsal->ubah_admin($id,$data);

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Data berhasil diubah</div>');
		redirect('futsal/adm/admin_futsal');
	}

	public function admin_delete()
	{
		$id=$this->input->get('id');

		$this->data_futsal->hapus_admin($id);

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Data berhasil dihapus</div>');
		redirect('futsal/adm/admin_futsal');
	}

	public function member()
	{
		$data=array('judul'=>'Member futsal',
					'member'=>$this->data_futsal->member());

		$this->load->view('futsal/adm/template/header',$data);
		$this->load->view('futsal/adm/member',$data);
		$this->load->view('futsal/adm/template/footer');
	}

	public function member_update()
	{
		$this->form_validation->Set_rules('jk','Jk','required|trim',array('required'=>'Jenis kelamin harus diisi masi kosong'));
		$this->form_validation->Set_rules('nama','Nama','required|trim',array('required'=>'Nama masi kosong'));
		$this->form_validation->Set_rules('nohp','Nohp','required|trim',array('required'=>'No hape masi kosong'));
		$this->form_validation->Set_rules('email','Email','required|trim|valid_email',array('required'=>'Email masi kosong',
																							'valid_email'=>'Itu bukan email'));
		if($this->form_validation->run()==false){

			$kode=$this->input->get('kode');
			$data=array('judul'=>'Tambah admin',
						'member'=>$this->data_futsal->aksi_member($kode));

			$this->load->view('futsal/adm/template/header',$data);
			$this->load->view('futsal/adm/update_member',$data);
			$this->load->view('futsal/adm/template/footer');

		}else{
			$this->simpan_update_member();
		}
	}

	private function simpan_update_member()
	{
		$id=$this->input->get('kode');
		$data=array('jenis_kelamin'=>$this->input->post('jk'),
					'nama_lengkap'=>$this->input->post('nama'),
					'hp'=>$this->input->post('nohp'),
					'email'=>$this->input->post('email'));

		$this->data_futsal->ubah_member($id,$data);

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Data berhasil diubah</div>');
		redirect('futsal/adm/admin_futsal/member');
	}

	public function member_delete()
	{
		$kode=$this->input->get('kode');
		$this->data_futsal->hapus_member($kode);

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Data berhasil dihapus</div>');
		redirect('futsal/adm/admin_futsal/member');
	}

	public function lapangan()
	{
		$this->form_validation->set_rules('judullapangan','Judullapangan','required|trim',array('required'=>'Judullapangan harus diisi'));
		$this->form_validation->set_rules('ket','Ket','required|trim',array('required'=>'Keterangan masi kosong'));
		$this->form_validation->set_rules('harga1','Harga1','required|trim',array('required'=>'Harga siang masi kosong'));
		$this->form_validation->set_rules('harga2','Harga2','required|trim',array('required'=>'Harga malam masi kosong'));

		if($this->form_validation->run()==false){
			$data=array('judul'=>'Data Lapangan',
						'lapangan'=>$this->data_futsal->cek_lapangan());

			$this->load->view('futsal/adm/template/header',$data);
			$this->load->view('futsal/adm/lapangan',$data);
			$this->load->view('futsal/adm/modal',$data);
			$this->load->view('futsal/adm/template/footer');
		}else{
			$this->proses_lapangan();
		}
	}

	private function proses_lapangan()
	{
		$cek=$this->input->get('kode');

		$data=array('nm'=>$this->input->post('judullapangan'),
					'ket'=>$this->input->post('ket'),
					'harga1'=>$this->input->post('harga1'),
					'harga2'=>$this->input->post('harga2'),
					'f1'=>$this->input->post('f1'),
					'f2'=>$this->input->post('f2'),
					'f3'=>$this->input->post('f3'));
		if($cek == 1){
			echo "1";
		}else if($cek == 2){
			echo "2";
		}else{
			echo "3";
		}
	}

	public function pemesanan()
	{
		$data=array('judul'=>'Pemesanan',
					'pemesanan'=>$this->data_futsal->pemesanan());

		$this->load->view('futsal/adm/template/header',$data);
		$this->load->view('futsal/adm/pemesanan',$data);
		$this->load->view('futsal/adm/template/footer');
	}

	public function laporan()
	{
		$data=array('judul'=>'Laporan',
					'lapangan'=>$this->data_futsal->cek_lapangan());

		$this->load->view('futsal/adm/template/header',$data);
		$this->load->view('futsal/adm/laporan',$data);
		$this->load->view('futsal/adm/template/footer');
	}

	public function konfirmasi()
	{
		$data=array('judul'=>'Konfirmasi',
					'lapangan'=>$this->data_futsal->cek_lapangan());

		$this->load->view('futsal/adm/template/header',$data);
		$this->load->view('futsal/adm/konfirmasi',$data);
		$this->load->view('futsal/adm/template/footer');
	}

	public function permintaan()
	{
		$data=array('judul'=>'Laporan',
					'lapangan'=>$this->data_futsal->cek_lapangan());

		$this->load->view('futsal/adm/template/header',$data);
		$this->load->view('futsal/adm/permintaan',$data);
		$this->load->view('futsal/adm/template/footer');
	}

	public function log_out()
	{
		$this->session->unset_userdata('admin');

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Anda berhasil keluar</div>');
		redirect('futsal/autentifikasi/login_admin');
	}
}