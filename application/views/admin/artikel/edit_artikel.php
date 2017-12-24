<div class="konten">

<h1>UPDATE ARTIKEL</h1>
<?php require_once('tinymce.php') ?>
<form name="form1" method="post" action="<?php echo base_url(); ?>admin/artikel/edit" class="myform">
	<p><label for="judul">Judul Artikel</label>
		<input name="judul" type="text" id="judul" size="70" value="<?php echo $detail['judul'] ?>">
	</p>
	<p>
		<label for="ringkasan">Ringkasan Artikel</label>
		<textarea name="ringkasan" id="ringkasan" cols="45" rows="5"><?php echo $detail['ringkasan'] ?></textarea>
	</p>
	<p>
		<label for="isi">Isi Artikel</label>
		<textarea name="isi" id="isi" cols="45" rows="5"><?php echo $detail['isi'] ?></textarea>
	</p>
	<p>
		<label for="status_artikel">Status Artikel</label>
		<select name="status_artikel" id="status_artikel">
			<option value="Publish" <?php if ($detail['status_artikel'] == "Publish") { echo 'selected'; } ?>>Publikasikan</option>
			<option value="Draft" <?php if($detail['status_artikel'] == "Draft") { echo 'selected';} ?>>Simpan Sebagai Draft</option>
		</select>
		<input name="id_user" type="hidden" id="id_user" value="1">
		<input name="id_artikel" type="hidden" id="id_artikel" value="<?php echo $detail['id_artikel'] ?>">
	</p>
	<p>
		<input type="submit" name="submit" id="submit" value="Submit">
		<input type="reset" name="submit2" id="submit2" value="Reset">
	</p>
</form>
</div>