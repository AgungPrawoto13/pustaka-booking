<?php
class javasc extends CI_Controller
{
	public function index()
	{
		$this->load->view('belajar/javasc');
	}

	public function popup()
	{
		$this->load->view('belajar/tampil_popup');
	}

	public function login()
	{
		echo "sd";
	}
}