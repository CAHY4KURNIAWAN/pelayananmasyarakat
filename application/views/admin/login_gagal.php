<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Login</title>
<link href="<?php echo base_url(); ?>assets/images/imaginearts.png" rel="shortcut icon">
<link href="<?php echo base_url(); ?>assets/css/style-admin.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="login">
<h1>Login Administrator</h1>

<?php echo validation_errors(); ?>
<form name="form1" method="POST" action="<?php echo base_url(); ?>admin/login/validasi">
  <p>
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Username" required autofocus>
  </p>
  <p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="Password" required autofocus>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Login">
    <a href="<?php echo base_url(); ?>">
      <span class="tambah">    Back to home
    </span></a></p>
    <p align="center"><b>Username atau Password Salah!</b></p>
</form>
<footer>Login Administrator</footer>
</div>
</body>
</html>
