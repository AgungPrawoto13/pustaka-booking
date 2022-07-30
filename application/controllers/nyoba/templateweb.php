<?php
class templateweb extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelBuku');
	}
	public function index()
	{
		$this->load->view('templateweb/template/header_member');
	}

	public function tes()
	{
		$data=array('data'=>$this->ModelBuku->getBuku());
		$this->load->view('belajar/tes',$data);
	}
}