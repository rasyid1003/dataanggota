<?php
include "../inc/koneksi.php";

if (isset($_POST['Cetak'])){
	$id = $_POST['id_anggota'];
}

$tanggal = date("m/y");
$tgl = date("d/m/y");

$sql = $koneksi->query("SELECT * FROM tbl_anggota WHERE id_anggota = '$id'");
if ($data = $sql->fetch_assoc()) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK SURAT</title>
</head>

<body>
	<style>
		body {
			background: #008080;
		}

		#bg {
			width: 1000px;
			height: 450px;
			margin: 60px;
			float: left;
		}

		#id {
			width: 250px;
			height: 450px;
			position: absolute;
			opacity: 0.88;
			font-family: sans-serif;
			transition: 0.4s;
			background-color: #FFFFFF;
			border-radius: 2%;
		}

		#id::before {
			content: "";
			position: absolute;
			width: 100%;
			height: 100%;
			background: url('https://pixelprint.co.id/wp-content/uploads/2018/03/red-divider.png');
			background-repeat: repeat-x;
			background-size: 250px 450px;
			opacity: 0.2;
			z-index: -1;
			text-align: center;
		}

		.container {
			font-size: 12px;
			font-family: sans-serif;
		}

		.id-1 {
			transition: 0.4s;
			width: 250px;
			height: 450px;
			background: #FFFFFF;
			text-align: center;
			font-size: 16px;
			font-family: sans-serif;
			float: left;
			margin: auto;
			margin-left: 270px;
			border-radius: 2%;
		}
	</style>

	<div id="bg">
		<div id="id">
			<table>
				<tr>
					<td>
						
					</td>
					<td><center><h3><b>KARTU ANGGOTA</b></h3></center></td>
				</tr>
			</table>

			<center>
				<img src="https://w7.pngwing.com/pngs/419/473/png-transparent-computer-icons-user-profile-login-user-heroes-sphere-black-thumbnail.png" alt='Avatar' width='70px' height='70px'>
			</center>
			<div class="container" align="center">
				<p style="margin-top:2%">Name</p>
				<p style="font-weight: bold;margin-top:-4%"><?php echo $data['nama']; ?></p>
				<p style="margin-top:-4%">Rank</p>
				<p style="font-weight: bold;margin-top:-4%"><?php echo $data['kelas']; ?></p>
				<p style="margin-top:-4%">STAFF ID:</p>
				<p style="font-weight: bold;margin-top:-4%"><?php echo $data['npm']; ?></p>
				<p style="margin-top:-4%">MINISTRY/DEPARTMENT:</p>
				<p style="font-weight: bold;margin-top:-4%"></p>
				<p style="margin-top:-4%">HOLDER SIGNATURE</p>
			</div>
		</div>
		
		<div class="id-1">
			<center>
				<img src="uploads/<?php echo $data['foto']; ?>" alt="Avatar" width="200px" height="175px">
				<div class="container" align="center">
					<p style="margin:auto">The bearer whose photograph appears overleaf is a staff of</p>
					<h2 style="color:#00BFFF;margin-left:2%">THE STATE GOVERNMENT OF MALAWI </h2>
					<p style="margin:auto">If lost and found please return to the nearest police station</p>
					<hr align="center" style="border: 1px solid black;width:80%;margin-top:13%"></hr>
					<p align="center" style="margin-top:-2%">Authorised Signature</p>
					<p></p>
				</div>
			</center>
		</div>
	</div>
</body>

</html>
<?php } ?>
