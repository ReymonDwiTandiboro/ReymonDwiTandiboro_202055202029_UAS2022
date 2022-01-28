<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from tbmahasiswa where nim='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<h3> Ubah Data Mahasiswa </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> NIM </td>
        <td> <input type="text" name="nim" value="<?php echo $data['nim']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama </td>
        <td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
    </tr>
    <tr>
        <td> Prodi </td>
        <td> <input type="text" name="prodi" value="<?php echo $data['prodi']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Update"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "update tbmahasiswa set  
nama = '$_POST[nama]',
prodi = '$_POST[prodi]'
where nim = '$_GET[kode]'");

echo "Data mahasiswa telah diubah";
echo "<meta http-equiv=refresh content=1;URL='data.php'>";

}

?>