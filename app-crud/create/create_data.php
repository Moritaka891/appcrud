<?php

    include "../connection.php";       

    $id = rand(11, 99);
    $Nama = htmlspecialchars($_POST['nama']);
    $Kelas = $_POST['kelas'];
    $Jurusan = $_POST['jurusan'];

    $insert = mysqli_query($conn, "INSERT INTO siswa SET id='$id',Nama='$Nama', Kelas='$Kelas', Jurusan='$Jurusan'");

    if ($insert) {
        header("location: ../index.php");
    } else {
        echo `
            <script>
                window.alert("Data Gagal Di Masukan");
                window.location.href='../index.php';
            </script>
        `;
    }

    mysqli_close($conn);


