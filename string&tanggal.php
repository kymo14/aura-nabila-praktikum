<html>
<head>
    <title>Tugas String dan Tanggal</title>
</head>
<body>

<form method="post">
    Masukkan Nama, Email dan Password <br>
    Default Nama = belajar, Email = test@gmail.com dan Password = madiun
    <br><br>

    Isian data :<br>
    Nama : <input type="text" name="nama"><br>
    Email : <input type="text" name="email"><br>
    Password : <input type="password" name="password"><br>
    <input type="submit" value="Cek"><br>
</form>

<?php
if(isset($_POST['email'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "<hr>";

    echo "Nama Asli : $nama <br>";
    echo "Nama Uppercase : " . strtoupper($nama) . "<br>";
    echo "Nama Lowercase : " . strtolower($nama) . "<br>";
    echo "Nama Ucfirst : " . ucfirst($nama) . "<br>";
    echo "Nama Ucwords : " . ucwords($nama) . "<br>";
    echo "Jumlah Karakter Nama : " . strlen($nama) . "<br><br>";

    echo "Email Asli : $email <br>";
    echo "Email Lowercase : " . strtolower($email) . "<br>";

    if($email == "test@gmail.com")
        echo "Status Email : VALID<br>";
    else
        echo "Status Email : TIDAK VALID<br>";

    $nama = "belajar";
    $pas_valid = crypt("madiun", $nama);
    $enkripsi = crypt($password, $nama);

    if($pas_valid == $enkripsi)
        echo "Status Password : VALID<br>";
    else
        echo "Status Password : SALAH<br>";

    echo "<hr>";

    $namahari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
    $namabulan = array("","Januari","Februari","Maret","April","Mei","Juni",
                       "Juli","Agustus","September","Oktober","November","Desember");

    echo "Hari, Tanggal : ";
    echo $namahari[date("w")] . ", ";
    echo date("j") . " ";
    echo $namabulan[date("n")] . " ";
    echo date("Y") . "<br>";

    echo date("Y/m/d") . "<br>";
    echo date("l, d-m-Y") . "<br>";
    echo date("H:i:s") . "<br>";
}
?>

</body>
</html>