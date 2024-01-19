<?php

class guru extends CI_Controller {
	public function index() {
		$data ['guru'] = $this->guru_model->tampil_data()->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/guru', $data);
		$this->load->view('templates_administrator/footer');
	}
}

?>