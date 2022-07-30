<?php
class pengunjung extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('futsal/data_futsal');
	}

	public function index()
	{
		$this->form_validation->set_rules('email','Email','required|trim',array('required'=>'Email masi kosong'));
		$this->form_validation->set_rules('password','Password','required|trim',array('required'=>'Password masi kosong'));

		if($this->form_validation->run()==false){
			$data=array('judul'=>'Pengunjung');

			$this->load->view('futsal/asset/header',$data);
			$this->load->view('futsal/index');
			$this->load->view('futsal/sidebar');
			$this->load->view('futsal/modal');
			$this->load->view('futsal/asset/footer');	
		}else{
			$this->cek_login();
		}
	}

	private function cek_login()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$cek_email=$this->data_futsal->cek_email($email);

		if($cek_email){

			if($password == $cek_email[0]->password){

				$data=array('nama_lengkap'=>$cek_email[0]->nama_lengkap,
							'email'=>$cek_email[0]->email,
							'nohp'=>$cek_email[0]->hp,
							'id_user'=>$cek_email[0]->id_user);

				$this->session->set_userdata($data);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Login berhasil</div>');
				redirect('futsal/member_futsal');

			}else{

				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Password yang anda masukan salah</div>');
				redirect('futsal/pengunjung');
			}
		} else{
			
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Email belum terdaftar</div>');
			redirect('futsal/pengunjung');
		}
	}

	public function lapangan()
	{
		$data=array('judul'=>'Lapangan',
					'lapangan'=>$this->data_futsal->cek_lapangan());

		$this->load->view('futsal/asset/header',$data);
		$this->load->view('futsal/lapangan',$data);
		$this->load->view('futsal/modal');
		$this->load->view('futsal/asset/footer');
	}

	public function daftar()
	{
		$data=array('judul'=>'Daftar Pengunjung');

		$this->load->view('futsal/asset/header',$data);
		$this->load->view('futsal/daftar_member');
		$this->load->view('futsal/asset/footer');
	}
}