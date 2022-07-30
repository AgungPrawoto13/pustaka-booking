<?php
class Menghapus_Pesanan
{
	//set super global
	var$CI=NULL;
	public function __construct()
	{
		$this->CI=& get_instance();
	}

	public function hapus_pesanan($id_baju)
	{
		$id=$id_baju;
		$cart=unserialize(serialize($_SESSION['cart']));
		$cart=$id;
		$cart=array($cart);
		$_SESSION['cart']=$cart;
	}
}