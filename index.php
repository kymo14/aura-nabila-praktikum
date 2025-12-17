<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Database dan Menampilkan Data Pasien</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <div class="judul">
        <h1>Formulir Klinik Sehat</h1>
        <h2>Menampilkan Data Pasien Klinik Sehat</h2>
        <h3>www.kliniksehat.id</h3>
    </div>
    <br/>
    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
    if ($pesan == "input") {
        echo "Data pasien berhasil ditambahkan.";
    } elseif ($pesan == "update") {
        echo "Data pasien berhasil diupdate.";
    } elseif ($pesan == "hapus") {
        echo "Data pasien berhasil dihapus.";
    }
    }   
    ?>
    <br/>
    
    <a class="tombol" href="input.php">+ Tambah Data Pasien</a>
    
    <h3>Data Pasien</h3>

    <table border="1" class="table">
        <tr>
            <th>Id Pasien</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Usia</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Tinggi</th>
            <th>Berat</th>
            <th>Tekanan</th>
            <th>Riwayat</th>
            <th>Opsi</th>
        </tr>

        <?php
        include "koneksi.php";

        $query  = "SELECT * FROM pasien";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query error: " . mysqli_error($conn));
        }

        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $data['id_pasien']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['usia']; ?></td>
            <td><?php echo $data['telp']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tinggi']; ?></td>
            <td><?php echo $data['berat']; ?></td>
            <td><?php echo $data['tekanan']; ?></td>
            <td><?php echo $data['riwayat']; ?></td>
            <td>
                <a class="edit" href="edit.php?id=<?php echo $data['id_pasien']; ?>">Edit</a> |
                <a class="hapus" href="hapus.php?id=<?php echo $data['id_pasien']; ?>"
                onclick="return confirm('Yakin hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>