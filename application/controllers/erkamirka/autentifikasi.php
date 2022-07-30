<?php
class autentifikasi extends CI_Controller
{
	// function __construct()
	// {
	// 	parent::__construct();
	// 	$this->cek->cek_login();
	// }

	public function index()
	{
		if($this->session->userdata('email')){
			redirect('erkamirka/admin');
		}

		$this->form_validation->set_rules('email','Email','required|trim|valid_email',array('required'=>'Email harus diisi',
			'valid_email'=>'Email tidak benar'));
		$this->form_validation->set_rules('password','Password','required|trim|min_length[3]',array('required'=>'Password harus diisi',
			'min_length'=>'Password terlalu pendek'));

		if($this->form_validation->run()==false){

			$data=array('judul'=>'Login Admin',
						'isi_konten'=>'erkamirka/admin/isi_konten');

			$this->load->view('erkamirka/admin/asset/wrapper',$data);

		}else{
			$this->_login();
		}
	}

	private function _login()
	{
		$email=$this->input->post('email');
		$pass=$this->input->post('password');
		$this->cek->proses_login($email,$pass);
	}
}