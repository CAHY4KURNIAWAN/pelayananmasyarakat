<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <head>
<link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/datepicker.css">
   <script src="js/jquery-3.1.1.min.js"></script>
   <script src="js/bootstrap-datepicker.js"></script>
   <script>

   $(function(){
     $('.datepicker').datepicker();
   });
   </script>
      <meta charset="UTF-8">
   <title>
     Home Laporan
   </title>

   <style>
 body
 {
 margin:50px;
 font-family:Arial;
 background:#eee;
 }
 #wrap
 {
 margin:auto;
 width:auto;
 border:5px solid #ccc;
 padding:5px;
 background:#fff;
 box-shadow:4px 4px 10px 2px #888;
 }
 #content
 {
 padding:3px;
 }
 #content h2
 {
 font-size:22px;
 font-weight:bold;
 color:#FF9900;
 }
 .t_reg
 {
 padding:4px;
 }
 .t_reg tr td
 {
 font-size:12px;
 font-weight:bold;
 }
 .teks
 {
 padding:5px;
 border:1px #ccc solid;
 }
 .teksarea
 {
 padding:5px;
 border:1px #ccc solid;
 }
 .tombol
 {
 padding:5px;
 background:#cc0000;
 color:#fff;
 border:1px solid #fff;
 font-size:11px;
 font-weight:bold;
 }
 #footer
 {
 font-size:11px;
 margin:auto;
 margin-top:20px;
 text-align:center;
 }
 #footer a
 {
 text-decoration:none;
 color:#000;
 font-weight:bold;
 }
 </style>

 </head>
 <body>
   <nav class="navbar navbar-inverse">
 <div class="container-fluid">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="#">Pelayanan</a>
   </div>
   <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav">
       <li><a href="dashboard">Home</a></li>
       <li class="active"><a href="ulaporan">Laporan</a></li>
       <li><a href="uStatus">Berita</a></li>

     </ul>
     <ul class="nav navbar-nav navbar-right">
       <li><a href="login/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

     </ul>
   </div>
 </div>
</nav>

 <div id="wrap">
 <div id="content">
     <h2>Input Laporan Anda</h2>

     <p> Anda sedang login <?php echo ucfirst($this->session->userdata('NIK')); ?>!
       untuk membuat laporan pengaduan anda.
       </p>
     <?php echo form_open('ulaporan');?>

	 <table>

         <tr><td>Tanggal</td>  <td>:</td>
         <td><div class="input-group date">
  <input type="text" class="datepicker" name="Tanggal" class="form-control">
</div>
     </td>
     <td> <?php echo form_error('Tanggal'); ?> </td></tr>

     <tr><td>Jenis Laporan</td><td>:</td>
     <td><select name="Judul" id="Judul">
    <option value="">Select</option>
    <option value="Tindak Kriminal">Tindak Kriminal</option>
    <option value="Surat Keterangan Kehilangan">Surat Keterangan Kehilangan</option>
    </select> <font color="#FF0000"><?php echo form_error('Judul');?></font></td>
   </tr>

       <tr><td>Kategori</td><td>:</td>
       <td><select name="Kategori" id="Kategori">
    <option value="">Select</option>
    <option value="Pembegalan">Pembegalan</option>
    <option value="Perampokan">Perampokan</option>
    <option value="Penculikan">Penculikan</option>
    <option value="Penipuan">Penipuan</option>
    <option value="Pemerkosaan">Pemerkosaan</option>
    <option value="Pembunuhan">Pembunuhan</option>
    <option value="Keterangan Kehilangan">Keterangan Kehilangan</option>
    </select> <font color="#FF0000"><?php echo form_error('Kategori');?></font></td>
   </tr>

     <tr><td>Keluhan</td><td>:</td>
     <td><textarea type="text" name="Keluhan" value="<?php echo set_value('Keluhan'); ?>" rows="2" cols="15"></textarea></td>
     <td> <?php echo form_error('Keluhan'); ?> </td></tr>



  	 <tr></tr><tr></tr><tr></tr>
     <tr><td></td><td></td>  <td>
     <input type="submit" name="btnSubmit" value="Input" />
     </td></tr>

     <?php echo form_close();?>

     <tr><td>
     Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'dashboard','di sini..'); ?>
     </td></tr>
	 </table>

	</div>
	</div>

<div id="footer">
 OK Lapor © 2016

Created by Muhammad Nur Ikhsan , Ryan Hafizh Herdiana

<a href="http://google.com" target="_blank">IR</a>
</div>
 </body>
 </html>
