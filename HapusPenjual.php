<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_penjual = $_GET['id'];
    $file = mysqli_query($koneksi, "SELECT foto FROM penjual WHERE id_penjual = '$id_penjual'");
    $hasil = mysqli_fetch_array($file);
    $foto_lama = $hasil['foto'];
    unlink("img/" . $foto_lama);

    $query = "DELETE FROM penjual WHERE id_penjual = '$id_penjual'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Data gagal dihapus." . mysqli_errno($koneksi) . mysqli_error($koneksi));
    } else {
        echo "<script>
                alert('Data Berhasil Dihapus !');
                window.location.href='index.php';
              </script>";
    }
}
