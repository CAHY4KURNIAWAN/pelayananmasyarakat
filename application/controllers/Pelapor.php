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
		'idPelapor' => $row->idPelapor,
		'NIK' => $row->NIK,
		'Nama' => $row->Nama,
		'Alamat' => $row->Alamat,
		'Jenis_kelamin' => $row->Jenis_kelamin,
		'No_telepon' => $row->No_telepon,
		'E_mail' => $row->E_mail,
		'password' => $row->password,
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
	    'idPelapor' => set_value('idPelapor'),
	    'NIK' => set_value('NIK'),
	    'Nama' => set_value('Nama'),
	    'Alamat' => set_value('Alamat'),
	    'Jenis_kelamin' => set_value('Jenis_kelamin'),
	    'No_telepon' => set_value('No_telepon'),
	    'E_mail' => set_value('E_mail'),
	    'password' => set_value('password'),
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
		'NIK' => $this->input->post('NIK',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'Alamat' => $this->input->post('Alamat',TRUE),
		'Jenis_kelamin' => $this->input->post('Jenis_kelamin',TRUE),
		'No_telepon' => $this->input->post('No_telepon',TRUE),
		'E_mail' => $this->input->post('E_mail',TRUE),
		'password' => $this->input->post('password',TRUE),
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
		'idPelapor' => set_value('idPelapor', $row->idPelapor),
		'NIK' => set_value('NIK', $row->NIK),
		'Nama' => set_value('Nama', $row->Nama),
		'Alamat' => set_value('Alamat', $row->Alamat),
		'Jenis_kelamin' => set_value('Jenis_kelamin', $row->Jenis_kelamin),
		'No_telepon' => set_value('No_telepon', $row->No_telepon),
		'E_mail' => set_value('E_mail', $row->E_mail),
		'password' => set_value('password', $row->password),
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
            $this->update($this->input->post('idPelapor', TRUE));
        } else {
            $data = array(
		'NIK' => $this->input->post('NIK',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'Alamat' => $this->input->post('Alamat',TRUE),
		'Jenis_kelamin' => $this->input->post('Jenis_kelamin',TRUE),
		'No_telepon' => $this->input->post('No_telepon',TRUE),
		'E_mail' => $this->input->post('E_mail',TRUE),
		'password' => $this->input->post('password',TRUE),
	    );

            $this->Pelapor_model->update($this->input->post('idPelapor', TRUE), $data);
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
	$this->form_validation->set_rules('NIK', 'nik', 'trim|required');
	$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('Alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('Jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('No_telepon', 'no telepon', 'trim|required');
	$this->form_validation->set_rules('E_mail', 'e mail', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');

	$this->form_validation->set_rules('idPelapor', 'idPelapor', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pelapor.php */
/* Location: ./application/controllers/Pelapor.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-01-08 09:24:20 */
/* http://harviacode.com */