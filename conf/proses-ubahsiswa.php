<?php include "../conf/veriflogin.php"; ?>
<?php
include "../conf/conn.php";
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id=$_POST['IDdatasiswa'];
    $nama=$_POST['nama'];
    $kelamin=$_POST['kelamin'];
    $tempatlahir=$_POST['tempatlahir'];
    $tanggallahir=$_POST['tanggallahir'];
    $nis=$_POST['nis'];
    $nisn=$_POST['nisn'];
    $tahunmasuk=$_POST['tahunmasuk'];
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
    $status=$_POST['status'];
    $keterangan=$_POST['keterangan'];
    $tahunkeluar=$_POST['tahunkeluar'];
    $tanggalkeluar=$_POST['tanggalkeluar'];

    // update user data
    $query = mysqli_query($link, "UPDATE datasiswa SET IDdatasiswa='$id',nama='$nama',kelamin='$kelamin',tempatlahir='$tempatlahir',tanggallahir='$tanggallahir',nis='$nis',nisn='$nisn',tahunmasuk='$tahunmasuk',tanggalmasuk='$tanggalmasuk', kelas='$kelas',pendidikan='$pendidikan',namaayah='$namaayah',kerjaayah='$kerjaayah',namaibu='$namaibu',kerjaibu='$kerjaibu',nohp='$nohp',alamat='$alamat',nikktp='$nikktp',nikkk='$nikkk',status='$status',keterangan='$keterangan',tahunkeluar='$tahunkeluar',tanggalkeluar='$tanggalkeluar' WHERE IDdatasiswa=$id");

    header("Location: ../pages/index.php?page=profilsiswa&IDdatasiswa=$id");

    echo '<script type="text/javascript">';
    echo ' alert("Data Berhasil diubah!")';  //not showing an alert box.
    echo '</script>';
    }

?>