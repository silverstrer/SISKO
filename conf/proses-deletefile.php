<?php include "../conf/veriflogin.php"; ?>
<?php
include_once "./conn.php";
    $filename = $_GET['filename']; //get the filename
    unlink("../dokumen/$filename"); //delete it
    
    $IDdokumen = $_GET['IDdokumen'];
    $query = @mysqli_query($link, "DELETE FROM dokumen WHERE IDdokumen=$IDdokumen");
    header ("location: ../pages/index.php?page=dokumen");
?>