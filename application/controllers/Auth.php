<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	/**
	 * method login
	 */
	public function login() {
		check_alredy_login();
		$data['titleLogin'] = 'Sistem Kendaraan Dinas Operasional';
		$this->load->view('components/header', $data);
		$this->load->view('login');
		$this->load->view('components/footer');
	}

	/**
	 * method process login
	 */
	public function process() {
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level' => $row->level
				);
				
				$this->session->set_userdata($params);
				echo "<script>
						window.location='".site_url('dashboard')."';
					  </script>";
			} else {
				echo "<script>
						alert('Maaf, Username / Password Salah');
						window.location='".site_url('auth/login')."';
					  </script>";
			}
		}
	}

	/**
	 * method logout
	 */
	public function logout() {
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
