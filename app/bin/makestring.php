<?php

try {

	$longitud = $_POST["longitud"];

	if (preg_match("/[a-z]+/", $longitud) || preg_match("/[A-Z]+/", $longitud) || preg_match("/[\W]+/", $longitud)) {

		echo json_encode(array("success" => false));

		return false;
	}

	$longitud = intval($longitud);

	if ($longitud < 8) $longitud = 8;

	else if ($longitud > 60) $longitud = 60;

	$cadena = null;

	$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

	for ($i = 0; $i < $longitud; $i++)
		$cadena .= substr($caracteres, rand(0, strlen($caracteres) - 1), 1);

	echo json_encode(array("cadena" => $cadena, "success" => true));

	return true;
}

catch (Exception $e) {

	echo json_encode(array("success" => false));

	return false;
}
