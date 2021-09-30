<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM penjual WHERE id_penjual = '$id'");

    while ($row = mysqli_fetch_array($result)) {
        $id_penjual = $row["id_penjual"];
        $nama_penjual = $row["nama_penjual"];
        $jenis_toko = $row["jenis_toko"];
        $alamat = $row["alamat"];
        $telepon = $row["telepon"];
        $foto = $row["foto"];
    }
} else {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Penjual</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="ProsesEditPenjual.php" name="form1" id="form1" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>
                <h3>Edit Data Penjual</h3>
            </legend>
            <table>
                <tr>
                    <td>No</td>
                    <td>:</td>
                    <td><input type="text" name="id_penjual" id="id_penjual" size="30" maxlength="15" value="<?= $id_penjual; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Penjual</td>
                    <td>:</td>
                    <td><input type="text" name="nama_penjual" id="nama_penjual" size="30" value="<?= $nama_penjual; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Toko</td>
                    <td>:</td>
                    <td>
                        <select name="jenis_toko" id="jenis_toko">
                            <option value="">--Pilih Jenis Toko--</option>
                            <option value="Toko Makanan" <?php if ($jenis_toko == 'Toko Makanan') echo 'selected="selected"' ?>>Toko Makanan</option>
                            <option value="Toko Minuman" <?php if ($jenis_toko == 'Toko Minuman') echo 'selected="selected"' ?>>Toko Minuman</option>
                            <option value="Toko Kerajinan" <?php if ($jenis_toko == 'Toko Kerajinan') echo 'selected="selected"' ?>>Toko Kerajinan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id="alamat" size="30" value="<?= $alamat; ?>"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td><input type="text" name="telepon" id="telepon" size="30" value="<?= $telepon; ?>"></td>
                </tr>
                <tr>
                    <td>Foto Produk</td>
                    <td>:</td>
                    <td>
                        <input type="file" name="foto" id="foto" /><br>
                        <?php echo $foto; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" name="edit" id="edit">Edit</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>