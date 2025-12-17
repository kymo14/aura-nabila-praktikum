<!DOCTYPE html>
<html>
    <head>
        <title>Update Data Pasien</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <div class="judul">
        <h1>Formulir Klinik Sehat</h1>
        <h2>Menampilkan Data Pasien Klinik Sehat</h2>
        <h3>www.kliniksehat.id</h3>
    </div>

    <br/>
    <a href="index.php">Lihat Semua Data</a>
    <br/><br/>

    <h3>Edit Data Pasien</h3>

    <?php
    include "koneksi.php";

    $id = $_GET['id'];

    $query  = "SELECT * FROM pasien WHERE id_pasien='$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $data = mysqli_fetch_assoc($result);
    ?>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id_pasien']; ?>">
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
                <td>Usia</td>
                <td><input type="number" name="usia" value="<?php echo $data['usia']; ?>"></td>
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
                <td>Tinggi Badan</td>
                <td><input type="number" name="tinggi" value="<?php echo $data['tinggi']; ?>"></td>
            </tr>
            <tr>
                <td>Berat Badan</td>
                <td><input type="number" name="berat" value="<?php echo $data['berat']; ?>"></td>
            </tr>
            <tr>
                <td>Tekanan Darah</td>
                <td><input type="text" name="tekanan" value="<?php echo $data['tekanan']; ?>"></td>
            </tr>
            <tr>
                <td>Riwayat Penyakit</td>
                <td>
                    <select name="riwayat">
                        <option value="Tidak Ada" <?php if($data['riwayat']=='Tidak Ada') echo 'selected'; ?>>Tidak Ada</option>
                        <option value="Asma" <?php if($data['riwayat']=='Asma') echo 'selected'; ?>>Asma</option>
                        <option value="Diabetes" <?php if($data['riwayat']=='Diabetes') echo 'selected'; ?>>Diabetes</option>
                        <option value="Penyakit Jantung" <?php if($data['riwayat']=='Penyakit Jantung') echo 'selected'; ?>>Penyakit Jantung</option>
                        <option value="Lainnya" <?php if($data['riwayat']=='Lainnya') echo 'selected'; ?>>Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>