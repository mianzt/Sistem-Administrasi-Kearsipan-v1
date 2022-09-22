<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_m extends CI_Model {
	
	public function get($id = null)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('unit', 'unit.unit_id = transaksi.unit_id');
		
		$this->db->order_by('tanggal_transaksi', 'desc');
		
		if($id != null) {
			$this->db->where('transaksi_id', $id);

		}
		$query = $this->db->get();
		return $query;
	}

	public function cash($post)
	{
		/*untk yang kiri ngambil di database, dan yang kanan sesuai dengan name di kolom inputan*/
			$params = [
					'no_transaksi'	 => $post['notransaksi'],
					// 'pemesan_id' => $post['nobooking'],
					'unit_id'	     => $post['kavling'],
					'nama' 			 => $post['nama'],
					'alamat'	 	 => $post['alamat'],
					'no_ktp'	 	 => $post['noktp'],						
					'harga'			 => $post['harga'], 
					'keterangan'	=>$post['keterangan'],
							
					'totalbayar'		 => $post['total'],
					'pembayaran'		 => $post['pembayaran'],
					'tanggal_pelunasan'		 => $post['tgl_lunas'],
					'uang_muka'		 => $post['uangmuka'],
					'jml_bayar'		 => $post['uangmuka'],
					'lebihtanah'		 => $post['lebihtanah'],
					'lebihbangunan'		 => $post['lebihbangunan'],
					'h_lebihtanah'		 => $post['h_totallebihtanah'],
					'h_lebihbangunan'		 => $post['h_totallebihbangunan'],
					'status_bayar'		 => $post['statusbayar'],




					'tanggal_transaksi' => date('Y-m-d')
					
			];
			$this->db->insert('transaksi', $params);
	}

	public function kpr($post)
	{
		/*untk yang kiri ngambil di database, dan yang kanan sesuai dengan name di kolom inputan*/
			$params = [
					'no_transaksi'	 => $post['notransaksi'],
					'pemesan_id' => $post['nobooking'],
					'unit_id'	     => $post['kavling'],
					'nama' 			 => $post['nama'],
					'alamat'	 	 => $post['alamat'],
					'no_ktp'	 	 => $post['noktp'],						
					'harga'			 => $post['harga'], 
							
					'totalbayar'		 => $post['total'],
					'pembayaran'		 => $post['pembayaran'],
					
					'uang_muka'		 => $post['uangmuka'],
					'lebihtanah'		 => $post['lebihtanah'],
					'lebihbangunan'		 => $post['lebihbangunan'],
					'h_lebihtanah'		 => $post['h_totallebihtanah'],
					'h_lebihbangunan'		 => $post['h_totallebihbangunan'],
					'angsuran'		 => $post['angsuran'],
					'status_bayar'		 => $post['statusbayar'],					
					'tanggal_transaksi' => date('Y-m-d')
					
			];
			$this->db->insert('transaksi', $params);
	}

	public function edit($post)
	{
			$params = [
					'no_transaksi'	 => $post['notransaksi'],
					'pemesan_id' => $post['nobooking'],
					'unit_id'	     => $post['kavling'],
					'nama' 			 => $post['nama'],
					'alamat'	 	 => $post['alamat'],
					'no_ktp'	 	 => $post['noktp'],						
					'harga'			 => $post['harga'], 
					'penyesuaian_harga'	 => $post['penyesuaianharga'],		
					'totalbayar'		 => $post['total'],
					'pembayaran'		 => $post['pembayaran'],
					'keterangan'		 => $post['keterangan'],
					'uang_muka'		 => $post['uangmuka'],
					'angsuran'		 => $post['angsuran'],

					'tanggal' => date('Y-m-d')
			];
			$this->db->where('transaksi_id', $post['id']);
			$this->db->update('transaksi', $params);
	}

public function lunascash($post)
	{
			$params = [
					
					'totalbayar' => $post['totalbayar'],
					'jml_bayar'		 => $post['bayar'],
					
					
			];
			$this->db->where('transaksi_id', $post['id']);
			$this->db->update('transaksi', $params);
	}
	
	

	public function buat_kode(){
		  $this->db->select('RIGHT(transaksi.transaksi_id,4) as kode', FALSE);
		  $this->db->order_by('transaksi_id','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('transaksi');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->kode) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl 	= date('dmy');
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "TRNS-".$tgl.$batas;  //format kode
			  return $kodetampil;  
		 }

	function check_booking($code, $id = null){
		$this->db->from('transaksi');
		$this->db->where('pemesan_id', $code);
		if($id != null){
			$this->db->where('transaksi_id !=' ,$id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function total_rows() {
		$data = $this->db->get('transaksi');

		return $data->num_rows();
	}
	public function totpiutang(){
		$sql ="SELECT sum(totalbayar) AS Total FROM transaksi";
		$result= $this->db->query($sql);
		return $result->row()->Total;

	}

	public function del($id)
	{
		$this->db->where('transaksi_id', $id);
		$this->db->delete('transaksi');
	}

	public function filterdata($tgl_awal,$tgl_akhir){
	   $this->db->select('*');
	   $this->db-> from('transaksi');
	   $this->db->join('unit', 'unit.unit_id = transaksi.unit_id');
	   $this->db->join('pemesan', 'pemesan.pemesan_id = transaksi.pemesan_id');
	   $this->db-> where("tanggal_transaksi BETWEEN '$tgl_awal' AND '$tgl_akhir'");
	   return	$this->db-> get();
	   $this->db-> result();
	}

	

	
	// public function filter_tgl()
	// {
	// 	$this->db->where('tanggal >=',$tgl_awal);
	// 	$this->db->where('tanggal <=',$tgl_akhir);
	// }
}
