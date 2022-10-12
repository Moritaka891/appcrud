<?php
include "connection.php";
?>
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
    <div class="container-table">
        <table border="1" class="table">
            <thead class="table-header">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "read/read_data.php";

                foreach ($hasil as $r) { ?>
                    <tr>
                        <td style="text-align:center"><?php echo $no++ ?></td> 
                        <td style="text-align:center"><?php echo $r['Nama'] ?></td>
                        <td style="text-align:center"><?php echo $r['Kelas'] ?></td>
                        <td style="text-align:center"><?php echo $r['Jurusan'] ?></td>
                    </tr>
                <?php }
                ?>
            
            </tbody>
        </table>
    </div>

</body>

</html>