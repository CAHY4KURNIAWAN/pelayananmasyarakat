<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pelapor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelapor_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pelapor/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pelapor/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pelapor/index.html';
            $config['first_url'] = base_url() . 'pelapor/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pelapor_model->total_rows($q);
        $pelapor = $this->Pelapor_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pelapor_data' => $pelapor,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pelapor/pelapor_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pelapor_model->get_by_id($id);
        if ($row) {
            $data = array(
		'NIK' => $row->NIK,
		'Nama' => $row->Nama,
		'Alamat' => $row->Alamat,
		'No_Telepon' => $row->No_Telepon,
		'E_mail' => $row->E_mail,
		'password' => $row->password,
		'Jenis kelamin' => $row->Jenis kelamin,
	    );
            $this->load->view('pelapor/pelapor_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelapor'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pelapor/create_action'),
	    'NIK' => set_value('NIK'),
	    'Nama' => set_value('Nama'),
	    'Alamat' => set_value('Alamat'),
	    'No_Telepon' => set_value('No_Telepon'),
	    'E_mail' => set_value('E_mail'),
	    'password' => set_value('password'),
	    'Jenis kelamin' => set_value('Jenis kelamin'),
	);
        $this->load->view('pelapor/pelapor_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Nama' => $this->input->post('Nama',TRUE),
		'Alamat' => $this->input->post('Alamat',TRUE),
		'No_Telepon' => $this->input->post('No_Telepon',TRUE),
		'E_mail' => $this->input->post('E_mail',TRUE),
		'password' => $this->input->post('password',TRUE),
		'Jenis kelamin' => $this->input->post('Jenis kelamin',TRUE),
	    );

            $this->Pelapor_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pelapor'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pelapor_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pelapor/update_action'),
		'NIK' => set_value('NIK', $row->NIK),
		'Nama' => set_value('Nama', $row->Nama),
		'Alamat' => set_value('Alamat', $row->Alamat),
		'No_Telepon' => set_value('No_Telepon', $row->No_Telepon),
		'E_mail' => set_value('E_mail', $row->E_mail),
		'password' => set_value('password', $row->password),
		'Jenis kelamin' => set_value('Jenis kelamin', $row->Jenis kelamin),
	    );
            $this->load->view('pelapor/pelapor_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelapor'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('NIK', TRUE));
        } else {
            $data = array(
		'Nama' => $this->input->post('Nama',TRUE),
		'Alamat' => $this->input->post('Alamat',TRUE),
		'No_Telepon' => $this->input->post('No_Telepon',TRUE),
		'E_mail' => $this->input->post('E_mail',TRUE),
		'password' => $this->input->post('password',TRUE),
		'Jenis kelamin' => $this->input->post('Jenis kelamin',TRUE),
	    );

            $this->Pelapor_model->update($this->input->post('NIK', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pelapor'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pelapor_model->get_by_id($id);

        if ($row) {
            $this->Pelapor_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pelapor'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelapor'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('Alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('No_Telepon', 'no telepon', 'trim|required');
	$this->form_validation->set_rules('E_mail', 'e mail', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('Jenis kelamin', 'jenis kelamin', 'trim|required');

	$this->form_validation->set_rules('NIK', 'NIK', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pelapor.php */
/* Location: ./application/controllers/Pelapor.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-12-08 15:50:07 */
/* http://harviacode.com */