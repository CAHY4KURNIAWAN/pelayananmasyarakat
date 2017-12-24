<div class="konten">
	<h1 align="center">Content Management System</h1>
	<div align="right">
		<a href="<?php echo base_url() ?>admin/artikel/tambah" class="tambah">Tambah Artikel</a>
	</div>

	<p>DAFTAR ARTIKEL</p>
	<table width="100%" border="0" cellspacing="0" class="myform">
		<tr>
			<th scope="col">Judul</th>
			<th scope="col">Status</th>
			<th scope="col">Penulis</th>
			<th scope="col">Tanggal</th>
			<th scope="col">&nbsp;</th>
		</tr>

		<?php foreach($artikel as $list) { ?>
		<tr>
			<td>
				<a href="<?php echo base_url() ?>home/read/<?php echo $list['slug'] ?>" target="_blank">
					<?php echo $list['judul']; ?></a>
			</td>
			<td><?php echo $list['status_artikel']; ?></td>
			<td><?php echo $list['nama']; ?></td>
			<td><?php echo $list['tanggal']; ?></td>
			<td>
				<a href="<?php echo base_url() ?>admin/artikel/edit/<?php echo $list['id_artikel'] ?>">EDIT</a> | <a href="<?php echo base_url() ?>admin/artikel/delete/<?php echo $list['id_artikel'] ?>">DELETE</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>