<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applikasi CRUD</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <ul class="menu">
        <li><a href="index.php">Create</a></li>
        <li><a href="read.php">Read</a></li>
        <li><a href="update.php">Update</a></li>
        <li><a href="delete.php">Delete</a></li>
    </ul>
    <form action="./delete/delete_data.php" method="post" class="form-delete">
        <div class="mt-30">
            <input id="namalengkap" class="input-delete" type="text" name="nama" placeholder="Masukan IDnya" />
        </div>
        <button class="submit-delete mt-10" type="submit">Delete</button>
    </form>
    <div class="container-table">
        <table border="1" class="table">
            <thead class="table-header">
                <tr>
                    <th style="text-align:center">ID</th>
                    <th style="text-align:center">Nama</th>
                    <th style="text-align:center">Kelas</th>
                    <th style="text-align:center">Jurusan</th>
                    <th style="text-align:center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connection.php";
                $i = 0;
                $query = mysqli_query($conn, "SELECT * FROM siswa");
                while ($data = mysqli_fetch_array($query)) { ?>
                    <?php $i++ ?>
                    <tr>
                        <td align="center"> <?= $data['id'] ?> </td>
                        <td align="center"> <?= $data['Nama'] ?> </td>
                        <td align="center"> <?= $data['Kelas'] ?> </td>
                        <td align="center"> <?= $data['Jurusan'] ?> </td>
                        <td align="center"> <a href="./delete/delete_data.php?id=<?php echo $data['id'] ?>">Delete</a></td>
                    </tr>
            </tbody>
        <?php }
        ?>
        </table>
    </div>

</body>

</html>