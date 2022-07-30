<?php 
class Cart_model extends CI_Model
{
	public function get_all_produk()
	{
		$hasil=$this->db->get('prodak');
		return $hasil->result();
	}
}