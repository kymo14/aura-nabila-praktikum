<?php
include 'koneksi.php';

$id         = $_POST['id_pelanggan'];
$nama       = $_POST['nama'];
$alamat     = $_POST['alamat'];
$tanggal    = $_POST['tanggal'];
$telp       = $_POST['telp'];
$no_polisi  = $_POST['no_polisi'];
$km         = $_POST['km'];
$pekerjaan  = $_POST['pekerjaan'];
$keluhan    = $_POST['keluhan'];
$biaya      = $_POST['biaya'];

$query = "INSERT INTO pelanggan
(id_pelanggan, nama, alamat, tanggal, telp, no_polisi, km, pekerjaan, keluhan, biaya)
VALUES
('$id', '$nama','$alamat','$tanggal','$telp','$no_polisi','$km','$pekerjaan','$keluhan','$biaya')";

if (mysqli_query($conn, $query)) {
    header("location:index.php?pesan=input");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>