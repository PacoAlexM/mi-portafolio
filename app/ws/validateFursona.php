<?php

try {
	$jsonFile = file_get_contents("../app/collections/furry_characters.json");
	$isArrayAssociative = false;
	$jsonData = json_decode($jsonFile, $isArrayAssociative);
	$valid = true;

	$fursonas = $jsonData->collection_items;

	foreach ($fursonas as $key => $value)
		if (strtolower($value->name) == strtolower($_POST["toValidate"])) {
			$valid = false;
			break;
		}

	echo json_encode([ "success" => true, "message" => "Se ha consultado la fursona.", "data" => [ "valid" => $valid ] ]);
} catch (Exception $e) {
	echo json_encode([ "success" => false, "message" => $e->getMessage(), "data" => null ]);
}
