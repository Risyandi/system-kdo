<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends CI_Controller {

	function __construct() {
		parent::__construct();
		check_not_login();
		$this->load->model('motor_m');
	}

	public function index() {
		$data['row']=$this->motor_m->get();
		$this->template->load('template', 'motor/motor_data', $data);
	}

	public function edit() {
		$this->template->load('template', 'motor/motor_form_edit');
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
		$this->load->library('form_validation');

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
}