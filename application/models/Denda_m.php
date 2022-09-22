<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denda_m extends CI_Model {
	public function get($id = null)
	{
		$this->db->select('*');
		$this->db->from('denda');
		
		if($id != null) {
			$this->db->where('denda_id', $id);

		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		/*untk yang kiri ngambil di database, dan yang kanan sesuai dengan name di kolom inputan*/
			$params = [
			'nama'	    => $post['nama'],
			'kavling'   => $post['kavling'],
			'alasan'    => $post['alasan'],
			'uang_booking'  => $post['uangbooking'],
			'uangmuka'  => $post['uangmuka'],
			'jml_denda' => $post['jml_denda'],
			'tgl_denda' => date('Y-m-d'),
			];
			$this->db->insert('denda', $params);
	}

	// public function edit($post)
	// {
	// 		$params = [
	// 				'nama_denda'=> $post['n_kavling'],
	// 				'tipe'		 => $post['type'],
	// 				'luas_tanah' => $post['l_tanah'],
	// 				'harga'		 => $post['hrg'],
	// 				'booking'	 => $post['booking'],
	// 				'uang_muka'	 => $post['u_muka'],
	// 				'bantuan'	 => $post['bantuan'],
	// 				'plafon_k'	 => $post['plafon'],
	// 		];
	// 		$this->db->where('denda_id', $post['id']);
	// 		$this->db->update('denda', $params);
	// }

	// public function del($id)
	// {
	// 	$this->db->where('denda_id', $id);
	// 	$this->db->delete('denda');
	// }
}