<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4 alert alert-success" role="alert">
        <h1 class="h3 mb-0 text-gray-800">Data Guru</h1>
    </div>	

    <table class="table table-bordered table-striped table-hover">
    	<tr>
            <th>No</th>
            <th>NIP</th>
    		<th>Nama Guru</th>
    		<th>Jenis Kelamin</th>
    		<th>Tempat, Tanggal Lahir</th>
    		<th>Alamat</th>
    		<th>No HP</th>
            <th>Mapel Diampu</th>
    		<th>Aksi</th>
    	</tr>

    	<?php
        $no = 1;
    	foreach ($guru as $guru) : ?>

    	<tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $guru->nip ?></td>
    		<td><?php echo $guru->nama_guru ?></td>
    		<td><?php echo $guru->jenis_kelamin ?></td>
    		<td><?php echo $guru->ttl ?></td>
    		<td><?php echo $guru->alamat ?></td>
    		<td><?php echo $guru->no_hp ?></td>
            <td><?php echo $guru->mapel ?></td>
    		<td width="20px"><?php echo anchor('administator/guru/update','<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
    	</tr>
    	<?php endforeach; ?>
    </table>
<div>