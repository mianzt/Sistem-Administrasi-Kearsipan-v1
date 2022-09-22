<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		check_not_login();
		$this->load->model(['konsumen_m', 'pemesan_m','transaksi_m']);

	}

	public function index()
	{
		
		$data['row'] = $this->konsumen_m->get();

		

		$this->template->load('template', 'konsumen/konsumen_data', $data , $data);

	}

	public function add()
	{
		$konsumen = new stdClass();
		$konsumen->konsumen_id = null;
		$konsumen->no_booking= null;
		$konsumen->unit_id= null;
		$konsumen->no_ktp= null;
		$konsumen->nama_pemesan= null;
		$konsumen->tempat_lahir= null;
		$konsumen->tgl_lahir= null;
		$konsumen->alamat= null;
		$konsumen->pekerjaan= null;
		$konsumen->no_telpon= null;
		$konsumen->uang_muka= null;
		$konsumen->no_ktp_p= null;
		$konsumen->nama_p= null;
		$konsumen->tempat_lahir_p= null;
		$konsumen->tgl_lahir_p= null;
		$konsumen->alamat_p= null;
		$konsumen->pekerjaan_p= null;
		$konsumen->no_telpon_p= null;		
		$konsumen->transaksi_id= null;
	


		
		$query_transaksi = $this->transaksi_m->get();
		$data = array(
			'page' => 'add' ,
			'row' => $konsumen,			
			'transaksi' =>$query_transaksi
		);

		$this->template->load('template', 'konsumen/konsumen_form', $data);
	}
public function edit($id)
	{
		$query = $this->konsumen_m->get($id);
		if($query->num_rows() > 0)
		{
			$konsumen = $query->row();
			$query_transaksi = $this->transaksi_m->get();
			$data = array(
			'page' => 'edit' ,
			'row' => $konsumen,
			'transaksi' =>$query_transaksi
		);
			$this->template->load('template', 'konsumen/konsumen_form', $data);
		}
		else
		{
			echo "<script>alert('Data tidak ditemukan');";
			echo "window.location='".site_url('konsumen')."';</script>";
		}
	}
	

	public function detail($id)
	{
		$query = $this->konsumen_m->get($id);
		if($query->num_rows() > 0)
		{
			$konsumen = $query->row();
			$query_transaksi = $this->transaksi_m->get();
			$data = array(
			'page' => 'edit' ,
			'row' => $konsumen,
			'transaksi' =>$query_transaksi
		);
			$this->template->load('template', 'konsumen/konsumen_detail', $data);
		}
		else
		{
			echo "<script>alert('Data tidak ditemukan');";
			echo "window.location='".site_url('konsumen')."';</script>";
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			
				$this->konsumen_m->add($post);
			
			
		}
		else if(isset($_POST['edit']))
		{
			$this->konsumen_m->edit($post);
		}
		if($this->db->affected_rows() > 0)
			{
			$this->session->set_flashdata('success','Data Berhasil Disimpan');
			// $this->session->set_flashdata('success','Data Berhasil Disimpan');
			}
			redirect('konsumen');

	}

	public function del($id)
	{
		$this->konsumen_m->del($id);
		if($this->db->affected_rows() > 0)
		{
		$this->session->set_flashdata('success','Data Berhasil Dihapus'); 
		}
		redirect('konsumen');
	}

	public function cetaksurat($id)
	{
		  $this->load->model(['konsumen_m']);
		  $data['row'] = $this->konsumen_m->get($id);
		  $this->load->view('print/serah_terima',$data);
	}

public function cetak(){
        ob_start();
        $data['konsumen'] = $this->konsumen_m->view();
        $this->load->view('print/kwitansi', $data);
        $html = ob_get_contents();
        ob_end_clean();
         
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('kwitansi.pdf', 'D');
    }


}