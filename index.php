<?php
//Mulai Sesion
session_start();
if (isset($_SESSION["ses_username"]) == "") {
    header("location: home.php");

} else {
    $data_id = $_SESSION["ses_id"];
    $data_nama = $_SESSION["ses_nama"];
    $data_user = $_SESSION["ses_username"];
    $data_level = $_SESSION["ses_level"];
}

//KONEKSI DB
include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIDAK</title>
	<link rel="icon" href="dist/img/izin.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>

	<style>
    /* CSS untuk dark mode */
    body.dark-mode {
      background-color: #111;
      color: #fff;
    }

    body.dark-mode button.btn-primary {
      background-color: #4e4e4e;
      color: #fff;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-blue navbar-dark">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>SISTEM INFORMASI DATA KEPENDUDUKAN</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text"> Aplikasi RtRw</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="dist/img/admin.ico">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
if ($data_level == "Administrator") {
    ?>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>

							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Kelola Data
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>

							<ul class="nav nav-treeview">
								
								<li class="nav-item">
									<a href="?page=data_anggota" class="nav-link">
										<i class="nav-icon far fa-circle text-primary"></i>
										<p>Anggota</p>
									</a>
								</li>
							</ul>
						</li>

						

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Kelola Surat
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=cetak-anggota" class="nav-link">
										<i class="nav-icon far fa-circle text-primary"></i>
										<p>Cetak Kartu Anggota</p>
									</a>
								</li>
								
							</ul>
						</li>



						<li class="nav-header">Setting</li>

						<li class="nav-item">
							<a href="?page=data-pengguna" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									Pengguna Sistem
								</p>
							</a>
						</li>

						<?php
} elseif ($data_level == "Admin2") {
    ?>

						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Kelola Data
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?page=data-pend" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Penduduk</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Kelola Surat
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Cetak Anggota</p>
									</a>
								</li>
							</ul>
						</li>


						<li class="nav-header">Setting</li>

						<?php
}
							?>
						<li class="nav-item">
									<a href="?page=view-backup" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Backup Database</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=data_halaman" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Edit Halaman</p>
									</a>
								</li>
						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon fas fa-arrow-circle-right"></i>
								<p>
									Logout
								</p>
							</a>

						</li>

				</nav>

				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php
if (isset($_GET['page'])) {
    $hal = $_GET['page'];

    switch ($hal) {

        //Pengguna
        case 'data-pengguna':
            include "admin/pengguna/data_pengguna.php";
            break;
        case 'add-pengguna':
            include "admin/pengguna/add_pengguna.php";
            break;
        case 'edit-pengguna':
            include "admin/pengguna/edit_pengguna.php";
            break;
        case 'del-pengguna':
            include "admin/pengguna/del_pengguna.php";
            break;

		//setting
		case 'data-sett':
            include "admin/sett/data_sett.php";
            break;
        case 'add-sett':
            include "admin/sett/add_sett.php";
            break;
        case 'edit-sett':
            include "admin/sett/edit_sett.php";
            break;
        case 'anggota':
            include "admin/sett/anggota.php";
            break;
        case 'del-anggota':
            include "admin/sett/del_anggota.php";
            break;
        case 'del-sett':
            include "admin/sett/del_sett.php";
            break;


		//settinghalaman
		case 'data_halaman':
            include "admin/halaman/data_halaman.php";
            break;
        case 'add_halaman':
            include "admin/halaman/add_halaman.php";
            break;
        case 'edit_halaman':
            include "admin/halaman/edit_halaman.php";
            break;
        case 'del_halaman':
            include "admin/halaman/del_halaman.php";
            break;

			//anggota
		case 'data_anggota':
            include "admin/anggota/data_anggota.php";
            break;
        case 'add_anggota':
            include "admin/anggota/add_anggota.php";
            break;
        case 'edit_anggota':
            include "admin/anggota/edit_anggota.php";
            break;
        case 'del_anggota':
            include "admin/anggota/del_anggota.php";
            break;

        //suket
        case 'cetak-anggota':
            include "surat/cetak_anggota.php";
            break;
			case '':
				include "surat/cetak_anggota.php";
				break;
//backup database
case 'add-backup':
	include "admin/backup/add_backup.php";
	break;
	case 'view-backup':
		include "admin/backup/view_backup.php";
		break;
		case 'del-backup':
			include "admin/backup/del_backup.php";
			break;
        //default
        default:
            echo "<center><h1> Menu ERROR !</h1></center>";
            break;
    }
} else {
    // Auto Halaman Home Pengguna
    if ($data_level == "Administrator") {
        include "home/admin.php";
    } elseif ($data_level == "Admin2") {
        include "home/kaur.php";
    }
}
?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<a target="_blank">
					<strong> Admin Lte</strong>
				</a>
				All rights reserved.
			</div>
			<b>Bottstrap Version</b>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

	<!-- //fungsi untuk mennambahkan dark-mode -->
	<script>
    // Mengubah mode ke dark mode
    function enableDarkMode() {
      document.body.classList.add('dark-mode');
    }

    // Mengubah mode ke light mode
    function disableDarkMode() {
      document.body.classList.remove('dark-mode');
    }
  </script>

</body>

</html>