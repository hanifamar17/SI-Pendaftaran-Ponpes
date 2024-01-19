<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4 alert alert-success" role="alert">
        <h1 class="h3 mb-0 text-gray-800">Pengelolaan Data Calon Santri</h1>
    </div>	

    <table class="table table-bordered table-striped table-hover">
    	<tr>
            <th>No</th>
    		<th>Nama Calon Santri</th>
    		<th>Jenis Kelamin</th>
    		<th>Tempat, Tanggal Lahir</th>
    		<th>Alamat</th>
    		<th>No Telepon</th>
            <th>Email</th>
    		<th>Aksi</th>
    	</tr>

    	<?php
        $no = 1;
    	foreach ($calon_santri as $santri) : ?>

    	<tr>
            <td><?php echo $no++ ?></td>
    		<td><?php echo $santri->nama_pendaftar ?></td>
    		<td><?php echo $santri->jenis_kelamin ?></td>
    		<td><?php echo $santri->tempat_tanggal_lahir ?></td>
    		<td><?php echo $santri->alamat ?></td>
    		<td><?php echo $santri->no_telepon ?></td>
            <td><?php echo $santri->email ?></td>
    		<td width="20px"><?php echo anchor('administator/calon_santri/update','<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
    	</tr>
    	<?php endforeach; ?>
    </table>
<div>