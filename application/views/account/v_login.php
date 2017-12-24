<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>
    Halaman Login
  </title>
</head>
<body>
     <h2>Login User</h2>
     <?php
  // Cetak jika ada notifikasi
     if($this->session->flashdata('sukses')) {
          echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
     }
     ?>
     <style>
form {
    border: 3px solid #f1f1f1;
}
     input[type=text], input[type=password] {
         width: 100%;
         padding: 12px 20px;
         margin: 8px 0;
         display: inline-block;
         border: 1px solid #ccc;
         box-sizing: border-box;
     }

     button {
         background-color: #4CAF50;
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         cursor: pointer;
         width: 100%;
     }

     .cancelbtn {
         width: auto;
         padding: 10px 18px;
         background-color: #f44336;
     }

     .imgcontainer {
         text-align: center;
         margin: 24px 0 12px 0;
     }

     img.avatar {
         width: 40%;
         border-radius: 50%;
     }

     .container {
         padding: 16px;
     }

     span.psw {
         float: right;
         padding-top: 16px;
     }

     /* Change styles for span and cancel button on extra small screens */
     @media screen and (max-width: 300px) {
         span.psw {
            display: block;
            float: none;
         }
         .cancelbtn {
            width: 100%;
         }
     }
     </style>
     <body>
     <?php echo form_open('login');?>
     <div class="container">
    <label><b>NIK</b></label>
    <input type="text" placeholder="NIK" name="NIK" value="<?php echo set_value('NIK'); ?>"/>
     </p>
     <p> <?php echo form_error('NIK'); ?> </p>

     <label><b>Password</b></label>
    <input type="password" placeholder="password" name="password" value="<?php echo set_value('password'); ?>"/>
     </p>
     <p> <?php echo form_error('password'); ?> </p>

     <button type="submit">Login</button>
   <input type="checkbox" checked="checked"> Remember me
 </div>

     <p>
       <div class="container" style="background-color:#f1f1f1">
 <button type="button" class="cancelbtn">Cancel</button>
 <?php echo anchor(site_url().'beranda','di sini..'); ?>
 <span class="psw">Forgot <a href="#">password?</a></span>
</div>
    <?php echo anchor('admin/login','admin!'); ?>
