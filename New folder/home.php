<?php

Class home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('ModelBuku','ModelUser'));
	}

	public function index()
	{
		//jika sudah bisa login dan jika belom bisa login
		if ($this->session->userdata('email')){
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates/tempaltes-user/header', $data);
			$this->load->view('buku/daftarbuku', $data);
			// $this->load->view('templates/templates-user/model');
			$this->load->view('templates/templates-user/footer', $data);
		} else {
			$data=array('user' => 'pengunjung',
						'buku'=>$this->ModelBuku->getBuku()->result());
			$this->load->view('templates/templates-user/header', $data);
			$this->load->view('templates/daftarbuku', $data);
			// $this->load->view('templates/templates-user/model');
			$this->load->view('templates/templates-user/footer', $data);
			// var_dump($data);
		}
	}
}
