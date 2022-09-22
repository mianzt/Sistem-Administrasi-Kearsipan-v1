<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {
	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', md5($post['password']));
		$query = $this->db->get();
		return $query;
	}
	public function get($id = null)
	{
		$this->db->from('user');
		if($id != null) {
			$this->db->where('user_id', $id);

		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		/*untk yang kiri ngambil di database, dan yang kanan sesuai dengan name di kolom inputan*/
			$params = [
					'name'		 => $post['nama'],
					'username'	 => $post['user_name'],
					'password' 	 => md5($post['pswrd']),
					'level'		 => $post['lvl'],
					
			];
			$this->db->insert('user', $params);
	}

	public function edit($post)
	{
			$params = [
					'name'		 => $post['nama'],
					'username'	 => $post['user_name'],
					'password' 	 => md5($post['pswrd']),
					'level'		 => $post['lvl'],
			];
			$this->db->where('user_id', $post['id']);
			$this->db->update('user', $params);
	}

	public function del($id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete('user');
	}
}
