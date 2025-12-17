<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM pelanggan WHERE id_pelanggan='$id'";

if (mysqli_query($conn, $query)) {
    header("Location: index.php?pesan=hapus");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}