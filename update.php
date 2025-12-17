<?php
include 'koneksi.php';

$id            = $_POST['id'];
$nama          = $_POST['nama'];
$jk            = $_POST['jk'];
$email         = $_POST['email'];
$telp          = $_POST['telp'];
$alamat        = $_POST['alamat'];
$sumber_info   = $_POST['sumber_info'];
$pekerjaan     = $_POST['pekerjaan'];
$minat_bacaan  = $_POST['minat_bacaan'];
$kritik_saran  = $_POST['kritik_saran'];

$query = "UPDATE pengunjung SET
            nama='$nama',
            jenis_kelamin='$jk',
            email='$email',
            telp='$telp',
            alamat='$alamat',
            sumber_info='$sumber_info',
            pekerjaan='$pekerjaan',
            minat_bacaan='$minat_bacaan',
            kritik_saran='$kritik_saran'
          WHERE id_pengunjung='$id'";

if (mysqli_query($conn, $query)) {
    header("location:index.php?pesan=update");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>