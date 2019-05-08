<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

	function __construct() {
		parent::__construct();
		check_not_login();
		$this->load->model('mobil_m');
		$this->load->library('form_validation');
	}

	public function index() {
		$data['row']=$this->mobil_m->get();
		$this->template->load('template', 'mobil/mobil_data', $data);
		$this->load->library('form_validation');
	}

	public function del() {
		$id = $this->input->post('id_mobil');
		$this->mobil_m->del($id);

		if($this->db->affected_rows() > 0){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('mobil')."';</script>";
	}

	public function add() {		
		$this->form_validation->set_rules('platnomer', 'Plat Nomer', 'required|is_unique[tbl_mobil.plat_no]',
			array('is_unique' => '%s sudah terpakai')
		);
		$this->form_validation->set_rules('nomermesin', 'Nomer Mesin', 'required');
		$this->form_validation->set_rules('nomerrangka', 'Nomer Rangka', 'required');
		$this->form_validation->set_rules('sektor', 'Sektor', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi');

		if ($this->form_validation->run() == FALSE) {
					$this->template->load('template', 'mobil/mobil_form_add');
                } else {
                    $post = $this->input->post(null, TRUE);
                    $this->mobil_m->add($post);
                    if($this->db->affected_rows() > 0) {
                    	echo "<script>
                    			alert('Data berhasil disimpan');
                    		</script>";
                    } echo "<script>
                    			window.location='".site_url('mobil')."';
                    		</script>";
                }
	}

	public function edit($id) {
		$this->form_validation->set_rules('platnomer', 'Plat Nomer', 'required|callback_plotNomor_check');
		$this->form_validation->set_rules('nomermesin', 'Nomer Mesin', 'required');
		$this->form_validation->set_rules('nomerrangka', 'Nomer Rangka', 'required');
		$this->form_validation->set_rules('sektor', 'Sektor', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');

		// message if required
		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->mobil_m->get($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'mobil/mobil_form_edit', $data);
			} else {
				echo "<script>
						alert('data tidak ditemukan');
						window.location='".site_url('mobil')."';
					 </script>";
			} 
		} else {
			$post = $this->input->post(null, TRUE);
			$this->mobil_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>
						alert('Perubahan data berhasil disimpan');
					</script>";
			} echo "<script>
						window.location='".site_url('mobil')."';
					</script>";
			}
		}

		public function plotNomor_check($str){
			$post = $this->input->post(null, TRUE);
			$query = $this->db->query("SELECT * FROM tbl_mobil WHERE id_mobil = '$post[idmobil]' AND  plat_no != '$post[platnomer]'");
			if ($query->num_rows() > 0) {
				$this->form_validation->set_message('plotNomor_check', '{field} ini sudah dipakai');
				return FALSE;				
			} else {
				return TRUE;
			}
		}
	}
