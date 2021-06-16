<?php
include "models/m_monitoring.php";
$tbl = new monitor($connection);
?>
    
<div class="row">
  <div class="col-lg-12">
    <h1>Sistem Kumbung Jamur Berbasis IoT<small> Intuinistic Fuzzy Sets</small></h1>
    <ol class="breadcrumb">
    <li><a href=""><i class="icon-dashboard"></i> Monitoring Kumbung Jamur</a></li>
    </ol>
  </div>
</div><!-- /.row -->

<div class="row">
  <div class="col-lg-6 text-center">
    <div class="panel panel-info">
      <div class="panel-body">
        <div class="col-xs-12">
          <i class="fa fa-adjust fa-3x"></i>
            <h2><span id="ceksuhu"></h2>
            <a>SUHU</a>
        </div>
      </div>
    </div>            
  </div>
  <div class="col-lg-6 text-center">
    <div class="panel panel-info">
      <div class="panel-body">
        <div class="col-xs-12">
          <i class="fa fa-tint fa-3x"></i>
            <h2><span id="ceklembap"></h2>
            <a>KELEMBAPAN</a>
        </div>
      </div>
    </div>            
  </div>
</div><!-- /.row -->
<div class="row">
  <div class="col-lg-6 text-center">
    <div class="panel panel-info">
      <div class="panel-body">
        <div class="col-xs-12">
          <i class="fa fa-sun-o fa-3x"></i>
            <h2><span id="cekcahaya"></h2>
            <a>INTENSITAS CAHAYA</a>
        </div>
      </div>
    </div>            
  </div>
  <div class="col-lg-6 text-center">
    <div class="panel panel-info">
      <div class="panel-body">
        <div class="col-xs-12">
          <i class="fa fa-fire fa-3x"></i>
            <h2><span id="cekgas"></h2>
            <a>KADAR CO2</a>
        </div>
      </div>
    </div>            
  </div>
</div><!-- /.row -->

    <script type="text/javascript">
      function showTime(){
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();

        if (curr_hour>12) {
          a_p = "AM";
        }else {
          a_p = "PM";
        }

        if (curr_hour == 0) {
          curr_hour=12;
        }
        if (curr_hour == 12) {
          curr_hour=curr_hour-12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);

        document.getElementById('time').innerHTML= curr_hour+":"+curr_minute+":"+curr_second+" ";
      }

      function checkTime(i){
        if (i<10) {
          i = "0"+i;
        }
        return i;
      }
		  setInterval(showTime,500);
	  </script>
      <div style="text-align:center">
        <h2>Nilai data terakhir sensor terkirim pada : </h2>
        <h1 id="time"></h1> 
        <h3 id="date"></h3>
      </div>
    <script>
      var months = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth();
      var year = <?php echo date('Y')?>

      document.getElementById("date").innerHTML=" "+day+" "+months[month]+" "+year;
    </script>
</div>