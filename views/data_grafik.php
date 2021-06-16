<div class="row">
    <div class="col-lg-12">
        <h1>DATA GRAFIK<small> Kumbung Jamur</small></h1>
        <ol class="breadcrumb">
          <li><a href=""><i class="icon-dashboard"></i> Grafik menampilkan nilai input parameter</a></li>
            </ol>
    </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-lg-6">
        <div id="data_tabel"></div>
    </div>
    <div class="col-lg-6">
        <div id="data_tabel1"></div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div id="data_tabel2"></div>
    </div>
    <div class="col-lg-6">
        <div id="data_tabel3"></div>
    </div>
</div>

<?php
include "models/m_tabel.php";
$tbl = new data_tabel($connection);
$tampil = $tbl-> tampil();
$temp = array();
$waktu = array();
while($data = $tampil->fetch_object()){
    $temp[] = intval($data->suhu);
    $waktu[] = $data->waktu;
}
?>
<script src="assets/highcharts/highcharts.js"></script>
<script src="assets/highcharts/exporting.js"></script>
<script type="text/javascript">
    Highcharts.chart('data_tabel', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Grafik Nilai Suhu'
    },
    subtitle: {
        text: 'Sistem Kumbung Jamur'
    },
    xAxis: {
        categories: <?=json_encode($waktu) ?>,
        tickmarkPlacement: 'on',
        title: {
            text: 'Waktu'
        }
    },
    yAxis: {
        categories: <?=json_encode($temp) ?>,
        tickmarkPlacement: 'on',
        title: {
            text: 'Suhu'
        },
        
    },
    tooltip: {
        split: true,
        valueSuffix: ''
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [{
        name: 'Suhu',
        data: <?=json_encode($temp) ?>
    }]
});
</script>

<?php
include "models/m_grafik.php";
$tbl = new data_grafik($connection);
$tampil = $tbl-> tampil();
$hum = array();
$waktu = array();
while($data = $tampil->fetch_object()){
    $hum[] = intval($data->kelembapan);
    $waktu[] = $data->waktu;
}
?>
<script type="text/javascript">
    Highcharts.chart('data_tabel1', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Grafik Nilai Kelembapan'
    },
    subtitle: {
        text: 'Sistem Kumbung Jamur'
    },
    xAxis: {
        categories: <?=json_encode($waktu) ?>,
        tickmarkPlacement: 'on',
        title: {
            text: 'Waktu'
        }
    },
    yAxis: {
        categories: <?=json_encode($hum) ?>,
        tickmarkPlacement: 'on',
        title: {
            text: 'Kelembapan'
        },
        
    },
    tooltip: {
        split: true,
        valueSuffix: ''
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [{
        name: 'Kelembapan',
        data: <?=json_encode($hum) ?>
    }]
});
</script>

<?php
include "models/m_grafik1.php";
$tbl = new data_grafik1($connection);
$tampil = $tbl-> tampil();
$ldr = array();
$waktu = array();
while($data = $tampil->fetch_object()){
    $ldr[] = intval($data->cahaya);
    $waktu[] = $data->waktu;
}
?>
<script type="text/javascript">
    Highcharts.chart('data_tabel2', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Grafik Nilai Intensitas Cahaya'
    },
    subtitle: {
        text: 'Sistem Kumbung Jamur'
    },
    xAxis: {
        categories: <?=json_encode($waktu) ?>,
        tickmarkPlacement: 'on',
        title: {
            text: 'Waktu'
        }
    },
    yAxis: {
        categories: <?=json_encode($ldr) ?>,
        tickmarkPlacement: 'on',
        title: {
            text: 'Cahaya'
        },
        
    },
    tooltip: {
        split: true,
        valueSuffix: ''
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [{
        name: 'Cahaya',
        data: <?=json_encode($ldr) ?>
    }]
});
</script>

<?php
include "models/m_grafik2.php";
$tbl = new data_grafik2($connection);
$tampil = $tbl-> tampil();
$mq = array();
$waktu = array();
while($data = $tampil->fetch_object()){
    $mq[] = intval($data->gas);
    $waktu[] = $data->waktu;
}
?>
<script type="text/javascript">
    Highcharts.chart('data_tabel3', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Grafik Nilai Kadar CO2'
    },
    subtitle: {
        text: 'Sistem Kumbung Jamur'
    },
    xAxis: {
        categories: <?=json_encode($waktu) ?>,
        tickmarkPlacement: 'on',
        title: {
            text: 'Waktu'
        }
    },
    yAxis: {
        categories: <?=json_encode($mq) ?>,
        tickmarkPlacement: 'on',
        title: {
            text: 'Kadar CO2'
        },
        
    },
    tooltip: {
        split: true,
        valueSuffix: ''
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [{
        name: 'Kadar CO2',
        data: <?=json_encode($mq) ?>
    }]
});
</script>
