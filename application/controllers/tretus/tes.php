<?php
class tes extends CI_Controller
{
	public function index()
	{
		// $this->curl->http_header('x-rapidapi-host','restcountries-v1.p.rapidapi.com');
		// $this->curl->http_header('x-rapidapi-key','9033837e99msh15324f5e8cf91f2p175b00jsnbce97347c7fc','useQueryString',true);

		$tes = $this->curl->create('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
		// $coba = json_decode($asu);
		// $result = $this->curl->execute($tes);

		// $data['negara'] = json_decode($tes);

		var_dump($tes);
	}

	public function provinsi()
	{
		$readAPI = file_get_contents('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
		$data = json_decode($readAPI,true);
		// $hasil json_encode($data);
		$tes = array('tampilkan' => $data['provinsi']);
		
		$this->load->view('rest_api/tampilan',$tes);

		// return $data;
	}
}