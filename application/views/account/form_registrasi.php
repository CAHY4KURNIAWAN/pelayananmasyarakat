<html>
<head>
<title>Form Registrasi</title>
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
 <h2>Registrasi</h2>
<?php
 //deklarasikan awal form
 form_open('registrasi/proses',array('name'=>'regForm', 'method'=>'POST'));
?>
<table>
<tr>  <td>NIK</td>  <td>:</td>  <td><?php echo $f_nik;?></td>  </tr>
<tr>  <td>Password</td>  <td>:</td>  <td><?php echo $f_pw;?></td>  </tr>
<tr><td>	</tr></td>
<tr>  <td>Nama Lengkap</td>  <td>:</td>  <td><?php echo $f_nama;?></td>  </tr>
<tr>  <td>Jenis Kelamin</td>  <td>:</td>  <td>
<?php echo $f_jk1;?> Laki-Laki
<?php echo $f_jk2;?> Perempuan</td>  </tr>
<tr>  <td>Alamat Lengkap</td>  <td>:</td>  <td><?php echo $f_alamat;?></td>  </tr>
<tr>  <td>Agama</td>  <td>:</td>  <td><?php echo $f_agama;?></td>  </tr>
<tr>  <td>No. Telpon</td>  <td>:</td>  <td><?php echo $f_tlp;?></td>  </tr>
<tr>  <td>Email</td>  <td>:</td>  <td><?php echo $f_mail;?></td>  </tr>
<tr>  <td></td>  <td></td>  <td><?php echo $f_tombol;?> <?php echo $f_tombol1;?></td>  </tr>

<tr><td><input type="submit" name="btnSubmit" value="Daftar" /></tr></td>
</table>
<?php
 //deklarasikan akhir form
 form_close();
 ?>
</div>
</div>
<div id="footer">
 OK Lapor © 2016

Created by

<a href="http://google.com" target="_blank">IR</a>
</div>
</body>
</html>