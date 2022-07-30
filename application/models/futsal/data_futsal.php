<?php
class data_futsal extends CI_Model
{
	public function daftar_member($data=null)
	{
		$this->db->insert('user',$data);
	}

	public function cek_email($data=null)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$data);
		$sql=$this->db->get();
		return $sql->result();
	}

	public function tampil_admin()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$sql=$this->db->get();
		return $sql->result();
	}

	public function member()
	{
		$this->db->select('*');
		$this->db->from('user');
		$sql=$this->db->get();
		return $sql->result();
	}

	public function aksi_member($data)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user',$data);
		$sql=$this->db->get();
		return $sql->result();
	}

	public function cek_admin($data=null)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username',$data);
		$sql=$this->db->get();
		return $sql->result();
	}

	public function cek_lapangan()
	{
		$this->db->select('*');
		$this->db->from('lapangan');
		$sql=$this->db->get();
		return $sql->result();
	}

	public function cari_lapangan($data=null)
	{
		$this->db->select('*');
		$this->db->from('lapangan');
		$this->db->where('idlapangan',$data);
		$sql=$this->db->get();
		return $sql->result();
	}

	public function admin($data=null)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_user',$data);
		$sql=$this->db->get();
		return $sql->result();
	}

	public function pemesanan()
	{
		$this->db->select('*');
		$this->db->from('keranjang');
		$this->db->join('lapangan','lapangan.idlapangan = keranjang.id_keranjang');
		$this->db->join('user','user.id_user = keranjang.iduser');
		$sql=$this->db->get();
		return $sql->result();
	}

	public function simpan_pesanan($data=null)
	{
		$this->db->insert('keranjang',$data);
	}

	public function simpan_sewa($data)
	{
		$this->db->insert('sewa',$data);
	}

	public function tambah_admin($data=null)
	{
		$this->db->insert('admin',$data);
	}

	public function ubah_profile($data=null)
	{
		$this->db->update('user',$data);
	}

	public function ubah_admin($id,$data)
	{
		$this->db->where('id_user',$id);
		$this->db->update('admin',$data);
	}

	public function ubah_member($id,$data)
	{
		$this->db->where('id_user',$id);
		$this->db->update('user',$data);
	}

	public function hapus_admin($id)
	{
		$this->db->where('id_user',$id);
		$this->db->delete('admin');
	}

	public function hapus_keranjang($data)
	{
		$this->db->delete('keranjang');
	}

	public function hapus_member($id)
	{
		$this->db->where('id_user',$id);
		$this->db->delete('user');
	}

	public function hapus_sewa($id)
	{
		$this->db->where('id_keranjang',$id);
		$this->db->delete('keranjang');
	}
}