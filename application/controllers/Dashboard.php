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
		$this->template->load('template', 'dashboard', $data);
	}
}


