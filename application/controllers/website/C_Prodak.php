<?php
class C_Prodak extends CI_Controller
{

	//load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website/M_Prodak');

		$cek=$this->session->userdata('status');

		if($cek != 'Login'){
			redirect('website/C_Membuat_website/tampil_login');
		}
	}

	public function index()
	{
		$barang=$this->M_Prodak->baju_barcelona();

		$data=['barang'=>$barang];
		$this->load->view('website/prodak',$data);
	}

	public function real_madrid()
	{
		$barang=$this->M_Prodak->baju_real_madrid();
		$data=['barang'=>$barang];
		$this->load->view('website/prodak',$data);
	}

	public function bayern_munich()
	{
		$barang=$this->M_Prodak->baju_bayern_munich();
		$data=['barang'=>$barang];
		$this->load->view('website/prodak',$data);
	}

	public function manchester_united()
	{
		$barang=$this->M_Prodak->baju_manchester_united();
		$data=['barang'=>$barang];
		$this->load->view('website/prodak',$data);
	}

	public function manchester_city()
	{
		$barang=$this->M_Prodak->baju_manchester_city();
		$data=['barang'=>$barang];
		$this->load->view('website/prodak',$data);
	}

	public function liverpool()
	{
		$barang=$this->M_Prodak->baju_liverpool();
		$data=['barang'=>$barang];
		$this->load->view('website/prodak',$data);
	}

	public function sepatu_nike()
	{
		$barang=$this->M_Prodak->sepatu_nike();
		$data=['barang'=>$barang];
		$this->load->view('website/prodak',$data);
	}

	public function sepatu_adidas()
	{
		$barang=$this->M_Prodak->sepatu_adidas();
		$data=['barang'=>$barang];
		$this->load->view('website/prodak',$data);
	}	

	public function sepatu_puma()
	{
		$barang=$this->M_Prodak->sepatu_puma();
		$data=['barang'=>$barang];
		$this->load->view('website/prodak',$data);
	}

	public function pemesanan()
	{
		//berfungsi sebagai penanda bahwa si user telah memesan barang 
		if(isset($_POST['id'])){
			$id_prodak=$_POST['id'];
			$cek=$this->M_Prodak->proses_pesan($id_prodak);
			$data=['barang'=>$cek];
			$this->load->view('website/pemesanan_barcelona',$data);
			// var_dump($data);
			
			// else if berfungsi jika si user mau melihat transaksi pembelian maka dicek terlebih dahulu apakah si user sudah pesan barang atau belum
		 }else if($this->ModelUser->cekBarang(['id_prodak'=>$this->session->userdata('id_prodak')])->row_array()){
			$cek=$this->ModelUser->cekBarang(['id_prodak'=>$this->session->userdata('id_prodak')]);

			//sesi ini kita convert terlebih dahulu datanya karna isi dari $cek ini datanya masih belum menjadi object maka dari itu kita convert terlebih dahulu 
			$barang=$this->M_Prodak->convert($cek);
			
			$array=['barang'=>$barang];
			$this->load->view('website/pemesanan_barcelona',$array);
		}else{
			//jika belum maka pesanan kosong
			$cek=$this->M_Prodak->lihat_pesanan();
			$data=['barang'=>$cek];
			$this->load->view('website/pemesanan_barcelona',$data);
		}
	}

	public function hapus_pesanan()
	{
		$id_baju=$_GET['id_prodak'];
		$barang=$this->M_Prodak->hapus_pesanan($id_baju);
		$data=['barang'=>$barang];
		$this->load->view('website/pemesanan_barcelona',$data);
	}

	public function tambah_pesanan()
	{
		$this->load->view('website/V_Membuat_website');
	}

	public function update_pemesanan()
	{
		$update=0;
		$stock=$this->input->post('stock');
		$id=$this->input->post('rowid');
		$qty=implode("",$stock);
		$rowid=implode("",$id);
		$cek=$this->M_Prodak->perbarui_pesanan($qty,$rowid);
		$data=['barang'=>$cek];
		$this->load->view('website/pemesanan_barcelona',$data);
	}
	public function simpan_pesanan()
	{
		$cek=$this->session->userdata('nama_prodak');
		$data_pesanan=[
		               'nama'=>$_POST('nama'),
		               'alamat'=>$_POST('alamat'),
		               'provinsi'=>$_POST('provinsi'),
		               'kota_kab'=>$_POST('kota_kab'),
		               'kecamatan'=>$_POST('kecamatan'),
		               'kode_pos'=>$_POST('kode_pos'),
		               'no_telp'=>$_POST('no_telp'),
		               'email'=>$_POST('email')];

		$this->M_Prodak->simpan_pesanan($data_pesanan);
	}
}