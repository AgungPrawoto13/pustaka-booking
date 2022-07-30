<?php
class m_toko extends CI_Model
{
	public function cek_email($where)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$where);
		$query=$this->db->get();
		return $query->result();
	}

	public function tampilKatalog($where)
	{
		$this->db->select('*');
		$this->db->from('prodak');
		$this->db->where('nama_prodak',$where);
		$query=$this->db->get();
		return $query->result();
	}

	public function tampilKeranjang($where)
	{
		$this->db->select('*');
		$this->db->from('keranjang_belanja');
		$this->db->where('kd_prodak',$where);
		$sql=$this->db->get();
		return $sql->result();
	}

	public function tampilProdak($where)
	{
		$this->db->select('*');
		$this->db->from('prodak');
		$this->db->where('id',$where);
		$sql=$this->db->get();
		return $sql->result();
	}

	public function semuaprodak()
	{
		return $this->db->query("SELECT * FROM prodak WHERE id %3 =0");
	}

	public function tampilPesanan()
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$query=$this->db->get();
		return $query->result();
	}

	public function barang_terkirim()
	{
		$this->db->select('*');
		$this->db->from('barang_terkirim');
		$sql=$this->db->get();
		return $sql->result();
	}

	public function detailPesanan($where)
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->where('kd_prodak',$where);
		$sql=$this->db->get();
		return $sql->result();
	}

	public function semua_Keranjang()
	{
		$this->db->select('*');
		$this->db->from('keranjang_belanja');
		$query=$this->db->get();
		return $query->result();
	}

	public function tampil_prodak_baru()
	{
		$this->db->select('*');
		$this->db->from('prodak_baru');
		$sql=$this->db->get();
		return $sql->result();
	}

	public function hapus_keranjang($where,$table)
	{
		$this->db->where('kd_prodak',$where);
		$this->db->delete($table);
	}

	public function perbarui_keranjang($where,$set,$total,$table)
	{
		$this->db->set('jumbel',$set);
		$this->db->set('total_bayar',$total);
		$this->db->where('id_prodak',$where);
		$this->db->update($table);
	}

	public function simpan_perubahan_prodak($where,$kd_prodak,$nama_prodak,$stok_prodak,$harga_prodak,$ukuran_prodak,$gambar,$table){
	
	$this->db->set('kd_prodak',$kd_prodak);
	$this->db->set('nama_prodak',$nama_prodak);
	$this->db->set('stok_prodak',$stok_prodak);
	$this->db->set('harga_prodak',$harga_prodak);
	$this->db->set('ukuran_prodak',$ukuran_prodak);
	$this->db->set('gambar',$gambar);
	$this->db->where('id');
	$this->db->update($table);
	}

	public function simpan_perubahan_user($where,$depan,$belakang,$alamat,$sandi,$konfirmasi,$kelamin,$gambar,$table){
		
		$this->db->set('nama_depan',$depan);
		$this->db->set('nama_belakang',$belakang);
		$this->db->set('email',$where);
		$this->db->set('alamat',$alamat);
		$this->db->set('sandi_member',$sandi);
		$this->db->set('konfirmasi_sandi',$konfirmasi);
		$this->db->set('kelamin',$kelamin);
		$this->db->set('gambar_user',$gambar);
		$this->db->where('email',$where);
		$this->db->update($table);
	}

	public function tambah_prodak($data=null){
		$this->db->insert('prodak',$data);
	}

	public function daftar_member($data=null){
		$this->db->insert('user',$data);
	}

	public function simpan_pesanan($data=null){
		$this->db->insert('pesanan',$data);
	}

	public function simpan_Keranjang($data=null){
		$this->db->insert('keranjang_belanja',$data);
	}

	public function barang_terkrim($data=null)
	{
		$this->db->insert('barang_terkirim',$data);
	}
}