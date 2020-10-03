<?php
include_once 'header.php';
include_once 'includes/alternatif.inc.php';
$pro = new Alternatif($db);
$stmt = $pro->readAll();
?>
<div class="well">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Data Karyawan</h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='alternatif-baru.php'" class="btn btn-primary">Tambah Data</button>
		</div>
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>

                <th width="100px">Aksi</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </tfoot>

        <tbody>
<?php
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <td><?php echo $row['nama_alternatif'] ?></td>
                <td><?php echo $row['jk'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                <td><?php echo $row['telepon'] ?></td>
                <td><?php echo $row['email'] ?></td>
               
                <td class="text-center">
					<a href="alternatif-ubah.php?id=<?php echo $row['id_alternatif'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="alternatif-hapus.php?id=<?php echo $row['id_alternatif'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			    </td>
            </tr>
<?php
}
?>
        </tbody>

    </table>	
</div>	
<?php
include_once 'footer.php';
?>