<?php include "../conf/veriflogin.php"; ?>
<?php
include "../conf/conn.php";
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['add']))
{	
    $nama=$_POST['namaptk'];
    $kelamin=$_POST['kelamin'];
    $tempatlahir=$_POST['tempatlahir'];
    $tanggallahir=$_POST['tanggallahir'];
    $nik=$_POST['nik'];
    $nuptk=$_POST['nuptk'];
    $skawal=$_POST['skawal'];
    $jabatan=$_POST['jabatan'];
    $pendidikan=$_POST['pendidikan'];
    $instansi=$_POST['instansi'];
    $jurusan=$_POST['jurusan'];
    $tahunlulus=$_POST['tahunlulus'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $nikktp=$_POST['nikktp'];
    $nikkk=$_POST['nikkk'];
    $nonaktif=$_POST['nonaktif'];
    $alasannonaktif=$_POST['alasannonaktif'];

    // update user data
    $query = mysqli_query($link, "INSERT INTO dataptk(namaptk, kelamin, tempatlahir, tanggallahir, nik, nuptk, skawal, jabatan, pendidikan, instansi, jurusan, tahunlulus, nohp, alamat, nikktp, nikkk, nonaktif, alasannonaktif) VALUES ('$nama','$kelamin','$tempatlahir','$tanggallahir','$nik','$nuptk','$skawal','$jabatan','$pendidikan','$instansi','$jurusan','$tahunlulus','$nohp','$alamat','$nikktp','$nikkk','$nonaktif','$alasannonaktif')");

    header("Location: ../pages/index.php?page=dataptk");

    echo '<script type="text/javascript">';
    echo ' alert("Data Berhasil diubah!")';  //not showing an alert box.
    echo '</script>';
    }

?>