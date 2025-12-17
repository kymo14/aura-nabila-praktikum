<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Database dan Menampilkan Data Pelanggan</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <div class="judul">
        <h1>Formulir Service Motor</h1>
        <h2>Menampilkan Data Pelanggan Service Motor/h2>
        <h3>www.servicemotor.co.id</h3>
    </div>
    <br/>
    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
    if ($pesan == "input") {
        echo "Data pelanggan berhasil ditambahkan.";
    } elseif ($pesan == "update") {
        echo "Data pelanggan berhasil diupdate.";
    } elseif ($pesan == "hapus") {
        echo "Data pelanggan berhasil dihapus.";
    }
    }   
    ?>
    <br/>
    
    <a class="tombol" href="input.php">+ Tambah Data Pelanggan</a>
    
    <h3>Data Pelanggan</h3>

    <table border="1" class="table">
        <tr>
            <th>Id Pelanggan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Service</th>
            <th>Telepon</th>
            <th>No Polisi</th>
            <th>KM Motor</th>
            <th>Jenis Service</th>
            <th>Keluhan</th>
            <th>Biaya</th>
            <th>Opsi</th>
        </tr>

        <?php
        include "koneksi.php";

        $query  = "SELECT * FROM pelanggan";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query error: " . mysqli_error($conn));
        }

        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $data['id_pelanggan']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
            <td><?php echo $data['telp']; ?></td>
            <td><?php echo $data['no_polisi']; ?></td>
            <td><?php echo $data['km']; ?></td>
            <td><?php echo $data['pekerjaan']; ?></td>
            <td><?php echo $data['keluhan']; ?></td>
            <td><?php echo $data['biaya']; ?></td>
            <td>
                <a class="edit" href="edit.php?id=<?php echo $data['id_pelanggan']; ?>">Edit</a> |
                <a class="hapus" href="hapus.php?id=<?php echo $data['id_pelanggan']; ?>"
                onclick="return confirm('Yakin hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>