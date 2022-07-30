<?php
class autentifikasi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('futsal/data_futsal');
	}

	public function index()
	{
		$this->form_validation->set_rules('namalengkap','Namalengkap','required|trim',array('required'=>'Nama harus diisi'));
		$this->form_validation->set_rules('email','Email','required|trim|valid_email',array('required'=>'Email harus diisi',
			'valid_email'=>'Email tidak benar'));
		$this->form_validation->set_rules('handphone','Handphone','required|trim',array('required'=>'Nomor handphone harus diisi'));
		$this->form_validation->set_rules('alamat','Alamat','required|trim',array('required'=>'Alamat harus diisi'));
		$this->form_validation->set_rules('password','Password','required|trim',array('required'=>'Password harus diisi'));

		if($this->form_validation->run()==false){
			$data=array('judul'=>'Daftar Pengunjung');

			$this->load->view('futsal/asset/header',$data);
			$this->load->view('futsal/daftar_member');
			$this->load->view('futsal/asset/footer');
		}else{
			$this->daftar_member();
		}
	}

	private function daftar_member()
	{
		$data=array('nama_lengkap'=>$this->input->post('namalengkap'),
					'jenis_kelamin'=>$this->input->post('jeniskelamin'),
					'email'=>$this->input->post('email'),
					'hp'=>$this->input->post('handphone'),
					'alamat'=>$this->input->post('alamat'),
					'password'=>$this->input->post('password'));

		$this->data_futsal->daftar_member($data);

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Pendaftaran member berhasil</div>');
		redirect('futsal/member_futsal');
	}

	public function login_admin()
	{
		$this->form_validation->set_rules('username','Username','required|trim',array('required'=>'Username masi kosong'));
		$this->form_validation->set_rules('password','Password','required|trim',array('required'=>'Password masi kosong'));

		if($this->form_validation->run()==false){
			$data=array('judul'=>'Login Admin',
						'admin'=>$this->data_futsal->tampil_admin());

			$this->load->view('futsal/adm/template/header_login',$data);
			$this->load->view('futsal/adm/login_admin');
			$this->load->view('futsal/adm/template/footer');
		}else{
			$this->proses_login();
		}
	}

	private function proses_login()
	{
		$user=$this->input->post('username');
		$pass=$this->input->post('password');
		$cek=$this->data_futsal->cek_admin($user);

		if($cek){

			if($pass == $cek[0]->password){
				
				$data=array('admin'=>$cek[0]->username);

				$this->session->set_userdata($data);
				redirect('futsal/adm/admin_futsal');
			}else{

				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Password salah</div>');
				redirect('futsal/autentifikasi/login_admin');
			}
		}else{

			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Username belum terdaftar</div>');
			redirect('futsal/autentifikasi/login_admin');
		}
	}

	public function tambah_admin()
	{
		$this->form_validation->Set_rules('username','Username','required|trim',array('required'=>'Username masi kosong'));
		$this->form_validation->Set_rules('password','Password','required|trim',array('required'=>'Password masi kosong'));
		$this->form_validation->Set_rules('nama','Nama','required|trim',array('required'=>'Nama masi kosong'));
		$this->form_validation->Set_rules('phone','Phone','required|trim',array('required'=>'Phone masi kosong'));
		$this->form_validation->Set_rules('email','Email','required|trim|valid_email',array('required'=>'Email masi kosong',
																							'valid_email'=>'Itu bukan email'));

		if($this->form_validation->run()==false){
			$data=array('judul'=>'Tambah admin',
						'admin'=>$this->data_futsal->tampil_admin());

			$this->load->view('futsal/adm/template/header',$data);
			$this->load->view('futsal/adm/tambah_admin',$data);
			$this->load->view('futsal/adm/template/footer');
		}else{
			$this->simpan_data();
		}
	}

	private function simpan_data()
	{
		$data=array('username'=>$this->input->post('username'),
					'password'=>$this->input->post('password'),
					'nama'=>$this->input->post('nama'),
					'phone'=>$this->input->post('phone'),
					'email'=>$this->input->post('email'));

		$this->data_futsal->tambah_admin($data);

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Data berhasil disimpan</div>');
		redirect('futsal/adm/admin_futsal');
	}
}