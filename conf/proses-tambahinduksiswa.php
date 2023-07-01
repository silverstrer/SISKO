<?php include "../conf/veriflogin.php"; ?>
<?php
include "../conf/conn.php";
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['add']))
{	
    $id_datasiswa=$_POST['id_datasiswa'];
    $tahunajaran=$_POST['tahunajaran'];
    $semester=$_POST['semester'];
    $kelasinduk=$_POST['kelasinduk'];
    $titimangsa=$_POST['titimangsa'];
    $idptk=$_POST['gurukelas'];

    // update user data
    $query = mysqli_query($link, "INSERT INTO induksiswa(id_datasiswa, tahunajaran, semester, kelasinduk, titimangsa, id_dataptk) VALUES ('$id_datasiswa','$tahunajaran','$semester','$kelasinduk','$titimangsa','$idptk')");

    header("Location: ../pgaes/index.php?page=induksiswa&IDdatasiswa=$id_datasiswa");

    echo '<script type="text/javascript">';
    echo ' alert("Data Berhasil diubah!")';  //not showing an alert box.
    echo '</script>';
}

?>