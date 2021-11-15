<?php
 include("../config/dbconn.php");
 $tahun=$_POST["tahun"];
?>

<?php

if($tahun==''){
$path = "index.php?nav=pilihtahun";
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
			<div class="col-lg-12"><h2 class="page-header">Hasil Evaluasi Tahun 3</h2> </div>
		</div>
		
		<div class="row">
		<br>
			<div class="col-lg-6">
				<div class="panel panel-red">
					<div class="panel-heading">Kriteria Evaluasi</div>
						<div class="panel-body">
						1. IPK <= 2.0 <br>
						2. SKS >= 80 <br>
						3. Tidak ada nilai E <br>
						4. Telah menyelesaikan PKL, KKN, Skripsi, Seminar, Ujian Pendadaran <br>
						5. Telah unggah artikel ilmiah
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
										$eva1 = mysql_query("select TAHUNANGKATAN, NIM, NAMA_MHS, sum(sks) as total_sks, round(sum(SKS*BOBOT_NILAI) / sum(sks),2)  as ips, TAHUNAKADEMIK, count(if(NILAI_HURUF = 'E', sks2013, NULL)) as NilaiE from esiaa, table5 where (TAHUNANGKATAN=$tahun) AND esiaa.KODEKUL = table5.KODEKUL GROUP by nim");															 
										if(mysql_num_rows($eva1) > 0){
										while($row = mysql_fetch_array($eva1)){
										$i++;
										$NIM = $row['NIM'];
										$NAMA_MHS = $row['NAMA_MHS'];										
										$Total = $row['Total'];
										$IPK = $row['IPK'];
										$NilaiE = $row['NilaiE'];
										$tahun = $row['TAHUNANGKATAN'];
										$tahun = $row['TAHUNANGKATAN'];
										// echo $tahun; die;
										$t1 = $tahun+1;
										$t2 = $tahun+2;
										$t3 = $tahun+3;
										$t4 = $tahun+4;
										// echo $t1; die;
										$var1 = "$tahun"."$t1"."1";
										$var2 = "$tahun"."$t1"."2";
										$var3 = "$t1"."$t2"."1";
										$var4 = "$t1"."$t2"."2";
										$var5 = "$t2"."$t3"."1";
										$var6 = "$t2"."$t3"."2";
										$var7 = "$t3"."$t4"."1";
										$var8 = "$t3"."$t4"."2";
										$var = $var1.",".$var2.",".$var3.",".$var4.",".$var5.",".$var6.",".$var7.",".$var8;
										$eva1a = mysql_query("select NIM, NAMA_MHS, sum(sks) as total_sks, round((sum(SKS*BOBOT_NILAI)/sum(sks)),2) as ips from esia  where nim='$row[NIM]' and TAHUNAKADEMIK in ($var) GROUP by nim");

										while ($rowa = mysql_fetch_array($eva1a)){
											$aa = $rowa['total_sks']."<br>";
											$bb = $rowa['ips']."<br>";
										}
									?>
									<tr>									
									  <td><?php echo $NIM; ?></td>
									  <td><?php echo $NAMA_MHS; ?></td>
									  <td>
										<?php 
											echo "Total SKS = ".$aa."<br>";
											echo "IPK = ".$bb."<br>";
											echo "KKN = ".$bb."<br>";
											echo "KP = ".$bb."<br>";
											echo "Skripsi = ".$bb."<br>";
											echo "Seminar = ".$bb."<br>";
											echo "Pendadaran = ".$bb."<br>";
											echo "Nilai E = ".$NilaiE."<br>";
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
