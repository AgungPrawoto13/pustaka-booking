<?php
class rest_api extends CI_Controller
{
	public function index()
	{
		// $db=$this->db->query('select * from sales_order')->result();
		// $data=json_encode($db);
		// echo $data;

		$data = array('json'=>'rest_api/belajar.json');
		$this->load->view('rest_api/tampilan',$data);
	}

	public function json()
	{
		$this->load->view('rest_api/belajar.json');
	}
}