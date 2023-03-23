<?php

try {
	if (!is_int($_POST["longitud"])) echo json_encode([ "success" => false, "message" => "Debe ser un valor númerico sin punto decimal.", "data" => null ]);
	else {
		$length = $_POST["longitud"] < 8 ? 8 : $_POST["longitud"] > 60 ? 60 : $_POST["longitud"];
		$newString = "";
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!\"#\$%&'()*+,-./:;<=>?@[\\]^_`{|}";

		for ($i = 0; $i < $length; $i++) $newString .= substr($chars, rand(0, (strlen($chars) - 1)), 1);

		echo json_encode([ "success" => true, "message" => "Se ha generado una cadena de texto.", "data" => $newString ]);
	}
} catch (Exception $e) {
	echo json_encode([ "success" => false, "message" => $e->getMessage(), "data" => null ]);
}
