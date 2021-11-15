<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'line'
            },
            title: {
                text: 'Harga Emas Minggu ini'
            },
            subtitle: {
                text: 'Source: antamgold.com'
            },
            xAxis: {
                categories: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']
            },
            yAxis: {
                title: {
                    text: 'Harga (Rp)'
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'°C';
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Tokyo',
                data: [<?php echo $logm;?>]
            }, {
                name: 'London',
                data: [535500,545500,541500,515500,545500,541500,520000]
            }]
        });
    });
    
});
		</script>
	</head>
	<body>
<script src="<?php echo base_url();?>js/highcharts.js"></script>
<script src="<?php echo base_url();?>js/exporting.js"></script>
<td>
<div id="container" style="width: 300px"></div>
</td>
</body>
</html>
