<?php include "../conf/veriflogin.php"; ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dokumen</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dokumen</li>
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
            <section class="content">
              <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <form enctype="multipart/form-data" method="POST" action="conf/proses-uploaddok.php">
                  File yang di upload : <input type="file" name="fupload"><br>
                  Deskripsi File : <br>
                  <textarea name="deskripsi" rows="8" cols="40"></textarea><br>
                  <input type=submit value=Upload>
                </form>

                <!-- Main row -->

                <!-- /.row (main row) -->
              </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          </div>

          <div class="mt-3 box-body table-responsive">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NAMA DOKUMEN</th>
                  <th>DESKRIPSI</th>
                  <th>TANGGAL</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>

                <?php
                include_once "../conf/conn.php";
                $no = 0;
                $query = mysqli_query($link, "SELECT * FROM dokumen");
                while ($row = mysqli_fetch_array($query)) {
                ?>

                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['namadokumen']; ?></td>
                    <td><?php echo $row['deskripsidok']; ?></td>
                    <td><?php echo $row['tanggaldok']; ?></td>
                    <td>
                      <a href="./dokumen/<?php echo $row['namadokumen']; ?>" class="btn btn-info" role="button" title="unduh" name="unduh"><i class="fas trash-o font-light"></i>Unduh</a>
                      <a href="conf/proses-deletefile.php?IDdokumen=<?php echo $row['IDdokumen'] ?>&filename=<?php echo $row['namadokumen']; ?>"><input class="btn btn-warning" type=button value="hapus" name="delete" id="delete"></a>
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