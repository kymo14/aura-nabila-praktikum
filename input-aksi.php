<?php
include 'koneksi.php';

$id            = $_POST['id_pengunjung'];
$nama          = $_POST['nama'];
$jk            = $_POST['jk'];
$email         = $_POST['email'];
$telp          = $_POST['telp'];
$alamat        = $_POST['alamat'];
$sumber_info   = $_POST['sumber_info'];
$pekerjaan     = $_POST['pekerjaan'];
$minat_bacaan  = $_POST['minat_bacaan'];
$kritik_saran  = $_POST['kritik_saran'];

$query = "INSERT INTO pengunjung
(id_pengunjung, nama, jenis_kelamin, email, telp, alamat, sumber_info, pekerjaan, minat_bacaan, kritik_saran)
VALUES
('$id', '$nama','$jk','$email','$telp','$alamat','$sumber_info','$pekerjaan','$minat_bacaan','$kritik_saran')";

if (mysqli_query($conn, $query)) {
    header("location:index.php?pesan=input");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>