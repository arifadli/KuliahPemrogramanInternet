<?php 
include("../config/dbconn.php");
//include "connect.php"; ?>
<head>
<link href="../assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
<link href="../assets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

<script src="azzetz/js/jquery-1.11.3.min.js"></script>

<script src='assets/js/jquery-1.10.1.min.js'></script>           
<script src="assets/js/bootstrap.min.js"></script>



<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
<style type="text/css">
 button { cursor: pointer; }
 .container { margin: auto; width: 800px; }
 .content-form { display: none; }
 .container .content-vieww { display: none; }
 .container .table thead tr th { padding: 7px 10px; background-color: #EBEBEB; }
 .container .table tbody tr td { padding: 7px 10px; border-bottom: 1px solid #DDDDDD; }
 .close-form { float: right; margin-right: 5px; cursor: pointer; }
</style>
</head>
<body onload="initialize()">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Rani - sistem peRingatAn diNi akademIk</h1>
    </div>
</div>

<div class="col-lg-12">                   
	<div class="row">                
	    <div class="col-lg-8">
	        <div class="well">
	            <h3>Deskripsi Umum</h3>
	            <p align="justify">Website ini merupakan prototipe sistem peringatan dini akademik.
				Prototipe ini akan melakukan evaluasi pada data akademik di tahun ke-1, tahun ke-2 dan tahun terakhir
				serta melakukan evaluasi terhadap persyaratan yang ada di kurikulum. <br>
				Parameter yang digunakan merupakan hasil ekstraksi proses educational data mining yang
				telah dilakukan sebelumnya serta didasarkan pada peraturan akademik yang ada</p>
	        </div>			
			<div class="well">
				<p>Data Statistika Mahasiswa Lulus Tepat Waktu</p>
	            <?php include("..homecart.php"); ?>
	        </div>			
	    </div>
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Acknowledgement</h3>
				</div>
				<div class="panel-body">
					<p align="justify">
						Tim Peneliti mengucapkan terima kasih kepada LPPM Unsoed atas dukungan dana pada penelitian ini serta Fakultas Teknik Unsoed atas kesediaan data akademiknya dijadikan sample data percontohan sebagai bahan dasar dalam penelitian ini. 
					</p>
					<br>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>

</div>
</body>