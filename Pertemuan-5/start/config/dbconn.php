<?php

//definisi koneksi ke mysql
$dbconn=mysql_connect("localhost","root","rahasia") or die (mysql_error());

//pilih nama DB
mysql_select_db("sipedi");

if($dbconn)
{
	//jika koneksi suskes
	//echo "Koneksi sukses";
}
else
{
	//jika koneksi gagal
	echo "Koneksi gagal";
}
?>