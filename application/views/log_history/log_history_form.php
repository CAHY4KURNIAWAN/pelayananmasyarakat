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
        <h2 style="margin-top:0px">Log_history <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="date">Tanggal <?php echo form_error('Tanggal') ?></label>
            <input type="text" class="form-control" name="Tanggal" id="Tanggal" placeholder="Tanggal" value="<?php echo $Tanggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Keterangan <?php echo form_error('Keterangan') ?></label>
            <input type="text" class="form-control" name="Keterangan" id="Keterangan" placeholder="Keterangan" value="<?php echo $Keterangan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Laporan No Tiket Laporan <?php echo form_error('Laporan_No_Tiket_Laporan') ?></label>
            <input type="text" class="form-control" name="Laporan_No_Tiket_Laporan" id="Laporan_No_Tiket_Laporan" placeholder="Laporan No Tiket Laporan" value="<?php echo $Laporan_No_Tiket_Laporan; ?>" />
        </div>
	    <input type="hidden" name="id_logHistory" value="<?php echo $id_logHistory; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('log_history') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>