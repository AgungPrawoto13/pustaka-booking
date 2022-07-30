<?php
class Tes extends CI_Model
{
	public function Tambah($a,$b)
	{
		$a = $a + $b;
		return $a;
	}
	public function Kurang($a,$b)
	{
		$b = $b - $a;
		return $b;
	}
	public function Kali($a,$b)
	{
		$a = $a * $b;
		return $a;
	}
}