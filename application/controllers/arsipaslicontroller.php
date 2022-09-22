<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		
		$this->load->model('arsip_m');
	}

	public function index()
	{
		$data['row'] = $this->arsip_m->get();
		$this->template->load('template', 'arsip/arsip_form');
	}

	
	
	public function simpan_arsip()
	{
				$this->load->library('upload');
				$config['upload_path']          = './uploads/arsip/ktp';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['overwrite'] = FALSE;
                $config['max_size']             = '5000';
               
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('ktp')){
                	$this->session->set_flashdata('gagal');
                	redirect('arsip');
                }else {
                	$config['upload_path']          = './uploads/arsip/kk';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media1 =$this->upload->data();
	                $inputFileName = './uploads/arsip/kk' .$media1['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('kk')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
	            }else{
	            	$config['upload_path']          = './uploads/arsip/aktanikah';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media2 =$this->upload->data();
	                $inputFileName = './uploads/arsip/aktanikah' .$media2['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('akta_nikah')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
                }else{
	                $config['upload_path']          = './uploads/arsip/foto';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media3 =$this->upload->data();
	                $inputFileName = './uploads/arsip/foto' .$media3['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('foto')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
	                }

	            else {
	            	$config['upload_path']          = './uploads/arsip/npwp';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media4 =$this->upload->data();
	                $inputFileName = './uploads/arsip/npwp' .$media4['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('npwp')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
                }else{
                	$media5 =$this->upload->data();
	                $inputFileName = './uploads/arsip/npwp' .$media5['file_name'];

	                $data = array(
	                'nama_konsumen' => $this->input->post('nama_konsumen'),
	                'ktp' => $media1['file_name'],
	                'kk' => $media2['file_name'],
	                'bk_nikah' => $media3['file_name'],
	                'foto' => $media4['file_name'],
	                'npwp' => $media5['file_name'],
	                );
	                $res = $this->arsip_m->do_simpan($data);
	                if($res>0){
	                	redirect('arsip/sukses');
	                }
	                else{
	                	echo"gagal menyimpan arsip";
	                }
                }
	            }


                }

	}}}}



	