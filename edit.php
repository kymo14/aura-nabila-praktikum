<!DOCTYPE html>
<html>
    <head>
        <title>Update Data Pengunjung</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <div class="judul">
        <h1>Formulir Perpustakaan Kota Madiun</h1>
        <h2>Menampilkan Data Pengunjung Perpustakaan</h2>
        <h3>www.perpuskotamadiun.id</h3>
    </div>

    <br/>
    <a href="index.php">Lihat Semua Data</a>
    <br/><br/>

    <h3>Edit Data Pengunjung</h3>

    <?php
    include "koneksi.php";

    $id = $_GET['id'];

    $query  = "SELECT * FROM pengunjung WHERE id_pengunjung='$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $data = mysqli_fetch_assoc($result);
    ?>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id_pengunjung']; ?>">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jk">
                        <option value="L" <?php if($data['jenis_kelamin']=='L') echo 'selected'; ?>>Laki-laki</option>
                        <option value="P" <?php if($data['jenis_kelamin']=='P') echo 'selected'; ?>>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Sumber Informasi</td>
                <td>
                    <select name="sumber_info">
                        <option value="Website" <?php if($data['sumber_info']=='Website') echo 'selected'; ?>>Website</option>
                        <option value="Sekolah" <?php if($data['sumber_info']=='Sekolah') echo 'selected'; ?>>Sekolah</option>
                        <option value="Teman" <?php if($data['sumber_info']=='Teman') echo 'selected'; ?>>Teman</option>
                        <option value="Media Sosial" <?php if($data['sumber_info']=='Media Sosial') echo 'selected'; ?>>Media Sosial</option>
                        <option value="Lainnya" <?php if($data['sumber_info']=='Lainnya') echo 'selected'; ?>>Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>
                    <select name="pekerjaan">
                        <option value="TK" <?php if($data['pekerjaan']=='TK') echo 'selected'; ?>>TK</option>
                        <option value="SD/MI" <?php if($data['pekerjaan']=='SD/MI') echo 'selected'; ?>>SD/MI</option>
                        <option value="SMP/MTS" <?php if($data['pekerjaan']=='SMP/MTS') echo 'selected'; ?>>SMP/MTS</option>
                        <option value="SMA/SMK/MAN" <?php if($data['pekerjaan']=='SMA/SMK/MAN') echo 'selected'; ?>>SMA/SMK/MAN</option>
                        <option value="Mahasiswa" <?php if($data['pekerjaan']=='Mahasiswa') echo 'selected'; ?>>Mahasiswa</option>
                        <option value="Karyawan" <?php if($data['pekerjaan']=='Karyawan') echo 'selected'; ?>>Karyawan</option>
                        <option value="Lainnya" <?php if($data['pekerjaan']=='Lainnya') echo 'selected'; ?>>Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Minat Bacaan</td>
                <td>
                    <select name="minat_bacaan">
                        <option value="Fiksi" <?php if($data['minat_bacaan']=='Fiksi') echo 'selected'; ?>>Fiksi</option>
                        <option value="Non-Fiksi" <?php if($data['minat_bacaan']=='Non-Fiksi') echo 'selected'; ?>>Non-Fiksi</option>
                        <option value="Sains" <?php if($data['minat_bacaan']=='Sains') echo 'selected'; ?>>Sains</option>
                        <option value="Sejarah" <?php if($data['minat_bacaan']=='Sejarah') echo 'selected'; ?>>Sejarah</option>
                        <option value="Majalah" <?php if($data['minat_bacaan']=='Majalah') echo 'selected'; ?>>Majalah</option>
                        <option value="Lainnya" <?php if($data['minat_bacaan']=='Lainnya') echo 'selected'; ?>>Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kritik dan Saran</td>
                <td><input type="text" name="kritik_saran" value="<?php echo $data['kritik_saran']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>