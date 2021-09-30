<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goedang Oleh-olehku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1 style="text-align: center;">Data Penjual</h1>
    <center><a href="InputPenjual.php">Tambah Data</a></center>
    <table border="1" style="margin: auto;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Penjual</th>
                <th>Jenis Toko</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Foto Produk</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM penjual"); ?>
        <?php foreach ($result as $row) : ?>
            <tbody>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nama_penjual']; ?></td>
                    <td><?= $row['jenis_toko']; ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['telepon']; ?></td>
                    <td>
                        <center>
                            <img src="img/<?= $row['foto']; ?>" width="70px" height="70px">
                        </center>
                    </td>
                    <td>
                        <a href="EditPenjual.php?id=<?= $row['id_penjual']; ?>">Edit</a>
                    </td>
                    <td>
                        <a href="HapusPenjual.php?id=<?= $row['id_penjual']; ?>">Hapus</a>
                    </td>
                </tr>
            </tbody>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>