<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Untitled</title>
	<link rel="stylesheet" href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
	<link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/-Login-form-Page-BS4-.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/Button-Change-Text-on-Hover.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css') ?>">
</head>

<body>
	<div class="container-fluid">
		<div class="row mh-100vh">
			<div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
				<div class="m-auto w-lg-75 w-xl-50">
					<h2 class="text-info font-weight-light mb-5" style="color: var(--red);"><i class="fa fa-ioxhost" style="color: var(--orange);text-shadow: 0px 0px 1px var(--secondary);"></i>&nbsp;SIM TB SANO</h2>

					<?php echo validation_errors(); ?>

					<?php if (!empty($errors)) {
						echo $errors;
					} ?>
					<form action="<?php echo base_url('auth/login') ?>" method="POST">
						<div class="form-group">
							<input class="form-control" type="text" name="email" id="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email" placeholder="Username">
						</div>
						<div class="form-group">
							<input class="form-control" type="password" name="password" id="password" placeholder="Password" autocomplete="off">
						</div><button class="btn btn-info mt-2" type="submit" style="background: var(--orange);font-style: normal;">Log In</button>
					</form>
					<p class="mt-3 mb-0"><a class="text-info small" href="#" style="color: var(--gray-dark);">Forgot your email or password?</a></p>
				</div>
			</div>
			<div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background: url('<?php echo base_url('assets/images/bgLogin.jpg') ?>') center center / cover;filter: blur(3px);">
				<p class="ml-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a class="text-dark" href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank" style="color: rgba(52,58,64,0);"><em>Aldain Austria</em></a><br></p>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
	<script src="assets/js/Off-Canvas-Sidebar-Drawer-Navbar.js"></script>
	<script src="assets/js/DataTable---Fully-BSS-Editable.js"></script>
	<script src="assets/js/Off-Canvas-Sidebar-Drawer-Navbar-1.js"></script>
	<script src="assets/js/Dynamic-Table.js"></script>
</body>

</html>