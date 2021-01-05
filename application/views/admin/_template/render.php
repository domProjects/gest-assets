<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="{charset}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GestAssets</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/admin/bootstrap/css/bootstrap.min.css'); ?>">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Administration</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					{content}
				</div>
			</div>
		</div>

		<script src="<?php echo base_url('assets/admin/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	</body>
</html>