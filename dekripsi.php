<?php
include 'proses.php';

?>
<div class="panel panel-default">
	<div class="panel-body">
		<h1><i class="glyphicon glyphicon glyphicon-retweet"> Dekripsi</i></h1>
		<div class="breadcrumb">
			<li><a href="?menu=dekripsi">Dekripsi</a></li>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>Kelompok 5 Keamanan Komputer</h4>
				</div>
			</div>
			<div class="panel-body">
				<form action="?menu=dekripsi&aksi=decrypt&stat=generated" method="post">
				<div class="col-md-6">
					<div class="form-horizontal"  >
						<label>Masukan teks yang akan di Decrypt : </label>
						<textarea class="form-control" rows="5" name="tx_dekrip" id="tx_dekrip"></textarea>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-horizontal" >
						<label>Hasil Decrypt : </label>
						<textarea class="form-control" name="hasil_dekrip"  rows="5" <?php echo($_GET[stat]=='generated' ? '':'disabled') ?>><?php if($_GET[aksi]=="decrypt") echo susun($_POST[tx_dekrip]) ;?> 
						</textarea>
					</div>
				</div>
				<center><button disabled style="margin-top:20px;margin-bottom:30px;" class="btn btn-primary" id="proses">Proses Dekrip</button></center>
				</form>
				<?php 
				if($_GET[stat]=="generated")
				{ ?>

				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="alert alert-info">
								<i class="glyphicon glyphicon-info-sign"></i> Informasi Hasil Dekripsi 
							</div>
							<div class="col-md-5">
								<table class="table ">
									<tr>
										<td>Panjang Teks </td><td>:</td><td><?php echo strlen($_POST[tx_dekrip]); ?> Karakter</td>
									</tr>
									<tr>
										<td>Jumlah Blok</td><td>:</td><td><?php  echo jumlahblok($_POST[tx_dekrip]); ?> Blok</td>
									</tr>
								</table>
							</div>
							<!--
							<div class="col-md-7">
								<table class="table table-stripped table-bordered">
									<tr style="background-color:#222;color:white;" align="center">
										<td width="20%">Blok Ke</td><td>Konten Blok</td>
									</tr>
									<?php
									$grup=1;
									$data=kelompokencrypt($_POST[tx_enkrip]);
									$count=count($data);
									for($i=$count-1;$i >-1;$i--)
									{ ?>
									<tr>
										<td><?php echo $grup; ?></td>
										<td><?php
										$count2=count($data[$i]);
										echo "<table class='table table-bordered'><tr>";
											for ($j=0; $j < $count2; $j++) { 
												echo "<td width='10%'>".$data[$i][$j]."</td>";
											}
										echo "</tr></table>"
										?></td>
									</tr>

									<?php $grup++; }

									?>
								</table>
							</div>
							-->
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>