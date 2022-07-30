<?php
class home extends CI_Controller
{
	public function index()
	{
		$data=array('judul'=>'Home');
		
		$this->load->view('tu/template/header',$data);
		$this->load->view('tu/home');
		$this->load->view('tu/template/footer');
	}
}