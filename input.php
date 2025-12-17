<!DOCTYPE html>
<html>
    <head>
        <title>Input Data Pengunjung ke Database dengan PHP</title>
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

    <h3>Input Data Pengunjung Baru</h3>

    <form action="input-aksi.php" method="post">
        <table>
            <tr>
                <td>ID Pengunjung</td>
                <td><input type="number" name="id_pengunjung"></td>
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
                <td>Email</td>
                <td><input type="text" name="email"></td>
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
                <td>Sumber Informasi</td>
                <td>
                    <select name="sumber_info">
                        <option value="Website">Website</option>
                        <option value="Sekolah">Sekolah</option>
                        <option value="Teman">Teman</option>
                        <option value="Media Sosial">Media Sosial</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>
                    <select name="pekerjaan">
                        <option value="TK">TK</option>
                        <option value="SD/MI">SD/MI</option>
                        <option value="SMP/MTS">SMP/MTS</option>
                        <option value="SMA/SMK/MAN">SMA/SMK/MAN</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Minat Bacaan</td>
                <td>
                    <select name="minat_bacaan">
                        <option value="Fiksi">Fiksi</option>
                        <option value="Non-Fiksi">Non-Fiksi</option>
                        <option value="Sains">Sains</option>
                        <option value="Sejarah">Sejarah</option>
                        <option value="Majalah">Majalah</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kritik dan Saran</td>
                <td><input type="text" name="kritik_saran"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>