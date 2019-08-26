<?php
	include 'config/database.php';
	if(isset($_SESSION['username']))
		header("LOCATION:admin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Login Admin Perpustakaan</title>
	<link rel="stylesheet" href="css/css.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="plugin/waves/waves.min.css">

</head>

<body>

<div id="single-wrapper">
	<form action="proses.php" method="post" class="frm-single">
		<div class="inside">
			<div class="title">Manage <strong>Perpustakaan</strong></div>
			<!-- /.title -->
			<div class="frm-title">Login Admin</div>
			<!-- /.frm-title -->
			<div class="frm-input"><input type="text" placeholder="Username" name="username" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="password" placeholder="Password" name="password" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="pull-left">
					<div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Remember me</label></div>
					<!-- /.checkbox -->
				</div>
				<!-- /.pull-right -->
			</div>
			<!-- /.clearfix -->
			<button type="submit" name="submit-login" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
			
			<div class="frm-footer">Perpustakaan © 2019.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>