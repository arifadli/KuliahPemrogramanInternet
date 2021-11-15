<?php
 include("../config/dbconn.php");
  $tahun=$_POST["tahun"];
?>

<?php

if($tahun==''){
$path = "index.php?nav=pilihtaun";
echo"<script>window.location.href='$path';</script>";
}
else{

}

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">        
    </head>
    <body>
		<div class="row">
			<div class="col-lg-12"><h2 class="page-header">Hasil Evaluasi Basis Kurikulum</h2> </div>
		</div>
		
		<div class="row">
		<br>
			<div class="col-lg-4">
				<div class="panel panel-red">
					<div class="panel-heading">Kriteria Evaluasi</div>
						<div class="panel-body">
						1. Total SKS MK Wajib = 114 <br>
						2. Total SKS MK Wajib Konsentrasi = 18 <br>
						3. Total SKS MK Pilihan = 12 <br>
						4. IPK >= 2.0 <br>
						5. Tidak Ada Nilai E
						</div>
				</div>
			</div>
		</div>
		   
                    <div class="row">
                <div class="col-lg-12">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Capaian</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										$eva1 = mysql_query("SELECT NIM, NAMA_MHS, sum(if(sifat2013 = 'WK', sks2013, 0)) as skswk, 
															sum(if(sifat2013 = 'Wajib', sks2013, 0)) as skswajib,
															sum(if(sifat2013 = 'Pilihan', sks2013, 0)) as skspilihan,
															sum(sks * BOBOT_NILAI)/sum(sks) as IPK,
															count(if(NILAI_HURUF = 'E', sks2013, NULL)) as NilaiE
															FROM esia, table5 WHERE (esia.KODEKUL = table5.KODEKUL) AND TAHUNANGKATAN=$tahun
															GROUP BY NIM");															 
										if(mysql_num_rows($eva1) > 0){
										while($row = mysql_fetch_array($eva1)){
										$NIM = $row['NIM'];
										$NAMA_MHS = $row['NAMA_MHS'];										
										$skswk = $row['skswk'];
										$skswajib = $row['skswajib'];
										$skspilihan = $row['skspilihan'];
										$nilaiE = $row['NilaiE'];
										$IPK = $row['IPK'];
									?>															
									<tr>
									  <td><?php echo $NIM; ?></td>
									  <td><?php echo $NAMA_MHS; ?></td>
									  <td>
										<?php 
											echo "SKS MK Wajib = ".$skswajib."<br>";
											echo "SKS MK Wajib Konsentrasi = ".$skswk."<br>";											
											echo "SKS MK Pilihan = ".$skspilihan."<br>";
											echo "Jumlah Nilai E = ".$nilaiE."<br>";
											echo "IPK = ".$IPK."<br>";
										?>
									  </td>									
									</tr>	
									<?php }} ?>	                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                                   
            
        </div>
        <!-- /#page-wrapper -->
    <script src="../../assets/jquery/jquery.min.js"></script>

    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="../../assets/metisMenu/metisMenu.min.js"></script>

    <script src="../../assets/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../../assets/datatables-responsive/dataTables.responsive.js"></script>

    <script src="../../assets/dist/js/sb-admin-2.js"></script>


    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    </body>
</html>
