<?php
class C_Home extends CI_Controller
{
	public function index()
	{
		$cek=$this->session->userdata('status');
		
		//jika status user telah login maka user boleh mengakses website jika belum maka user harus login dahulu
		if($cek == 'Login'){
			$this->load->view('website/V_Membuat_website');
		}else{
			redirect('website/C_Membuat_website/tampil_login');
		}
	}
}