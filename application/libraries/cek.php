<?php
class cek{

	var $CI=NULL;
	function __construct()
	{
		$this->CI=& get_instance();
	}

	public function proses_login($email,$pass)
	{
		$cek = $this->CI->db->query('SELECT * FROM user WHERE email="'.$email.'"');
		$isi = $cek->row();
		
		if($isi){
			if($pass == $isi->password){
				$data=array('email'=>$isi->email);

				$this->CI->session->set_userdata($data);

				redirect('erkamirka/admin');

			}else{
				$this->CI->session->set_flashdata('pesan','<div class="alert alert-danger alert-message text-center" role="alert">Password Salah</div>');

				redirect('erkamirka/autentifikasi');

			}
		}else{
			$this->CI->session->set_flashdata('pesan','<div class="alert alert-danger alert-message text-center" role="alert">Email tidak terdaftar</div>');

			redirect('erkamirka/autentifikasi');
		}
	}

	public function cek_login()
	{
		if($this->CI->session->userdata('email')){

			
		}else{

			redirect('erkamirka/autentifikasi');
		}
	}

	public function cek_sesi($sesi)
	{
		$email=$this->CI->session->userdata('email');
		$cek=$this->CI->transaksi->cek_admin($email);
		
		if(($cek->keterangan == "Manager" ) && ($email !=null)){

		}else if (($cek->role == $sesi) && ($email !=null)){

		}else{
			$this->CI->session->set_flashdata('pesan','<div class="alert alert-danger alert-message text-center" role="alert">Maaf anda tidak memiliki hak ases</div>');
			redirect('erkamirka/admin');
		}
	}

	public function cek_keterangan()
	{
		$email=$this->CI->session->userdata('email');
		$ket=$this->CI->transaksi->cek_admin($email);
	}
}