<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

 <!DOCTYPE html>
 <head>
   <meta charset="UTF-8">
   <title>
     Register Akun
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
 <div id="wrap">
 <div id="content">
     <h2>Pendaftaran Akun</h2>

     <?php echo form_open('register');?>

	 <table>

     <tr>  <td>NIK</td>  <td>:</td>
	 <td><input type="text" name="NIK" value="<?php echo set_value('NIK'); ?>"/></td>
     <td> <?php echo form_error('NIK'); ?> </tr>

     <tr>  <td>Nama</td>  <td>:</td>
     <td><input type="text" name="Nama" value="<?php echo set_value('Nama'); ?>"/></td>
     <td> <?php echo form_error('Nama'); ?> </td></tr>

     <tr><td>Alamat</td><td>:</td>
     <td><textarea type="text" name="Alamat" value="<?php echo set_value('Alamat'); ?>" rows="2" cols="15"></textarea></td>
     <td> <?php echo form_error('Alamat'); ?> </td></tr>

     <tr><td>Jenis Kelamin</td><td>:</td>
       <td><select name="Jenis_kelamin" id="Jenis_kelamin">
    <option value="">Select</option>
    <option value="Laki-Laki">Laki-Laki</option>
    <option value="Perempuan">Perempuan</option>
  </select> <font color="#FF0000"><?php echo form_error('Jenis_kelamin');?></font></td>
   </tr>

     <tr><td>No Telepon</td><td>:</td>
     <td><input type="text" name="No_telepon" value="<?php echo set_value('No_telepon'); ?>"/></td>
     <td> <?php echo form_error('No_telepon'); ?> </td></tr>

     <tr><td>Email</td><td>:</td>
     <td><input type="text" name="E_mail" value="<?php echo set_value('E_mail'); ?>"/></td>
     <td> <?php echo form_error('E_mail'); ?> </td> </tr>

     <tr><td>Password</td><td>:</td>
     <td><input type="password" name="password" value="<?php echo set_value('password'); ?>"/></td>
     <td> <?php echo form_error('password'); ?> </td></tr>

     <tr><td>Password Confirm</td><td>:</td>
     <td><input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/></td>
     <td> <?php echo form_error('password_conf'); ?> </td></tr>

	 <tr></tr><tr></tr><tr></tr>
     <tr><td></td><td></td>  <td>
     <input type="submit" name="btnSubmit" value="Daftar" />
     </td></tr>

     <?php echo form_close();?>

     <tr><td>
     Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'beranda','di sini..'); ?>
     </td></tr>
	 </table>
	</div>
	</div>

<div id="footer">
 OK Lapor © 2016

Created by

<a href="http://google.com" target="_blank">IR</a>
</div>
 </body>
 </html>
