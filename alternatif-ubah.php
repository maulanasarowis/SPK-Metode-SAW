<?php
include_once 'header.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/alternatif.inc.php';
$eks = new Alternatif($db);

$eks->id = $id;

$eks->readOne();

if($_POST){

	$eks->nama = $_POST['nama'];
	$eks->jk = $_POST['jk'];
	$eks->alamat = $_POST['alamat'];
	$eks->telepon = $_POST['telepon'];
	$eks->email = $_POST['email'];
	
	if($eks->update()){
		echo "<script>location.href='alternatif.php'</script>";
	} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Ubah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="row">
		  <div class="col-xs-12 col-sm-6 col-md-6">
		  <div class="well">
		  	<div class="page-header">
			  <h3>Ubah Alternatif</h3>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <label for="kt">Nama</label>
				    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $eks->nama; ?>">
				  </div>
				  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <?php if($eks->jk=="Laki-laki"){ ?>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="jk" name="jk" value="Laki-laki" checked>
                                    Laki - Laki
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="jk" name="jk" value="Perempuan">
                                    Perempuan
                                </label>
                            </div>
                                            
                    <?php } ?>

                    <?php if($eks->jk=="Perempuan"){ ?>
                            <div class="radio">
                                <label>
                                    <input type="radio"  id="jk" name="jk" value="Laki-laki">
                                    Laki - Laki
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="jk" name="jk" value="Perempuan" checked>
                                    Perempuan
                                </label>
                            </div>
                    <?php } ?>
                  </div>
				  <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3"><?php echo $eks->alamat; ?></textarea>
                   </div>
				  <div class="form-group">
				    <label for="kt">Telepon</label>
				    <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $eks->telepon; ?>">
				  </div>
				  <div class="form-group">
				    <label for="kt">Email</label>
				    <input type="text" class="form-control" id="email" name="email" value="<?php echo $eks->email; ?>">
				  </div>
				  <button type="submit" class="btn btn-primary">Ubah</button>
				  <button type="button" onclick="location.href='alternatif.php'" class="btn btn-success">Kembali</button>
				</form>
			  
		  </div>
		  </div>
		 
		<?php
include_once 'footer.php';
?>