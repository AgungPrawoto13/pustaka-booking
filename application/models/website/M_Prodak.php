<?php
class M_Prodak extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}
	public function semua_prodak()
	{
		$hasil=$this->db->get('prodak');
		return $hasil->result();
	}
	public function baju_barcelona()
	{
		$this->db->select('*'); 
		$this->db->from('prodak');
		$this->db->order_by('id_prodak');
		$this->db->limit(9);
		$query=$this->db->get();
		return $query->result();
	}

	public function baju_real_madrid()
	{
		$this->db->select('*');
		$this->db->from('prodak');
		$this->db->order_by('id_prodak');
		$this->db->limit(9,9);
		$query=$this->db->get();
		return $query->result();
	}

	public function baju_bayern_munich()
	{
		$this->db->select('*');
		$this->db->from('prodak');
		$this->db->order_by('id_prodak');
		$this->db->limit(9,18);
		$query=$this->db->get();
		return $query->result();
	}

	public function baju_manchester_united()
	{
		$this->db->select('*');
		$this->db->from('prodak');
		$this->db->order_by('id_prodak');
		$this->db->limit(9,27);
		$query=$this->db->get();
		return $query->result();
	}

	public function baju_manchester_city()
	{
		$this->db->select('*');
		$this->db->from('prodak');
		$this->db->order_by('id_prodak');
		$this->db->limit(9,36);
		$query=$this->db->get();
		return $query->result();
	}

	public function baju_liverpool()
	{
		$this->db->select('*');
		$this->db->from('prodak');
		$this->db->order_by('id_prodak');
		$this->db->limit(9,45);
		$query=$this->db->get();
		return $query->result();
	}

	public function sepatu_nike()
	{
		$this->db->select('*');
		$this->db->from('prodak');
		$this->db->order_by('id_prodak');
		$this->db->limit(24,54);
		$query=$this->db->get();
		return $query->result();
	}

	public function sepatu_adidas()
	{
		$this->db->select('*');
		$this->db->from('prodak');
		$this->db->order_by('id_prodak');
		$this->db->limit(24,78);
		$query=$this->db->get();
		return $query->result();
	}

	public function sepatu_puma()
	{
		$this->db->select('*');
		$this->db->from('prodak');
		$this->db->order_by('id_prodak');
		$this->db->limit(24,102);
		$query=$this->db->get();
		return $query->result();
	}

	public function proses_pesan($id_prodak)
	{
		$id=$id_prodak;
		$this->db->select('*'); 
		$this->db->from('prodak');
		$this->db->where('id_prodak='.$id.'');
		$query=$this->db->get();
		$barang=$query->row();//berfungsi merubah $query menjadi object
		$item=new Item(); //memanggil librari item


		//$item->id_baju berfungsi untuk memanggil var $id_baju yang berada di file item dan nanti sebagai tempat untuk dimasukanya obejct dari $barang->id_baju
		$item->id_prodak=$barang->id_prodak; 
		$item->nama_prodak=$barang->nama_prodak;
		$item->ukuran_prodak=$barang->ukuran_prodak;
		$item->harga_prodak=$barang->harga_prodak;
		$iteminstock=$barang->stock;
		$item->stock=1;

		$data=array(
			'id'=>$item->ukuran_prodak,
			'name'=>$item->nama_prodak,
			'qty'=>$item->stock,
			'price'=>$item->harga_prodak);
		$this->cart->insert($data);
		return $data;

		 // berfungsi untuk mengembalikan nilai $barang yang telah di konfert menjadi object dan dimasukan kedalam array agar nilainya dapat dikembalikan lagi
	}

	public function hapus_pesanan($id_baju)
	{
		$rowid=$id_baju;
		$this->cart->remove($rowid);
	}

	public function convert($cek)
	{
		$tes=$cek;
		$barang=$tes->row();// sesi merubah $cek menjadi object;
		$item=new Item();
		$item->id_prodak=$barang->id_prodak;
		$item->nama_prodak=$barang->nama_prodak;
		$item->ukuran_prodak=$barang->ukuran_prodak;
		$item->harga_prodak=$barang->harga_prodak;
		$iteminstock=$barang->stock;
		$item->stock=1;

		$array=array($item); //berfungsi untuk mengubah objek item kedalam array

		return $array; //mengembalikan nilai $array agar dapat dipanggil dalam session controller
	}

	public function lihat_pesanan()
	{
	// 	$barang=$this->ModelUser->cekBarang(['id_baju'=>$this->session->userdata('id_baju')]);
	// 	// $object=$barang->row();
	// 	$item=new Item();

	// 	$array=['id_baju'=>$item];
		
		// return $tes->result();
	}

	public function perbarui_pesanan($qty,$rowid)
	{
		$items=array(
			'qty'=>$qty,
			'$rowid'=>$rowid);
		$this->cart->update($items);
		return $items;
	}
}