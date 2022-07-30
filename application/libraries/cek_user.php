<?php
class cek_user
{
	public function logins($data=null){
		$cek=$data;
		if($cek){
			redirect('tokobray/pengunjung/tampilkan');
		}else{
			echo "kosong";
		}
	}
}