<?php
class membuat_website extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('proses');
	}

	public function index()
	{
		$this->form_validation->set_rules('email','Email','required|trim|valid_email',array('required'=>'Email masi kosong',
			'valid_email'=>'Email tidak benar'));
		$this->form_validation->set_rules('password','Password','required|trim',array('required'=>'Password masi kosong'));

		if($this->form_validation->run()==false){
			$data=array('judul'=>'Fake website',
						'isi'=>'belajar/home');

			$this->load->view('belajar/asset/wrapper',$data);
		}else{
			$this->masuk();
		}
	}

	private function masuk()
	{
		echo "masuk";
	}

	public function daftar(){

		$this->form_validation->set_rules('nama','Nama','required|trim',array('required'=>'Nama harus diisi'));
		$this->form_validation->set_rules('tempat_lahir','Tempat_lahir','required|trim',array('required'=>'Tempat_lahir harus diisi'));
		$this->form_validation->set_rules('tanggal_lahir','Tanggal_lahir','required|trim',array('required'=>'Tanggal_lahir harus diisi'));
		$this->form_validation->set_rules('email1','Email1','required|trim|valid_email',array('required'=>'Email masi kosong',
			'valid_email'=>'Email tidak benar'));
		$this->form_validation->set_rules('password1','Password1','required|trim|min_length[3]|matches[password2]',array('required'=>'Password harus diisi',
			'min_length'=>'Password terlalu pendek',
			'matches'=>'Password tidak sama'));
		$this->form_validation->set_rules('password2','Password2','required|trim|matches[password1]');

		if($this->form_validation->run()==false){
			$data=array('judul'=>'Fake website',
						'isi'=>'belajar/tampilan');

			$this->load->view('belajar/asset/wrapper',$data);
		}else{
			$this->proses_daftar();
		}
	}

	private function proses_daftar(){
		$data=array('nama'=>$this->input->post('nama'),
					'tempat_lahir'=>$this->input->post('tempat_lahir'),
					'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
					'email1'=>$this->input->post('email1'),
					'password1'=>$this->input->post('password1'),
					'password2'=>$this->input->post('password2'));
		
		
	}
}