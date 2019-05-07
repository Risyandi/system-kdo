<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends CI_Controller {

	function __construct() {
		parent::__construct();
		check_not_login();
		$this->load->model('motor_m');
		$this->load->library('form_validation');
	}
	
	public function index() {
		$data['row']=$this->motor_m->get();
		$this->template->load('template', 'motor/motor_data', $data);
	}
	
	public function del() {
		$id = $this->input->post('id_motor');
		$this->motor_m->del($id);
		
		if($this->db->affected_rows() > 0){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('motor')."';</script>";
	}
	
	public function add() {		
		
		$this->form_validation->set_rules('platnomer', 'Plat Nomer', 'required|is_unique[tbl_motor.plat_no]',
			array('is_unique' => '%s sudah terpakai')
		);
		$this->form_validation->set_rules('nomermesin', 'Nomer Mesin', 'required');
		$this->form_validation->set_rules('nomerrangka', 'Nomer Rangka', 'required');
		$this->form_validation->set_rules('sektor', 'Sektor', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi');

		if ($this->form_validation->run() == FALSE) {
					$this->template->load('template', 'motor/motor_form_add');
                } else {
                    $post = $this->input->post(null, TRUE);
                    $this->motor_m->add($post);
                    if($this->db->affected_rows() > 1) {
                    	echo "<script>
                    			alert('Data berhasil disimpan');
                    		</script>";
                    } echo "<script>
                    			window.location='".site_url('motor')."';
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
			$query = $this->motor_m->get($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'motor/motor_form_edit', $data);
			} else {
				echo "<script>
						alert('data tidak ditemukan');
						window.location='".site_url('motor')."';
					 </script>";
			} 
		} else {
			$post = $this->input->post(null, TRUE);
			$this->motor_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>
						alert('Perubahan data berhasil disimpan');
					</script>";
			} echo "<script>
						window.location='".site_url('motor')."';
					</script>";
			}
		}

		public function plotNomor_check($str){
			$post = $this->input->post(null, TRUE);
			$query = $this->db->query("SELECT * FROM tbl_motor WHERE id_motor = '$post[idmotor]' AND  plat_no != '$post[platnomer]'");
			if ($query->num_rows() > 0) {
				$this->form_validation->set_message('plotNomor_check', '{field} ini sudah dipakai');
				return FALSE;				
			} else {
				return TRUE;
			}
		}
}