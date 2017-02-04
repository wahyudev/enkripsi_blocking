<?php
include 'proses.php';
?>
<div class="panel panel-default">
	<div class="panel-body">
		<h1><i class="glyphicon glyphicon-lock"> Enkripsi</i></h1>
		<div class="breadcrumb">
			<li><a href="">Enkripsi</a></li>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>Kelompok 5 Keamanan Komputer</h4>
				</div>
			</div>
			<div class="panel-body">
				<form action="?menu=enkripsi&aksi=encrypt&stat=generated" method="post">
				<div class="col-md-6">
					<div class="form-horizontal"  >
						<label>Masukan teks yang akan di Encrypt : </label>
						<textarea class="form-control" rows="5" name="tx_enkrip" id="tx_enkrip"></textarea>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-horizontal" >
						<label>Hasil Encrypt : </label>
						<textarea class="form-control" name="hasil_enkrip"  rows="5" <?php echo($_GET[stat]=='generated' ? '':'disabled') ?>><?php if($_GET[aksi]=="encrypt") echo tx_encrypt($_POST[tx_enkrip]) ;?> 
						</textarea>
					</div>
				</div>
				<center><button disabled style="margin-top:20px;margin-bottom:30px;" class="btn btn-primary" id="proses">Proses Enkrip</button></center>
				</form>
				<?php 
				if($_GET[stat]=="generated")
				{ ?>

				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="alert alert-info">
								<i class="glyphicon glyphicon-info-sign"></i> Enkripsi Berhasil...!
							</div>
							<div class="col-md-5">
								<table class="table ">
									<tr>
										<td>Panjang Teks </td><td>:</td><td><?php echo strlen($_POST[tx_enkrip]); ?> Karakter</td>
									</tr>
									<tr>
										<td>Jumlah Blok</td><td>:</td><td><?php  echo jumlahblok($_POST[tx_enkrip]); ?> Blok</td>
									</tr>
									
								</table>
							</div>
							<div class="col-md-7">
								<table class="table table-stripped table-bordered">
									<tr style="background-color:#222;color:white;" align="center">
										<td width="15%">Blok Ke</td><td>Konten Karakter per Blok</td>
									</tr>
									<?php
									$grup=1;
									$data=kelompokencrypt($_POST[tx_enkrip]);
									$count=count($data);
									$l=count($data)-1;

									for($i=$count-1;$i >-1;$i--)
									{ ?>
									<tr>
										<td align="center"><?php echo $grup; ?></td>
										<td><?php
										
										if(count($data[$i])<count($data[$l]))
										{
											$count2=count($data[$i])+1;
										}
										else
										{
											$count2=count($data[$i]);
										}
										echo "<table class='table table-bordered'><tr>";
											for ($j=0; $j < $count2; $j++) {

												echo "<td width='10%'>".cek_kosong($data[$i][$j])."</td>";
											}
										echo "</tr></table>"
										?></td>
									</tr>

									<?php $grup++; }

									?>
								</table>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>