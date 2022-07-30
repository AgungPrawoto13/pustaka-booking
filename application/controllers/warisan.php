<?php
class Bapak
{
	private $nama = "Bapak";
	function Bapak($n){
		$this->nama = $n;
	}

	function Hallo(){
		echo " Halo, saya $this->nama <br>";
		var_dump($this->nama);
	}
}

class anak extends Bapak {
	function hai(){
		echo " hai dari kelas anak";
	}
}

$test = new anak("Anak dari Bapak");
$test->Hallo();