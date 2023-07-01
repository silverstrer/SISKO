<?php include "../conf/veriflogin.php"; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah PTK</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah PTK</li>
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
            <form name="update_user" method="post" action="../conf/proses-tambahptk.php">
                <table border="0">
                    <tr>
                        <td><b>Nama<b></td>
                        <td><input type="text" name="namaptk" size=50 maxlength=50 required></td>
                    </tr>
                    <tr>
                        <td><label for="kelamin">Jenis Kelamin</label></td>
                        <td><select id="kelamin" name="kelamin" required>
                                <option value=""></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><input type="text" name="tempatlahir" size=15 maxlength=15></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input type="date" name="tanggallahir"></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td><input type="number" name="nik" size=9 maxlength=9></td>
                    </tr>
                    <tr>
                        <td>NUPTK</td>
                        <td><input type="number" name="nuptk" size=16 maxlength=16></td>
                    </tr>
                    <tr>
                        <td>SK Awal</td>
                        <td><input type="date" name="skawal"></td>
                    </tr>
                    <tr>
                        <td><label for="jabatan">Jabatan</label></td>
                        <td><select id="jabatan" name="jabatan" required>
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
                        <td><label for="pendidikan">Pendidikan Terakhir</label></td>
                        <td><select id="pendidikan" name="pendidikan" required>
                                <option value=""></option>
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
                        <td><input type="text" name="instansi" size=30 maxlength=30></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td><input type="text" name="jurusan" size=30 maxlength=30></td>
                    </tr>
                    <tr>
                        <td>Tahun Lulus</td>
                        <td><input type="number" name="tahunlulus" size=4 maxlength=4></td>
                    </tr>
                    <tr>
                        <td>No. HP</td>
                        <td><input type="number" name="nohp" size=15 maxlength=15></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" size=50 maxlength=50></td>
                    </tr>
                    <tr>
                        <td>NIK KTP</td>
                        <td><input type="number" name="nikktp" size=20 maxlength=20></td>
                    </tr>
                    <tr>
                        <td>NIK KK</td>
                        <td><input type="number" name="nikkk" size=20 maxlength=20></td>
                    </tr>
                    <tr>
                        <td>Nonaktif pada</td>
                        <td><input type="date" name="nonaktif" size=20 maxlength=20></td>
                    </tr>
                    <tr>
                        <td>Alasan Nonaktif</td>
                        <td><input type="text" name="alasannonaktif" size=20 maxlength=20></td>
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