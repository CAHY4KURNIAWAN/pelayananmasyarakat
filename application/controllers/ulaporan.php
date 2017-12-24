<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class uLaporan extends CI_Controller {

     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation', 'session'));
         $this->load->helper(array('url','form'));
         $this->simple_login->cek_login();
         $this->load->model('m_account'); //call model
     }

     public function index() {

         $this->form_validation->set_rules('Tanggal', 'Tanggal','required');
         $this->form_validation->set_rules('Judul', 'Judul','required');
         $this->form_validation->set_rules('Kategori', 'Kategori','required');
         $this->form_validation->set_rules('Keluhan', 'Keluhan','required');


         if($this->form_validation->run() == FALSE) {
             $this->load->view('account/v_laporan');
         }else{

             $data['Tanggal']   =    $this->input->post('Tanggal');
             $data['Judul']   =    $this->input->post('Judul');
             $data['Kategori']   =    $this->input->post('Kategori');
             $data['Keluhan']   =    $this->input->post('Keluhan');
             $data['Pelapor_idPelapor'] =  $this->session->userdata('NIK');
             

             $this->m_account->lapor($data);

             $pesan['message'] =    "Laporan di inputkan";

             $this->load->view('account/v_success1',$pesan);
         }
     }
 }
