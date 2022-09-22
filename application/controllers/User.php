<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		check_not_login();
		$this->load->model('user_m');
	}

	public function index()
	{
		$data['row'] = $this->user_m->get();
		$this->template->load('template', 'user/user_data', $data);
	}

	public function add()
	{
		$user = new stdClass();
		$user->user_id = null;
		$user->name = null;
		$user->username = null;
		$user->password= null;
		$user->level= null;
		
		$data = array(
			'page' => 'add' ,
			'row' => $user
		);

		$this->template->load('template', 'user/user_form', $data);
	}
public function edit($id)
	{
		$query = $this->user_m->get($id);
		if($query->num_rows() > 0)
		{
			$user = $query->row();
			$data = array
			(
				'page' => 'edit',
				'row' => $user
			);
			$this->template->load('template', 'user/user_form', $data);
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
			$this->user_m->add($post);
		}
		else if(isset($_POST['edit']))
		{
			$this->user_m->edit($post);
		}
		if($this->db->affected_rows() > 0)
			{
			$this->session->set_flashdata('success','Data Berhasil Disimpan');
			// $this->session->set_flashdata('success','Data Berhasil Disimpan');
			}
			redirect('user');

	}

	public function del($id)
	{
		$this->user_m->del($id);
		if($this->db->affected_rows() > 0)
		{
		$this->session->set_flashdata('success','Data Berhasil Dihapus'); 
		}
		redirect('user');
	}
}