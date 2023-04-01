<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="utf-8" />
	<meta httl-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>404</title>
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
	.fa-black {
		color: #000;
	}
	</style>
</head>
<body>
	<header>
		<span class="fa-stack fa-8x mb-3">
			<i class="fa-solid fa-file fa-stack-2x fa-inverse"></i>
			<i class="fa-solid fa-question fa-stack-1x fa-black"></i>
		</span>
		<h1>Enlace no Encontrado :(<br /><small>404</small></h1>
	</header>
</body>
</html>
