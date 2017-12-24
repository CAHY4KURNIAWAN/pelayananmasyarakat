<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'laporan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'laporan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'laporan/index.html';
            $config['first_url'] = base_url() . 'laporan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Laporan_model->total_rows($q);
        $laporan = $this->Laporan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'laporan_data' => $laporan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('laporan/laporan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Laporan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'No_Tiket_Laporan' => $row->No_Tiket_Laporan,
		'Tanggal' => $row->Tanggal,
		'Judul' => $row->Judul,
		'Kategori' => $row->Kategori,
		'Keluhan' => $row->Keluhan,
		'Pelapor_idPelapor' => $row->Pelapor_idPelapor,
		'status_idstatus' => $row->status_idstatus,
		'Petugas_id_Petugas' => $row->Petugas_id_Petugas,
	    );
            $this->load->view('laporan/laporan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('laporan/create_action'),
	    'No_Tiket_Laporan' => set_value('No_Tiket_Laporan'),
	    'Tanggal' => set_value('Tanggal'),
	    'Judul' => set_value('Judul'),
	    'Kategori' => set_value('Kategori'),
	    'Keluhan' => set_value('Keluhan'),
	    'Pelapor_idPelapor' => set_value('Pelapor_idPelapor'),
	    'status_idstatus' => set_value('status_idstatus'),
	    'Petugas_id_Petugas' => set_value('Petugas_id_Petugas'),
	);
        $this->load->view('laporan/laporan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Tanggal' => $this->input->post('Tanggal',TRUE),
		'Judul' => $this->input->post('Judul',TRUE),
		'Kategori' => $this->input->post('Kategori',TRUE),
		'Keluhan' => $this->input->post('Keluhan',TRUE),
		'Pelapor_idPelapor' => $this->input->post('Pelapor_idPelapor',TRUE),
		'status_idstatus' => $this->input->post('status_idstatus',TRUE),
		'Petugas_id_Petugas' => $this->input->post('Petugas_id_Petugas',TRUE),
	    );

            $this->Laporan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('laporan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Laporan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('laporan/update_action'),
		'No_Tiket_Laporan' => set_value('No_Tiket_Laporan', $row->No_Tiket_Laporan),
		'Tanggal' => set_value('Tanggal', $row->Tanggal),
		'Judul' => set_value('Judul', $row->Judul),
		'Kategori' => set_value('Kategori', $row->Kategori),
		'Keluhan' => set_value('Keluhan', $row->Keluhan),
		'Pelapor_idPelapor' => set_value('Pelapor_idPelapor', $row->Pelapor_idPelapor),
		'status_idstatus' => set_value('status_idstatus', $row->status_idstatus),
		'Petugas_id_Petugas' => set_value('Petugas_id_Petugas', $row->Petugas_id_Petugas),
	    );
            $this->load->view('laporan/laporan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('No_Tiket_Laporan', TRUE));
        } else {
            $data = array(
		'Tanggal' => $this->input->post('Tanggal',TRUE),
		'Judul' => $this->input->post('Judul',TRUE),
		'Kategori' => $this->input->post('Kategori',TRUE),
		'Keluhan' => $this->input->post('Keluhan',TRUE),
		'Pelapor_idPelapor' => $this->input->post('Pelapor_idPelapor',TRUE),
		'status_idstatus' => $this->input->post('status_idstatus',TRUE),
		'Petugas_id_Petugas' => $this->input->post('Petugas_id_Petugas',TRUE),
	    );

            $this->Laporan_model->update($this->input->post('No_Tiket_Laporan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('laporan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Laporan_model->get_by_id($id);

        if ($row) {
            $this->Laporan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('laporan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('Judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('Kategori', 'kategori', 'trim|required');
	$this->form_validation->set_rules('Keluhan', 'keluhan', 'trim|required');
	$this->form_validation->set_rules('Pelapor_idPelapor', 'pelapor idpelapor', 'trim|required');
	$this->form_validation->set_rules('status_idstatus', 'status idstatus', 'trim|required');
	$this->form_validation->set_rules('Petugas_id_Petugas', 'petugas id petugas', 'trim|required');

	$this->form_validation->set_rules('No_Tiket_Laporan', 'No_Tiket_Laporan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-01-16 13:44:24 */
/* http://harviacode.com */