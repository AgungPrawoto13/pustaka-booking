<?php
class tb_mandiri_model extends CI_Model
{
	public function semua_produk()
	{
		$this->db->select('*');
		$this->db->from('nyoba');
		$sql = $this->db->get();

		return $sql->result();
	}
}