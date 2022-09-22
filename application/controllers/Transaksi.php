<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		check_not_login();
		$this->load->model(['transaksi_m','unit_m','pemesan_m']);
		 
	}

	public function index()
	{
		$data['kodeunik'] = $this->transaksi_m->buat_kode();
		$data['row'] = $this->transaksi_m->get();

		$this->template->load('template', 'transaksi/transaksi_data', $data ,$data);
	}

	public function cash()
	{
		$transaksi = new stdClass();
		$transaksi->transaksi_id = null;
		$transaksi->no_transaksi = null;
		$transaksi->unit_id = null;
		$transaksi->nama= null;
		$transaksi->alamat= null;
		$transaksi->no_ktp= null;
		$transaksi->pemesan_id= null;
		$transaksi->harga= null;
		$transaksi->uang_muka= null;
		$transaksi->tanggal_pelunasan= null;
		$transaksi->totalbayar= null;
		$transaksi->pembayaran= null;
		$transaksi->jml_bayar= null;
		$transaksi->keterangan= null;
		
		$transaksi->lebihtanah = null;
		$transaksi->lebihbangunan= null;
		$transaksi->h_lebihtanah= null;
		$transaksi->h_lebihbangunan = null;
		$transaksi->statusbayar = null;
		

		$kodeunik =$this->transaksi_m->buat_kode();
		$query_unit = $this->unit_m->get();
		$query_pemesan = $this->pemesan_m->get();
		$data = array(
			'page' => 'cash' ,
			'row' => $transaksi,
			'kodeunik' => $kodeunik,
			'unit' =>$query_unit,
			'pemesan' =>$query_pemesan
		);

		$this->template->load('template', 'transaksi/cash_form',$data);
	}


	public function kpr()
	{
		$transaksi = new stdClass();
		$transaksi->transaksi_id = null;
		$transaksi->no_transaksi = null;
		$transaksi->unit_id = null;
		$transaksi->nama= null;
		$transaksi->alamat= null;
		$transaksi->no_ktp= null;
		$transaksi->pemesan_id= null;
		$transaksi->harga= null;
		$transaksi->uang_muka= null;
		$transaksi->penyesuaian_harga= null;
		$transaksi->totalbayar= null;
		$transaksi->pembayaran= null;
		$transaksi->no_booking = null;
		$transaksi->lebihtanah = null;
		$transaksi->lebihbangunan= null;
		$transaksi->h_lebihtanah= null;
		$transaksi->h_lebihbangunan = null;
		$transaksi->angsuran = null;
		$transaksi->statusbayar = null;
		

		$kodeunik =$this->transaksi_m->buat_kode();
		$query_unit = $this->unit_m->get();
		$query_pemesan = $this->pemesan_m->get();
		$data = array(
			'page' => 'kpr' ,
			'row' => $transaksi,
			'kodeunik' => $kodeunik,
			'unit' =>$query_unit,
			'pemesan' =>$query_pemesan
		);

		$this->template->load('template', 'transaksi/kpr_form',$data);
	}
public function pelunasan_cash()
	{
		$transaksi = new stdClass();
		$transaksi->transaksi_id = null;
		$transaksi->no_transaksi = null;
		$transaksi->unit_id = null;
	
		$transaksi->no_ktp= null;
		$transaksi->pemesan_id= null;
		$transaksi->harga= null;
		$transaksi->uang_muka= null;
		
		$transaksi->totalbayar= null;
		$transaksi->pembayaran= null;
		$transaksi->no_booking = null;
		$transaksi->statusbayar = null;
		
		

		$kodeunik =$this->transaksi_m->buat_kode();
		$query_unit = $this->unit_m->get();
		$query_pemesan = $this->pemesan_m->get();
		$data = array(
			'page' => 'pelunasan_cash' ,
			'row' => $transaksi,
			'kodeunik' => $kodeunik,
			'unit' =>$query_unit,
			'pemesan' =>$query_pemesan
		);

		$this->template->load('template', 'transaksi/pelunasan_cash',$data);
	}


public function lunascash($id)
	{
		$query = $this->transaksi_m->get($id);
		if($query->num_rows() > 0)
		{
			$transaksi = $query->row();
			$kodeunik =$this->transaksi_m->buat_kode();
			$query_unit = $this->unit_m->get();
			$data = array
			(
				'page' => 'lunascash',
				'row' => $transaksi,
				'kodeunik' => $kodeunik,
				'unit' =>$query_unit
			);
			$this->template->load('template', 'transaksi/lunas_cash', $data);
		}
		else
		{
			echo "<script>alert('Data tidak ditemukan');";
			echo "window.location='".site_url('transaksi')."';</script>";
		}
	}
	

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['cash'])) {
			if($this->transaksi_m->check_booking($post['nobooking'])->num_rows() > 0){
				$this->session->set_flashdata('error',"No.Booking ini sudah digunakan");
				redirect('transaksi/cash');
			}else{
				$this->transaksi_m->cash($post);
			}
			
		}
		else if(isset($_POST['kpr']))
		{
			if($this->transaksi_m->check_booking($post['nobooking'])->num_rows() > 0){
				$this->session->set_flashdata('error',"No.Booking ini sudah digunakan");
				redirect('transaksi/kpr');
			}else{
				$this->transaksi_m->kpr($post);
			}
			
		}
		
		else if(isset($_POST['lunascash']))
		{

			$this->transaksi_m->lunascash($post);
		}
		if($this->db->affected_rows() > 0)
			{
			$this->session->set_flashdata('success','Data Berhasil Disimpan');
			// $this->session->set_flashdata('success','Data Berhasil Disimpan');
			}
			redirect('transaksi');

	}
	public function cetak_lunas($id)
	{
		  $this->load->model(['transaksi_m']);
		  $data['row'] = $this->transaksi_m->get($id);
		  $this->load->view('print/kwitansi_cash',$data);
	}
	public function cetak_dp($id)
	{
		  $this->load->model(['transaksi_m']);
		  $data['row'] = $this->transaksi_m->get($id);
		  $this->load->view('print/kwitansi1_dp',$data);
	}
	

	public function filterdata()
	{
		if(isset($_GET['tgl_awal']) AND isset($_GET['tgl_akhir'])){
				$tgl_awal	=$_GET['tgl_awal'];
				$tgl_akhir	=$_GET['tgl_akhir'];
				
				$data['row'] = $this->transaksi_m->filterdata($tgl_awal,$tgl_akhir);
				$this->template->load('template', 'transaksi/transaksi_data', $data  );
}
else{
	$this->template->load('template', 'laporan/palsu' );
}
	}

	public function denda($id){
		$query = $this->transaksi_m->get($id);
		if($query->num_rows() > 0)
		{
			$transaksi = $query->row();
			
			$query_unit = $this->unit_m->get();
			$data = array
			(
				
				'row' => $transaksi,
				'unit' =>$query_unit
			);
			$this->template->load('template', 'transaksi/denda',$data);
		}
		else
		{
			echo "<script>alert('Data tidak ditemukan');";
			
		}

		$this->transaksi_m->del($id);
		
		
		
	}

	public function del($id)
	{
		$this->transaksi_m->del($id);
		if($this->db->affected_rows() > 0)
		{
		$this->session->set_flashdata('success','Data Berhasil Dihapus'); 
		}
		else{
			$this->session->set_flashdata('error',"Transaksi Ini Sedang Digunakan");
				redirect('transaksi/cash');
		}
		redirect('transaksi');
	}
}