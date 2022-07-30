<?php
class Cart extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}
	public function index()
	{
		$items=$this->cart->contents();
		echo '<pre>';
		print_r($items);
		echo '</pre>';

		echo $this->cart->total();
		echo $this->cart->total_items();
	}
	public function add()
	{
		$data=array(
			'id'=>1,
			'qty'=>3,
			'price'=>1000,
			'name'=>'Buku tulis',
			'option'=>array('Color'=>'red'));
		$this->cart->insert($data);
		echo "asu";
	}

	public function delete()
	{
		$this->cart->remove($data);
	}

	public function update()
	{

	}
}