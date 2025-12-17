<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Database dan Menampilkan Data Pengunjung</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <div class="judul">
        <h1>Formulir Perpustakaan Kota Madiun</h1>
        <h2>Menampilkan Data Pengunjung Perpustakaan</h2>
        <h3>www.perpuskotamadiun.id</h3>
    </div>
    <br/>
    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
    if ($pesan == "input") {
        echo "Data pengunjung berhasil ditambahkan.";
    } elseif ($pesan == "update") {
        echo "Data pengunjung berhasil diupdate.";
    } elseif ($pesan == "hapus") {
        echo "Data pengunjungn berhasil dihapus.";
    }
    }   
    ?>
    <br/>
    
    <a class="tombol" href="input.php">+ Tambah Data Pengunjung</a>
    
    <h3>Data Pengunjung</h3>

    <table border="1" class="table">
        <tr>
            <th>Id Pengunjung</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Sumber Informasi</th>
            <th>Pekerjaan</th>
            <th>Minat Bacaan</th>
            <th>Kritik dan Saran</th>
            <th>Opsi</th>
        </tr>

        <?php
        include "koneksi.php";

        $query  = "SELECT * FROM pengunjung";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query error: " . mysqli_error($conn));
        }

        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $data['id_pengunjung']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['telp']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['sumber_info']; ?></td>
            <td><?php echo $data['pekerjaan']; ?></td>
            <td><?php echo $data['minat_bacaan']; ?></td>
            <td><?php echo $data['kritik_saran']; ?></td>
            <td>
                <a class="edit" href="edit.php?id=<?php echo $data['id_pengunjung']; ?>">Edit</a> |
                <a class="hapus" href="hapus.php?id=<?php echo $data['id_pengunjung']; ?>"
                onclick="return confirm('Yakin hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>