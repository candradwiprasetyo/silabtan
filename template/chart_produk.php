<script type="text/javascript" src="//code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="/silabtan/template/js/highcharts.js"></script>
			<script src="/silabtan/template/js/modules/data.js"></script>
			<script src="/silabtan/template/js/modules/drilldown.js"></script>
<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Browser market shares. January, 2015 to May, 2015'
        },
        subtitle: {
            text: 'Click the columns to view versions. Source: <a href="http://netmarketshare.com">netmarketshare.com</a>.'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Harga rata-rata komoditas (Rp)'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: 'Rp. {point.y:.1f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">Produk</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>Rp. {point.y:.2f}</b><br/>'
        },

        series: [{
            name: 'Produk',
            colorByPoint: true,
            data: [
			<?php
			include 'koneksi.php';
			$query1 = mysql_query("select a.*, jumlah
										from tsilabtan_typeofproduct a 
									join (select avg(c.HARGASEKARANG) as jumlah, IDTYPEOFPRODUCT
									from tsilabtan_product b
									join tsilabtan_titik_pantau_konsumen c on c.IDPRODUCT = b.IDPRODUCT
									where tanggal = '2016-03-16'
									group by IDTYPEOFPRODUCT
									) as b on b.IDTYPEOFPRODUCT = a.IDTYPEOFPRODUCT
								
									where
									(a.IDTYPEOFPRODUCT = '1' or 
									a.IDTYPEOFPRODUCT = '9' or
									a.IDTYPEOFPRODUCT = '15' or
									a.IDTYPEOFPRODUCT = '16' or
									a.IDTYPEOFPRODUCT = '8')");
			while($row1 = mysql_fetch_array($query1)){
				/*$query2 = mysql_query("select avg(c.HARGASEKARANG) as jumlah
									from tsilabtan_product b
									join tsilabtan_titik_pantau_konsumen c on c.IDPRODUCT = b.IDPRODUCT
									where
									b.IDTYPEOFPRODUCT = '".$row1['IDTYPEOFPRODUCT']."'
									and tanggal = '2016-03-16'
									");
				$row2 = mysql_fetch_object($query2);*/
			?>
			{
                name: '<?= $row1['TYPEOFPRODUCT'] ?>',
                y: <?= $row1['jumlah'] ?>,
                drilldown: '<?= $row1['IDTYPEOFPRODUCT'] ?>'
            },
			<?php
			}
			?>
			]
        }],
        drilldown: {
            series: [
			<?php
			$query2 = mysql_query("select a.*, jumlah
										from tsilabtan_typeofproduct a 
									join (select avg(c.HARGASEKARANG) as jumlah, IDTYPEOFPRODUCT
									from tsilabtan_product b
									join tsilabtan_titik_pantau_konsumen c on c.IDPRODUCT = b.IDPRODUCT
									where tanggal = '2016-03-16'
									group by IDTYPEOFPRODUCT
									) as b on b.IDTYPEOFPRODUCT = a.IDTYPEOFPRODUCT
								
									where
									(a.IDTYPEOFPRODUCT = '1' or 
									a.IDTYPEOFPRODUCT = '9' or
									a.IDTYPEOFPRODUCT = '15' or
									a.IDTYPEOFPRODUCT = '16' or
									a.IDTYPEOFPRODUCT = '8')");
			while($row2 = mysql_fetch_array($query2)){
			?>
			{
                name: '<?= $row2['TYPEOFPRODUCT'] ?>',
                id: '<?= $row2['IDTYPEOFPRODUCT'] ?>',
                data: [
					<?php
					$query3 = mysql_query("select a.*, jumlah
												from tsilabtan_product a 
											join (
											select avg(HARGASEKARANG) as jumlah, IDPRODUCT
												
												from tsilabtan_titik_pantau_konsumen
												where tanggal = '2016-03-16'
												group by IDPRODUCT
											) as b on b.IDPRODUCT = a.IDPRODUCT
											where
											a.IDTYPEOFPRODUCT = '".$row2['IDTYPEOFPRODUCT']."'
											");
					while($row3 = mysql_fetch_array($query3)){
					?>
                    [
                        '<?= $row3['NAMEOFPRODUCT'] ?>',
                        <?= $row3['jumlah'] ?>
                    ],
					<?php
					}
					?>
                ]
            },
			<?php
			}
			?>
			
			]
        }
    });
	
	
});
		</script>
		
			
			
			<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
		