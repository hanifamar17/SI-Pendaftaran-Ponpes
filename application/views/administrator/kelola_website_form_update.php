<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4 alert alert-success" role="alert">
        <h1 class="h3 mb-0 text-gray-800">Kelola Website</h1>
    </div>	

    <?php foreach($website as $website) : ?>

	<form method="post" action="<?php echo base_url('administrator/kelola_website/update_aksi') ?>">	
		<div class="form-group">
			<label>Nama Website</label>
			<input type="text" name="nama_website" class="form-control" value="<?php echo $website->nama_website ?>">
		</div>

		<div class="form-group">
			<label>Visi</label>
			<textarea name="visi" class="form_control"><?php echo $website->visi ?></textarea>
		</div>

		<div class="form-group">
			<label>Misi</label>
			<textarea name="misi" class="form_control"><?php echo $website->misi ?></textarea>
		</div>

		<div class="form-group">
			<label>Tujuan</label>
			<textarea name="tujuan" class="form_control"><?php echo $website->tujuan ?></textarea>
		</div>

		<button type="submit" class="btn btn-primary">Perbarui</button>
	</form>

	<?php endforeach; ?>
</div>