<?php

class kelola_website_model extends CI_Model {

	public function tampil_data() {
		return $this->db->get('website');
	}

	public function edit_data($where) {
		return $this->db->get_where('website', $where);
	}

	public function update_data($where) {
		return $this->db->get_where('website', $where);
	}
}

?>