<?php include "../conf/veriflogin.php"; ?>
<?php
ini_set("display_errors", "off");
// IGNORE ERROR

include "conn.php";
$IDinduksiswa = $_GET['IDinduksiswa'];

$query = @mysqli_query($link, "DELETE FROM induksiswa WHERE IDinduksiswa=$IDinduksiswa");

header ("location: ../pages/index.php?page=induksiswa&IDdatasiswa=$IDinduksiswa");
?>