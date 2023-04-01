<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="utf-8" />
	<meta httl-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>500</title>
	<link rel="shortcut icon" href="<?php echo $_SESSION["MAIN_URL"] ?>favicon.png" type="image/png" />
	<link rel="stylesheet" href="<?php echo $_SESSION["ASSETS_CSS_URL"] ?>bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $_SESSION["ASSETS_FA_URL"] ?>all.min.css" />
	<style>
	html, body {
		width: 100%;
		height: 100%;
	}
	body {
		display: table;
		vertical-align: middle;
		background-color: #000;
	}
	header {
		text-align: center;
		display: table-cell;
		vertical-align: middle;
	}
	h1 {
		font-size: 50px;
		color: #fff;
	}
	.fa-yellow {
		color: #ffdd00;
	}
	</style>
</head>
<body>
	<header>
		<span class="fa-stack fa-8x mb-3">
			<i class="fa-solid fa-triangle-exclamation fa-stack-2x fa-yellow"></i>
		</span>
		<h1>Internal Server Error!<br /><small>500</small></h1>
	</header>
</body>
</html>
