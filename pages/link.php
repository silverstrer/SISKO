<?php include "../conf/veriflogin.php"; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Link Penting</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Link Penting</li>
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

                                <?php
                                // --- koneksi ke database
                                include_once "../conf/conn.php";
                                // --- Fngsi tambah data (Create)
                                function tambah($link)
                                {

                                    if (isset($_POST['btn_simpan'])) {
                                        $namalink = $_POST['namalink'];
                                        $alamatlink = $_POST['alamatlink'];
                                        $deskripsilink = $_POST['deskripsilink'];
                                        $tgllink = date('Y-m-d H:i:s');

                                        if (!empty($namalink) && !empty($alamatlink)) {
                                            $sql = "INSERT INTO link (namalink, alamatlink, deskripsilink, tgllink) VALUES('$namalink','$alamatlink','$deskripsilink','$tgllink')";
                                            $simpan = mysqli_query($link, $sql);
                                            if ($simpan && isset($_GET['aksi'])) {
                                                if ($_GET['aksi'] == 'create') {
                                                    header('location: index.php');
                                                }
                                            }
                                        } else {
                                            $pesan = "Tidak dapat menyimpan, data belum lengkap!";
                                        }
                                    }
                                ?>
                                    <form action="" method="POST">
                                        <fieldset>
                                            <label>Nama Link <input type="text" name="namalink" /></label> <br>
                                            <label>URL Link <input type="text" name="alamatlink" /></label><br>
                                            <label>Deskripsi Link <input type="text" name="deskripsilink" /></label> <br>
                                            <br>
                                            <label>
                                                <input type="submit" name="btn_simpan" value="Tambah Data" />
                                                <input type="reset" name="reset" value="Bersihkan" />
                                            </label>
                                            <br>
                                            <p><?php echo isset($pesan) ? $pesan : "" ?></p>
                                        </fieldset>
                                    </form>
                                    <?php
                                }
                                // --- Tutup Fngsi tambah data
                                // --- Fungsi Baca Data (Read)
                                function tampil_data($link)
                                {
                                    $sql = "SELECT * FROM link";
                                    $query = mysqli_query($link, $sql);

                                    echo "<fieldset>";

                                    echo "<table border='1' cellpadding='10'>";
                                    echo "<tr>
                    <th>ID</th>
                    <th>Nama Link</th>
                    <th>Deskripsi Link</th>
                    <th>Tanggal Update</th>
                    <th>Aksi</th>
                </tr>";

                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data['IDlink']; ?></td>
                                            <td><a href="<?php echo $data['alamatlink']; ?>"><?php echo $data['namalink']; ?></a></td>
                                            <td><?php echo $data['deskripsilink']; ?></td>
                                            <td><?php echo $data['tgllink']; ?></td>
                                            <td>
                                                <a href="index.php?page=link&aksi=update&IDlink=<?php echo $data['IDlink']; ?>&nama=<?php echo $data['namalink']; ?>&alamatlink=<?php echo $data['alamatlink']; ?>&deskripsilink=<?php echo $data['deskripsilink']; ?>&tanggal=<?php echo $data['tgllink']; ?>">Ubah</a> |
                                                <a href="index.php?page=link&aksi=delete&IDlink=<?php echo $data['IDlink']; ?>">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    echo "</table>";
                                    echo "</fieldset>";
                                }
                                // --- Tutup Fungsi Baca Data (Read)
                                // --- Fungsi Ubah Data (Update)
                                function ubah($link)
                                {
                                    // ubah data
                                    if (isset($_POST['btn_ubah'])) {
                                        $IDlink = $_POST['IDlink'];
                                        $namalink = $_POST['namalink'];
                                        $alamatlink = $_POST['alamatlink'];
                                        $deskripsilink = $_POST['deskripsilink'];
                                        $tgllink = date('Y-m-d H:i:s');

                                        if (!empty($namalink) && !empty($alamatlink)) {
                                            $update = mysqli_query($link, "UPDATE link SET namalink='$namalink',alamatlink='$alamatlink',deskripsilink='$deskripsilink',tgllink='$tgllink' WHERE IDlink=$IDlink");
                                            if ($update && isset($_GET['aksi'])) {
                                                if ($_GET['aksi'] == 'update') {
                                                    header("location: index.php");
                                                }
                                            }
                                        } else {
                                            $pesan = "Data tidak lengkap!";
                                        }
                                    }

                                    // tampilkan form ubah
                                    if (isset($_GET['IDlink'])) {
                                    ?>
                                        <a href="index.php?aksi=create"> (+) Tambah Data</a>
                                        <hr>

                                        <form action="" method="POST">
                                            <fieldset>
                                                <legend>
                                                    <h2>Ubah data</h2>
                                                </legend>
                                                <input type="hidden" name="IDlink" value="<?php echo $_GET['IDlink'] ?>" />
                                                <label>Nama Link <input type="text" name="namalink" value="<?php echo $_GET['nama'] ?>" /></label> <br>
                                                <label>Alamat Link <input type="text" name="alamatlink" value="<?php echo $_GET['alamatlink'] ?>" /></label><br>
                                                <label>Deskripsi Link <input type="text" name="deskripsilink" value="<?php echo $_GET['deskripsilink'] ?>" /></label> <br>
                                                <br>
                                                <label>
                                                    <input type="submit" name="btn_ubah" value="Simpan Perubahan" /> atau <a href="index.php?aksi=delete&IDlink=<?php echo $_GET['IDlink'] ?>"> (x) Hapus data ini</a>!
                                                </label>
                                                <br>
                                                <p><?php echo isset($pesan) ? $pesan : "" ?></p>

                                            </fieldset>
                                        </form>

                                <?php
                                    }
                                }
                                // --- Tutup Fungsi Update
                                // --- Fungsi Delete
                                function hapus($link)
                                {
                                    if (isset($_GET['IDlink']) && isset($_GET['aksi'])) {
                                        $IDlink = $_GET['IDlink'];
                                        $hapus = mysqli_query($link, "DELETE FROM link WHERE IDlink=$IDlink");
                                        if ($hapus) {
                                            if ($_GET['aksi'] == 'delete') {
                                                header("location: index.php?page=link");
                                            }
                                        }
                                    }
                                }
                                // --- Tutup Fungsi Hapus
                                // ===================================================================
                                // --- Program Utama
                                if (isset($_GET['aksi'])) {
                                    switch ($_GET['aksi']) {
                                        case "create":
                                            echo '<a href="index.php"> &laquo; Home</a>';
                                            tambah($link);
                                            break;
                                        case "read":
                                            tampil_data($link);
                                            break;
                                        case "update":
                                            ubah($link);
                                            tampil_data($link);
                                            break;
                                        case "delete":
                                            hapus($link);
                                            break;
                                        default:
                                            echo "<h3>Aksi <i>" . $_GET['aksi'] . "</i> tidaka ada!</h3>";
                                            tambah($link);
                                            tampil_data($link);
                                    }
                                } else {
                                    tambah($link);
                                    tampil_data($link);
                                }
                                ?>

                            </div><!-- /.container-fluid -->
                        </section>
                        <!-- /.content -->
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