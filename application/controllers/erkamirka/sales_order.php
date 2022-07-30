<?php
class sales_order extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('erkamirka/transaksi');
		// $sesi=$this->input->get('sesi');
		// $this->cek->cek_sesi($sesi);
	}

	public function index()
	{
		$data=array('judul'=>'Dashboard Admin',
					'isi_konten'=>'erkamirka/admin/sales');

		$this->load->view('erkamirka/admin/asset/wrapper',$data);
	}

	public function so()
	{
		$this->form_validation->set_rules('client','Client','required|trim',array('required'=>'Nama client harus diisi'));
		$this->form_validation->set_rules('attn','Attn','required|trim',array('required'=>'Nama attn harus diisi'));
		$this->form_validation->set_rules('phone','Phone','required|trim',array('required'=>'Nomer phone harus diisi'));
		$this->form_validation->set_rules('alamat','Alamat','required|trim',array('required'=>'Alamat harus diisi'));
		$this->form_validation->set_rules('tanggal','Tanggal','required|trim',array('required'=>'Tanggal harus diisi'));
		$this->form_validation->set_rules('deliver_date','Deliver_date','required|trim',array('required'=>'Tanggal deliveri harus diisi'));
		$this->form_validation->set_rules('po_number','Po_number','required|trim',array('required'=>'Nomor po harus diisi'));
		$this->form_validation->set_rules('produk_pesanan','Produk_pesanan','required|trim',array('required'=>'Produk pesanan harus diisi'));
		$this->form_validation->set_rules('merk_bahan','Merk_bahan','required|trim',array('required'=>'Merk bahan harus diisi'));
		$this->form_validation->set_rules('tipe_bahan','Tipe_bahan','required|trim',array('required'=>'Tipe bahan harus diisi'));
		$this->form_validation->set_rules('kode_warna','Kode_warna','required|trim',array('required'=>'Kode warna harus diisi'));

		if($this->form_validation->run()==false){
			$data=array('judul'=>'Sales Order',
						'isi_konten'=>'erkamirka/admin/sales_order');

			$this->load->view('erkamirka/admin/asset/wrapper',$data);
		}else{
			$this->simpan_so();
		}
	}

	private function simpan_so()
	{
		$data=array('client'=>$this->input->post('client'),
					'attn'=>$this->input->post('attn'),
					'no_telp'=>$this->input->post('phone'),
					'alamat'=>$this->input->post('alamat'),
					'tanggal'=>$this->input->post('tanggal'),
					'tanggal_order'=>$this->input->post('deliver_date'),
					'p_m'=>$this->input->post('pilihan'),
					'label'=>$this->input->post('label'),
					'nomer_po'=>$this->input->post('po_number'),
					'produk_pesanan'=>$this->input->post('produk_pesanan'),
					'merk_bahan'=>$this->input->post('merk_bahan'),
					'tipe_bahan'=>$this->input->post('tipe_bahan'),
					'kode_warna'=>$this->input->post('kode_warna'),
					'detailing'=>$this->input->post('detail'),
					'note'=>$this->input->post('note'));

		$this->transaksi->simpan_so($data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message text-center" role="alert">Sales order berhasil disimpan</div>');
		redirect('erkamirka/sales_order/so?sesi=1');
	}

	public function po()
	{
		$data=array('judul'=>'Purchase Order',
					'isi_konten'=>'erkamirka/admin/purchase_order');

		$this->load->view('erkamirka/admin/asset/wrapper',$data);
	}
}