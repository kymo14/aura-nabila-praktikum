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

$query = "UPDATE pelanggan SET
            nama='$nama',
            alamat='$alamat',
            tanggal='$tanggal',
            telp='$telp',
            no_polisi='$no_polisi',
            km='$km',
            pekerjaan='$pekerjaan',
            keluhan='$keluhan',
            biaya='$biaya'
          WHERE id_pelanggan='$id'";

if (mysqli_query($conn, $query)) {
    header("location:index.php?pesan=update");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>