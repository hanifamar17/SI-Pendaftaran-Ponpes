<?php

class staf extends CI_Controller {
	public function index() {
		$data ['staf'] = $this->staf_model->tampil_data()->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/staf', $data);
		$this->load->view('templates_administrator/footer');
	}

		public function input() {
		$data = array(
			'id_staf' =>set_value('id'),
			'nama' => set_value('nama'),
			'username' =>set_value('username'),
			'email' =>set_value('email'),
			'level' =>set_value('level'),
		);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/staf_form', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi() {
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->input();
		} else {
			$data = array(
				'nama' => $this->input->post('nama', TRUE),
				'username' => $this->input->post('username', TRUE),
				'email' => $this->input->post('email', TRUE),
				'level' => $this->input->post('level', TRUE),
			);

			$this->kelola_user_model->input_data($data);
			redirect('administrator/kelola_user');
		}
	}

	public function _rules() {
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');
	}
}

?>