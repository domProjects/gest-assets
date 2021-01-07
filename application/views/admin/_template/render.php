<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="{charset}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GestAssets</title>
		<link rel="canonical" href="<?php echo current_url(); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/admin/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/admin/gestassets/css/main.min.css'); ?>">
	</head>
	<body class="d-flex flex-column h-100">
		<header>
			{header}
		</header>

		<main class="flex-shrink-0">
			<div class="container-fluid">
				{content}
			</div>
		</main>

		<footer class="footer mt-auto py-3 bg-light">
			<div class="container-fluid">
				{footer}
			</div>
		</footer>

		<script src="<?php echo base_url('assets/admin/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/gestassets/js/main.min.js'); ?>"></script>
	</body>
</html>