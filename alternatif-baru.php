<?php
include_once 'header.php';
if($_POST){
	
	include_once 'includes/alternatif.inc.php';
	$eks = new Alternatif($db);

	$eks->nama = $_POST['nama'];
	$eks->jk = $_POST['jk'];
	$eks->alamat = $_POST['alamat'];
	$eks->telepon = $_POST['telepon'];
	$eks->email = $_POST['email'];
	
	if($eks->insert()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="alternatif.php">lihat semua data</a>.
</div>
<?php
	}
	
	else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Tambah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="row">
		  <div class="col-xs-12 col-sm-6 col-md-6">
		  <div class="well">
		  	<div class="page-header">
			  <h3>Tambah Data Karyawan</h3>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <label for="kt">Nama</label>
				    <input type="text" class="form-control"  placeholder="Nama" id="nama" name="nama" required>
				  </div>
				  <div class="form-group">
	                    <label>Jenis Kelamin</label>
	                    <div class="radio">
	                        <label>
	                            <input type="radio" id="jk" name="jk" value="Laki-laki" 
	                            checked>Laki - Laki
	                        </label>
	                    </div>
	                    <div class="radio">
	                        <label>
	                            <input type="radio" id="jk" name="jk" value="Perempuan">
	                            Perempuan
	                        </label>
	                    </div>
	               </div>
				  <div class="form-group">
	                    <label>Alamat</label>
	                    <textarea class="form-control" placeholder="Alamat" id="alamat" name="alamat" rows="3" required></textarea>
	               </div>
				  <div class="form-group">
				    <label for="kt">Telepon</label>
				    <input type="text" class="form-control"  placeholder="Telepon" id="telepon" name="telepon" required>
				  </div>
				  <div class="form-group">
				    <label for="kt">Email</label>
				    <input type="text" class="form-control"  placeholder="Email" id="email" name="email" required>
				  </div>
				  <button type="submit" class="btn btn-primary">Simpan</button>
				  <button type="button" onclick="location.href='alternatif.php'" class="btn btn-success">Kembali</button>
				</form>
			  
		  </div>
		  </div>
		 
		<?php
include_once 'footer.php';
?>