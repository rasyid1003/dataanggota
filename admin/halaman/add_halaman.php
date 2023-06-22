<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Edit</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Judul Halaman utama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="judul" name="judul" placeholder="judul Halaman" required>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=add_halaman" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
if (isset($_POST['Simpan'])) {
    // Mulai proses simpan data
    $judul = $_POST['judul'];


    // Query untuk menyimpan data ke database
    $sql_simpan = "INSERT INTO tbl_sett(judul) VALUES (
        '$judul')";
    $query_simpan = mysqli_query($koneksi, $sql_simpan);
    mysqli_close($koneksi);

    if ($query_simpan) {
        echo "<script>
            Swal.fire({
                title: 'Edit Pengaturan Berhasil',
                text: '',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location = 'index.php?page=data_halaman';
                }
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                title: 'halaman gagal di edit',
                text: '',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location = 'index.php?page=add_halaman';
                }
            });
        </script>";
    }
}
// Selesai proses simpan data
?>
