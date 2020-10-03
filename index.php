<?php
include_once 'header.php';
include_once 'includes/nilai.inc.php';
$pro3 = new Nilai($db);
$stmt3 = $pro3->readAll();
include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
$stmt4 = $pro1->readAll();
include_once 'includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();
?>
		<div class="row">
		  <div class="col-xs-10 col-sm-10 col-md-8">
		  	<div class="page-header">
			  <marquee><font face="Comic Sans MS">  <h3>Selamat Datang di Sistem Pendukung Keputusan Seleksi Penerimaan Krayawan dengan Metode SAW</h3></font></marquee>
			</div>
			
		  </div>
		</div>

		<div class="well">
			<font face="Comic Sans MS">  
			<h3>Penjelasan Singkat</h3>
			<hr/>
			Aplikasi ini adalah aplikasi sistem pendukung keputusan dengan metode saw (simple additive weighting) yang mengharuskan
			untuk menginputkan data karyawan dulu kemudian baru nilai, kriteria dan selanjutnya adalah tahap akhir dengan melakukan
			perangkingan (penilaian) pada penilaian karyawan, melihat hasil seleksi laporan hasil akhir.<p>&nbsp;</p></font>
		</div>
	</div>
		<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/highcharts.js"></script>
	<script src="js/exporting.js"></script>
	
	</body>
</html>