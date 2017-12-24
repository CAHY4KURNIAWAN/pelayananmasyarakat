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
        <h2 style="margin-top:0px">Log_history Read</h2>
        <table class="table">
	    <tr><td>Tanggal</td><td><?php echo $Tanggal; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $Keterangan; ?></td></tr>
	    <tr><td>Laporan No Tiket Laporan</td><td><?php echo $Laporan_No_Tiket_Laporan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('log_history') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>