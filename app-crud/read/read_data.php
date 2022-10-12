<?php
    include "connection.php";
    $no=1;
    $query = mysqli_query($conn, "SELECT * FROM siswa");
    $hasil = [];
    while ($data=mysqli_fetch_array($query)) { 
        $hasil[] = $data;
    }