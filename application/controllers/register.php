<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Register extends CI_Controller {

     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account'); //call model
     }

     public function index() {

         $this->form_validation->set_rules('NIK', 'NIK','required');
         $this->form_validation->set_rules('Nama', 'Nama','required');
         $this->form_validation->set_rules('Alamat', 'Alamat','required');
         $this->form_validation->set_rules('Jenis_kelamin', 'Jenis_kelamin','required');
         $this->form_validation->set_rules('No_telepon', 'No_telepon','required');
         $this->form_validation->set_rules('E_mail','E_mail','required|valid_email');
         $this->form_validation->set_rules('password','password','required');
         $this->form_validation->set_rules('password_conf','password_conf','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('account/v_register');
         }else{

             $data['NIK']   =    $this->input->post('NIK');
             $data['Nama']   =    $this->input->post('Nama');
             $data['Alamat']   =    $this->input->post('Alamat');
             $data['Jenis_kelamin']   =    $this->input->post('Jenis_kelamin');
             $data['No_telepon']   =    $this->input->post('No_telepon');
             $data['E_mail']  =    $this->input->post('E_mail');
             $data['password'] =    md5($this->input->post('password'));

             $this->m_account->daftar($data);

             $pesan['message'] =    "Pendaftaran berhasil";

             $this->load->view('account/v_success',$pesan);
         }
     }
 }
