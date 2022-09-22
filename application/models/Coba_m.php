<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba_m extends CI_Model {
	public function get($id = null)
	{
		$this->db->from('coba');
		if($id != null) {
			$this->db->where('coba_id', $id);

		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		/*untk yang kiri ngambil di database, dan yang kanan sesuai dengan name di kolom inputan*/
			$params = [
					'nama_coba'=> $post['n_kavling'],
					'tipe'		 => $post['type'],
					'luas_tanah' => $post['l_tanah'],
					'harga'		 => $post['hrg'],
					'booking'	 => $post['booking'],
					'uang_muka'	 => $post['u_muka'],
					'bantuan'	 => $post['bantuan'],
					'plafon_k'	 => $post['plafon'],
			];
			$this->db->insert('coba', $params);
	}

	public function edit($post)
	{
			$params = [
					'nama_coba'=> $post['n_kavling'],
					'tipe'		 => $post['type'],
					'luas_tanah' => $post['l_tanah'],
					'harga'		 => $post['hrg'],
					'booking'	 => $post['booking'],
					'uang_muka'	 => $post['u_muka'],
					'bantuan'	 => $post['bantuan'],
					'plafon_k'	 => $post['plafon'],
			];
			$this->db->where('coba_id', $post['id']);
			$this->db->update('coba', $params);
	}

	public function del($id)
	{
		$this->db->where('coba_id', $id);
		$this->db->delete('coba');
	}
}