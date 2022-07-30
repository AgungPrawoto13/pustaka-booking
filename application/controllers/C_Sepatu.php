<?php
class C_Sepatu extends CI_Controller
{
	public function index()
	{
		$this->load->view('V_Sepatu');
	}

	public function proses()
	{
		$this->load->model('M_Sepatu');
		$data=['nama'=>$this->input->post('nama'),
			   'nohp'=>$this->input->post('nohp'),
			   'merk'=>$this->input->post('merk'),
			   'ukuran'=>$this->input->post('ukuran'),
			   'harga'=>$this->M_Sepatu->cabang()
			];
		$this->load->view('V_Sepatu1',$data);
	}
}
?>