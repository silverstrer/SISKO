<?php include "../conf/veriflogin.php"; ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data PTK</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data PTK</li>
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
          <div class="box-header">
            <a href="index.php?page=tambahptk" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NIK</th>
                  <th>NAMA PTK</th>
                  <th>L/P</th>
                  <th>JABATAN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>

                <?php
                include_once "../conf/conn.php";
                $no = 0;
                $query = mysqli_query($link, 'SELECT * FROM dataptk ORDER BY IDdataptk');
                while ($row = mysqli_fetch_array($query)) {
                ?>

                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['nik']; ?></td>
                    <td><?php echo $row['namaptk']; ?></td>
                    <td><?php echo $row['kelamin']; ?></td>
                    <td><?php echo $row['jabatan']; ?></td>
                    <td>
                      <a href="index.php?page=profilptk&IDdataptk=<?= $row['IDdataptk']; ?>" class="btn btn-success" role="button" title="Profil"><i class="fas trash-o font-light"></i>Profil</a>
                    </td>
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