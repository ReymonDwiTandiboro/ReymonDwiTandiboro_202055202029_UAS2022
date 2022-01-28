<h3 align="center" > Data Mahasiswa </h3>

<table border="1" align="center" width="100%">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php

    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from tbmahasiswa");
    while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
                <td> $no</td>
                <td> $tampil[nim] </td>
                <td> $tampil[nama] </td>
                <td> $tampil[prodi] </td>
                <td><a href='?kode=$tampil[nim]'> Hapus </a></td>
                <td><a href='ubah.php?kode=$tampil[nim]'> Ubah </a></td>
            </tr>";
            $no++;
    }

    ?>
</table>

<?php
if(isset($_GET['kode'])){

    mysqli_query($koneksi,"delete from tbmahasiswa where nim='$_GET[kode]'");

    echo "Data telah terhapus";
    echo "<meta http-equiv=refresh content=2;URL='data.php'>";
}

?>
<hr>
<a href="mahasiswa.php">Tambah Data</a>