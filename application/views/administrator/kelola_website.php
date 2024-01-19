<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4 alert alert-success" role="alert">
        <h1 class="h3 mb-0 text-gray-800">Kelola Website</h1>
    </div>	

    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>Nama</th>
    		<th>Visi</th>
    		<th>Misi</th>
    		<th>Tujuan</th>
    		<th>Aksi</th>
    	</tr>

    	<?php
    	foreach ($website as $website) : ?>

    	<tr>
    		<td><?php echo $website->nama_website ?></td>
    		<td><?php echo $website->visi ?></td>
    		<td><?php echo $website->misi ?></td>
    		<td><?php echo $website->tujuan ?></td>
    		<td width="20px"><?php echo anchor('administator/kelola_website/update','<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
    	</tr>
    	<?php endforeach; ?>
    </table>
<div>