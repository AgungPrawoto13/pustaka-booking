<?php
defined('BASEPATH')or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
	public function cek()
	{
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get();
	}
	public function simpangambar($data=null)
	{
		$this->db->set('image',$data);
	}
	public function updategambar($data=null)
	{
		$this->db->set('image',$data);
		$this->db->update('user');
	}
	public function simpanData($data=null)
	{
		$this->db->insert('user', $data);
	}
	public function cekData($where=null)
	{
		return $this->db->get_where('user', $where);
	}

	public function cekBarang($where=null)
	{
		return $this->db->get_where('prodak',$where);
	}

	public function getUserWhere($where=null)
	{
		return $this->db->get_where('user', $where);
	} 

	public function cekUserAccess($where=null)
	{
		$this->db->select('*');
		$this->db->from('access_menu');
		$this->db->where ($where);
		return $this->db->get();
	}

	public function getUserLimit()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->limit(10, 0);
		return $this->db->get();
	}
}