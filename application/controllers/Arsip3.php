<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip3 extends CI_Controller {

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
                	$config['upload_path']          = './uploads/arsip/sku';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media5 =$this->upload->data();
	                $inputFileName = './uploads/arsip/sku' .$media5['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('sku')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
	            }
	            else{
                	$config['upload_path']          = './uploads/arsip/siup';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media6 =$this->upload->data();
	                $inputFileName = './uploads/arsip/siup' .$media6['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('siup')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
	            }
	            else{
                	$config['upload_path']          = './uploads/arsip/ket_desa';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media7 =$this->upload->data();
	                $inputFileName = './uploads/arsip/ket_desa' .$media7['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('ket_desa')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
                }
                else{
                	$config['upload_path']          = './uploads/arsip/rek_koran';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media8 =$this->upload->data();
	                $inputFileName = './uploads/arsip/rek_koran' .$media8['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('rek_koran')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
                }
                else{
                	$config['upload_path']          = './uploads/arsip/neraca';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] = FALSE;
	                $config['max_size']             = '5000';
	                $media9 =$this->upload->data();
	                $inputFileName = './uploads/arsip/neraca' .$media9['file_name'];
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('neraca')){
	                	$this->session->set_flashdata('gagal');
	                	redirect('arsip');
                }


                else{
                	$media10 =$this->upload->data();
	                $inputFileName = './uploads/arsip/neraca' .$media['file_name'];

	                $data = array(
	                'konsumen_id' => $this->input->post('nama_konsumen'),
	                'kategori_arsip' => $this->input->post('kategoriarsip'),
	                'ktp' => $media1['file_name'],
	                'kk' => $media2['file_name'],
	                'akta_nikah' => $media3['file_name'],
	                'foto' => $media4['file_name'],
	                'npwp' => $media5['file_name'],
	                'sku' => $media6['file_name'],
	                'siup' => $media7['file_name'],
	                'ket_desa' => $media8['file_name'],
	                'rek_koran' => $media9['file_name'],
	                'neraca' => $media10['file_name'],
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

	}}}}}}}}}



	