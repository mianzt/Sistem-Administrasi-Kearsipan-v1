<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct()
	{
		parent ::__construct();
		check_not_login();
		$this->load->model('transaksi_m');

	}


	
	public function index()
	{
		$data['jml_unit'] 	= $this->transaksi_m->total_rows();
		$data['jml_piutang'] 	= $this->transaksi_m->totpiutang();
		check_not_login();
		$this->template->load('template', 'dashboard', $data);

	}
}
