<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
 public function __construct()
 {
 parent::__construct();
 //load helpernya
	$this->load->library(array('form_validation'));
    $this->load->helper(array('url','form'));
    $this->load->model('m_account'); //call model
}

public function index()
{
//membuat form NIK
$ar_nik = array(
'name'=>'nik',
'id'=>'nik',
'value'=>'',
'class'=>'teks',
'size'=>'40'
);
$data['f_nik'] = form_input($ar_nik);

//membuat form Password
$ar_pw = array(
'name'=>'password',
'id'=>'password',
'value'=>'',
'class'=>'teks',
'size'=>'40'
);
$data['f_pw'] = form_input($ar_pw);

//membuat form nama
$ar_name = array(
'name'=>'nama',
'id'=>'nama',
'value'=>'',
'class'=>'teks',
'size'=>'40'
);
$data['f_nama'] = form_input($ar_name);

//membuat form jenis kelamin
$ar_jk1 = array(
'name'=>'jurusan',
'id'=>'jurusan',
'value'=>'lk'
);
$ar_jk2 = array(
'name'=>'jurusan',
'id'=>'jurusan',
'value'=>'pr'
);
$data['f_jk1'] = form_radio($ar_jk1);
$data['f_jk2'] = form_radio($ar_jk2);

//membuat form alamat
$ar_alamat = array(
'name'=>'alamat',
'id'=>'alamat',
'rows'=>'5',
'cols'=>'40',
'class'=>'teksarea'
);
$data['f_alamat'] = form_textarea($ar_alamat);

//membuat form agama
$ar_agama = array(
'islam'=>'Islam',
'kristen'=>'Kristen',
'katolik'=>'Katolik',
'hindu'=>'Hindu',
'budha'=>'Budha',
'konghucu'=>'Konghucu',
'lainnya'=>'Lainnya'
);
$data['f_agama'] = form_dropdown('agama', $ar_agama);

//membuat form no telpon
$ar_tlp = array(
'name'=>'no telpon',
'id'=>'no telpon',
'value'=>'',
'class'=>'teks',
'size'=>'40'
);
$data['f_tlp'] = form_input($ar_tlp);

//membuat form email
$ar_mail = array(
'name'=>'email',
'id'=>'email',
'value'=>'',
'class'=>'teks',
'size'=>'40'
);
$data['f_mail'] = form_input($ar_mail);

//membuat tombol
$ar_tom = array(
'name'=>'submit',
'id'=> 'submit',
'value'=>'Daftar',
'class'=>'tombol'
);
$data['f_tombol'] = form_submit($ar_tom);

//membuat tombol
$ar_tom1 = array(
'name'=>'reset',
'id'=> 'reset',
'value'=>'Reset',
'class'=>'tombol'
);
$data['f_tombol1'] = form_submit($ar_tom1);

$this->load->view('account/form_registrasi', $data);

}
//end of class
}
?>