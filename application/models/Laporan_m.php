<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_m extends CI_Model {

	public function filterdata(){
	return $this->db->select('*');
		   $this->db-> From('transaksi');
		   $this->db-> where("tanggal BETWEEN '$tgl_awal' AND '$tgl_akhir'");
			$this->db-> get();
			$this->db-> result_array();
				}
}