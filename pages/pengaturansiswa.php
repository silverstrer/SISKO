<?php include "../conf/veriflogin.php"; ?>
<?php
include_once "../conf/conn.php";
if (isset($_POST["submit"]) && $_POST["submit"] != "") {
  $membersCount = count($_POST["IDdatasiswa"]);
  for ($i = 0; $i < $membersCount; $i++) {
    mysqli_query($link, "UPDATE datasiswa set kelas='" . $_POST["kelas"][$i] . "', status='" . $_POST["status"][$i] . "', tahunkeluar='" . "' WHERE IDdatasiswa='" . $_POST["IDdatasiswa"][$i] . "'");
  }
  echo '<script>alert("Data Berhasil disimpan!")</script>';
}
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pengaturan Siswa</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pengaturan Siswa</li>
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
            <form action="" method="POST">
              <table id="" class="table table-bordered table-hover">
                <tr>
                  <td><label for="kelas">Kelas</label></td>
                  <td><select id="kelas" name="kelas">
                      <option value="">~Pilih Kelas</option>
                      <option value="I (satu)">I (satu)</option>
                      <option value="II (dua)">II (dua)</option>
                      <option value="III (tiga)">III (tiga)</option>
                      <option value="IV (empat)">IV (empat)</option>
                      <option value="V (lima)">V (lima)</option>
                      <option value="VI (enam)">VI (enam)</option>
                  </td>
                </tr>
                <tr>
                  <td><label for="status">Status</label></td>
                  <td><select id="status" name="status">
                      <option value="">~Pilih Status</option>
                      <option value="Aktif">Aktif</option>
                      <option value="Mutasi">Mutasi</option>
                      <option value="Lulus">Lulus</option>
                  </td>
                </tr>
                </tbody>
              </table>
              <input type="submit" name="show" value="Lihat Data" class="btnSubmit">
            </form>
            <br>
            <br>
            <div class="box-body table-responsive">
              <form action="" method="POST">
                <table id="" class="table table-bordered table-hover">
                  <input type="submit" name="submit" value="Simpan" class="btnSubmit">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>NIS</th>
                      <th>NISN</th>
                      <th>NAMA SISWA</th>
                      <th>L/P</th>
                      <th>KELAS</th>
                      <th>STATUS</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    include "../conf/conn.php";
                    $no = 0;
                    if (isset($_POST["show"]) && $_POST["show"] != "") {
                      $showkelas = $_POST["kelas"];
                      $showstatus = $_POST["status"];
                      if ($showkelas == "" || $showstatus == "") {
                        echo '<script>alert("Pilih KELAS dan STATUS!")</script>';
                      } else {
                        $query = mysqli_query($link, "SELECT * FROM datasiswa WHERE kelas='$showkelas' AND status = '$showstatus' ");
                        while ($row = mysqli_fetch_array($query)) {
                    ?>

                          <tr>
                            <td><?php echo $no = $no + 1; ?></td>
                            <td><?php echo $row['nis']; ?></td>
                            <td><?php echo $row['nisn']; ?></td>
                            <td><input type="hidden" name="IDdatasiswa[]" class="txtField" value="<?php echo $row['IDdatasiswa']; ?>"><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['kelamin']; ?></td>
                            <td><select id="kelas" name="kelas[]">
                                <option value="<?php echo $row['kelas']; ?>"><?php echo $row['kelas']; ?></option>
                                <option value="I (satu)">I (satu)</option>
                                <option value="II (dua)">II (dua)</option>
                                <option value="III (tiga)">III (tiga)</option>
                                <option value="IV (empat)">IV (empat)</option>
                                <option value="V (lima)">V (lima)</option>
                                <option value="VI (enam)">VI (enam)</option>
                            </td>
                            <td><select id="status" name="status[]">
                                <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                                <option value="Aktif">Aktif</option>
                                <option value="Mutasi">Mutasi</option>
                                <option value="Lulus">Lulus</option>
                            </td>
                          <?php } ?>
                        <?php } ?>
                      <?php } ?>
                  </tbody>
                </table>
              </form>
            </div>

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