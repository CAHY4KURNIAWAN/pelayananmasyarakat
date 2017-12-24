<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Laporan Read</h2>
        <table class="table">
	    <tr><td>Tanggal</td><td><?php echo $Tanggal; ?></td></tr>
	    <tr><td>Judul</td><td><?php echo $Judul; ?></td></tr>
	    <tr><td>Kategori</td><td><?php echo $Kategori; ?></td></tr>
	    <tr><td>Keluhan</td><td><?php echo $Keluhan; ?></td></tr>
	    <tr><td>Pelapor IdPelapor</td><td><?php echo $Pelapor_idPelapor; ?></td></tr>
	    <tr><td>Status Idstatus</td><td><?php echo $status_idstatus; ?></td></tr>
	    <tr><td>Petugas Id Petugas</td><td><?php echo $Petugas_id_Petugas; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('laporan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>