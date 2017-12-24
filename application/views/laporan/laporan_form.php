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
        <h2 style="margin-top:0px">Laporan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Tanggal <?php echo form_error('Tanggal') ?></label>
            <input type="text" class="form-control" name="Tanggal" id="Tanggal" placeholder="Tanggal" value="<?php echo $Tanggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('Judul') ?></label>
            <input type="text" class="form-control" name="Judul" id="Judul" placeholder="Judul" value="<?php echo $Judul; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kategori <?php echo form_error('Kategori') ?></label>
            <input type="text" class="form-control" name="Kategori" id="Kategori" placeholder="Kategori" value="<?php echo $Kategori; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Keluhan <?php echo form_error('Keluhan') ?></label>
            <input type="text" class="form-control" name="Keluhan" id="Keluhan" placeholder="Keluhan" value="<?php echo $Keluhan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Pelapor IdPelapor <?php echo form_error('Pelapor_idPelapor') ?></label>
            <input type="text" class="form-control" name="Pelapor_idPelapor" id="Pelapor_idPelapor" placeholder="Pelapor IdPelapor" value="<?php echo $Pelapor_idPelapor; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Status Idstatus <?php echo form_error('status_idstatus') ?></label>
            <input type="text" class="form-control" name="status_idstatus" id="status_idstatus" placeholder="Status Idstatus" value="<?php echo $status_idstatus; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Petugas Id Petugas <?php echo form_error('Petugas_id_Petugas') ?></label>
            <input type="text" class="form-control" name="Petugas_id_Petugas" id="Petugas_id_Petugas" placeholder="Petugas Id Petugas" value="<?php echo $Petugas_id_Petugas; ?>" />
        </div>
	    <input type="hidden" name="No_Tiket_Laporan" value="<?php echo $No_Tiket_Laporan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('laporan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>