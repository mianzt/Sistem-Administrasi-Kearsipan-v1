<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	
	public function index()
	{
		$data['data'] = $this->db->get('upload')->result();
		$this->template->load('template', 'arsip/arsip_form');

	}

	public function create()
	{
		if (isset($_POST['submit'])) {
			# code...
			$this->form_validation->set_rules('name', 'Name', 'required');
				$config['upload_path']          = './uploads/arsip';
                $config['allowed_types']        = 'png';
                $config['max_size']             = 2048;             
                $config['encrypt_name']         = TRUE;
                $this->load->library('upload', $config);

                if (!empty($_FILES['ktp'])) {
                	# code...
                	$this->upload->do_upload('ktp');
                	$data1= $this->upload->data();
                	$ktp = $data1['file_name'];
                }

                // file2
                if (!empty($_FILES['kk'])) {
                	# code...
                	$this->upload->do_upload('kk');
                	$data2= $this->upload->data();
                	$kk = $data2['file_name'];
                }

                if ($this->form_validation->run()) 
                {
                	$name = $this->input->post('name', TRUE);
                	$data = ['name' =>$name, 'ktp'=>$ktp, 'kk' =>$kk];
                	$insert = $this->db->insert('upload', $data);
                	if ($insert) {
                		# code...
                		$this->session->set_flashdata('success','Data Berhasil Disimpan');
                		redirect('upload');
                	}
                	else  {
                		echo "error";
                	}
                } 
                else 
                {
                	$this->index();
                }
                



		}
		else  {
			# code...
			$this->index();
		}
	}

	

}