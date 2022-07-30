<?php
class autentifikasi extends CI_Controller
{
	public function index()
	{
		$this->form_validation->set_rules('email','Email','required|trim|valid_email',array('required'=>'Email masi kosong',
			'valid_email'=>'Email tidak benar'));
		$this->form_validation->set_rules('password','Password','required|trim',array('required'=>'Password masi kosong'));

		if($this->form_validation->run()==false){
			$data=array('judul'=>'Fake Website',
						'konten'=>'belajar/tampilan');

			$this->load->view('belajar/asset/wrapper',$data);
		}else{
			$this->_Masuk();
		}
	}

	private function _Masuk()
	{
		$this->cek->tes();
	}
}