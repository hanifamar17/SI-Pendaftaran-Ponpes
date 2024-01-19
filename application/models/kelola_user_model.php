<?php

class kelola_user_model extends CI_Model {
	public function tampil_data() {
		return $this->db->get('kelola_user');
	}

	public function input_data($data) {
		$this->db->insert('kelola_user', $data);
	}
}

?>