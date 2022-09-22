<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		check_not_login();
		$this->load->model('coba_m');
	}

	public function index()
	{
		$data['row'] = $this->coba_m->get();
		$this->template->load('template', 'coba/coba_form', $data);
	}

	public function add()
	{
		$coba = new stdClass();
		$coba->coba_id = null;
		$coba->nama_coba = null;
		$coba->tipe= null;
		$coba->luas_tanah= null;
		$coba->harga= null;
		$coba->booking= null;
		$coba->uang_muka= null;
		$coba->bantuan = null;
		$coba->plafon_k= null;
		$data = array(
			'page' => 'add' ,
			'row' => $coba
		);

		$this->template->load('template', 'coba/coba_form', $data);
	}
public function edit($id)
	{
		$query = $this->coba_m->get($id);
		if($query->num_rows() > 0)
		{
			$coba = $query->row();
			$data = array
			(
				'page' => 'edit',
				'row' => $coba
			);
			$this->template->load('template', 'coba/coba_form', $data);
		}
		else
		{
			echo "<script>alert('Data tidak ditemukan');";
			echo "window.location='".site_url('pasien')."';</script>";
		}
	}
	

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->coba_m->add($post);
		}
		else if(isset($_POST['edit']))
		{
			$this->coba_m->edit($post);
		}
		if($this->db->affected_rows() > 0)
			{
			$this->session->set_flashdata('success','Data Berhasil Disimpan');
			// $this->session->set_flashdata('success','Data Berhasil Disimpan');
			}
			redirect('coba');

	}

	public function del($id)
	{
		$this->coba_m->del($id);
		if($this->db->affected_rows() > 0)
		{
		$this->session->set_flashdata('success','Data Berhasil Dihapus'); 
		}
		redirect('coba');
	}
}