<?php
class m_laundry extends CI_Model{

	public function daftar_admin($data=null){
		$this->db->insert('admin',$data);
	}

	public function cek_admin($data){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('nama_admin',$data);
		return $this->db->get();
	}

	public function daftar_member($data=null){
		$this->db->insert('member',$data);
	}

	public function cek_member($data){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('nama_member',$data);
		return $this->db->get();
	}

	public function simpan_transaksi($data=null){
		$this->db->insert('transaksi',$data);
	}

	public function cek_transaksi(){
		$sql=$this->db->get('transaksi');
		return $sql->result();
	}

	public function cek_barang($data){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('no_order',$data);
		return $this->db->get();
	}
}