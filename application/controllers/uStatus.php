<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class uStatus extends CI_Controller
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
          $this->load->view('account/laporan_list',$data);
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
           $this->load->view('account/laporan_read', $data);
       } else {
           $this->session->set_flashdata('message', 'Record Not Found');
           redirect(site_url('uStatus'));
       }
   }
 }
