<?php

  $sql = $koneksi->query("SELECT COUNT(id_anggota) as anggota  from tbl_anggota");
  while ($data= $sql->fetch_assoc()) {
    $anggota=$data['anggota'];
  }


?>

<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					<?php echo $anggota;  ?>
				</h3>

				<p>Jumlah Anggota</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data_anggota" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
<script>
	function printTable() {
		var printContents = document.getElementById("example1").outerHTML;
		var originalContents = document.body.innerHTML;
		document.body.innerHTML = printContents;
		window.print();
		document.body.innerHTML = originalContents;
	}
</script>
