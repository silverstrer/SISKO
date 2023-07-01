<?php include "../conf/veriflogin.php"; ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Siswa</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Siswa</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <form name="update_user" method="post" action="../conf/proses-tambahsiswa.php">
        <table border="0">
          <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" size=50 maxlength=50 value=""></td>
          </tr>
          <tr>
            <td><label for="kelamin">Jenis Kelamin</label></td>
            <td><select id="kelamin" name="kelamin">
                <option value=""></option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </td>
          </tr>
          <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempatlahir" size=15 maxlength=15 value=""></td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggallahir" value=""></td>
          </tr>
          <tr>
            <td>NIS</td>
            <td><input type="number" name="nis" size=9 maxlength=9 value=""></td>
          </tr>
          <tr>
            <td>NISN</td>
            <td><input type="number" name="nisn" size=16 maxlength=16 value=""></td>
          </tr>
          <tr>
            <td>Tahun Masuk</td>
            <td><input type="text" name="tahunmasuk" size=9 maxlength=9 value=""></td>
          </tr>
          <tr>
            <td>Tanggal Masuk</td>
            <td><input type="date" name="tanggalmasuk" value=""></td>
          </tr>
          <tr>
            <td><label for="kelas">Kelas</label></td>
            <td><select id="kelas" name="kelas">
                <option value=""></option>
                <option value="I (satu)">I (satu)</option>
                <option value="II (dua)">II (dua)</option>
                <option value="III (tiga)">III (tiga)</option>
                <option value="IV (empat)">IV (empat)</option>
                <option value="V (lima)">V (lima)</option>
                <option value="VI (enam)">VI (enam)</option>
            </td>
          </tr>
          <tr>
            <td>Pendidikan Sebelumnya</td>
            <td><input type="text" name="pendidikan" value=""></td>
          </tr>
          <tr>
            <td>Nama Ayah</td>
            <td><input type="text" name="namaayah" size=20 maxlength=20 value=""></td>
          </tr>
          <tr>
            <td>Pekerjaan Ayah</td>
            <td><input type="text" name="kerjaayah" size=20 maxlength=20 value=""></td>
          </tr>
          <tr>
            <td>Nama Ibu</td>
            <td><input type="text" name="namaibu" size=20 maxlength=20 value=""></td>
          </tr>
          <tr>
            <td>Pekerjaan Ibu</td>
            <td><input type="text" name="kerjaibu" size=20 maxlength=20 value=""></td>
          </tr>
          <tr>
            <td>No. HP</td>
            <td><input type="number" name="nohp" size=15 maxlength=15 value=""></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" size=50 maxlength=50 value=""></td>
          </tr>
          <tr>
            <td>NIK KTP</td>
            <td><input type="number" name="nikktp" size=20 maxlength=20 value=""></td>
          </tr>
          <tr>
            <td>NIK KK</td>
            <td><input type="number" name="nikkk" size=20 maxlength=20 value=""></td>
          </tr>
          <tr>
            <td><label for="status">Status</label></td>
            <td><select id="status" name="status">
                <option value=""></option>
                <option value="Aktif">Aktif</option>
                <option value="Mutasi">Mutasi</option>
                <option value="Lulus">Lulus</option>
            </td>
          </tr>
          <tr>
            <td>Keterangan</td>
            <td><input type="text" name="nohp" size=20 maxlength=20 value=""></td>
          </tr>
          <tr>
            <td><input type="hidden" name="id" value=""></td>
            <td><input type="submit" name="add" value="SIMPAN"></td>
          </tr>
        </table>
      </form>
      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>