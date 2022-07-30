<?php
class C_Membuat_website extends CI_Controller
{
	public function index()
	{
		//jika statusnya user telah aktif maka secara otomatis si user akan diarahkan ke tampilan home
		if($this->session->userdata('username')){
			redirect('website/C_Home');
		}

		$this->load->view('website/Home');
	}

	public function tampil_login()
	{

		if($this->session->userdata('username')){
			redirect('website/C_Home');
		}

		$valid=$this->form_validation;

		$valid->set_rules('username','Username','required',
						array('required'=>'Username harus diisi'));
		$valid->set_rules('password','Password','required',
						array('required'=>'Password harus diisi'));

		if($valid->run()==false){

			$this->load->view('website/Login');
		}else{
			$this->aksi_login();
		}
	}

	private function aksi_login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$user=$this->ModelUser->cekData(['username'=>$username])->row_array();
		
		//jika user ada
		if($user){
			//jika user aktif
			if($user['aktivasi']==1){
				//cek password jika password sama maka user boleh mengakses web jika tidak 
				if($user['password'] == $password){
					$data=[
						'username'=>$username,
						'status'=>"Login"];

					$this->session->set_userdata($data);		
					redirect('website/C_Home');
				}else{
					$this->session->set_flashdata('pesan','Passwordnya salah kk :(');
					redirect('website/C_Membuat_website/tampil_login');
				}
			}else{
				$this->session->set_flashdata('pesan','usernya belum aktif kk :(');
				redirect('website/C_Membuat_website/tampil_login');
			}
		}else{
			$this->session->set_flashdata('pesan','usernya belum terdaftar kk :(');
			redirect('website/C_Membuat_website/tampil_login');
		}
	}

	//logout
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('nama');
		session_destroy();
		$this->session->set_flashdata('sukses','Anda Telah sukses log out');
		redirect(base_url().'website/C_Membuat_website');
	}
}