<?php
    //Variabel database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbjamur";

    $conn = mysqli_connect("$servername", "$username", "$password","$dbname");

    //Prepare the SQL statement
    $result = mysqli_query ($conn,"INSERT INTO monitoring (suhu,kelembapan,cahaya,gas) VALUES ('".$_GET["suhu"]."','".$_GET["kelembapan"]."','".$_GET["cahaya"]."','".$_GET["gas"]."')");
    if (!$result) 
        {
            die ('Invalid query: '.mysqli_error($conn));
        }
?>