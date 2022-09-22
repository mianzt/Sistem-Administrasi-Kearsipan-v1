<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_m extends CI_Model {
	public function get($id = null)
	{
		$this->db->select('*');
		$this->db->from('unit');
		
		if($id != null) {
			$this->db->where('unit_id', $id);

		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		/*untk yang kiri ngambil di database, dan yang kanan sesuai dengan name di kolom inputan*/
			$params = [
					'nama_unit'=> $post['n_kavling'],
					'tipe'		 => $post['type'],
					'luas_tanah' => $post['l_tanah'],
					'harga'		 => $post['hrg'],
					'booking'	 => $post['booking'],
					'uang_muka'	 => $post['u_muka'],
					
					'totalunit'	 => $post['totalunit'],
					'status'	 => $post['status'],
					
					'tanggal' => date('Y-m-d')
			];
			$this->db->insert('unit', $params);
	}

	public function edit($post)
	{
			$params = [
					'nama_unit'=> $post['n_kavling'],
					'tipe'		 => $post['type'],
					'luas_tanah' => $post['l_tanah'],
					'harga'		 => $post['hrg'],
					'booking'	 => $post['booking'],
					'totalunit'	 => $post['totalunit'],
					
			];
			$this->db->where('unit_id', $post['id']);
			$this->db->update('unit', $params);
	}

	public function del($id)
	{
		$this->db->where('unit_id', $id);
		$this->db->delete('unit');
	}
}