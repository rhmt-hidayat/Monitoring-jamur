<?php
    //koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "db_jamur");
    //baca isi tabel sensor
    $sql = mysqli_query($konek, "SELECT * FROM monitoring ORDER BY id DESC LIMIT 1");
    $data = mysqli_fetch_array($sql);
    $nilai2 = $data["kelembapan"];
    echo $nilai2;
?>
