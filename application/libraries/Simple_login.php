<?php
class Simple_login
{
	// Set super global
	var $CI=NULL;
	public function __construct(){
		$this->CI=& get_instance();
	}

	//login
	public function login($username,$password){
		//query untuk mencocokan data
		$query=$this->CI->db->get_where('user', array(
									  'username'=>$username,
									  'password'=>$password));

		//jika ada hasilnya
		if($query->num_rows() !=0){
			$row=$this->CI->db->query('SELECT * FROM user WHERE username="'.$username.'"');
			$admin	=$row->row();
			$id		=$admin->id_user;
			$nama	=$admin->nama;

			// $_SESSION['username']=$username;
			$this->CI->session->set_userdata('username',$username);
			$this->CI->session->set_userdata('id_user',$id);
			$this->CI->session->set_userdata('nama',$nama);
			//kalau benar di direct

			redirect(base_url('C_home'));	
		}else{
			$this->CI->session->set_flashdata('sukses','OOppss... Username/password salah');
			redirect(base_url().'C_Membuat_website');
		}
		return false;
	}

	//cek login
	public function cek_login()
	{
		if($this->CI->session->userdata('username')=='' && $this->CI->session->userdata('aktivasi')==''){
			base_url('C_Home');
		}
	}

	public function logout()
	{
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('id_user');
		$this->CI->session->unset_userdata('nama');
		session_destroy();
		$this->CI->session->set_flashdata('sukses','Anda Telah sukses log out');
		redirect(base_url().'C_Membuat_website');
	}
}