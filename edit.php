<!DOCTYPE html>
<html>
    <head>
        <title>Update Data Pelanggan</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <div class="judul">
        <h1>Formulir Service Motor</h1>
        <h2>Menampilkan Data Pelanggan Service Motor/h2>
        <h3>www.servicemotor.co.id</h3>
    </div>

    <br/>
    <a href="index.php">Lihat Semua Data</a>
    <br/><br/>

    <h3>Edit Data Pelanggan</h3>

    <?php
    include "koneksi.php";

    $id = $_GET['id'];

    $query  = "SELECT * FROM pelanggan WHERE id_pelanggan='$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $data = mysqli_fetch_assoc($result);
    ?>

    <form action="update.php" method="post">
        <input type="hidden" name="id_pelanggan" value="<?php echo $data['id_pelanggan']; ?>">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Service</td>
                <td><input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
            </tr>
            <tr>
                <td>No Polisi</td>
                <td><input type="text" name="no_polisi" value="<?php echo $data['no_polisi']; ?>"></td>
            </tr>
            <tr>
                <td>KM Motor</td>
                <td><input type="number" name="km" value="<?php echo $data['km']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Service</td>
                <td>
                    <select name="pekerjaan" required>
                        <option value="Service Lengkap" <?php if($data['pekerjaan']=='Service Lengkap') echo 'selected'; ?>>Service Lengkap</option>
                        <option value="Service Ringan" <?php if($data['pekerjaan']=='Service Ringan') echo 'selected'; ?>>Service Ringan</option>
                        <option value="Ganti Oli" <?php if($data['pekerjaan']=='Ganti Oli') echo 'selected'; ?>>Ganti Oli</option>
                        <option value="Ganti Part" <?php if($data['pekerjaan']=='Ganti Part') echo 'selected'; ?>>Ganti Part</option>
                        <option value="Lainnya" <?php if($data['pekerjaan']=='Lainnya') echo 'selected'; ?>>Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Keluhan</td>
                <td><input type="text" name="keluhan" value="<?php echo $data['keluhan']; ?>"></td>
            </tr>
            <tr>
                <td>Biaya</td>
                <td><input type="number" name="biaya" value="<?php echo $data['biaya']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>