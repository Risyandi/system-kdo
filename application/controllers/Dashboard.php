<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		check_not_login();
		$this->load->model('user_m');
	}

	public function index()
	{
		check_not_login();
		$data['motorRusak']=$this->user_m->getCount("Rusak", 'tbl_motor');
		$data['motorBaik']=$this->user_m->getCount("Baik", 'tbl_motor');
		$data['mobilRusak']=$this->user_m->getCount("Rusak", 'tbl_mobil');
		$data['mobilBaik']=$this->user_m->getCount("Baik", 'tbl_mobil');
		$data['mServicebengkel']=$this->user_m->getCount("Service Bengkel", 'tbl_mobil');
		$data['mServiceatpm']=$this->user_m->getCount("Service ATPM", 'tbl_mobil');
		$data['mtrServicebengkel']=$this->user_m->getCount("Service Bengkel", 'tbl_motor');
		$data['mtrServiceatpm']=$this->user_m->getCount("Service ATPM", 'tbl_motor');
		$this->template->load('template', 'dashboard', $data);
	}
}


