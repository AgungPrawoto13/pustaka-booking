<?php
class login_admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('laundry/m_laundry');
	}

	public function index(){
		
		$this->form_validation->set_rules('username','Username','required|trim', array('required'=>'Username harus diisi'));
		$this->form_validation->set_rules('password','Password','required|trim', array('required'=>'Password harus diisi'));
		if($this->session->userdata('username')){
			redirect('laundry/admin');
		}else{
			if($this->form_validation->run() == false){
				$data=array('judul'=>'Tampil Login');
				$this->load->view('laundry/template/header',$data);
				$this->load->view('laundry/tampil_login');
				$this->load->view('laundry/template/footer');
			}else{
				$this->_login();
			}
		}
	}

	private function _login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$cekuser=$this->m_laundry->cek_admin($username)->row_array();

		if($cekuser){
			if($password == $cekuser['password_admin']){
				$data=array('username'=>$cekuser['nama_admin']);

				$this->session->set_userdata($data);
				redirect('laundry/admin');
			} else {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Passwordnya salah ka :(</div>');
				redirect('laundry/login_admin');
			}
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Usernya belum kedaftar tau ka :(</div>');
			redirect('laundry/login_admin');
		}
	}

	public function daftar(){

		$this->form_validation->set_rules('username','Username','required|trim', array('required'=>'Username harus diisi'));
		$this->form_validation->set_rules('password','Password','required|trim', array('required'=>'Password harus diisi'));
		$this->form_validation->set_rules('hint','Hint','required|trim', array('required'=>'Kata pengaman kosong'));

		if($this->form_validation->run() == false){
			$data=array('judul'=>'Daftar Admin');
			$this->load->view('laundry/template/header',$data);
			$this->load->view('laundry/daftar_admin');
			$this->load->view('laundry/template/footer');
		}else{
			$this->proses_daftar();
		}
	}

	private function proses_daftar(){
		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$hint=$this->input->post('hint');
		$cek=$this->m_laundry->cek_admin($username)->row_array();

		if($cek !=0){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Usernamenya udah kedaftar ka :(</div>');
			redirect('laundry/login_admin/daftar');
		}else{
			$data=array('nama_admin'=>$username,
						'password_admin'=>$password,
						'hint'=>$hint);
			$tes=$this->m_laundry->daftar_admin($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Yey usernya udh kedaftar kk :D</div> ');
			redirect('laundry/login_admin');
		}
	}

	public function lupa_password(){

		$this->form_validation->set_rules('username','Username','required|trim', array('required'=>'Username harus diisi'));
		$this->form_validation->set_rules('hint','Hint','required|trim', array('required'=>'Kata Pengaman kosong'));

		if($this->form_validation->run() == false){
			$data=array('judul'=>'Lupa Password',
						'username'=>$this->session->userdata('username'),
						'password'=>$this->session->userdata('password'),
						'hint'=>$this->session->userdata('hint'));

			$this->load->view('laundry/template/header',$data);
			$this->load->view('laundry/lupa_password');
			$this->load->view('laundry/template/footer');
		}else{
			$this->proses_cek();
		}
	}

	private function proses_cek(){
		$username=$this->input->post('username');
		$hint=$this->input->post('hint');
		$cek=$this->m_laundry->cek_admin($username)->row_array();

		if($cek !=0){
			if($hint == $cek['hint']){
				$password=$cek['password_admin'];
				$data=array('username'=>$username,
							'password'=>$password,
							'hint'=>$hint);
				$this->session->set_userdata($data);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Yey passwordnya ketemu :D</div>');
				redirect('laundry/login_admin/lupa_password',$data);
			} else {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Kata Keamananya salah kk :(</div>');
				redirect('laundry/login_admin/lupa_password');
			}
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">User belum terdaftar ka :(</div>');
			redirect('laundry/login_admin/lupa_password');
		}
	}

	public function tampil_password(){

		$this->load->view('laundry/template/header');
		$this->load->view('laundry/lupa_password');
		$this->load->view('laundry/template/footer');
	}
}