<?php include "../conf/veriflogin.php"; ?>
<?php
include "../conf/conn.php";
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['add']))
{	
    $nama=$_POST['nama'];
    $kelamin=$_POST['kelamin'];
    $tempatlahir=$_POST['tempatlahir'];
    $tanggallahir=$_POST['tanggallahir'];
    $nis=$_POST['nis'];
    $nisn=$_POST['nisn'];
    $tanggalmasuk=$_POST['tanggalmasuk'];
    $kelas=$_POST['kelas'];
    $pendidikan=$_POST['pendidikan'];
    $namaayah=$_POST['namaayah'];
    $kerjaayah=$_POST['kerjaayah'];
    $namaibu=$_POST['namaibu'];
    $kerjaibu=$_POST['kerjaibu'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $nikktp=$_POST['nikktp'];
    $nikkk=$_POST['nikkk'];
    $tahunmasuk=$_POST['tahunmasuk'];
    $status=$_POST['status'];
    $keterangan=$_POST['keterangan'];

    // update user data
    $query = mysqli_query($link, "INSERT INTO datasiswa(nama, kelamin, tempatlahir, tanggallahir, nis, nisn, tanggalmasuk, kelas, pendidikan, namaayah, kerjaayah, namaibu, kerjaibu, nohp, alamat, nikktp, nikkk, tahunmasuk, status, keterangan) VALUES ('$nama','$kelamin','$tempatlahir','$tanggallahir','$nis','$nisn','$tanggalmasuk','$kelas','$pendidikan','$namaayah','$kerjaayah','$namaibu','$kerjaibu' , '$nohp','$alamat','$nikktp','$nikkk','$tahunmasuk','$status','$keterangan')");

    header("Location: ../pages/index.php?page=datasiswa");

    echo '<script type="text/javascript">';
    echo ' alert("Data Berhasil diubah!")';  //not showing an alert box.
    echo '</script>';
    }

?>