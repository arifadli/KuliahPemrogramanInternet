<?php

// buat koneksi dengan MySQL, gunakan database: universitas
$link = new mysqli("localhost", "root", "", "sipedi");

// jalankan query
$result = $link->query("select TAHUNANGKATAN, NIM, NAMA_MHS, sum(sks) as total_sks, round(sum(SKS*BOBOT_NILAI) / sum(sks),2)  as ips, TAHUNAKADEMIK  from esia where TAHUNANGKATAN=2015 GROUP by nim");

echo "<table cellpadding=5 border=1>";
echo "<tr> <td>NIM</td> <td>Nama</td> <td>Total SKS</td> <td>IPK</td> <td>Evaluasi Tahun 1</td> <td>Evaluasi Tahun 2</td> </tr>";
echo "<tr>";

// tampilkan query
while ($row = $result->fetch_array(MYSQLI_ASSOC))
{
   echo "<td>".$row['NIM']."</td>";
   echo "<td>".$row['NAMA_MHS']."</td>";
   echo "<td>".$row['total_sks']."</td>";
   echo "<td>".$row['ips']."</td>";

    $tahun = $row['TAHUNANGKATAN'];
    // echo $tahun; die;
    $t1 = $tahun+1;
    // echo $t1; die;
    $var1 = "$tahun"."$t1"."1";
    $var2 = "$tahun"."$t1"."2";
    $var = $var1.",".$var2;
    // echo $var; die;

//    if($row['TAHUNANGKATAN']==2015) $var = "201520161, 201520162";
   
   $res = $link->query("select NIM, NAMA_MHS, sum(sks) as total_sks, round((sum(SKS*BOBOT_NILAI)/sum(sks)),2) as ips from esia  where nim='$row[NIM]' and TAHUNAKADEMIK in ($var) GROUP by nim");

   while ($bar = $res->fetch_array(MYSQLI_ASSOC))
   {
        $aa = $bar[total_sks]."<br>";
        $bb = $bar[ips]."<br>";
   }

   echo "<td> Total SKS = ".$aa." <br> Avg IP ".$bb."</td>";

   $tahun = $row['TAHUNANGKATAN'];
   // echo $tahun; die;
   $t1 = $tahun+1;
   $t2 = $tahun+2;
   // echo $t1; die;
   $var1 = "$tahun"."$t1"."1";
   $var2 = "$tahun"."$t1"."2";
   $var3 = "$t1"."$t2"."1";
   $var4 = "$t1"."$t2"."2";
   $var = $var1.",".$var2.",".$var3.",".$var4;
//    echo $var; die;

//    if($row['TAHUNANGKATAN']==2015) $var = "201520161, 201520162";
  
  $res = $link->query("select NIM, NAMA_MHS, sum(sks) as total_sks, round((sum(SKS*BOBOT_NILAI)/sum(sks)),2) as ips from esia  where nim='$row[NIM]' and TAHUNAKADEMIK in ($var) GROUP by nim");

  while ($bar = $res->fetch_array(MYSQLI_ASSOC))
  {
       $aa = $bar[total_sks]."<br>";
       $bb = $bar[ips]."<br>";
  }

  echo "<td> Total SKS = ".$aa." <br> Avg IP ".$bb."</td>";
echo "</tr>";
	   
}
echo "</table>";
?>
