<?php include "../conf/veriflogin.php"; ?>
<?php
include "../conf/conn.php";
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id=$_POST['IDdataptk'];
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
    $query = mysqli_query($link, "UPDATE dataptk SET IDdataptk='$id',namaptk='$nama',kelamin='$kelamin',tempatlahir='$tempatlahir',tanggallahir='$tanggallahir',nik='$nik',nuptk='$nuptk',skawal='$skawal', jabatan='$jabatan',pendidikan='$pendidikan',instansi='$instansi',jurusan='$jurusan',tahunlulus='$tahunlulus',nohp='$nohp',alamat='$alamat',nikktp='$nikktp',nikkk='$nikkk',nonaktif='$nonaktif',alasannonaktif='$alasannonaktif' WHERE IDdataptk=$id");

    header("Location: ../pages/index.php?page=profilptk&IDdataptk=$id");

    echo '<script type="text/javascript">';
    echo ' alert("Data Berhasil diubah!")';  //not showing an alert box.
    echo '</script>';
    }

?>