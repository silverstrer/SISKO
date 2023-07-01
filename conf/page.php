<?php include "../conf/veriflogin.php"; ?>
<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
      // Beranda
    case 'dataptk':
      include '../pages/dataptk.php';
      break;
    case 'profilptk':
      include '../pages/profilptk.php';
      break;
    case 'tambahptk':
      include '../pages/tambahptk.php';
      break;
    case 'ubahptk':
      include '../pages/ubahptk.php';
      break;
    case 'datasiswa':
      include '../pages/datasiswa.php';
      break;
    case 'tambahsiswa':
      include '../pages/tambahsiswa.php';
      break;
    case 'profilsiswa':
      include '../pages/profilsiswa.php';
      break;
    case 'indukptk':
      include '../pages/indukptk.php';
      break;
    case 'hapusindukptk':
      include '../conf/hapusindukptk.php';
      break;
    case 'induksiswa':
      include '../pages/induksiswa.php';
      break;
    case 'hapusinduksiswa':
      include 'hapusinduksiswa.php';
      break;
    case 'dokumen':
      include '../pages/dokumen.php';
      break;
    case 'proses-unduhdok':
      include 'proses-unduhdok.php';
      break;
    case 'link':
      include '../pages/link.php';
      break;
    case 'siswaaktif':
      include '../pages/siswaaktif.php';
      break;
    case 'siswamutasi':
      include '../pages/siswamutasi.php';
      break;
    case 'siswalulus':
      include '../pages/siswalulus.php';
      break;
    case 'pengaturansiswa':
      include '../pages/pengaturansiswa.php';
      break;
  }
} else {
  include "../pages/beranda.php";
}
?>