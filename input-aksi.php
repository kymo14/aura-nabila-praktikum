<?php
include 'koneksi.php';

$npm    = $_POST['npm'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas  = $_POST['kelas'];

$query = "INSERT INTO mahasiswa (npm, nama, alamat, kelas) 
          VALUES ('$npm', '$nama', '$alamat', '$kelas')";

if (mysqli_query($conn, $query)) {
    header("location:index.php?pesan=input");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>