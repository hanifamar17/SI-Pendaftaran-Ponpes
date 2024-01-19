<?php

class calon_santri_model extends CI_Model {
	public function tampil_data() {
		return $this->db->get('calon_santri');
	}
}

?>