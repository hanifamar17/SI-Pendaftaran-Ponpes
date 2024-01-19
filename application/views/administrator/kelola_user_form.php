<div class="container-fluid">
	<form method="post" action="<?php echo base_url('administrator/kelola_user/input_aksi') ?>">
		
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form-control">
		</div>

		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control">
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control">
		</div>

		<div class="form-group">
			<label>Level</label><br>
			<input type="radio" name="level" value="Admin">Admin
			<input type="radio" name="level" value="User">User
		</div>

		<button type="submit" class="btn btn-primary">Tambahkan</button>
	</form>
</div>