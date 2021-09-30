<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Penjual</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="ProsesInputPenjual.php" name="form1" id="form1" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>
                <h3>Data Penjual</h3>
            </legend>
            <table>
                <tr>
                    <td>No</td>
                    <td>:</td>
                    <td><input type="text" name="id_penjual" id="id_penjual" size="30" maxlength="15"></td>
                </tr>
                <tr>
                    <td>Nama Penjual</td>
                    <td>:</td>
                    <td><input type="text" name="nama_penjual" id="nama_penjual" size="30"></td>
                </tr>
                <tr>
                    <td>Jenis Toko</td>
                    <td>:</td>
                    <td>
                        <select name="jenis_toko" id="jenis_toko">
                            <option value="">--Pilih Jenis Toko--</option>
                            <option value="Toko Makanan">Toko Makanan</option>
                            <option value="Toko Minuman">Toko Minuman</option>
                            <option value="Toko Kerajinan">Toko Kerajinan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id="alamat" size="30"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td><input type="text" name="telepon" id="telepon" size="30"></td>
                </tr>
                <tr>
                    <td>Foto Produk</td>
                    <td>:</td>
                    <td><input type="file" name="foto" id="foto"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" name="simpan" id="simpan">Simpan</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>