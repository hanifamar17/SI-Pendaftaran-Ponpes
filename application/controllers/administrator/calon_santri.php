<?php

class calon_santri extends CI_Controller {
	public function index() {
		$data ['calon_santri'] = $this->calon_santri_model->tampil_data()->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/calon_santri', $data);
		$this->load->view('templates_administrator/footer');
	}
}

?>