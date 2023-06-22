<?php
// Buat koneksi ke database
include "inc/koneksi.php";

if (isset($_GET['kode'])) {
    $sql_cek = "SELECT * FROM tbl_sett WHERE id_sett='" . $_GET['kode'] . "'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}

if (isset($_POST['Simpan'])) {
    // Mulai proses simpan data
    $judul = $_POST['judul'];

    

    // Query untuk menyimpan data ke database
    $sql_simpan = "UPDATE tbl_sett SET 
        judul='$judul',
        
        WHERE id_sett='" . $_GET['kode'] . "'";
    $query_simpan = mysqli_query($koneksi, $sql_simpan);

    if ($query_simpan) {
        echo "<script>
            Swal.fire({
                title: 'Ubah sett Berhasil',
                text: '',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location = 'index.php?page=data_sett';
                }
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                title: 'Ubah sett Gagal',
                text: '',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location = 'index.php?page=edit_sett&kode=" . $_GET['kode'] . "';
                }
            });
        </script>";
    }
}

?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Edit sett</h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">judul Edit</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $data_cek['judul']; ?>" required>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
            <a href="?page=data_sett" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
