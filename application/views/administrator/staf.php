<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4 alert alert-success" role="alert">
        <h1 class="h3 mb-0 text-gray-800">Data Staf</h1>
    </div>	

    <?php echo anchor('administrator/kelola_user/input', '<button class="btn btn-sm btn-primary mb-3" ><i class="fa fa-plus fa-sm"></i> Tambah Data Staf</button>') ?>

    <table class="table table-bordered table-striped table-hover">
    	<tr>
            <th>No</th>
            <th>NIP</th>
    		<th>Nama Staf</th>
    		<th>Jenis Kelamin</th>
    		<th>Tempat, Tanggal Lahir</th>
    		<th>Alamat</th>
    		<th>No HP</th>
            <th>Jabatan</th>
    		<th>Aksi</th>
    	</tr>

    	<?php
        $no = 1;
    	foreach ($staf as $staf) : ?>

    	<tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $staf->nip ?></td>
    		<td><?php echo $staf->nama_staf ?></td>
    		<td><?php echo $staf->jenis_kelamin ?></td>
    		<td><?php echo $staf->ttl ?></td>
    		<td><?php echo $staf->alamat ?></td>
    		<td><?php echo $staf->no_hp ?></td>
            <td><?php echo $staf->jabatan ?></td>
    		<td width="20px"><?php echo anchor('administator/staf/update','<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
    	</tr>
    	<?php endforeach; ?>
    </table>
<div>