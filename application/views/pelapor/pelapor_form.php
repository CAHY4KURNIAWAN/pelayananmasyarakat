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
        <h2 style="margin-top:0px">Pelapor <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">NIK <?php echo form_error('NIK') ?></label>
            <input type="text" class="form-control" name="NIK" id="NIK" placeholder="NIK" value="<?php echo $NIK; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('Nama') ?></label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('Alamat') ?></label>
            <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenis Kelamin <?php echo form_error('Jenis_kelamin') ?></label>
            <input type="text" class="form-control" name="Jenis_kelamin" id="Jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $Jenis_kelamin; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Telepon <?php echo form_error('No_telepon') ?></label>
            <input type="text" class="form-control" name="No_telepon" id="No_telepon" placeholder="No Telepon" value="<?php echo $No_telepon; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">E Mail <?php echo form_error('E_mail') ?></label>
            <input type="text" class="form-control" name="E_mail" id="E_mail" placeholder="E Mail" value="<?php echo $E_mail; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <input type="hidden" name="idPelapor" value="<?php echo $idPelapor; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pelapor') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>