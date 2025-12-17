<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM pengunjung WHERE id_pengunjung='$id'";

if (mysqli_query($conn, $query)) {
    header("Location: index.php?pesan=hapus");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}