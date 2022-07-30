<?php
defined('BASEPATH')or exit('No Direct Script Access Allowed');
date_default_timezone_set('Asia/Jakarta');

class booking extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('ModelBooking','ModelUser'));
	}

	public function index()
	{
		$id_user=$this->session->userdata('id_user');
		$user=$this->ModelUser->cekData(array('email'=>$this->session->userdata('email')))->row_array();
		$dtb=$this->ModelBooking->showtemp(array('id_user'=>$id_user))->num_rows();
		if($dtb < 1){
			$this->session->set_flashdata('pesan','<div class="alert alert-massege alert-danger" role="alert">Tidak ada buku dikeranjang</div>');
			redirect(base_url());
		} else {
			$data=array('temp'=>$this->db->query("select image, judul_buku, penulis, penerbit, tahun_terbit, id_buku from temp where id_user='$id_user'")->result_array(),
						'user'=>$user['nama'],
						'judul'=>'Keranjang Booking');

			$this->load->view('templates/templates-user/header',$data);
			$this->load->view('booking/data-booking',$data);
			$this->load->view('templates/templates-user/modal');
			$this->load->view('templates/templates-user/footer');
		}
	}

	public function tambahBooking()
	{
		if($this->session->userdata('email')){
			$id_buku=$this->uri->segment(3);
			//memilih data buku yang untuk dimasukan ke table temp/keranjang melaluo variabel isi
			$d=$this->db->query("select*from buku where id='$id_buku'")->row();

			//berupa data2 yang akan disimpan ke dalam tabel temp/keranjang

			$isi=array('id_buku'=>$id_buku,
				   	'judul_buku'=>$d->judul_buku,
				   	'id_user'=>$this->session->userdata('id_user'),
				   	'email_user'=>$this->session->userdata('email'),
				   	'tgl_booking'=>date('Y-m-d H:i:s'),
				   	'image'=>$d->image,
				   	'penulis'=>$d->pengarang,
				   	'penerbit'=>$d->penerbit,
				   	'tahun_terbit'=>$d->tahun_terbit);

			//cek apakah buku yang di klik boooking sudah ada di keranjang
			$temp=$this->ModelBooking->getDataWhere('temp',array('id_buku'=>$id_buku))->num_rows();
			$userid=$this->session->userdata('id_user');

			//cek jika sudah memasukan 3 buku untuk dibooking dalam keranjang
			$tempuser=$this->db->query("select*from temp where id_user='$userid'")->num_rows();

			//cek jika masih ada booking buku yang belum diambil
			$databooking=$this->db->query("select*from booking where id_user='$userid'")->num_rows();
			if($databooking > 0){
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Masih ada booking buku sebelumnya yang belum diambil.<br> ambil buku yang dibooking atau tunggu 1x24 jam untuk bisa booking kembali </div>');
				redirect(base_url());
			}

			//jia buku yang diklik booking sudah ada di keranjang
			if($temp >0){
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Buku ini sudah anda booking </div>');
				redirect(base_url());
			}

			//jika buku yang akan dibooking sudah mencapai 3item
			if($tempuser ==3){
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Booking buku tidak boleh lebih dari 3 item </div>');
				redirect(base_url().'home');
			}

			//membuat table temp jika belum ada
			// $this->ModelBooking->createTemp();

			//memasukan buku ke keranjang 
			$this->ModelBooking->insertData('temp',$isi);

			//pesan ketika berhasil memasukan buku ke keranjang
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-message" role="alert">Buku berhasil ditambahkan ke keranjang</div>');
			redirect(base_url().'home');
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">KK Harus Login Dulu :)</div>');
			redirect(base_url().'home');
		}
	}

	public function hapusbooking()
	{
		$id_buku=$this->uri->segment(3);
		$id_user=$this->session->userdata('id_user');

		$this->ModelBooking->deleteData(array('id_buku'=>$id_buku),'temp');
		$kosong=$this->db->query("select*from temp where id_user='$id_user'")->num_rows();

		if($kosong <1){
			$this->session->set_flashdata('pesan','<div class="alert alert-message alert-danger" role="alert">Tidak ada buku dikeranjang</div>');
			redirect(base_url());
		}else{
			redirect(base_url().'booking');
		}
		// var_dump($id_buku);
	}

	public function bookingSelesai($where)
	{
		//mengupdate stok dan dibooking di table buku saat proses booking diselesaikan

		$this->db->query("UPDATE buku, temp SET buku.dibooking=buku.dibooking+1, buku.stok=buku.stok-1 WHERE buku.id=temp.id_buku");

		$tglsekarang=date('Y-m-d');
		$isibooking=array('id_booking'=>$this->ModelBooking->kodeOtomatis('booking', 'id_booking'),
						  'tgl_booking'=>date('Y-m-d H:m:s'),
						  'batas_ambil'=>date('Y-m-d', strtotime('+2 days', strtotime($tglsekarang))),
						  'id_user'=>$where);

		//menyimpan ke tabel booking dan dtail booking, dan mengosongkan table temporasi
		$this->ModelBooking->insertData('booking',$isibooking);
		$this->ModelBooking->simpanDetail($where);
		$this->ModelBooking->kosongkanData('temp');

		

		redirect(base_url().'booking/info');
	}

	public function info()
	{
		$where=$this->session->userdata('id_user');
		$data=array('user'=>$this->session->userdata('nama'),
					'judul'=>"Selesai Booking",
					'useraktif'=>$this->ModelUser->cekData(array('id'=>$this->session->userdata('id_user')))->result(),
					'items'=>$this->db->query("select*from booking bo, booking_detail d, buku bu where d.id_booking=bo.id_booking and d.id_buku=bu.id and bo.id_user='$where'")->result_array());

		$this->load->view('templates/templates-user/header',$data);
		$this->load->view('booking/info-booking',$data);
		$this->load->view('templates/templates-user/modal');
		$this->load->view('templates/templates-user/footer');
	}

	public function exportToPdf()
	{
		$id_user=$this->session->userdata('id_user');
		$data=array('user'=>$this->session->userdata('nama'),
					'judul'=>"Cetak Bukti Booking",
					'useraktif'=>$this->ModelUser->cekData(array('id'=>$this->session->userdata('id_user')))->result(),
					'items'=>$this->db->query("select*from booking bo, booking_detail d, buku bu where d.id_booking=bo.id_booking and d.id_buku=bu.id and bo.id_user='$id_user'")->result_array());

		$this->load->library('dompdf_gen');
		$this->load->view('booking/bukti-pdf',$data);
		$paper_size='A4'; // ukuran kertas
		$orientation='landscape'; //tipe format kertas potrait atatu landscape
		$html=$this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		//conert to pdf
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("bukti-booking-$id_user.pdf",array('Attachment'=>0));
		//nama file pdf yang dihasilkan
	}
}