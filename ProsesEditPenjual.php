<?php
include 'koneksi.php';

if (isset($_POST['edit'])) {
    $id_penjual = $_POST['id_penjual'];
    $nama_penjual = $_POST['nama_penjual'];
    $jenis_toko = $_POST['jenis_toko'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "img/" . $foto;

    if (empty($foto_produk)) {
        $query = "UPDATE penjual SET nama_penjual = '$nama_penjual', jenis_toko = '$jenis_toko', alamat = '$alamat', telepon = '$telepon' WHERE id_penjual = '$id_penjual'";
    } else {
        $file = mysqli_query($koneksi, "SELECT foto FROM penjual WHERE id_penjual = '$id_penjual'");
        $hasil = mysqli_fetch_array($file);
        $foto_lama = $hasil['foto'];
        unlink("img/" . $foto_lama);

        if (move_uploaded_file($tmp, $path)) {
            $query = "UPDATE penjual SET nama_penjual = '$nama_penjual', jenis_toko = '$jenis_toko', alamat = '$alamat', telepon = '$telepon', foto = '$foto' WHERE id_penjual = '$id_penjual'";
        }
    }

    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Data gagal diubah." . mysqli_errno($koneksi) . mysqli_error($koneksi));
    } else {
        echo "<script>
            alert('Data Berhasil Diubah !');
            window.location.href='index.php';
        </script>";
    }
}
