<?php header("HTTP/1.0 403 Forbidden") ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta httl-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>403</title>
	<link rel="stylesheet" href="<?php echo $_SESSION["MAIN_URL"] ?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $_SESSION["MAIN_URL"] ?>font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo $_SESSION["MAIN_URL"] ?>css/style.css" />
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
		font-size: 65px;
		color: #fff;
	}
	.fa-8x {
		font-size: 8em;
	}
	.fa-black {
		color: #000;
	}
	</style>
</head>
<body>
	<header>
		<span class="fa-stack fa-8x">
			<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
			<i class="fa fa-ban fa-stack-1x fa-black"></i>
		</span>
		<h1>Acceso prohibido<br><small>403</small></h1>
	</header>
</body>
</html>
