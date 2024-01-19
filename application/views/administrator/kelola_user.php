<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4 alert alert-success" role="alert">
        <h1 class="h3 mb-0 text-gray-800">Kelola User</h1>
    </div>	

    <?php echo anchor('administrator/kelola_user/input', '<button class="btn btn-sm btn-primary mb-3" ><i class="fa fa-plus fa-sm"></i> Tambah User</button>') ?>
    
    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>No</th>
    		<th>Nama</th>
    		<th>Username</th>
    		<th>Email</th>
    		<th>Level</th>
    		<th colspan="2">Aksi</th>
    	</tr>

    	<?php
    	$no = 1;
    	foreach ($user as $usr) : ?>

    	<tr>
    		<td><?php echo $no++?></td>
    		<td><?php echo $usr->nama ?></td>
    		<td><?php echo $usr->username ?></td>
    		<td><?php echo $usr->email ?></td>
    		<td><?php echo $usr->level ?></td>
    		<td width="20px"><div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div></td>
    		<td width="20px"><div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div></td>
    	</tr>
    	<?php endforeach; ?>
    </table>
</div>