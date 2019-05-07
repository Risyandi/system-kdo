<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {
	/**
	 * models for get login
	 */
	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}

	/**
	 * models for get count dashboard
	 */
	public function getCount($ket, $tbl) {
		$this->db->select('COUNT(*) as count');
		$this->db->from($tbl);
		$this->db->where('keterangan', $ket);
		$query = $this->db->get();
		return $query;
	}
}
