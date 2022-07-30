<?php
class transaksi extends CI_Model
{
	public function simpan($data)
	{
		$this->db->insert('sales_order',$data);
	}

	public function simpan2($data)
	{
		$this->db->insert('purchase_order',$data);
	}

	public function cek_admin($email)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$email);
		$sql=$this->db->get();
		return $sql->row();
	}

	public function simpan_so($data)
	{
		$this->db->insert('sales_order',$data);
	}

	public function cek_so()
	{
		
	}
}