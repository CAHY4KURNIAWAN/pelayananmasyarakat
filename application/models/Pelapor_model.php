<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pelapor_model extends CI_Model
{

    public $table = 'pelapor';
    public $id = 'idPelapor';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('idPelapor', $q);
	$this->db->or_like('NIK', $q);
	$this->db->or_like('Nama', $q);
	$this->db->or_like('Alamat', $q);
	$this->db->or_like('Jenis_kelamin', $q);
	$this->db->or_like('No_telepon', $q);
	$this->db->or_like('E_mail', $q);
	$this->db->or_like('password', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('idPelapor', $q);
	$this->db->or_like('NIK', $q);
	$this->db->or_like('Nama', $q);
	$this->db->or_like('Alamat', $q);
	$this->db->or_like('Jenis_kelamin', $q);
	$this->db->or_like('No_telepon', $q);
	$this->db->or_like('E_mail', $q);
	$this->db->or_like('password', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Pelapor_model.php */
/* Location: ./application/models/Pelapor_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-01-08 09:24:20 */
/* http://harviacode.com */