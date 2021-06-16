<?php
include "models/m_tabel.php";
$tbl = new data_tabel($connection);
?>

<div class="row">
    <div class="col-lg-12">
        <h1>DATA TABEL<small> Kumbung Jamur</small></h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="icon-dashboard"></i> Data menampilkan nilai input parameter</a></li>
        </ol>
    </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="datatables">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Suhu</th>
                            <th>Kelembapan</th>
                            <th>Intensitas Cahaya</th>
                            <th>Kadar Gas</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $tampil = $tbl-> tampil();
                        while($data = $tampil->fetch_object()){
                        ?>
                        <tr>
                            <td align="center"><?php echo $no++; ?></td>
                            <td><?php echo $data->suhu; ?></td>
                            <td><?php echo $data->kelembapan; ?></td>
                            <td><?php echo $data->cahaya; ?></td>
                            <td><?php echo $data->gas; ?></td>
                            <td><?php echo $data->waktu; ?></td>
                        </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>       
    </div>
</div>