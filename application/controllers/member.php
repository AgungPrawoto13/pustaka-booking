<?php
class member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('ModelBuku','ModelUser','ModelBooking'));
	}

	public function index()
	{
		$this->_login();
	}

	private function _login()
	{
		$email=htmlspecialchars($this->input->post('email',true));
		$password = $this->input->post('password',true);
		$user=$this->ModelUser->cekData(array('email'=>$email))->row_array();

		//jika user ada
		if($user){
			//jika user sudah aktif
			if($user['is_active']==1){
				//cek password
				if($password==$user['password']){
					$data=array('email'=> $user['email'],
								'role_id'=> $user['role_id'],
								'id_user'=> $user['id'],
								'nama'=> $user['nama']);
					$this->session->set_userdata($data);
					redirect('home');
				} else {
					$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Password Salah !!</div>');
					redirect('home');
				}
			} else {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">User belum Aktif !!! </div>');
				redirect('home');
			}
		} else {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Email Tidak Terdaftar !!! </div>');
			redirect('home');
		}
	}

	public function daftar()
	{
		$this->form_validation->set_rules('nama','Nama Lengkap','required', array('required' => 'Nama Belum di isi !!'));
		$this->form_validation->set_rules('alamat','Alamat Lengkap','required',array('required'=>'Alamat Belum di isi !!'));
		$this->form_validation->set_rules('email','Alamat Email','required|trim|valid_email|is_unique[user.email]',
			array('valid_email'=>'Email Tidak benar !!',
				  'required'=>'Email Belum di isi !!',
				  'is_unique'=>'Email Sudah Terdaftar !!'));
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',
			array('matches'=>'Password Tidak Sama !!',
				  'min_length'=>'Password Terlalu Pendek'));
		$this->form_validation->set_rules('password2','Repeat Password','required|trim|matches[password1]');

		$email=$this->input->post('email',true);
		$data=array(
					'nama'=>htmlspecialchars($this->input->post('nama',true)),
					'alamat'=>$this->input->post('alamat',true),
					'email'=>htmlspecialchars($email),
					'image'=>'default.jpg',
					'password'=>$this->input->post('password1'),
					'role_id'=>2,
					'is_active'=>1,
					'tanggal_input'=>time());
		$this->ModelUser->simpanData($data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Selamat akun anggota anda sudah dibuat</div>');
		redirect(base_url());
	}

	public function myProfil()
	{
		$user=$this->ModelUser->cekData(array('email'=>$this->session->userdata('email')))->row_array();

		$data=array('image'=>$user['image'],
					'user'=>$user['nama'],
					'email'=>$user['email'],
					'tanggal_input'=>$user['tanggal_input'],
					'judul'=>'Profil Saya');

		$this->load->view('templates/templates-user/header',$data);
		$this->load->view('member/index',$data);
		$this->load->view('templates/templates-user/modal');
		$this->load->view('templates/templates-user/footer');
	}

	public function ubahprofil()
	{
		$user=$this->ModelUser->cekData(array('email'=>$this->session->userdata('email')))->row_array();

		$data=array('judul'=>'Profil Saya',
					'image'=>$user['image'],
					'user'=>$user['nama'],
					'email'=>$user['email'],
					'tanggal_input'=>$user['tanggal_input'],
					'upload_image'=>'');

		$this->form_validation->set_rules('nama','Nama Lengkap','required|trim',array('required'=>'Nama tidak boleh kosong'));

		if($this->form_validation->run()==false){
			$this->load->view('templates/templates-user/header',$data);
			$this->load->view('member/ubah-anggota',$data);
			$this->load->view('templates/templates-user/modal');
			$this->load->view('templates/templates-user/footer');
		}else{
			$nama=$this->input->post('nama',true);
			$email=$this->input->post('email',true);

			// //jika ada gambar yang akan diupload
			$upload_image=$_FILES['image']['name'];

			if($upload_image){
				$config=array('upload_path'=>'./assets/img/profile/',
							  'image'=>$upload_image,
							  'allowed_types'=>'.gif|jpg|png',
							  'max_size'=>'3000',
							  'max_width'=>'1024',
							  'max_height'=>'1000',
							  'file_name'=>'pro'.time());

				$this->ModelUser->updategambar($upload_image);
				$this->db->set('nama',$nama);
				$this->db->where('email',$email);
				$this->db->update('user');

				// if($this->upload->do_upload('image')){
				// 	$gambar_lama=$data['user']['image'];
				// 	if($gambar_lama != 'default.jpg'){
				// 		unlink(FCPATH.'assets/img/profile/'.$gambar_lama);
				// 	}

				// 	$gambar_baru=$this->upload->data('file_name');
				// 	$this->db->set('image',$gambar_baru);
				// } else{

				// }
			}

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Profil berhasil di rubah </div>');
			redirect('member/myprofil');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Anda telah logout </div>');
		redirect('home');
	}
}