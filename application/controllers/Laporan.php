<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		check_not_login();
		$this->load->model(['transaksi_m','unit_m','pemesan_m']);

	}
	public function index()
	{
		// $tgl_awal = $_post['tgl_awal'];
		// $tgl_akhir = $_post['tgl_akhir'];
		
		$data['kodeunik'] = $this->transaksi_m->buat_kode();
		$data['row'] = $this->transaksi_m->get();

		$this->template->load('template', 'laporan/laporan', $data ,$data);
		
	}
	

	public function filterdata()
	{
		if(isset($_GET['tgl_awal']) AND isset($_GET['tgl_akhir'])){
				$tgl_awal	=$_GET['tgl_awal'];
				$tgl_akhir	=$_GET['tgl_akhir'];
				
				$data['row'] = $this->transaksi_m->filterdata($tgl_awal,$tgl_akhir);
				$this->template->load('template', 'laporan/laporan', $data  );
}
else{
	$this->template->load('template', 'laporan/palsu' );
}
	}
	
}