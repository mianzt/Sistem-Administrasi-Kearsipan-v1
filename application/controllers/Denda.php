<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denda extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		check_not_login();
		$this->load->model(['denda_m' ,'transaksi_m']);
	}

	public function index()
	{

		$data['row'] = $this->denda_m->get();
		$this->template->load('template', 'transaksi/denda_data', $data);
	}

	public function add()
	{
		$denda = new stdClass();
		$denda->denda_id = null;
		$denda->nama = null;
		$denda->kavling= null;
		$denda->alasan= null;
		$denda->jml_denda= null;
		$denda->uangmuka= null;
		$denda->uangbooking= null;
		
		$data = array(
			'page' => 'add' ,
			'row' => $denda
		);

		$this->template->load('template', 'transaksi/denda', $data);
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->denda_m->add($post)  ;
		}
		else if(isset($_POST['edit']))
		{
			$this->denda_m->edit($post);
		}
		if($this->db->affected_rows() > 0)
			{
			$this->session->set_flashdata('success','Data Berhasil Disimpan');
			// $this->session->set_flashdata('success','Data Berhasil Disimpan');
			}
			redirect('denda');

	}
	

	
}