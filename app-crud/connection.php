<?php
    $host ="localhost";
    $user ="root";
    $pass ="";
    $database ="sekolah";

    $conn = mysqli_connect($host, $user, $pass, $database);

    //if($conn){
        //echo("Gagal");
    if (!$conn) {
        die("gagal: " . mysqli_connect_error());        
    }
    
?>