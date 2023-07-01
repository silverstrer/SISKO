<?php include "../conf/veriflogin.php"; ?>
<?php
ini_set("display_errors", "off");
// IGNORE ERROR

include "../conf/conn.php";
// Display selected user data based on id
// Getting id from url
$id = $_GET['IDdatasiswa'];

// Fetech user data based on id
$query = @mysqli_query($link, "SELECT * FROM datasiswa INNER JOIN induksiswa ON datasiswa.IDdatasiswa  WHERE datasiswa.IDdatasiswa=$id");

while ($row = mysqli_fetch_array($query)) {
  $id = $row['IDdatasiswa'];
  $nama = $row['nama'];
}
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Induk Siswa</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php?page=dataptk">Data Siswa</a></li>
            <li class="breadcrumb-item active">Induk Siswa</li>
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
                <form name="induksiswa" method="post" action="../conf/proses-tambahinduksiswa.php">
                  <table border="0">
                    <tr>
                      <td><b>ID<b></td>
                      <td><input type="text" name="id_datasiswa" size=50 maxlength=50 readonly value="<?php echo $id; ?>"></td>
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
                      <td><label for="semester">Semester</label></td>
                      <td><select id="semester" name="semester">
                          <option value="<?php echo $semester; ?>"><?php echo $semester; ?></option>
                          <option value="Mid Ganjil">Mid Ganjil</option>
                          <option value="Ganjil">Ganjil</option>
                          <option value="Mid Genap">Mid Genap</option>
                          <option value="Genap">Genap</option>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="kelasinduk">Kelas</label></td>
                      <td><select id="kelasinduk" name="kelasinduk">
                          <option value="<?php echo $kelasinduk; ?>"><?php echo $kelasinduk; ?></option>
                          <option value="I (satu)">I (satu)</option>
                          <option value="II (dua)">II (dua)</option>
                          <option value="III (tiga)">III (tiga)</option>
                          <option value="IV (empat)">IV (empat)</option>
                          <option value="V (lima)">V (lima)</option>
                          <option value="VI (enam)">VI (enam)</option>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="gurukelas">Nama Guru Kelas</label></td>
                      <td><select id="gurukelas" name="gurukelas">
                          <option disabled selected> Pilih </option>
                          <?php $sql = mysqli_query($link, "SELECT * FROM dataptk");
                          while ($data = mysqli_fetch_array($sql)) { ?>
                            <option value="<?= $idptk = $data['IDdataptk']; ?>"><?= $namaptk = $data['namaptk']; ?></option>
                          <?php } ?>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Titi mangsa<b></td>
                      <td><input type="text" name="titimangsa" size=30 maxlength=30></td>
                    </tr>
                    <tr>
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
            <table id="induksiswa" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NAMA SISWA</th>
                  <th>TAHUN PELAJARAN</th>
                  <th>SEMESTER</th>
                  <th>KELAS</th>
                  <th>NAMA GURU KELAS</th>
                  <th>TITI MANGSA</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>

                <?php
                include_once "../conf/conn.php";
                $no = 0;
                $query = mysqli_query($link, "SELECT * FROM datasiswa INNER JOIN induksiswa ON datasiswa.IDdatasiswa = induksiswa.id_datasiswa INNER JOIN dataptk ON dataptk.IDdataptk = induksiswa.id_dataptk WHERE datasiswa.IDdatasiswa=$id");
                while ($row = mysqli_fetch_array($query)) {
                ?>

                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['tahunajaran']; ?></td>
                    <td><?php echo $row['semester']; ?></td>
                    <td><?php echo $row['kelasinduk']; ?></td>
                    <td><?php echo $row['namaptk']; ?></td>
                    <td><?php echo $row['titimangsa']; ?></td>
                    <td>
                      <a href="index.php?page=hapusinduksiswa&IDinduksiswa=<?= $row['IDinduksiswa']; ?>" class="btn btn-info" role="button" title="hapus" name="delete"><i class="fas trash-o font-light"></i>Hapus</a>
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