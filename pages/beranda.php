<?php include "../conf/veriflogin.php"; ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="small-box bg-info p-2 mb-4">
        <div class="inner">
          <h1 class="display-6">Selamat Datang, <b><?php echo $_SESSION['userakun']; ?></b></h1>
          <p class="fs-1" style="font-size: 18px;">Sistem Informasi Sekolah (SISKO) ini dibuat untuk pengelolaan data pokok guru dan siswa dengan sistem daring berbasis web.</p>
        </div>
      </div>

      <?php
      function hitungptk()
      {
        include "../conf/conn.php";
        $data = mysqli_query($link, "SELECT * FROM dataptk");
        $rowcount = mysqli_num_rows($data);
        echo $rowcount;
      };

      function hitungsiswa()
      {
        include "../conf/conn.php";
        $data = mysqli_query($link, "SELECT * FROM datasiswa WHERE status = 'Aktif'");
        $rowcount = mysqli_num_rows($data);
        echo $rowcount;
      };
      ?>

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php hitungptk(); ?></h3>

              <p>Jumlah PTK</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="index.php?page=dataptk" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php hitungsiswa(); ?></h3>

              <p>Jumlah Siswa Aktif</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="index.php?page=siswaaktif" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

      </div>
      <!-- /.row -->

      <hr>
      <?php
      function hitungptkL()
      {
        include "../conf/conn.php";
        $data = mysqli_query($link, "SELECT * FROM dataptk WHERE kelamin = 'Laki-laki'");
        $rowcount = mysqli_num_rows($data);
        echo $rowcount;
      };
      function hitungptkP()
      {
        include "../conf/conn.php";
        $data = mysqli_query($link, "SELECT * FROM dataptk WHERE kelamin = 'Perempuan'");
        $rowcount = mysqli_num_rows($data);
        echo $rowcount;
      };

      ?>
      <div class="box-body table-responsive">
        <h3><b>Data PTK</b></h3>
        <table id="" class="table table-bordered table-hover">
          <thead>
            <tr class="table-info">
              <th colspan="2">Jenis Kelamin</th>
            </tr>
            <tr>
              <th>Laki-laki</th>
              <th>Perempuan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php hitungptkL(); ?></td>
              <td><?php hitungptkP(); ?></td>
            </tr>

          </tbody>
        </table>
      </div>

      <hr>

      <div class="box-body table-responsive">
        <h3><b>Data Siswa Aktif</b></h3>
        <table id="" class="table table-bordered table-hover">
          <thead>
            <tr class="table-success">
              <th colspan="2">I (satu)</th>
              <th colspan="2">II (dua)</th>
              <th colspan="2">III (tiga)</th>
              <th colspan="2">IV (empat) </th>
              <th colspan="2">V (lima)</th>
              <th colspan="2">VI (enam)</th>
              <th colspan="2">Jumlah</th>
            </tr>
            <tr>
              <th>L</th>
              <th>P</th>
              <th>L</th>
              <th>P</th>
              <th>L</th>
              <th>P</th>
              <th>L</th>
              <th>P</th>
              <th>L</th>
              <th>P</th>
              <th>L</th>
              <th>P</th>
              <th>L</th>
              <th>P</th>
            </tr>
          </thead>
          <tbody>

            <?php
            function hitung($kelas, $kelamin, $status)
            {
              include "../conf/conn.php";
              $data = mysqli_query($link, "SELECT * FROM datasiswa WHERE kelas = \"$kelas\" AND kelamin=\"$kelamin\" AND status=\"$status\" ");
              $rowcount = mysqli_num_rows($data);
              echo $rowcount;
            };

            function jumlah($kelamin, $status)
            {
              include "../conf/conn.php";
              $data = mysqli_query($link, "SELECT * FROM datasiswa WHERE kelamin=\"$kelamin\" AND status=\"$status\" ");
              $rowcount = mysqli_num_rows($data);
              echo $rowcount;
            };
            ?>

            <tr>
              <td><?php $L1 = hitung("I (satu)", "Laki-laki", "Aktif"); ?></td>
              <td><?php $P1 = hitung("I (satu)", "Perempuan", "Aktif"); ?></td>
              <td><?php $L2 = hitung("II (dua)", "Laki-laki", "Aktif"); ?></td>
              <td><?php $P1 = hitung("II (dua)", "Perempuan", "Aktif"); ?></td>
              <td><?php $L3 = hitung("III (tiga)", "Laki-laki", "Aktif"); ?></td>
              <td><?php $P3 = hitung("III (tiga)", "Perempuan", "Aktif"); ?></td>
              <td><?php $L4 = hitung("IV (empat)", "Laki-laki", "Aktif"); ?></td>
              <td><?php $P4 = hitung("IV (empat)", "Perempuan", "Aktif"); ?></td>
              <td><?php $L5 = hitung("V (lima)", "Laki-laki", "Aktif"); ?></td>
              <td><?php $P5 = hitung("V (lima)", "Perempuan", "Aktif"); ?></td>
              <td><?php $L5 = hitung("VI (enam)", "Laki-laki", "Aktif"); ?></td>
              <td><?php $P6 = hitung("VI (enam)", "Perempuan", "Aktif"); ?></td>
              <td><?php jumlah("Laki-laki", "Aktif"); ?></td>
              <td><?php jumlah("Perempuan", "Aktif"); ?></td>
            </tr>

          </tbody>
        </table>
      </div>

      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>