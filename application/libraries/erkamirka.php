<?php
class erkamirka{

	var $CI=NULL;
	function __construct()
	{
		$this->CI =& get_instance();

	}

	public function sales_order()
	{
		$data=array('client'=>$this->CI->input->post('client'),
					'attn'=>$this->CI->input->post('attn'),
					'no_telp'=>$this->CI->input->post('phone'),
					'alamat'=>$this->CI->input->post('alamat'),
					'tanggal'=>$this->CI->input->post('tanggal'),
					'tanggal_order'=>$this->CI->input->post('deliver_date'),
					'p_m'=>$this->CI->input->post('pilihan'),
					'label'=>$this->CI->input->post('label'),
					'nomer_po'=>$this->CI->input->post('po_number'),
					'produk_pesanan'=>$this->CI->input->post('produk_pesanan'),
					'merk_bahan'=>$this->CI->input->post('merk_bahan'),
					'tipe_bahan'=>$this->CI->input->post('tipe_bahan'),
					'kode_warna'=>$this->CI->input->post('kode_warna'),
					'detailing'=>$this->CI->input->post('detail'),
					'note'=>$this->CI->input->post('note'),
					'catatan'=>$this->CI->input->post('note1'));
	}

	public function purchase_order()
	{
		$data=array('client'=>$this->CI->input->post('client'),
					'attn'=>$this->CI->input->post('attn'),
					'no_telp'=>$this->CI->input->post('phone'),
					'alamat'=>$this->CI->input->post('alamat'),
					'tanggal'=>$this->CI->input->post('tanggal'),
					'tanggal_order'=>$this->CI->input->post('deliver_date'),
					'p_m'=>$this->CI->input->post('pilihan'),
					'label'=>$this->CI->input->post('label'),
					'nomer_po'=>$this->CI->input->post('po_number'),
					'ukuran'=>$this->CI->input->post('ukuran'),
					'deskripsi'=>$this->CI->input->post('deskripsi'),
					'unit'=>$this->CI->input->post('unit'),
					'qty'=>$this->CI->input->post('qty'),
					'unit_price'=>$this->CI->input->post('unit_price'),
					'total'=>$this->CI->input->post('total'),
					'total1'=>$this->CI->input->post('total1'),
					'ppn'=>$this->CI->input->post('ppn'),
					'down_payment'=>$this->CI->input->post('down_payment'),
					'total2'=>$this->CI->input->post('total2'));
		// var_dump($data);
	}
}