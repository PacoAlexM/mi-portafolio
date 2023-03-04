<?php

/*if ($_POST["code"] == "0439") {

	$blob = "../app/bin/blob.txt";
	$open = fopen($blob, "r");
	$file = fread($open, filesize($blob));
	fclose($open);

	echo json_encode(array(
		"archivo" => $file,
		"desc" => "Pista artistica de Diciembre #4",
		"error" => "< ABAJO >",
		"color" => "#777",
		"valido" => true
	));
}

else */if ($_POST["code"] == $_SESSION["KEY_TO_EASTEREGG_VALUE"]) {
	echo json_encode([
		"url" => "easteregg",
		"message" => "CORRECTO n///n",
		"color" => "#00ff00",
		"success" => true,
		"hint" => ""
	]);

	$_SESSION["HAVE_ACCESS_TO_EASTEREGG"] = true;
} else
	echo json_encode([
		"url" => "",
		"message" => "INCORRECTO",
		"color" => "#ff0000",
		"success" => false,
		"hint" => $_SESSION["KEY_TO_EASTEREGG_VALUE"]
	]);
