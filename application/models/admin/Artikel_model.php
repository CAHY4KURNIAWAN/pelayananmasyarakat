<?php
class Artikel_model extends CI_Model {
	public function __construct() {
		$this->load->database(); // Untuk memanggil database
	}

	// Kode untuk menampilkan artikel
	public function daftar_artikel() {
		$query = $this->db->query(
			'SELECT artikel.judul, artikel.status_artikel, artikel.slug, 
			artikel.id_artikel, artikel.tanggal, users.nama 
			FROM artikel, users WHERE artikel.id_user = users.id_user 
			ORDER BY id_artikel DESC');
	return $query->result_array();
	}

	// Kode untuk menambah artikel baru
	public function tambah($data) {
		return $this->db->insert('artikel', $data);
	}

	// Kode untuk menampilkan detail artikel
	public function detail_artikel($id = FALSE) {
		if ($id === FALSE) {
			$query = $this->db->get('artikel');
			return $query->result_array();
		}
		$query = $this->db->get_where('artikel', array('id_artikel' => $id));
		return $query->row_array();
	}

	// Kode untuk melakukan fungsi Update
	public function edit_artikel($data) {
		$this->db->where('id_artikel', $data['id_artikel']);
		return $this->db->update('artikel', $data);
	}

	// Kode untuk melakukan fungsi Delete
	public function delete_artikel($id) {
		$this->db->where('id_artikel', $id);
		return $this->db->delete('artikel');
	}

} // END CLASS ARTIKEL_MODEL