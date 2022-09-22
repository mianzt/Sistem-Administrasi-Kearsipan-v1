<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip_m extends CI_Model {

	public $table ='arsip';
	function do_simpan($data){
		$query = $this->db->insert('arsip',$data);
		return $query;
	}
	public function get($id = null)
	{
		
		$this->db->select('*');
		$this->db->from('arsip');
		$this->db->join('konsumen', 'konsumen.konsumen_id = arsip.konsumen_id');

		
		;
		if($id != null) {
			$this->db->where('arsip_id', $id);

		}
		$query = $this->db->get();
		return $query;
	}


	

	public function edit($post)
	{
			$params = [
					'nama' => $post['nama_konsumen'],
					'ktp' => $post['ktp'],
			];
			$this->db->where('arsip_id', $post['id']);
			$this->db->update('arsip', $params);
	}

	

	public function del($id)
	{
		$this->db->where('arsip_id', $id);
		$this->db->delete('arsip');
	}

	
}