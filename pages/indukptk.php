<?php include "../conf/veriflogin.php"; ?>
<?php
ini_set("display_errors", "off");
// IGNORE ERROR

include "../conf/conn.php";
// Display selected user data based on id
// Getting id from url
$id = $_GET['IDdataptk'];

// Fetech user data based on id
$query = @mysqli_query($link, "SELECT * FROM dataptk INNER JOIN indukptk ON dataptk.IDdataptk = indukptk.id_dataptk WHERE dataptk.IDdataptk=$id");

while ($row = mysqli_fetch_array($query)) {
  $id = $row['IDdataptk'];
  $nama = $row['namaptk'];
}
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Induk PTK</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php?page=dataptk">Data PTK</a></li>
            <li class="breadcrumb-item active">Induk PTK</li>
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
                <form name="indukptk" method="post" action="../conf/proses-tambahindukptk.php">
                  <table border="0">
                    <tr>
                      <td><b>ID<b></td>
                      <td><input type="text" name="id_dataptk" size=50 maxlength=50 readonly value="<?php echo $id; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>Nama<b></td>
                      <td><input type="text" name="nama" size=50 maxlength=50 disabled value="<?php echo $nama; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>Tahun Pelajaran<b></td>
                      <td><input type="text" name="tahunajaran" size=9 maxlength=9 required></td>
                    </tr>
                    <tr>
                      <td><label for="tugas">Tugas</label></td>
                      <td><select id="tugas" name="tugas" required>
                          <option value=""></option>
                          <option value="Kepala Sekolah">Kepala Sekolah</option>
                          <option value="Bendahara">Bendahara</option>
                          <option value="Tenaga Administrasi">Tenaga Administrasi</option>
                          <option value="Guru Kelas I">Guru Kelas I</option>
                          <option value="Guru Kelas II">Guru Kelas II</option>
                          <option value="Guru Kelas III">Guru Kelas III</option>
                          <option value="Guru Kelas IV">Guru Kelas IV</option>
                          <option value="Guru Kelas V">Guru Kelas V</option>
                          <option value="Guru Kelas VI">Guru Kelas VI</option>
                          <option value="Guru Bidang Studi">Guru Bidang Studi</option>
                          <option value="Pesuruh / Office Boy">Pesuruh / Office Boy</option>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Jumlah Jam<b></td>
                      <td><input type="number" name="jam" size=2 maxlength=2></td>
                    </tr>
                    <tr>
                      <td><label for="kelas">Kelas</label></td>
                      <td>
                        <input type="checkbox" name="kelas[]" value="I (satu)"> I (satu)<br>
                        <input type="checkbox" name="kelas[]" value="II (dua)"> II (dua)<br>
                        <input type="checkbox" name="kelas[]" value="III (tiga)"> III (tiga)<br>
                        <input type="checkbox" name="kelas[]" value="IV (empat)"> IV (empat)<br>
                        <input type="checkbox" name="kelas[]" value="V (lima)"> V (lima)<br>
                        <input type="checkbox" name="kelas[]" value="VI (enam)"> VI (enam)<br>
                        <input type="hidden" name="kelas[]" value="">
                      </td>
                    </tr>
                    <tr>
                      <td><b>Mata Pelajaran<b></td>
                      <td><input type="text" name="mapel" size=50 maxlength=50></td>
                    </tr>
                    <tr>
                      <td><input type="submit" name="add" value="TAMBAH"></td>
                    </tr>
                  </table>
                </form>
                <!-- Main row -->

                <!-- /.row (main row) -->
              </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          </div>
          <div class="box-body table-responsive">
            <table id="indukptk" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NAMA PTK</th>
                  <th>TAHUN PELAJARAN</th>
                  <th>TUGAS</th>
                  <th>JAM</th>
                  <th>KELAS</th>
                  <th>MATA PELAJARAN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>

                <?php
                include_once "../conf/conn.php";
                $no = 0;
                $query = mysqli_query($link, "SELECT * FROM dataptk INNER JOIN indukptk ON dataptk.IDdataptk = indukptk.id_dataptk WHERE dataptk.IDdataptk=$id");
                while ($row = mysqli_fetch_array($query)) {
                ?>

                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['namaptk']; ?></td>
                    <td><?php echo $row['tahunajaran']; ?></td>
                    <td><?php echo $row['tugas']; ?></td>
                    <td><?php echo $row['jam']; ?></td>
                    <td><?php echo $row['kelas']; ?></td>
                    <td><?php echo $row['mapel']; ?></td>
                    <td>
                      <a href="index.php?page=hapusindukptk&IDindukptk=<?= $row['IDindukptk']; ?>" class="btn btn-info" role="button" title="hapus" name="delete"><i class="fas trash-o font-light"></i>Hapus</a>
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