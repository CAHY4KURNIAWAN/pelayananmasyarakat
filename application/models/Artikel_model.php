<?php
class Artikel_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	// Kode untuk menampilkan data artikel pada database
	public function daftar_artikel($read = FALSE) {
		if ($read === FALSE) {
			$query = $this->db->query('SELECT * FROM laporan WHERE No_Tiket_Laporan ORDER BY idPelapor DESC');
			return $query->result_array();
		}
		$query = $this->db->get_where('laporan', array('slug' => $read));
		return $query->row_array();
	}
}
