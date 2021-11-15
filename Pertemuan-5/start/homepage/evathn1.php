<?php
 include("../config/dbconn.php");
 $tahun=$_POST["tahun"];
?>

<?php

if($tahun==''){
$path = "index.php?nav=homepilih";
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
			<div class="col-lg-12"><h2 class="page-header">Hasil Evaluasi Tahun 1</h2> </div>
		</div>
		
		<div class="row">
		<br>
			<div class="col-lg-3">
				<div class="panel panel-red">
					<div class="panel-heading">Kriteria Evaluasi</div>
						<div class="panel-body">
						1. IPK <= 2.0 <br>
						2. SKS >= 40
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
										$eva1 = mysql_query("select TAHUNANGKATAN, NIM, NAMA_MHS, sum(sks) as total_sks, round(sum(SKS*BOBOT_NILAI) / sum(sks),2)  as ips, TAHUNAKADEMIK  from esia where TAHUNANGKATAN=$tahun GROUP by nim");															 
										if(mysql_num_rows($eva1) > 0){
										while($row = mysql_fetch_array($eva1)){
										$i++;
										$NIM = $row['NIM'];
										$NAMA_MHS = $row['NAMA_MHS'];										
										$Total = $row['Total'];
										$IPK = $row['IPK'];
										$tahun = $row['TAHUNANGKATAN'];
										$t1 = $tahun+1;
										$var1 = "$tahun"."$t1"."1";
										$var2 = "$tahun"."$t1"."2";
										$var = $var1.",".$var2;
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
