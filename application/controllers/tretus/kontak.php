<?php
class kontak extends CI_Controller
{
	var $API = "";

	function __construct()
	{
		parent::__construct();
		$this->API="http://localhost/pustaka-booking/index.php";
	}

	function index()
	{
		$data['datakontak']=json_decode($this->curl->simple_get($this->API.'/kontak'));
		$this->load->view('kontak/list',$data);
	}
}