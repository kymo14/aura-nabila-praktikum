<!DOCTYPE html>
<html>
    <head>
        <title>Input Data Pasien ke Database dengan PHP</title>
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

    <h3>Input Data Pasien Baru</h3>

    <form action="input-aksi.php" method="post">
        <table>
            <tr>
                <td>ID Pasien</td>
                <td><input type="number" name="id_pasien"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jk">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Usia</td>
                <td><input type="number" name="usia"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Tinggi Badan</td>
                <td><input type="number" name="tinggi"></td>
            </tr>
            <tr>
                <td>Berat Badan</td>
                <td><input type="number" name="berat"></td>
            </tr>
            <tr>
                <td>Tekanan Darah</td>
                <td><input type="text" name="tekanan"></td>
            </tr>
            <tr>
                <td>Riwayat Penyakit</td>
                <td>
                    <select name="riwayat">
                        <option value="Tidak Ada">Tidak Ada</option>
                        <option value="Asma">Asma</option>
                        <option value="Diabetes">Diabetes</option>
                        <option value="Penyakit Jantung">Penyakit Jantung</option>
                        <option value="Lainnya">Lainnya</option>
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