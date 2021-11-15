<?php
include("../config/dbconn.php");
?>

<script type="text/javascript" src="../../assets/oldjs/js/jquery-1.8.2.min.js"></script>
<style type="text/css">
    ${demo.css}
</style>
	<script type="text/javascript">
	$(function () {
		$('#container').highcharts({
			chart: {
				type: 'column'
			},
			title: {
				text: ''
			},
			subtitle: {
				text: 'Source: Fakultas Teknik Unsoed'
			},
			xAxis: {
				categories: [
					'TS',
					'TE',
					'TIF',
					'TG'
				],
				crosshair: true
			},
			yAxis: {
				min: 0,
				title: {
					text: 'Jurusan'
				}
			},
			tooltip: {
				headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
				pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
				footerFormat: '</table>',
				shared: true,
				useHTML: true
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
			<?php
				function getdata($bulan,$tahun,$ket)
				{
					$query="SELECT count(Prodi) from table3 where bulan=$bulan and tahun=$tahun group by Prodi";
					

					$myquery= mysql_query ($query);
					$rows=mysql_fetch_array($myquery);

					if(mysql_num_rows($myquery)==0) { $num = 0; }
					else
						{$num=$rows[0];}
					return $num;
				}
			?>
			series: [{
				name: 'Meninggal',
				<?php
					$c = ''; $a = "[";
					for($i=1; $i<=12; $i++)
					{
						$c .= "".getdata($i,$thn,'Korban Meninggal').",";
					}
					$b = "]";
				?>
				data: <?php echo $a.$c.$b; ?>

			}, {
				name: 'Luka Berat',
				<?php
					$c = ''; $a = "[";
					for($i=1; $i<=12; $i++)
					{
						$c .= "".getdata($i,$thn,'Korban Luka Berat').",";
					}
					$b = "]";
				?>
				data: <?php echo $a.$c.$b; ?>

			}, {
				name: 'Luka Ringan',
				<?php
					$c = ''; $a = "[";
					for($i=1; $i<=12; $i++)
					{
						$c .= "".getdata($i,$thn,'Korban Luka Ringan').",";
					}
					$b = "]";
				?>
				data: <?php echo $a.$c.$b; ?>

			}]
		});
	});
	</script>
</head>
<body>
	<script src="../../assets/oldjs/chartjs/highcharts.js"></script>
	<script src="../../assets/oldjs/chartjs/modules/data.js"></script>
	<script src="../../assets/oldjs/chartjs/modules/exporting.js"></script>

	<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
</body>	