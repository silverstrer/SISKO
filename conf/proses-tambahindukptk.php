<?php include "../conf/veriflogin.php"; ?>
<?php
include "../conf/conn.php";
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['add']))
{	
    $id_dataptk=$_POST['id_dataptk'];
    $tahunajaran=$_POST['tahunajaran'];
    $tugas=$_POST['tugas'];
    $jam=$_POST['jam'];
    $kelas = implode(",", $_POST['kelas']);
    $mapel=$_POST['mapel'];

    // update user data
    $query = mysqli_query($link, "INSERT INTO indukptk(id_dataptk, tahunajaran, tugas, jam, kelas, mapel) VALUES ('$id_dataptk','$tahunajaran','$tugas','$jam','$kelas','$mapel')");

    header("Location: ../pages/index.php?page=indukptk&IDdataptk=$id_dataptk");

    echo '<script type="text/javascript">';
    echo ' alert("Data Berhasil diubah!")';  //not showing an alert box.
    echo '</script>';
    }

?>