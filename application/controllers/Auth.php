<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('Form_validation');
        $this->load->helper(array('Form', 'Cookie', 'String'));
    }
 
    public function index()
    {
        // ambil cookie
        $cookie = get_cookie('harviacode');
        
        // cek session
        if ($this->session->userdata('logged')) {
            redirect('home');
        } else if($cookie <> '') {
            // cek cookie
            $row = $this->Auth_model->get_by_cookie($cookie)->row();
            if ($row) {
                $this->_daftarkan_session($row);
            }
        } else {
            $data = array(
                'username' => set_value('username'),
                'password' => set_value('password'),
                'remember' => set_value('remember'),
                'message' => $this->session->flashdata('message'),
            );
            $this->load->view('auth/login', $data);            
        }
    }
        
    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $remember = $this->input->post('remember');
        
        $row = $this->Auth_model->login($username, $password)->row();
        
        if ($row) {
            // login berhasil
            // 1. Buat Cookies jika remember di check
            if ($remember) {
                $key = random_string('alnum', 64);
                set_cookie('harviacode', $key, 3600*24*30); // set expired 30 hari kedepan
                
                // simpan key di database
                $update_key = array(
                    'cookie' => $key
                );
                $this->Auth_model->update($update_key, $row->id_user);
            }
            
            $this->_daftarkan_session($row);
        } else {
            // login gagal
            $this->session->set_flashdata('message','Login Gagal');
            $this->index();
        }
        
    }
    
    public function _daftarkan_session($row) {
        // 1. Daftarkan Session
        $sess = array(
            'logged' => TRUE,
            'id_user' => $row->id_user,
            'username' => $row->username,
        );
        $this->session->set_userdata($sess);
            
        // 2. Redirect ke home
        redirect('home');        
    }
        
    public function logout()
    {
        // delete cookie dan session
        delete_cookie('harviacode');
        $this->session->sess_destroy();
        redirect('auth');
    }
        
}