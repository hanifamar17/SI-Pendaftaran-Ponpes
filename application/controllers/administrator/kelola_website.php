<?php

class kelola_website extends CI_Controller {
	public function index() {
		$data['website'] = $this->kelola_website_model->tampil_data('website')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/kelola_website', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function update($id) {
		$where = array ('id_website' => $id);

		$data['website'] = $this->kelola_website_model->edit_data($where, 'website')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/kelola_website_form_update', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function update_aksi() {
		$id_wesbite = $this->input->post('id_website');
		$nama_wesbite = $this->input->post('nama_website');
		$visi = $this->input->post('visi');
		$misi = $this->input->post('misi');
		$tujuan = $this->input->post('tujuan');

		$data = array (
			'nama_website' => $nama_website,
			'visi' => $visi,
			'misi' => $misi,
			'tujuan' => $tujuan,
		);

		$where = array(
			'id_website' => $id_website,
		);

		$this->kelola_website_model->update_data($where, $data, 'kelola_website');
		redirect('administrator/kelola_website');
	}
}

?>