<?php
    include "../connection.php";
    $id = $_POST['id'];
    $nama = $_POST['Nama'];
    $kelas = $_POST['Kelas'];
    $jurusan = $_POST['Jurusan'];

    $update=mysqli_query($conn,"UPDATE siswa SET id='$id', nama='$nama',kelas='$kelas',jurusan='$jurusan' WHERE id=$id" );
    if($update){
        header("location: ../update.php");
    }else{
        echo "gagal";
    }
      
?>