 <?php
 // memanggil koneksi
 include("../config/dbconn.php");
 $tahun=$_POST["tahun"];
?>
 
 <br>
 <br>
 <div class="row">
 <div class="col-lg-3">
	<form name="frmbspot" action="index.php?nav=evathn1" method="post">
		<div class="form-group">
			<label>Pilih Tahun</label>
			<div class="panel panel-default">
				<div class="panel-heading">
					Pilih Tahun
				</div>
				<div class="panel-body">
				<?php
					echo"<select name='tahun' id='tahun' class='form-control'>
								<option value='0' selected='selected' disabled>-Pilih-</option>";
						//mengambil nama-nama kecamatan yang ada di database
						$tahun = mysql_query("SELECT Distinct TAHUNANGKATAN as tahunn FROM esia Where TAHUNANGKATAN >= 2014 order by TAHUNANGKATAN asc");
						while($p=mysql_fetch_array($tahun)){
						echo "<option value=\"$p[tahunn]\">$p[tahunn]</option>\n";
						}
					?>
				<?php echo"</select>"; ?>
				</div>
			</div>
        </div>
                <div class="form-group">
                    <input type="submit" name="btn1" value="Submit">
                </div>
            </form>
</div>
</div>