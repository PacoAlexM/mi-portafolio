<?php

try {
	if (!is_numeric($_POST["length"])) echo json_encode([ "success" => false, "message" => "Debe ser un valor númerico sin punto decimal.", "data" => null ]);
	else {
		$length = $_POST["length"] < 8 ? 8 : ($_POST["length"] > 60 ? 60 : $_POST["length"]);
		$newString = "";
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!?"\'`#$%&@|()[]{}^*+-/_.,:;\=<>';

		for ($i = 0; $i < $length; $i++) {
			$charToAdd = substr($chars, rand(0, (strlen($chars) - 1)), 1);
			if ($charToAdd === '>') $charToAdd = '&gt;';
			else if ($charToAdd === '<') $charToAdd = '&lt;';
			else if ($charToAdd === '&') $charToAdd = '&amp;';
			$newString .= $charToAdd;
		}

		echo json_encode([ "success" => true, "message" => "Se ha generado una cadena de texto.", "data" => $newString ]);
	}
} catch (Exception $e) {
	echo json_encode([ "success" => false, "message" => $e->getMessage(), "data" => null ]);
}
