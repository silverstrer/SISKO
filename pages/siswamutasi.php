<?php include "../conf/veriflogin.php"; ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Siswa - MUTASI</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Siswa Mutasi</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NIS</th>
                  <th>NISN</th>
                  <th>NAMA SISWA</th>
                  <th>L/P</th>
                  <th>KELAS</th>
                  <th>TANGGAL</th>
                  <th>SEKOLAH TUJUAN</th>
                </tr>
              </thead>
              <tbody>

                <?php
                include_once "../conf/conn.php";
                $no = 0;
                $query = mysqli_query($link, "SELECT * FROM datasiswa WHERE status='Mutasi' ");
                while ($row = mysqli_fetch_array($query)) {
                ?>

                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['nis']; ?></td>
                    <td><?php echo $row['nisn']; ?></td>
                    <td><a href="index.php?page=profilsiswa&IDdatasiswa=<?= $row['IDdatasiswa']; ?>"title="Lihat Data"><i class="fas trash-o font-light"></i><?php echo $row['nama']; ?></a></td>
                    <td><?php echo $row['kelamin']; ?></td>
                    <td><?php echo $row['kelas']; ?></td>
                    <td><?php echo date("d-m-Y",strtotime($row['tanggalkeluar'])); ?></td>
                    <td><?php echo $row['keterangan']; ?></td>
                  </tr>

                <?php } ?>

              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

</div>