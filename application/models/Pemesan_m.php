<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesan_m extends CI_Model {
	
	public function get($id = null)
	{
		$this->db->select('*');
		$this->db->from('pemesan');
		$this->db->join('unit', 'unit.unit_id = pemesan.unit_id');
		$this->db->order_by('tanggal_booking', 'desc');


		if($id != null) {
			$this->db->where('pemesan_id', $id);

		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		/*untk yang kiri ngambil di database, dan yang kanan sesuai dengan name di kolom inputan*/
			$params = [
					'no_booking'	 => $post['nobooking'],
					'unit_id'	     => $post['kavling'],
					'nama_pemesan' 	 => $post['namapemesan'],
					'alamat'	 	 => $post['alamat'],
					'no_ktp'	 	 => $post['noktp'],
					'status'	 	 => $post['status'],				
					
					'booking'		 => $post['booking'],
					
					'deadline'		 => $post['bataswaktu'],
					'bayar'		 => $post['bayar'],
					'tanggal_booking' => date('Y-m-d')
					
			];
			
			$this->db->insert('pemesan', $params);
			
			
	}

	public function edit($post)
	{
			$params = [
					'no_booking'	 => $post['nobooking'],
					'unit_id'	     => $post['kavling'],
					'nama_pemesan' 	 => $post['namapemesan'],
					
				
					'booking'		 => $post['booking'],
					'penyesuaian'	 => $post['penyesuaian'],
					'deadline'		 => $post['bataswaktu'],
					'bayar'		 	 => $post['bayar'],
			];
			$this->db->where('pemesan_id', $post['id']);
			$this->db->update('pemesan', $params);
	}

	public function buat_kode(){
		  $this->db->select('RIGHT(pemesan.pemesan_id,2) as kode', FALSE);
		  $this->db->order_by('pemesan_id','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('pemesan');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->kode) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "BK-".$batas;  //format kode
			  return $kodetampil;  
		 }

		function check_kavling($code, $id = null){
		$this->db->from('pemesan');
		$this->db->where('unit_id', $code);
		if($id != null){
			$this->db->where('pemesan_id !=' ,$id);
		}
		$query = $this->db->get();
		return $query;
	}

	function check_ktp($code, $id = null){
		$this->db->from('pemesan');
		$this->db->where('no_ktp', $code);
		if($id != null){
			$this->db->where('pemesan_id !=' ,$id);
		}
		$query = $this->db->get();
		return $query;
	}
	


	public function del($id)
	{
		$this->db->where('pemesan_id', $id);
		$this->db->delete('pemesan');
	}
}
