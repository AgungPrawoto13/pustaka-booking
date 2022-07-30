<?php
class C_Login extends CI_Controller
{
	public function index()
	{
		//jika statusnya sudah login, maka tidak bisa mengakseshalaman login alias dikembalikan ke tampilan user

		$this->form_validation->set_rules('username','required|trim|valid_username', 
	    [
	     'required' => 'Username Harus Diisi !',
	     'valid_username' => 'Username Tidak Benar !']);

		$this->form_validation->set_rules('password','required|trim', 
	    [
	     'required' => 'Password Harus Diisi !']);

		if($this->form_validation->run() == false) {
			$data['judul']='Login';
			$data['user']='';

			$this->load->view('templates/header',$data);
			$this->load->view('V_Login');
			$this->load->view('templates/footer');
		} 
	}

	public function proses()
	{
		$data=[
		       'username'=>$this->input->post('username'),
		       'password'=>$this->input->post('password')];
		$this->load->view('templates/header_login');
		$this->load->view('V_Home');
		$this->load->view('templates/footer_login');
	}
}