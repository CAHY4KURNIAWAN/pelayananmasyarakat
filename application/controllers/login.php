<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Login extends CI_Controller {

     public function index() {

         // Fungsi Login
         $valid = $this->form_validation;
         $NIK = $this->input->post('NIK');
         $password = $this->input->post('password');
         $valid->set_rules('NIK','NIK','required');
         $valid->set_rules('password','password','required');

         if($valid->run()) {
             $this->simple_login->login($NIK,$password, base_url('dashboard'), base_url('login'));
         }
         // End fungsi login
         $this->load->view('account/v_login');
     }

     public function logout(){
         $this->simple_login->logout();
     }
 }
