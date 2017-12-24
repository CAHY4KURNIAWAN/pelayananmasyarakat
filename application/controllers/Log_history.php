<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Log_history extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Log_history_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'log_history/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'log_history/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'log_history/index.html';
            $config['first_url'] = base_url() . 'log_history/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Log_history_model->total_rows($q);
        $log_history = $this->Log_history_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'log_history_data' => $log_history,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('log_history/log_history_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Log_history_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_logHistory' => $row->id_logHistory,
		'Tanggal' => $row->Tanggal,
		'Keterangan' => $row->Keterangan,
		'Laporan_No_Tiket_Laporan' => $row->Laporan_No_Tiket_Laporan,
	    );
            $this->load->view('log_history/log_history_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('log_history'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('log_history/create_action'),
	    'id_logHistory' => set_value('id_logHistory'),
	    'Tanggal' => set_value('Tanggal'),
	    'Keterangan' => set_value('Keterangan'),
	    'Laporan_No_Tiket_Laporan' => set_value('Laporan_No_Tiket_Laporan'),
	);
        $this->load->view('log_history/log_history_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Tanggal' => $this->input->post('Tanggal',TRUE),
		'Keterangan' => $this->input->post('Keterangan',TRUE),
		'Laporan_No_Tiket_Laporan' => $this->input->post('Laporan_No_Tiket_Laporan',TRUE),
	    );

            $this->Log_history_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('log_history'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Log_history_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('log_history/update_action'),
		'id_logHistory' => set_value('id_logHistory', $row->id_logHistory),
		'Tanggal' => set_value('Tanggal', $row->Tanggal),
		'Keterangan' => set_value('Keterangan', $row->Keterangan),
		'Laporan_No_Tiket_Laporan' => set_value('Laporan_No_Tiket_Laporan', $row->Laporan_No_Tiket_Laporan),
	    );
            $this->load->view('log_history/log_history_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('log_history'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_logHistory', TRUE));
        } else {
            $data = array(
		'Tanggal' => $this->input->post('Tanggal',TRUE),
		'Keterangan' => $this->input->post('Keterangan',TRUE),
		'Laporan_No_Tiket_Laporan' => $this->input->post('Laporan_No_Tiket_Laporan',TRUE),
	    );

            $this->Log_history_model->update($this->input->post('id_logHistory', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('log_history'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Log_history_model->get_by_id($id);

        if ($row) {
            $this->Log_history_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('log_history'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('log_history'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('Keterangan', 'keterangan', 'trim|required');
	$this->form_validation->set_rules('Laporan_No_Tiket_Laporan', 'laporan no tiket laporan', 'trim|required');

	$this->form_validation->set_rules('id_logHistory', 'id_logHistory', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Log_history.php */
/* Location: ./application/controllers/Log_history.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-01-08 09:24:16 */
/* http://harviacode.com */