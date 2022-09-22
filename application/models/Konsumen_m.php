<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen_m extends CI_Model {
	public function get($id = null)
	{
		// Untuk menggabungkan 2 table pada database
		$this->db->select('*');
		$this->db->from('konsumen');
		
		$this->db->join('transaksi', 'transaksi.transaksi_id = konsumen.transaksi_id');
		$this->db->order_by('tanggal', 'desc');
		if($id != null) {
			$this->db->where('konsumen_id', $id);

		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		/*untk yang kiri ngambil di database, dan yang kanan sesuai dengan name di kolom inputan*/
			$params = [
					'transaksi_id' => $post['notransaksi'],
					// 'unit_id'	 => $post['kavling'],
					'no_ktp'	 => $post['noktp'],
					'nama_pemesan'=> $post['nama'],
					'tempat_lahir'	 => $post['tempatlahir'],
					'tgl_lahir'	 => $post['tanggallahir'],
					'alamat'	 => $post['alamat'],
					'pekerjaan'	 => $post['pekerjaan'],
					'no_telpon'	 => $post['notelpon'],
					// 'uang_muka'	 => $post['uangmuka'],
					'no_ktp_p'	 => $post['noktp_p'],
					'nama_p'		 => $post['nama_p'],
					'tempat_lahir_p'	 => $post['tempatlahir_p'],
					'tgl_lahir_p'	 => $post['tanggallahir_p'],
					'alamat_p'	 => $post['alamat_p'],
					'pekerjaan_p'	 => $post['pekerjaan_p'],
					'no_telpon_p'	 => $post['notelpon_p'],
					'tanggal' => date('Y-m-d')
			];
			$this->db->insert('konsumen', $params);
	}

	public function edit($post)
	{
			$params = [
					'transaksi_id' => $post['notransaksi'],
					// 'unit_id'	 => $post['kavling'],
					'no_ktp'	 => $post['noktp'],
					'nama_pemesan'=> $post['nama'],
					'tempat_lahir'	 => $post['tempatlahir'],
					'tgl_lahir'	 => $post['tanggallahir'],
					'alamat'	 => $post['alamat'],
					'pekerjaan'	 => $post['pekerjaan'],
					'no_telpon'	 => $post['notelpon'],
					// 'uang_muka'	 => $post['uangmuka'],
					'no_ktp_p'	 => $post['noktp_p'],
					'nama_p'		 => $post['nama_p'],
					'tempat_lahir_p'	 => $post['tempatlahir_p'],
					'tgl_lahir_p'	 => $post['tanggallahir_p'],
					'alamat_p'	 => $post['alamat_p'],
					'pekerjaan_p'	 => $post['pekerjaan_p'],
					'no_telpon_p'	 => $post['notelpon_p'],
					'tanggal' => date('Y-m-d')
			];
			$this->db->where('konsumen_id', $post['id']);
			$this->db->update('konsumen', $params);
	}

	function check_kavling($code, $id = null){
		$this->db->from('konsumen');
		$this->db->where('unit_id', $code);
		if($id != null){
			$this->db->where('konsumen_id !=' ,$id);
		}
		$query = $this->db->get();
		return $query;
	}

public function total_rows() {
		$data = $this->db->get('konsumen');

		return $data->num_rows();
	}




	public function del($id)
	{
		$this->db->where('konsumen_id', $id);
		$this->db->delete('konsumen');
	}

	
}