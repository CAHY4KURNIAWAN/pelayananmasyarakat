<!doctype html>
<html>
    <head>
        <title>Pelapor - Administrator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>

        <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pelayanan Masyarakat</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="admin/dashboard">Home</a></li>
            <li class="active"><a href="Pelapor">Pelapor</a></li>
            <li><a href="Laporan">Laporan</a></li>
            <li><a href="Petugas">Petugas</a></li>
            <li><a href="Status">Status</a></li>
            <li><a href="Log_history">Log-History</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

          </ul>
        </div>
      </div>
    </nav>

        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Pelapor List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('pelapor/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pelapor/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pelapor'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>NIK</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Jenis Kelamin</th>
		<th>No Telepon</th>
		<th>E Mail</th>
		<th>Password</th>
		<th>Action</th>
            </tr><?php
            foreach ($pelapor_data as $pelapor)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pelapor->NIK ?></td>
			<td><?php echo $pelapor->Nama ?></td>
			<td><?php echo $pelapor->Alamat ?></td>
			<td><?php echo $pelapor->Jenis_kelamin ?></td>
			<td><?php echo $pelapor->No_telepon ?></td>
			<td><?php echo $pelapor->E_mail ?></td>
			<td><?php echo $pelapor->password ?></td>
			<td style="text-align:center" width="200px">
				<?php
				echo anchor(site_url('pelapor/read/'.$pelapor->idPelapor),'Read');
				echo ' | ';
				echo anchor(site_url('pelapor/update/'.$pelapor->idPelapor),'Update');
				echo ' | ';
				echo anchor(site_url('pelapor/delete/'.$pelapor->idPelapor),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>
