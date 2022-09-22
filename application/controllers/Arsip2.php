<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip2 extends CI_Controller {

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
                	$config['upload_path']          = './uploads/arsip/k_pegawai';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media5 =$this->upload->data();
	                $inputFileName = './uploads/arsip/k_pegawai' .$media5['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('k_pegawai')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
	            }
	            else{
                	$config['upload_path']          = './uploads/arsip/skpertama';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media6 =$this->upload->data();
	                $inputFileName = './uploads/arsip/skpertama' .$media6['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('skpertama')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
	            }
	            else{
                	$config['upload_path']          = './uploads/arsip/slipgaji';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media7 =$this->upload->data();
	                $inputFileName = './uploads/arsip/slipgaji' .$media7['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('slipgaji')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
                }
                else{
                	$config['upload_path']          = './uploads/arsip/skbekerja';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media8 =$this->upload->data();
	                $inputFileName = './uploads/arsip/skbekerja' .$media8['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('skbekerja')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
                }

                else{
                	$media9 =$this->upload->data();
	                $inputFileName = './uploads/arsip/skbekerja' .$media['file_name'];

	                $data = array(
	                'konsumen_id' => $this->input->post('nama_konsumen'),
	                'kategori_arsip' => $this->input->post('kategoriarsip'),
	                'ktp' => $media1['file_name'],
	                'kk' => $media2['file_name'],
	                'akta_nikah' => $media3['file_name'],
	                'foto' => $media4['file_name'],
	                'npwp' => $media5['file_name'],
	                'k_pegawai' => $media6['file_name'],
	                'skpertama' => $media7['file_name'],
	                'slipgaji' => $media8['file_name'],
	                'skbekerja' => $media8['file_name'],
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

	}}}}}}}}



	