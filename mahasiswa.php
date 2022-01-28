<h3> Tambah Mahasiswa </h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td width="130">Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td width="130">Prodi</td>
            <td><input type="text" name="prodi"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into tbmahasiswa set
    nim = '$_POST[nim]',
    nama = '$_POST[nama]',
    prodi = '$_POST[prodi]'");
    echo "Data Mahasiswa Telah Tersimpan";
    header ("refresh:3;mahasiswa.php");
}
?>
<hr>
<a href="data.php">Tampilkan Data</a>