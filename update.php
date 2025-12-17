<?php
include 'koneksi.php';

$id       = $_POST['id'];
$nama     = $_POST['nama'];
$jk       = $_POST['jk'];
$usia     = $_POST['usia'];
$telp     = $_POST['telp'];
$alamat   = $_POST['alamat'];
$tinggi   = $_POST['tinggi'];
$berat    = $_POST['berat'];
$tekanan  = $_POST['tekanan'];
$riwayat  = $_POST['riwayat'];

$query = "UPDATE pasien SET
            nama='$nama',
            jenis_kelamin='$jk',
            usia='$usia',
            telp='$telp',
            alamat='$alamat',
            tinggi='$tinggi',
            berat='$berat',
            tekanan='$tekanan',
            riwayat='$riwayat'
          WHERE id_pasien='$id'";

if (mysqli_query($conn, $query)) {
    header("location:index.php?pesan=update");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>