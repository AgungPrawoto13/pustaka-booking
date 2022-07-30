<?php
class web_pribadi extends CI_Controller
{
	public function index()
	{
		$data=array('judul'=>'Tampilan Login');
		
		$this->load->view('belajar/asset/header_ku',$data);
		$this->load->view('belajar/login');
	}
}