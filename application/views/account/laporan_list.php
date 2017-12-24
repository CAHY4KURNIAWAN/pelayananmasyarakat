<!doctype html>
<html>
    <head>
        <title>Status</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>

        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pelayanan</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="dashboard">Home</a></li>
            <li><a href="ulaporan">Laporan</a></li>
            <li class="active"><a href="uStatus">Berita</a></li>

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
        <h2 style="margin-top:0px">Laporan</h2>
        <p> Anda sedang login <?php echo ucfirst($this->session->userdata('NIK')); ?>!</p>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php //echo anchor(site_url('laporan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>

                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tanggal</th>
		<th>Judul</th>
		<th>Kategori</th>
		<th>Keluhan</th>
		<th>Pelapor</th>
		<th>Status</th>
    <th>Petugas</th>
		<th>Action</th>
            </tr><?php
            foreach ($laporan_data as $laporan)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $laporan->Tanggal ?></td>
			<td><?php echo $laporan->Judul ?></td>
			<td><?php echo $laporan->Kategori ?></td>
			<td><?php echo $laporan->Keluhan ?></td>
			<td><?php echo $laporan->Pelapor_idPelapor ?></td>
			<td><?php echo $laporan->status_idstatus ?></td>
      <td><?php echo $laporan->Petugas_id_Petugas ?></td>

			<td style="text-align:center" width="200px">
				<?php
				echo anchor(site_url('uStatus/read/'.$laporan->No_Tiket_Laporan),'Read');
				//echo ' | ';
				//echo anchor(site_url('laporan/update/'.$laporan->No_Tiket_Laporan),'Update');
				//echo ' | ';
				//echo anchor(site_url('laporan/delete/'.$laporan->No_Tiket_Laporan),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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

        <p> Keterangan Status: </p>
        <p> 0: Belum dilihat Admin </p>
        <p> 4: Belum Diproses </p>
        <p> 3: Sedang Dikerjakan </p>
        <p> 2: Sudah Ditangani </p>
        <p> 1: Sudah Selesai </p>
    </body>
</html>
