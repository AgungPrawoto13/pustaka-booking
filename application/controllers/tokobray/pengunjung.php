<?php
class pengunjung extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('tokobray/m_toko');
		$this->load->library('cek_user');
	}

	public function index()
	{
		$data=array('judul'=>'Prodak Baju');
		$this->load->view('tokobray/template/header',$data);
		$this->load->view('tokobray/v_home');
		$this->load->view('tokobray/template/footer');
	}
	
	public function tentang(){
		$data=array('judul'=>'Info Website');
		$this->load->view('tokobray/template/header',$data);
		$this->load->view('tokobray/v_tentang');
		$this->load->view('tokobray/template/footer');
	}

	
	public function wanita(){
		$data=array('judul'=>'Prodak Wanita');
		$this->load->view('tokobray/template/header',$data);
		$this->load->view('tokobray/v_wanita');
		$this->load->view('tokobray/template/footer');
	}

	public function pria(){
		$data=array('judul'=>'Prodak Laki');
		
		$this->load->view('tokobray/template/header',$data);
		$this->load->view('tokobray/v_laki');
		$this->load->view('tokobray/template/footer');
	}

	public function katalog(){
		
		$ukuran=$this->input->post('ukuran');
		$cek=$this->m_toko->tampilKatalog($prodak);
		$data=array('judul'=>'Katalog Pengunjung',
					'cek'=>$cek,
					'ukuran'=>$ukuran);

		$this->load->view('tokobray/template/header',$data);
		$this->load->view('tokobray/katalog',$data);
		$this->load->view('tokobray/template/footer');
	}

	public function kontak(){
		$data=array('judul'=>'Kontak');
		$this->load->view('tokobray/template/header',$data);
		$this->load->view('tokobray/v_kontak');
		$this->load->view('tokobray/template/footer');
	}

	public function cari(){
		echo "cari";
	}

	public function masuk(){
		$this->form_validation->set_rules('email','Email','required|trim',array('required'=>'Email harus diisi'));
		$this->form_validation->set_rules('sandi','Sandi','required|trim',array('required'=>'Sandi harus diisi'));

		if($this->form_validation->run()==false){
			$data=array('judul'=>'Masuk');
			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/v_login');
			$this->load->view('tokobray/template/footer');
		}else{
			$this->_proses();
		}
	}

	private function _proses(){
		$email=$this->input->post('email');
		$sandi=$this->input->post('sandi');
		$cekuser=$this->m_toko->cek_email($email);

		if($cekuser){
			if($sandi == $cekuser[0]->sandi_member){
				
				$data=array('nama_user'=>$cekuser[0]->nama_depan,
							'email'=>$cekuser[0]->email,
							'gambar_user'=>base_url('assets/tokobray/user/default.jpg'));
				$this->session->set_userdata($data);
				redirect('tokobray/member');
			}else{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Sandi salah</div>');
				redirect('tokobray/pengunjung/masuk');
			}
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Emailnya belum kedaftar</div>');
			redirect('tokobray/pengunjung/masuk');
		}
	}

	public function daftar()
	{
		$this->form_validation->set_rules('nama_depan','Nama_Depan','required|trim',array('required'=>'Nama depan belum di isi'));
		$this->form_validation->set_rules('nama_belakang','Nama_Belakang','required|trim',array('required'=>'Nama belakang belum diisi'));
		$this->form_validation->set_rules('email','Email','required|trim',array('required'=>'Email harus diisi'));
		$this->form_validation->set_rules('sandi','Password','required|trim',array('required'=>'Password harus diisi'));
		if($this->form_validation->run()==false){
			$data=array('judul'=>'Daftar Member');
			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/v_daftar');
			$this->load->view('tokobray/template/footer');
		}else{
			$this->proses_daftar();
		}	
	}

	private function proses_daftar(){
		$email=$this->input->post('email');
		$cek=$this->m_toko->cek_email($email);
		
		if($cek){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" roles="alert">Emailnya udah kedaftar duluan</div>');
			redirect('tokobray/pengunjung/daftar');
		}else{
			$data=array('nama_depan'=>$this->input->post('nama_depan'),
						'nama_belakang'=>$this->input->post('nama_belakang'),
						'email'=>$email,
						'sandi_member'=>$this->input->post('sandi'),
						'kelamin'=>$this->input->post('kelamin'),
						'gambar_user'=>'default.jpg');

			$this->m_toko->daftar_member($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Yey membernya udh kedaftar</div>');
			redirect('tokobray/pengunjung/masuk');
		}
	}

	public function lupa_sandi(){

		if($this->session->userdata('email')){
			$data=array('email'=>$this->session->userdata('email'),
						'judul'=>'Lupa Sandi');

			$this->load->view('tokobray/template/header',$data);
			$this->load->view('tokobray/v_lupa_sandi',$data);
			$this->load->view('tokobray/template/footer');

		}else{
			$this->form_validation->set_rules('email','Email','required|trim',array('required'=>'Email harus diisi'));

			if($this->form_validation->run()==false){
				$data=array('judul'=>'Lupa Sandi');
				$this->load->view('tokobray/template/header',$data);
				$this->load->view('tokobray/v_lupa_sandi',$data);
				$this->load->view('tokobray/template/footer');
			}else{
				$this->proses_cek();
			}
		}
	}

	private function proses_cek(){
		$email=$this->input->post('email');
		$cek=$this->m_toko->cek_email($email);
		if($cek){
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Sandinya ketemu</div>');

			$sandi=$cek[0]->sandi_member;
			$email=$cek[0]->email;

			$data=array('sandi'=>$sandi,
						'email'=>$email);

			$this->session->set_userdata($data);
			redirect('tokobray/pengunjung/lupa_sandi');
		}else{
			
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Email belum terdaftar</div>');
			redirect('tokobray/pengunjung/lupa_sandi');
		}
	}
}
