<?php
include 'koneksi.php';

$npm = $_GET['npm'];

$query = "DELETE FROM mahasiswa WHERE npm='$npm'";

if (mysqli_query($conn, $query)) {
    header("location:index.php?pesan=hapus");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>