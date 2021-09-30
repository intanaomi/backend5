<?php
error_reporting(0);
include 'koneksi.php';


if (isset($_POST['simpan'])) {
    $id_penjual = $_POST['id_penjual'];
    $nama_penjual = $_POST['nama_penjual'];
    $jenis_toko = $_POST['jenis_toko'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "img/" . $foto;

    if (move_uploaded_file($tmp, $path)) {
        $query = "INSERT INTO penjual VALUES ('$id_penjual','$nama_penjual','$jenis_toko','$alamat', '$telepon', '$foto')";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query gagal dijalankan." . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        } else {
            echo "<script>
                    alert('Data Berhasil Ditambah !');
                    window.location.href='index.php';
                </script>";
        }
    }
}
