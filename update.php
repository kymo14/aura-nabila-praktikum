<?php
include 'koneksi.php';

$npm    = $_POST['npm'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas  = $_POST['kelas'];

$query = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', kelas='$kelas' WHERE npm='$npm'";

if (mysqli_query($conn, $query)) {
    header("location:index.php?pesan=update");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>