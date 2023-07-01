<?php include "../conf/veriflogin.php"; ?>
<?php
include "../conf/conn.php";
// Display selected user data based on id
// Getting id from url
$id = $_GET['IDdatasiswa'];

// Fetech user data based on id
$query = mysqli_query($link, "SELECT * FROM datasiswa WHERE IDdatasiswa=$id");

while ($row = mysqli_fetch_array($query)) {
  $nama = $row['nama'];
  $kelamin = $row['kelamin'];
  $tempatlahir = $row['tempatlahir'];
  $tanggallahir = $row['tanggallahir'];
  $nis = $row['nis'];
  $nisn = $row['nisn'];
  $tahunmasuk = $row['tahunmasuk'];
  $tanggalmasuk = $row['tanggalmasuk'];
  $kelas = $row['kelas'];
  $pendidikan = $row['pendidikan'];
  $namaayah = $row['namaayah'];
  $kerjaayah = $row['kerjaayah'];
  $namaibu = $row['namaibu'];
  $kerjaibu = $row['kerjaibu'];
  $nohp = $row['nohp'];
  $alamat = $row['alamat'];
  $nikktp = $row['nikktp'];
  $nikkk = $row['nikkk'];
  $status = $row['status'];
  $keterangan = $row['keterangan'];
}
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profil Siswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profil Siswa</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <div class="card card-primary card-outline">
            <div class="card-body box-profile">

              <h3 class="profile-username text-center"><?php echo $nama; ?></h3>

              <p class="text-muted text-center"><?php echo $kelamin; ?></p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Tempat Lahir</b> <a class="float-right"><?php echo $tempatlahir; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Lahir</b> <a class="float-right"><?php echo date("d-F-Y",strtotime($tanggallahir)); ?></a>
                </li>
                <li class="list-group-item">
                  <b>NIS</b> <a class="float-right"><?php echo $nis; ?></a>
                </li>
                <li class="list-group-item">
                  <b>NISN</b> <a class="float-right"><?php echo $nisn; ?></a>
                </li>
              </ul>
              <span>Status : </span>
              <div class="badge <?php if ($status == "Aktif") {
                                  echo ("bg-primary");
                                } elseif ($status == "Mutasi") {
                                  echo ("bg-warning");
                                } elseif ($status == "Lulus") {
                                  echo ("bg-success");
                                } ?> py-2 px-3"><?php echo $status; ?></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Identitas</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>

              <p class="text-muted">Tanggal Masuk : <?php echo date("d-m-Y",strtotime($tanggalmasuk)); ?></p>
              <p class="text-muted">Tahun Masuk : <?php echo $tahunmasuk; ?></p>
              <p class="text-muted">Kelas : <?php echo $kelas; ?></p>
              <p class="text-muted">Pendidikan Sebelumnya: <?php echo $pendidikan; ?></p>

              <hr>

              <strong><i class="fas fa-file-alt mr-1"></i> Data Orang Tua</strong>

              <p class="text-muted">Nama Ayah : <?php echo $namaayah; ?></p>
              <p class="text-muted">Pekerjaan Ayah : <?php echo $kerjaayah; ?></p>
              <p class="text-muted">Nama Ibu : <?php echo $namaibu; ?></p>
              <p class="text-muted">Pekerjaan Ibu : <?php echo $kerjaibu; ?></p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Lain-lain</strong>

              <p class="text-muted">No. HP :<?php echo $nohp; ?></p>
              <p class="text-muted">Alamat :<?php echo $alamat; ?></p>
              <p class="text-muted">NIK KTP :<?php echo $nikktp; ?></p>
              <p class="text-muted">NIK KK :<?php echo $nikkk; ?></p>
              <p class="text-muted">Keterangan :<?php echo $keterangan; ?></p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Data Induk</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ubah Data</a></li>
              </ul>
            </div><!-- /.card-header -->

            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="timeline">
                  <!-- The timeline -->
                  <div class="timeline timeline-inverse">
                    <!-- timeline time label -->
                    <div class="time-label">
                      <a href="index.php?page=induksiswa&IDdatasiswa=<?= $id; ?>" class="btn btn-info" role="button" title="Induk"><i class="fas trash-o font-light"></i>Input Induk</a>
                      <!-- <span class="bg-danger">Input Induk PTK</span> -->
                    </div>
                    <!-- /.timeline-label -->

                    <!-- timeline item -->
                    <?php
                    include_once "../conf/conn.php";
                    $no = 0;
                    $query = mysqli_query($link, "SELECT * FROM induksiswa WHERE id_datasiswa=$id");
                    while ($row = mysqli_fetch_array($query)) { ?>

                      <div>
                        <i class="fas fa-user bg-info"></i>
                        <div class="timeline-item">
                          <!-- <span class="time"><i class="far fa-clock"></i> 5 mins ago</span> -->
                          <h3 class="timeline-header border-0"><b><?php echo $row['tahunajaran']; ?></b> - Semester <?php echo $row['semester']; ?> Kelas <?php echo $row['kelasinduk']; ?></h3>
                        </div>
                      </div>
                    <?php } ?>
                    <!-- END timeline item -->

                    <div>
                      <i class="far fa-clock bg-gray"></i>
                    </div>
                  </div>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                  <?php
                  include "../conf/conn.php";
                  // Display selected user data based on id
                  // Getting id from url
                  $id = $_GET['IDdatasiswa'];

                  // Fetech user data based on id
                  $query = mysqli_query($link, "SELECT * FROM datasiswa WHERE IDdatasiswa=$id");

                  while ($row = mysqli_fetch_array($query)) {
                    $nama = $row['nama'];
                    $kelamin = $row['kelamin'];
                    $tempatlahir = $row['tempatlahir'];
                    $tanggallahir = $row['tanggallahir'];
                    $nis = $row['nis'];
                    $nisn = $row['nisn'];
                    $tahunmasuk = $row['tahunmasuk'];
                    $tanggalmasuk = $row['tanggalmasuk'];
                    $kelas = $row['kelas'];
                    $pendidikan = $row['pendidikan'];
                    $namaayah = $row['namaayah'];
                    $kerjaayah = $row['kerjaayah'];
                    $namaibu = $row['namaibu'];
                    $kerjaibu = $row['kerjaibu'];
                    $nohp = $row['nohp'];
                    $alamat = $row['alamat'];
                    $nikktp = $row['nikktp'];
                    $nikkk = $row['nikkk'];
                    $status = $row['status'];
                    $keterangan = $row['keterangan'];
                    $tahunkeluar = $row['tahunkeluar'];
                    $tanggalkeluar = $row['tanggalkeluar'];
                  }
                  ?>
                  <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <form name="update_user" method="post" action="../conf/proses-ubahsiswa.php">
                      <table border="0">
                        <tr>
                          <td>Nama</td>
                          <td><input type="text" name="nama" size=50 maxlength=50 value="<?php echo $nama; ?>"></td>
                        </tr>
                        <tr>
                          <td><label for="kelamin">Jenis Kelamin</label></td>
                          <td><select id="kelamin" name="kelamin">
                              <option value="<?php echo $kelamin; ?>"><?php echo $kelamin; ?></option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                          </td>
                        </tr>
                        <tr>
                          <td>Tempat Lahir</td>
                          <td><input type="text" name="tempatlahir" size=15 maxlength=15 value="<?php echo $tempatlahir; ?>"></td>
                        </tr>
                        <tr>
                          <td>Tanggal Lahir</td>
                          <td><input type="date" name="tanggallahir" value="<?php echo $tanggallahir; ?>"></td>
                        </tr>
                        <tr>
                          <td>NIS</td>
                          <td><input type="text" name="nis" size=9 maxlength=9 value="<?php echo $nis; ?>"></td>
                        </tr>
                        <tr>
                          <td>NISN</td>
                          <td><input type="number" name="nisn" size=16 maxlength=16 value="<?php echo $nisn; ?>"></td>
                        </tr>
                        <tr>
                          <td>Tahun Masuk</td>
                          <td><input type="text" name="tahunmasuk" size=9 maxlength=9 value="<?php echo $tahunmasuk; ?>"></td>
                        </tr>
                        <tr>
                          <td>Tanggal Masuk</td>
                          <td><input type="date" name="tanggalmasuk" value="<?php echo $tanggalmasuk; ?>"></td>
                        </tr>
                        <tr>
                          <td><label for="kelas">Kelas</label></td>
                          <td><select id="kelas" name="kelas">
                              <option value="<?php echo $kelas; ?>"><?php echo $kelas; ?></option>
                              <option value="I (satu)">I (satu)</option>
                              <option value="II (dua)">II (dua)</option>
                              <option value="III (tiga)">III (tiga)</option>
                              <option value="IV (empat)">IV (empat)</option>
                              <option value="V (lima)">V (lima)</option>
                              <option value="VI (enam)">VI (enam)</option>
                          </td>
                        </tr>
                        <tr>
                          <td>Pendidikan Terakhir</td>
                          <td><input type="text" name="pendidikan" value="<?php echo $pendidikan; ?>"></td>
                        </tr>
                        <tr>
                          <td>Nama Ayah</td>
                          <td><input type="text" name="namaayah" size=20 maxlength=20 value="<?php echo $namaayah; ?>"></td>
                        </tr>
                        <tr>
                          <td>Pekerjaan Ayah</td>
                          <td><input type="text" name="kerjaayah" size=20 maxlength=20 value="<?php echo $kerjaayah; ?>"></td>
                        </tr>
                        <tr>
                          <td>Nama Ibu</td>
                          <td><input type="text" name="namaibu" size=20 maxlength=20 value="<?php echo $namaibu; ?>"></td>
                        </tr>
                        <tr>
                          <td>Pekerjaan Ibu</td>
                          <td><input type="text" name="kerjaibu" size=20 maxlength=20 value="<?php echo $kerjaibu; ?>"></td>
                        </tr>
                        <tr>
                          <td>No. HP</td>
                          <td><input type="number" name="nohp" size=15 maxlength=15 value="<?php echo $nohp; ?>"></td>
                        </tr>
                        <tr>
                          <td>Alamat</td>
                          <td><input type="text" name="alamat" size=255 maxlength=255 value="<?php echo $alamat; ?>"></td>
                        </tr>
                        <tr>
                          <td>NIK KTP</td>
                          <td><input type="number" name="nikktp" size=20 maxlength=20 value="<?php echo $nikktp; ?>"></td>
                        </tr>
                        <tr>
                          <td>NIK KK</td>
                          <td><input type="number" name="nikkk" size=20 maxlength=20 value="<?php echo $nikkk; ?>"></td>
                        </tr>
                        <tr>
                          <td><label for="status">Status</label></td>
                          <td><select id="status" name="status">
                              <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                              <option value="Aktif">Aktif</option>
                              <option value="Mutasi">Mutasi</option>
                              <option value="Lulus">Lulus</option>
                          </td>
                        </tr>
                        <tr>
                          <td>Tahun Keluar</td>
                          <td><input type="text" name="tahunkeluar" size=9 maxlength=9 value="<?php echo $tahunkeluar; ?>"></td>
                        </tr>
                        <tr>
                          <td>Tanggal Keluar</td>
                          <td><input type="date" name="tanggalkeluar" value="<?php echo $tanggalkeluar; ?>"></td>
                        </tr>
                        <tr>
                          <td>Keterangan</td>
                          <td><input type="text" name="keterangan" value="<?php echo $keterangan; ?>"></td>
                        </tr>
                        <tr>
                          <td><input type="hidden" name="IDdatasiswa" value=<?php echo $_GET['IDdatasiswa']; ?>></td>
                          <td><input type="submit" name="update" value="SIMPAN"></td>
                        </tr>
                      </table>
                    </form>
                    <!-- Main row -->

                    <!-- /.row (main row) -->
                  </div><!-- /.container-fluid -->

                </div>
                <!-- /.tab-pane -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->