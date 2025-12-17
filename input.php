<!DOCTYPE html>
<html>
    <head>
        <title>Input Data Pelanggan ke Database dengan PHP</title>
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

    <h3>Input Data Pelanggan Baru</h3>

    <form action="input-aksi.php" method="post">
        <table>
            <tr>
                <td>Id Pelanggan</td>
                <td><input type="number" name="id_pelanggan"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Tanggal Service</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td>No Polisi</td>
                <td><input type="text" name="no_polisi"></td>
            </tr>
            <tr>
                <td>KM Motor</td>
                <td><input type="number" name="km"></td>
            </tr>
            <tr>
                <td>Jenis Service</td>
                <td>
                    <select name="pekerjaan">
                        <option value="Service Lengkap">Service Lengkap</option>
                        <option value="Service Ringan">Service Ringan</option>
                        <option value="Ganti Oli">Ganti Oli</option>
                        <option value="Ganti Part">Ganti Part</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Keluhan</td>
                <td><input type="text" name="keluhan"></td>
            </tr>
            <tr>
                <td>Biaya</td>
                <td><input type="number" name="biaya"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>