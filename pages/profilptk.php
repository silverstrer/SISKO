<?php include "../conf/veriflogin.php"; ?>
<?php
include "../conf/conn.php";
// Display selected user data based on id
// Getting id from url
$id = $_GET['IDdataptk'];

// Fetech user data based on id
$query = mysqli_query($link, "SELECT * FROM dataptk WHERE IDdataptk=$id");

while ($row = mysqli_fetch_array($query)) {
  $id = $row['IDdataptk'];
  $nama = $row['namaptk'];
  $kelamin = $row['kelamin'];
  $tempatlahir = $row['tempatlahir'];
  $tanggallahir = $row['tanggallahir'];
  $nik = $row['nik'];
  $nuptk = $row['nuptk'];
  $skawal = $row['skawal'];
  $jabatan = $row['jabatan'];
  $pendidikan = $row['pendidikan'];
  $instansi = $row['instansi'];
  $jurusan = $row['jurusan'];
  $tahunlulus = $row['tahunlulus'];
  $nohp = $row['nohp'];
  $alamat = $row['alamat'];
  $nikktp = $row['nikktp'];
  $nikkk = $row['nikkk'];
  $nonaktif = $row['nonaktif'];
  $alasannonaktif = $row['alasannonaktif'];
}
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profil PTK</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php?page=dataptk">Data PTK</a></li>
            <li class="breadcrumb-item active">Profil PTK</li>
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
              <p class="fw-bold text-center bg-success"><?php echo $jabatan; ?></p>
              <p class="text-muted text-center">NIK : <?php echo $nik; ?></p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>SK Awal</b> <a class="float-right"><?php echo $skawal; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Jenis Kelamin</b> <a class="float-right"><?php echo $kelamin; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Tempat Lahir</b> <a class="float-right"><?php echo $tempatlahir; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Lahir</b> <a class="float-right"><?php echo $tanggallahir; ?></a>
                </li>
              </ul>
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

              <p class="text-muted">
                <?php echo $pendidikan, "-", $instansi, "-", $jurusan, "-", $tahunlulus; ?>
              </p>

              <hr>

              <strong><i class="fas fa-mobile mr-1"></i> No HP</strong>

              <p class="text-muted"><?php echo $nohp; ?></p>

              <hr>

              <strong><i class="fas fa-location-arrow mr-1"></i>Alamat</strong>

              <p class="text-muted"><?php echo $alamat; ?></p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Lain-lain</strong>

              <p class="text-muted">NUPTK :<?php echo $nuptk; ?></p>
              <p class="text-muted">NIK KTP :<?php echo $nikktp; ?></p>
              <p class="text-muted">NIK KK :<?php echo $nikkk; ?></p>
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
                <li class="nav-item"><a class="nav-link active" href="#datainduk" data-toggle="tab">Data Induk</a></li>
                <li class="nav-item"><a class="nav-link" href="#ubahdata" data-toggle="tab">Ubah Data</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="datainduk">
                  <!-- The timeline -->
                  <div class="timeline timeline-inverse">
                    <!-- timeline time label -->
                    <div class="time-label">
                      <a href="index.php?page=indukptk&IDdataptk=<?= $id; ?>" class="btn btn-info" role="button" title="Induk"><i class="fas trash-o font-light"></i>Input Induk</a>
                      <!-- <span class="bg-danger">Input Induk PTK</span> -->
                    </div>
                    <!-- /.timeline-label -->

                    <!-- timeline item -->
                    <?php
                    include_once "../conf/conn.php";
                    $no = 0;
                    $query = mysqli_query($link, "SELECT * FROM indukptk WHERE id_dataptk=$id");
                    while ($row = mysqli_fetch_array($query)) { ?>

                      <div>
                        <i class="fas fa-user bg-info"></i>
                        <div class="timeline-item">
                          <!-- <span class="time"><i class="far fa-clock"></i> 5 mins ago</span> -->
                          <h3 class="timeline-header border-0"><b><?php echo $row['tahunajaran']; ?></b> - <?php echo $row['tugas']; ?> <?php echo $row['mapel']; ?> - <?php echo $row['jam']; ?> jam</h3>
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

                <div class="tab-pane" id="ubahdata">
                  <?php
                  include "../conf/conn.php";
                  // Display selected user data based on id
                  // Getting id from url
                  $id = $_GET['IDdataptk'];

                  // Fetech user data based on id
                  $query = mysqli_query($link, "SELECT * FROM dataptk WHERE IDdataptk=$id");

                  while ($row = mysqli_fetch_array($query)) {
                    $id = $row['IDdataptk'];
                    $nama = $row['namaptk'];
                    $kelamin = $row['kelamin'];
                    $tempatlahir = $row['tempatlahir'];
                    $tanggallahir = $row['tanggallahir'];
                    $nik = $row['nik'];
                    $nuptk = $row['nuptk'];
                    $skawal = $row['skawal'];
                    $jabatan = $row['jabatan'];
                    $pendidikan = $row['pendidikan'];
                    $instansi = $row['instansi'];
                    $jurusan = $row['jurusan'];
                    $tahunlulus = $row['tahunlulus'];
                    $nohp = $row['nohp'];
                    $alamat = $row['alamat'];
                    $nikktp = $row['nikktp'];
                    $nikkk = $row['nikkk'];
                    $nonaktif = $row['nonaktif'];
                    $alasannonaktif = $row['alasannonaktif'];
                  }
                  ?>
                  <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <form name="update_user" method="post" action="../conf/proses-ubahptk.php">
                      <table border="0">
                        <tr>
                          <td><b>Nama<b></td>
                          <td><input type="text" name="namaptk" size=50 maxlength=50 value="<?php echo $nama; ?>"></td>
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
                          <td>NIK</td>
                          <td><input type="number" name="nik" size=9 maxlength=9 value="<?php echo $nik; ?>"></td>
                        </tr>
                        <tr>
                          <td>NUPTK</td>
                          <td><input type="number" name="nuptk" size=16 maxlength=16 value="<?php echo $nuptk; ?>"></td>
                        </tr>
                        <tr>
                          <td>SK Awal</td>
                          <td><input type="date" name="skawal" value="<?php echo $skawal; ?>"></td>
                        </tr>
                        <tr>
                          <td><label for="jabatan">Jabatan</label></td>
                          <td><select id="jabatan" name="jabatan">
                              <option value="<?php echo $jabatan; ?>"><?php echo $jabatan; ?></option>
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
                          <td><label for="pendidikan">Pendidikan Terakhir</label></td>
                          <td><select id="pendidikan" name="pendidikan">
                              <option value="<?php echo $pendidikan; ?>"><?php echo $pendidikan; ?></option>
                              <option value="S3-Doktoral">S3-Doktoral</option>
                              <option value="S2-Magister">S2-Magister</option>
                              <option value="S1-Sarjana">S1-Sarjana</option>
                              <option value="D2/D3-Sarjana Muda">D2/D3-Sarjana Muda</option>
                              <option value="SMA">SMA</option>
                              <option value="SMP">SMP</option>
                              <option value="SD">SD</option>
                              <option value="-">-</option>
                          </td>
                        </tr>
                        <tr>
                          <td>Instansi</td>
                          <td><input type="text" name="instansi" size=30 maxlength=30 value="<?php echo $instansi; ?>"></td>
                        </tr>
                        <tr>
                          <td>Jurusan</td>
                          <td><input type="text" name="jurusan" size=30 maxlength=30 value="<?php echo $jurusan; ?>"></td>
                        </tr>
                        <tr>
                          <td>Tahun Lulus</td>
                          <td><input type="number" name="tahunlulus" size=4 maxlength=4 value="<?php echo $tahunlulus; ?>"></td>
                        </tr>
                        <tr>
                          <td>No. HP</td>
                          <td><input type="number" name="nohp" size=15 maxlength=15 value="<?php echo $nohp; ?>"></td>
                        </tr>
                        <tr>
                          <td>Alamat</td>
                          <td><input type="text" name="alamat" size=50 maxlength=50 value="<?php echo $alamat; ?>"></td>
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
                          <td>Nonaktif pada</td>
                          <td><input type="date" name="nonaktif" size=20 maxlength=20 value="<?php echo $nonaktif; ?>"></td>
                        </tr>
                        <tr>
                          <td>Alasan Nonaktif</td>
                          <td><input type="text" name="alasannonaktif" size=20 maxlength=20 value="<?php echo $alasannonaktif; ?>"></td>
                        </tr>
                        <tr>
                          <td><input type="hidden" name="IDdataptk" value=<?php echo $_GET['IDdataptk']; ?>></td>
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