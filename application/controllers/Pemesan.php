<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesan extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		check_not_login();
		$this->load->model(['pemesan_m','unit_m']);
		 
	}

	public function index()
	{
		$data['kodeunik'] = $this->pemesan_m->buat_kode();
		$data['row'] = $this->pemesan_m->get();
		// $data['terbilang'] =$this->pemesan_m->terbilang();


		$this->template->load('template', 'pemesan/pemesan_data', $data);
	}

	public function add()
	{
		$pemesan = new stdClass();
		
		$pemesan->pemesan_id = null;
		$pemesan->no_booking = null;
		$pemesan->unit_id = null;
		$pemesan->nama_pemesan= null;
		$pemesan->alamat= null;
		$pemesan->no_ktp= null;
		$pemesan->status= null;
		
		$pemesan->booking= null;
		$pemesan->penyesuaian= null;
		$pemesan->deadline= null;
		$pemesan->bayar= null;

		$kodeunik =$this->pemesan_m->buat_kode();
		$query_unit = $this->unit_m->get();
		

		$data = array(
			'page' => 'add' ,
			'row' => $pemesan,
			'kodeunik' => $kodeunik,
			'unit' =>$query_unit
		);

		$this->template->load('template', 'pemesan/pemesan_form', $data);
	}
public function edit($id)
	{
		$query = $this->pemesan_m->get($id);
		if($query->num_rows() > 0)
		{
			$pemesan = $query->row();
			$kodeunik =$this->pemesan_m->buat_kode();
			$query_unit = $this->unit_m->get();
			$data = array
			(
				'page' => 'edit',
				'row' => $pemesan,
				'kodeunik' => $kodeunik,
				'unit' =>$query_unit
			);
			$this->template->load('template', 'pemesan/pemesan_edit', $data);
		}
		else
		{
			echo "<script>alert('Data tidak ditemukan');";
			echo "window.location='".site_url('pemesan')."';</script>";
		}
	}
	

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			if($this->pemesan_m->check_kavling($post['kavling'])->num_rows() > 0){
				$this->session->set_flashdata('error',"Kavling ini sudah dipesan silahkan pilih kavling yang lain");
				redirect('pemesan/add');
			}elseif($this->pemesan_m->check_ktp($post['noktp'])->num_rows() > 0){
				$this->session->set_flashdata('error',"No KTP ini sudah digunakan");
				redirect('pemesan/add');
			} 
			else{
				$this->pemesan_m->add($post);
			}
			
			
		}
		else if(isset($_POST['edit']))
		{
			if($this->pemesan_m->check_kavling($post['kavling'], $post['id'])->num_rows() > 0){
				$this->session->set_flashdata('error',"Kavling ini sudah dipesan silahkan pilih kavling yang lain");
				redirect('pemesan/edit/' .$post['id']);
			}else{
				$this->pemesan_m->edit($post);
			}	
			
		}
		if($this->db->affected_rows() > 0)
			{
			$this->session->set_flashdata('success','Data Berhasil Disimpan');
			// $this->session->set_flashdata('success','Data Berhasil Disimpan');
			}
			redirect('pemesan');

	}
	public function cetak_kwitansi($id)
	{
		  $this->load->model(['pemesan_m']);
		  $data['row'] = $this->pemesan_m->get($id);
		  $this->load->view('print/kwitansi1',$data);
	}
	

	public function del($id)
	{
		$this->pemesan_m->del($id);
		if($this->db->affected_rows() > 0)
		{
		$this->session->set_flashdata('success','Data Berhasil Dihapus'); 
		}
		redirect('pemesan');
	}


}