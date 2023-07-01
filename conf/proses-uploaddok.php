<?php include "../conf/veriflogin.php"; ?>
<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
$folder = "../dokumen/$nama_file";
// tanggal sekarang
$tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  
  // Masukkan informasi file ke database
  include "../conf/conn.php";

  $query = mysqli_query($link,"INSERT INTO dokumen (namadokumen, deskripsidok, tanggaldok)
  VALUES('$nama_file', '$_POST[deskripsi]', '$tgl_upload')");
  header("Location: ../pages/index.php?page=dokumen");

}
else{
    function upload_gagal(){
        echo "File gagal di upload";
      }
}
?>