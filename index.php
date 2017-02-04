<!DOCTYPE html>
<?php error_reporting(0); ?>
<html>
<head>
	<title>Enkripsi Bloking</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/skrip.js"></script>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#jatuh" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Brand</a>
			    </div>
				<div class="collapse navbar-collapse" id="jatuh">
					<ul class="nav navbar-nav">
						<li></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="col-md-3" style="padding-top:20px;background-color:#428bca">
			<div class="alert alert-info">
				<center><h4>Menu</h4></center>
			</div>
			<div class="list-group">
				<a href="?menu=home" class="list-group-item <?php echo ($_GET[menu]=='home' ? 'active':'') ?>">Home</a>
				<a href="?menu=enkripsi" class="list-group-item <?php echo ($_GET[menu]=='enkripsi' ? 'active':'') ?>">Enkripsi</a>
				<a href="?menu=dekripsi" class="list-group-item <?php echo ($_GET[menu]=='dekripsi' ? 'active':'') ?>">Dekripsi</a>
			</div>
		</div>
		<div class="col-md-9">
			<?php include 'routing.php'; ?>
		</div>
	</div>
</body>
</html>