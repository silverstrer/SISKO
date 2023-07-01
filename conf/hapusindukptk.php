<?php include "../conf/veriflogin.php"; ?>
<?php
ini_set("display_errors", "off");
// IGNORE ERROR

include "conn.php";
$IDindukptk = $_GET['IDindukptk'];

$query = @mysqli_query($link, "DELETE FROM indukptk WHERE IDindukptk=$IDindukptk");

header ("location: ../pages/index.php?page=indukptk&IDdataptk=$IDindukptk");
?>