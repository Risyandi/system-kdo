<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor_m extends CI_Model {
	public function get($id = null) {
		$this->db->from('tbl_motor');
		if($id !=null) {
			$this->db->where('id_motor', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function del ($id) {
		$this->db->where('id_motor', $id);
		$this->db->delete('tbl_motor');
	}

	public function add($post) {
		$params['plat_no'] = $post['platnomer'];
		$params['no_mesin'] = $post['nomermesin'];
		$params['no_rangka'] = $post['nomerrangka'];
		$params['sektor'] = $post['sektor'];
		$params['tipe_motor'] = $post['tipemotor'] != "" ? $post['tipemotor'] : null;
		$params['merk_motor'] = $post['merkmotor'] != "" ? $post['merkmotor'] : null;
		$params['keterangan'] = $post['keterangan'];
		$this->db->insert('tbl_motor', $params);
	}

	public function edit($post) {
		$params['plat_no'] = $post['platnomer'];
		$params['no_mesin'] = $post['nomermesin'];
		$params['no_rangka'] = $post['nomerrangka'];
		$params['sektor'] = $post['sektor'];
		$params['tipe_motor'] = $post['tipemotor'] != "" ? $post['tipemotor'] : null;
		$params['merk_motor'] = $post['merkmotor'] != "" ? $post['merkmotor'] : null;
		$params['keterangan'] = $post['keterangan'];
		$this->db->where('id_motor', $post['idmotor']);
		$this->db->update('tbl_motor', $params);
	}

}