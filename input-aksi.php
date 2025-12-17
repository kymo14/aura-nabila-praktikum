<?php
include 'koneksi.php';

$id     = $_POST['id_pasien'];
$nama   = $_POST['nama'];
$jk     = $_POST['jk'];
$usia   = $_POST['usia'];
$telp   = $_POST['telp'];
$alamat = $_POST['alamat'];
$tinggi = $_POST['tinggi'];
$berat  = $_POST['berat'];
$tekanan= $_POST['tekanan'];
$riwayat= $_POST['riwayat'];

$query = "INSERT INTO pasien
(id_pasien, nama, jenis_kelamin, usia, telp, alamat, tinggi, berat, tekanan, riwayat)
VALUES
('$id', '$nama','$jk','$usia','$telp','$alamat','$tinggi','$berat','$tekanan','$riwayat')";

if (mysqli_query($conn, $query)) {
    header("location:index.php?pesan=input");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>