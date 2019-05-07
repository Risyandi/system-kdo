<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil_m extends CI_Model {

	public function get($id = null) {
		$this->db->from('tbl_mobil');
		if($id !=null) {
			$this->db->where('id_mobil', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function del ($id) {
		$this->db->where('id_mobil', $id);
		$this->db->delete('tbl_mobil');
	}

	public function add($post) {
		$params['plat_no'] = $post['platnomer'];
		$params['no_mesin'] = $post['nomermesin'];
		$params['no_rangka'] = $post['nomerrangka'];
		$params['sektor'] = $post['sektor'];
		$params['no_mobil'] = $post['nomermobil'] != "" ? $post['nomermobil'] : null;
		$params['tipe_mobil'] = $post['tipemobil'] != "" ? $post['tipemobil'] : null;
		$params['merk_mobil'] = $post['merkmobil'] != "" ? $post['merkmobil'] : null;
		$params['keterangan'] = $post['keterangan'];
		$this->db->insert('tbl_mobil', $params);
	}

	public function edit($post) {
		$params['plat_no'] = $post['platnomer'];
		$params['no_mesin'] = $post['nomermesin'];
		$params['no_rangka'] = $post['nomerrangka'];
		$params['sektor'] = $post['sektor'];
		$params['no_mobil'] = $post['nomermobil'] != "" ? $post['nomermobil'] : null;
		$params['tipe_mobil'] = $post['tipemobil'] != "" ? $post['tipemobil'] : null;
		$params['merk_mobil'] = $post['merkmobil'] != "" ? $post['merkmobil'] : null;
		$params['keterangan'] = $post['keterangan'];
		$this->db->where('id_mobil', $post['idmobil']);
		$this->db->update('tbl_mobil', $params);
	}

}